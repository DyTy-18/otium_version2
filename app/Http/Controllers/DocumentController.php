<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DocumentController extends Controller
{
    public function show(Post $post): StreamedResponse
    {
        abort_if(! $post->document_path, 404);

        $disk = env('FILESYSTEM_PUBLIC_DISK', 'public');
        $storage = Storage::disk($disk);

        abort_unless($storage->exists($post->document_path), 404);

        $mime = $storage->mimeType($post->document_path) ?: 'application/octet-stream';
        $size = $storage->size($post->document_path);

        return response()->stream(function () use ($storage, $post) {
            fpassthru($storage->readStream($post->document_path));
        }, 200, [
            'Content-Type'        => $mime,
            'Content-Length'      => $size,
            'Content-Disposition' => 'inline; filename="' . basename($post->document_path) . '"',
            'Cache-Control'       => 'public, max-age=86400',
        ]);
    }
}
