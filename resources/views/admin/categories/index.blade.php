<x-admin-layout title="Categorías del Blog">

    <div class="max-w-2xl">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-xl font-semibold text-gray-900">Categorías</h2>
                <p class="text-sm text-gray-500 mt-1">Organiza los artículos por categoría.</p>
            </div>
            <a href="{{ route('admin.posts.index') }}"
               class="text-sm text-gray-500 hover:text-primary transition-colors flex items-center gap-1">
                ← Posts
            </a>
        </div>

        {{-- Formulario nuevo --}}
        <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
            <h3 class="text-sm font-semibold text-gray-900 mb-4">Nueva Categoría</h3>
            <form method="POST" action="{{ route('admin.categories.store') }}" class="flex gap-3">
                @csrf
                <input type="text" name="name"
                       class="flex-1 px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors"
                       placeholder="Ej: Contabilidad, Impuestos..." value="{{ old('name') }}">
                <button type="submit"
                        class="px-4 py-2.5 bg-primary text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors shrink-0">
                    Agregar
                </button>
            </form>
            @error('name')
                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- Lista --}}
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            @if($categories->isEmpty())
                <div class="px-6 py-12 text-center">
                    <p class="text-gray-400 text-sm">No hay categorías todavía. Crea la primera.</p>
                </div>
            @else
                <ul class="divide-y divide-gray-50">
                    @foreach($categories as $category)
                        <li class="flex items-center justify-between px-6 py-4" x-data="{ editing: false }">
                            <div class="flex items-center gap-3 flex-1 min-w-0">
                                <div>
                                    <span x-show="!editing" class="text-sm font-medium text-gray-900">
                                        {{ $category->name }}
                                    </span>
                                    <form x-show="editing" method="POST"
                                          action="{{ route('admin.categories.update', $category) }}"
                                          class="flex gap-2" style="display:none">
                                        @csrf @method('PUT')
                                        <input type="text" name="name" value="{{ $category->name }}"
                                               class="px-3 py-1.5 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary transition-colors"
                                               @click.stop>
                                        <button type="submit" class="text-xs font-medium text-green-600 hover:text-green-700">
                                            Guardar
                                        </button>
                                        <button type="button" @click="editing = false" class="text-xs text-gray-400 hover:text-gray-600">
                                            Cancelar
                                        </button>
                                    </form>
                                    <p class="text-xs text-gray-400 mt-0.5">{{ $category->posts_count }} artículos · slug: {{ $category->slug }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 shrink-0 ml-4">
                                <button @click="editing = !editing"
                                        class="text-sm text-primary hover:text-red-700 font-medium transition-colors">
                                    Editar
                                </button>
                                <form method="POST" action="{{ route('admin.categories.destroy', $category) }}"
                                      x-data @submit.prevent="if(confirm('¿Eliminar esta categoría?')) $el.submit()">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-sm text-red-500 hover:text-red-700 transition-colors">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

</x-admin-layout>
