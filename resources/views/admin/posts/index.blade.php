<x-admin-layout title="Posts del Blog">

    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-xl font-semibold text-gray-900">Posts del Blog</h2>
            <p class="text-sm text-gray-500 mt-1">Gestione los artículos del blog de OTIUM.</p>
        </div>
        <a href="{{ route('admin.posts.create') }}"
           class="inline-flex items-center gap-2 px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Nuevo Artículo
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        @if($posts->isEmpty())
            <div class="px-6 py-16 text-center">
                <svg class="w-14 h-14 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <p class="text-gray-400 font-medium">No hay artículos todavía.</p>
                <a href="{{ route('admin.posts.create') }}" class="mt-3 inline-block text-primary text-sm font-medium hover:underline">
                    Crear el primer artículo →
                </a>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Artículo</th>
                            <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider hidden md:table-cell">Categoría</th>
                            <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Estado</th>
                            <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider hidden lg:table-cell">Fecha</th>
                            <th class="text-right px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @foreach($posts as $post)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        @if($post->image)
                                            <img src="{{ Storage::url($post->image) }}" alt=""
                                                 class="w-12 h-10 object-cover rounded-lg shrink-0">
                                        @else
                                            <div class="w-12 h-10 bg-gray-100 rounded-lg shrink-0 flex items-center justify-center">
                                                <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                </svg>
                                            </div>
                                        @endif
                                        <div class="min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate max-w-xs">{{ $post->title }}</p>
                                            <p class="text-xs text-gray-400">Por {{ $post->author->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 hidden md:table-cell">
                                    <span class="text-sm text-gray-600">{{ $post->category?->name ?? '—' }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    @if($post->isPublished())
                                        <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                            <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                            Publicado
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">
                                            <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span>
                                            Borrador
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 hidden lg:table-cell">
                                    <p class="text-sm text-gray-500">
                                        {{ $post->published_at?->format('d/m/Y') ?? $post->created_at->format('d/m/Y') }}
                                    </p>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center justify-end gap-3">
                                        {{-- Ver en sitio (solo publicados) --}}
                                        @if($post->isPublished())
                                            <a href="{{ route('blog.show', $post->slug) }}" target="_blank"
                                               class="text-sm text-gray-400 hover:text-gray-700 transition-colors" title="Ver en sitio">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                                </svg>
                                            </a>
                                        @endif

                                        {{-- Publicar/Despublicar --}}
                                        <form method="POST" action="{{ route('admin.posts.toggle-publish', $post) }}">
                                            @csrf @method('PATCH')
                                            <button type="submit"
                                                    class="text-sm font-medium transition-colors {{ $post->isPublished() ? 'text-yellow-600 hover:text-yellow-700' : 'text-green-600 hover:text-green-700' }}">
                                                {{ $post->isPublished() ? 'Borrador' : 'Publicar' }}
                                            </button>
                                        </form>

                                        <a href="{{ route('admin.posts.edit', $post) }}"
                                           class="text-sm text-primary hover:text-red-700 font-medium transition-colors">
                                            Editar
                                        </a>

                                        @if(auth()->user()->isAdmin())
                                            <div x-data>
                                                <button
                                                    @click="if(confirm('¿Eliminar «{{ addslashes($post->title) }}»?')) $refs.delPost{{ $post->id }}.submit()"
                                                    class="text-sm text-red-500 hover:text-red-700 transition-colors">
                                                    Eliminar
                                                </button>
                                                <form x-ref="delPost{{ $post->id }}" method="POST"
                                                      action="{{ route('admin.posts.destroy', $post) }}" class="hidden">
                                                    @csrf @method('DELETE')
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($posts->hasPages())
                <div class="px-6 py-4 border-t border-gray-100">
                    {{ $posts->links() }}
                </div>
            @endif
        @endif
    </div>

</x-admin-layout>
