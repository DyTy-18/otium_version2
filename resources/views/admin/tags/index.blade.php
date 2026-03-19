<x-admin-layout title="Etiquetas del Blog">

    <div class="max-w-2xl">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-xl font-semibold text-gray-900">Etiquetas</h2>
                <p class="text-sm text-gray-500 mt-1">Las etiquetas se crean automáticamente al escribir artículos. También puedes gestionarlas aquí.</p>
            </div>
            <a href="{{ route('admin.posts.index') }}"
               class="text-sm text-gray-500 hover:text-primary transition-colors">
                ← Posts
            </a>
        </div>

        {{-- Formulario nueva etiqueta --}}
        <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
            <h3 class="text-sm font-semibold text-gray-900 mb-4">Nueva Etiqueta</h3>
            <form method="POST" action="{{ route('admin.tags.store') }}" class="flex gap-3">
                @csrf
                <input type="text" name="name"
                       class="flex-1 px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors"
                       placeholder="Ej: NIIF, PyMEs, Auditoría..." value="{{ old('name') }}">
                <button type="submit"
                        class="px-4 py-2.5 bg-primary text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors shrink-0">
                    Agregar
                </button>
            </form>
            @error('name')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- Lista de etiquetas --}}
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            @if($tags->isEmpty())
                <div class="px-6 py-12 text-center">
                    <p class="text-gray-400 text-sm">No hay etiquetas. Se crean automáticamente al publicar artículos con etiquetas.</p>
                </div>
            @else
                {{-- Vista chips --}}
                <div class="p-6">
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach($tags as $tag)
                            <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-gray-100 text-gray-700 text-sm rounded-full">
                                {{ $tag->name }}
                                <span class="text-xs text-gray-400">({{ $tag->posts_count }})</span>
                            </span>
                        @endforeach
                    </div>
                </div>

                {{-- Tabla de gestión --}}
                <div class="border-t border-gray-100">
                    <ul class="divide-y divide-gray-50">
                        @foreach($tags as $tag)
                            <li class="flex items-center justify-between px-6 py-3" x-data="{ editing: false }">
                                <div class="flex items-center gap-3 flex-1 min-w-0">
                                    <span x-show="!editing" class="text-sm text-gray-900">
                                        {{ $tag->name }}
                                        <span class="text-xs text-gray-400 ml-1">{{ $tag->posts_count }} artículos</span>
                                    </span>
                                    <form x-show="editing" method="POST"
                                          action="{{ route('admin.tags.update', $tag) }}"
                                          class="flex gap-2" style="display:none">
                                        @csrf @method('PUT')
                                        <input type="text" name="name" value="{{ $tag->name }}"
                                               class="px-3 py-1 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary transition-colors"
                                               @click.stop>
                                        <button type="submit" class="text-xs text-green-600 font-medium hover:text-green-700">Guardar</button>
                                        <button type="button" @click="editing = false" class="text-xs text-gray-400">Cancelar</button>
                                    </form>
                                </div>
                                <div class="flex items-center gap-3 shrink-0 ml-4">
                                    <button @click="editing = !editing"
                                            class="text-xs text-primary hover:text-red-700 font-medium transition-colors">
                                        Editar
                                    </button>
                                    <form method="POST" action="{{ route('admin.tags.destroy', $tag) }}"
                                          x-data @submit.prevent="if(confirm('¿Eliminar esta etiqueta?')) $el.submit()">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="text-xs text-red-500 hover:text-red-700 transition-colors">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

</x-admin-layout>
