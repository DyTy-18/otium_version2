<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::with(['category', 'author'])
                     ->latest()
                     ->paginate(15);

        return view('admin.posts.index', compact('posts'));
    }

    public function create(): View
    {
        $categories = Category::orderBy('name')->get();
        $tags       = Tag::orderBy('name')->get();
        $users      = User::orderBy('name')->get();

        return view('admin.posts.create', compact('categories', 'tags', 'users'));
    }

    public function store(Request $request): RedirectResponse
    {
        $hasDocument = $request->hasFile('document');

        $validated = $request->validate([
            'title'            => ['required', 'string', 'max:255'],
            'excerpt'          => ['nullable', 'string', 'max:500'],
            'content'          => [$hasDocument ? 'nullable' : 'required', 'string'],
            'category_id'      => ['nullable', 'exists:categories,id'],
            'status'           => ['required', 'in:draft,published'],
            'image'            => ['nullable', 'image', 'max:2048'],
            'document'         => ['nullable', 'file', 'mimes:pdf,txt', 'max:51200'],
            'meta_title'       => ['nullable', 'string', 'max:70'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'author_type'      => ['required', 'in:user,guest'],
            'user_id'          => ['nullable', 'exists:users,id'],
            'guest_author'     => ['nullable', 'string', 'max:150'],
        ]);

        $validated['slug'] = $this->uniqueSlug($request->title);

        if ($request->author_type === 'user') {
            $validated['user_id']      = $request->user_id ?: null;
            $validated['guest_author'] = null;
        } else {
            $validated['user_id']      = null;
            $validated['guest_author'] = $request->guest_author;
        }

        if ($validated['status'] === 'published') {
            $validated['published_at'] = now();
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('posts', 'public');
        }

        if ($hasDocument) {
            $validated['document_path'] = $request->file('document')->store('posts/documents', 'public');
        }

        $post = Post::create($validated);
        $this->syncTags($post, $request->input('tags', []));

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Artículo ' . ($post->isPublished() ? 'publicado' : 'guardado como borrador') . ' exitosamente.');
    }

    public function edit(Post $post): View
    {
        $categories = Category::orderBy('name')->get();
        $tags       = Tag::orderBy('name')->get();
        $users      = User::orderBy('name')->get();

        return view('admin.posts.edit', compact('post', 'categories', 'tags', 'users'));
    }

    public function update(Request $request, Post $post): RedirectResponse
    {
        $hasDocument = $request->hasFile('document');

        $validated = $request->validate([
            'title'            => ['required', 'string', 'max:255'],
            'excerpt'          => ['nullable', 'string', 'max:500'],
            'content'          => [($hasDocument || $post->document_path) ? 'nullable' : 'required', 'string'],
            'category_id'      => ['nullable', 'exists:categories,id'],
            'status'           => ['required', 'in:draft,published'],
            'image'            => ['nullable', 'image', 'max:2048'],
            'document'         => ['nullable', 'file', 'mimes:pdf,txt', 'max:51200'],
            'meta_title'       => ['nullable', 'string', 'max:70'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'author_type'      => ['required', 'in:user,guest'],
            'user_id'          => ['nullable', 'exists:users,id'],
            'guest_author'     => ['nullable', 'string', 'max:150'],
        ]);

        if ($request->author_type === 'user') {
            $validated['user_id']      = $request->user_id ?: null;
            $validated['guest_author'] = null;
        } else {
            $validated['user_id']      = null;
            $validated['guest_author'] = $request->guest_author;
        }

        if ($validated['status'] === 'published' && ! $post->published_at) {
            $validated['published_at'] = now();
        }

        if ($request->hasFile('image')) {
            if ($post->image) Storage::disk('public')->delete($post->image);
            $validated['image'] = $request->file('image')->store('posts', 'public');
        }

        if ($hasDocument) {
            if ($post->document_path) Storage::disk('public')->delete($post->document_path);
            $validated['document_path'] = $request->file('document')->store('posts/documents', 'public');
        }

        $post->update($validated);
        $this->syncTags($post, $request->input('tags', []));

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Artículo actualizado correctamente.');
    }

    public function togglePublish(Post $post): RedirectResponse
    {
        if ($post->isPublished()) {
            $post->update(['status' => 'draft']);
            $message = 'Artículo movido a borradores.';
        } else {
            $post->update([
                'status'       => 'published',
                'published_at' => $post->published_at ?? now(),
            ]);
            $message = 'Artículo publicado.';
        }

        return back()->with('success', $message);
    }

    public function fromDocument(Request $request): JsonResponse
    {
        $request->validate([
            'document' => ['required', 'file', 'mimes:pdf,txt', 'max:10240'],
        ]);

        $file = $request->file('document');

        if ($file->getClientOriginalExtension() === 'txt') {
            $rawText = file_get_contents($file->getRealPath());
        } else {
            $parser  = new \Smalot\PdfParser\Parser();
            $pdf     = $parser->parseFile($file->getRealPath());
            $rawText = $pdf->getText();
        }

        $rawText = trim($rawText);

        if (! $rawText) {
            return response()->json(['error' => 'No se pudo extraer texto del documento. Puede ser un PDF escaneado (imagen).'], 422);
        }

        return response()->json(['content' => $this->textToHtml($rawText)]);
    }

    public function destroy(Post $post): RedirectResponse
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        if ($post->document_path) {
            Storage::disk('public')->delete($post->document_path);
        }

        $post->tags()->detach();
        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Artículo eliminado.');
    }

    private function textToHtml(string $rawText): string
    {
        $rawText = str_replace(["\r\n", "\r"], "\n", $rawText);
        $lines   = explode("\n", $rawText);
        $total   = count($lines);

        $html      = '';
        $paraBuf   = [];
        $listBuf   = [];
        $listType  = null;

        $flushPara = function () use (&$html, &$paraBuf): void {
            if ($paraBuf) {
                $html .= '<p>' . e(implode(' ', $paraBuf)) . '</p>';
                $paraBuf = [];
            }
        };

        $flushList = function () use (&$html, &$listBuf, &$listType): void {
            if ($listBuf) {
                $tag   = $listType === 'ol' ? 'ol' : 'ul';
                $items = implode('', array_map(fn ($li) => '<li>' . e($li) . '</li>', $listBuf));
                $html .= "<{$tag}>{$items}</{$tag}>";
                $listBuf  = [];
                $listType = null;
            }
        };

        for ($i = 0; $i < $total; $i++) {
            $trimmed = trim($lines[$i]);

            // ── Blank line → flush paragraph
            if ($trimmed === '') {
                $flushPara();
                continue;
            }

            // ── Ordered list  "1. " / "1) "
            if (preg_match('/^\d{1,2}[\.\)]\s+(.+)/', $trimmed, $m)) {
                $flushPara();
                if ($listType !== 'ol') { $flushList(); $listType = 'ol'; }
                $listBuf[] = $m[1];
                continue;
            }

            // ── Unordered list  "- " / "• " / "* " / "· " / "▪ "
            if (preg_match('/^[-•*·▪►▸]\s+(.+)/', $trimmed, $m)) {
                $flushPara();
                if ($listType !== 'ul') { $flushList(); $listType = 'ul'; }
                $listBuf[] = $m[1];
                continue;
            }

            $flushList();

            $len        = mb_strlen($trimmed);
            $lastChar   = mb_substr($trimmed, -1);
            $endsPunct  = in_array($lastChar, ['.', ',', ';', ':', '?', '!', '…']);
            $isShort    = $len >= 3 && $len <= 80;

            // ALL CAPS detection (ignore numbers/symbols only)
            $letters    = preg_replace('/[^a-zA-ZÁÉÍÓÚÑáéíóúñ]/u', '', $trimmed);
            $isAllCaps  = $letters && $letters === mb_strtoupper($letters);

            // Look-ahead: find next non-empty line
            $nextLine = '';
            for ($j = $i + 1; $j < min($i + 4, $total); $j++) {
                $nextLine = trim($lines[$j]);
                if ($nextLine !== '') break;
            }
            $gapAfter      = isset($lines[$i + 1]) && trim($lines[$i + 1]) === '';
            $nextIsLonger  = $nextLine && mb_strlen($nextLine) > $len + 20;

            if ($isShort && $isAllCaps && ! $endsPunct) {
                // ── ALL CAPS short line → <h2>
                $flushPara();
                $html .= '<h2>' . e($trimmed) . '</h2>';

            } elseif ($isShort && ! $endsPunct && empty($paraBuf) && ($gapAfter || $nextIsLonger)) {
                // ── Short standalone line followed by longer/body text → <h3>
                $flushPara();
                $html .= '<h3>' . e($trimmed) . '</h3>';

            } else {
                // ── Regular text: accumulate into paragraph
                $paraBuf[] = $trimmed;
            }
        }

        $flushPara();
        $flushList();

        return $html;
    }

    private function uniqueSlug(string $title): string
    {
        $slug = Str::slug($title);
        $count = Post::where('slug', 'like', "{$slug}%")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }

    private function syncTags(Post $post, array $tagNames): void
    {
        $tagIds = collect($tagNames)
            ->filter()
            ->map(function (string $name) {
                $slug = Str::slug($name);
                return Tag::firstOrCreate(
                    ['slug' => $slug],
                    ['name' => trim($name), 'slug' => $slug]
                )->id;
            });

        $post->tags()->sync($tagIds);
    }
}
