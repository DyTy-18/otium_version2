<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
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
        $validated = $request->validate([
            'title'            => ['required', 'string', 'max:255'],
            'excerpt'          => ['nullable', 'string', 'max:500'],
            'content'          => ['required', 'string'],
            'category_id'      => ['nullable', 'exists:categories,id'],
            'status'           => ['required', 'in:draft,published'],
            'image'            => ['nullable', 'image', 'max:2048'],
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
        $validated = $request->validate([
            'title'            => ['required', 'string', 'max:255'],
            'excerpt'          => ['nullable', 'string', 'max:500'],
            'content'          => ['required', 'string'],
            'category_id'      => ['nullable', 'exists:categories,id'],
            'status'           => ['required', 'in:draft,published'],
            'image'            => ['nullable', 'image', 'max:2048'],
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
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $validated['image'] = $request->file('image')->store('posts', 'public');
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

    public function destroy(Post $post): RedirectResponse
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->tags()->detach();
        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Artículo eliminado.');
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
