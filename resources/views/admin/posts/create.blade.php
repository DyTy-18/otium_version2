<x-admin-layout title="Nuevo Artículo">

    @push('head')
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    @endpush

    <div x-data="postForm()" x-cloak>

        {{-- ════════════════════════════════════
             PANTALLA DE SELECCIÓN
        ════════════════════════════════════ --}}
        <div x-show="mode === null">

            <div class="flex items-center gap-2 text-sm text-gray-500 mb-8">
                <a href="{{ route('admin.posts.index') }}" class="hover:text-primary transition-colors">Posts</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-gray-900 font-medium">Nuevo Artículo</span>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-10">
                    <h1 class="text-2xl font-bold text-gray-900 mb-2">¿Cómo quieres crear el artículo?</h1>
                    <p class="text-gray-500 text-sm">Elige el método que prefieras para comenzar</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    {{-- Bloque: Elaborado --}}
                    <button type="button" @click="setMode('manual')"
                            class="group text-left bg-white rounded-2xl shadow-sm border-2 border-transparent
                                   hover:border-primary hover:shadow-md transition-all duration-200 p-8 focus:outline-none">
                        <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors">
                            <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </div>
                        <h2 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors">Elaborado</h2>
                        <p class="text-sm text-gray-500 leading-relaxed mb-6">
                            Escribe tu artículo desde cero usando el editor enriquecido. Ideal para contenido original con formato completo.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs font-medium px-2.5 py-1 bg-gray-100 text-gray-600 rounded-full">Editor Quill</span>
                            <span class="text-xs font-medium px-2.5 py-1 bg-gray-100 text-gray-600 rounded-full">Título y resumen</span>
                            <span class="text-xs font-medium px-2.5 py-1 bg-gray-100 text-gray-600 rounded-full">SEO automático</span>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-primary text-sm font-semibold">
                            Empezar a escribir
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>
                    </button>

                    {{-- Bloque: Subir Documento --}}
                    <button type="button" @click="setMode('document')"
                            class="group text-left bg-white rounded-2xl shadow-sm border-2 border-transparent
                                   hover:border-primary hover:shadow-md transition-all duration-200 p-8 focus:outline-none">
                        <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center mb-6 group-hover:bg-accent/20 transition-colors">
                            <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                            </svg>
                        </div>
                        <h2 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors">Subir Documento</h2>
                        <p class="text-sm text-gray-500 leading-relaxed mb-6">
                            Sube un PDF o TXT y el texto se extrae automáticamente al editor. Perfecto para convertir documentos existentes en artículos.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs font-medium px-2.5 py-1 bg-gray-100 text-gray-600 rounded-full">PDF · TXT</span>
                            <span class="text-xs font-medium px-2.5 py-1 bg-gray-100 text-gray-600 rounded-full">Extracción automática</span>
                            <span class="text-xs font-medium px-2.5 py-1 bg-gray-100 text-gray-600 rounded-full">Hasta 10 MB</span>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-primary text-sm font-semibold">
                            Subir documento
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>
                    </button>

                </div>
            </div>
        </div>

        {{-- ════════════════════════════════════
             FORMULARIO (manual o documento)
        ════════════════════════════════════ --}}
        <div x-show="mode !== null">

            {{-- Breadcrumb + botón volver --}}
            <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">
                <a href="{{ route('admin.posts.index') }}" class="hover:text-primary transition-colors">Posts</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <button type="button" @click="mode = null" class="hover:text-primary transition-colors">Nuevo Artículo</button>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-gray-900 font-medium" x-text="mode === 'manual' ? 'Elaborado' : 'Subir Documento'"></span>
            </div>

            <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data"
                  @submit="syncContent">
                @csrf

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                    {{-- ── COLUMNA PRINCIPAL ── --}}
                    <div class="lg:col-span-2 space-y-6">

                        {{-- TAB: ELABORADO --}}
                        <div x-show="mode === 'manual'" class="space-y-6">

                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Título del artículo *</label>
                                <input id="title" type="text" name="title" value="{{ old('title') }}"
                                       class="w-full px-4 py-3 rounded-lg border border-gray-300 text-lg font-semibold focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors"
                                       placeholder="Escribe un título atractivo..."
                                       @input="$dispatch('post-title-changed', $event.target.value)">
                                @error('title') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-2">
                                    Resumen / Extracto
                                    <span class="text-gray-400 font-normal">(máx. 500 caracteres)</span>
                                </label>
                                <textarea id="excerpt" name="excerpt" rows="3"
                                          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors resize-none text-sm"
                                          placeholder="Breve descripción que aparecerá en el listado del blog..."
                                          @input="$dispatch('post-excerpt-changed', $event.target.value)">{{ old('excerpt') }}</textarea>
                                @error('excerpt') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                        </div>

                        {{-- TAB: SUBIR DOCUMENTO --}}
                        <div x-show="mode === 'document'" x-cloak class="space-y-6" x-data="pdfImport()">

                            {{-- Título --}}
                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Título del artículo *</label>
                                <input type="text" placeholder="Escribe el título del artículo..."
                                       @input="syncTitle($event.target.value)"
                                       class="w-full px-4 py-3 rounded-lg border border-gray-300 text-lg font-semibold focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors">
                            </div>

                            {{-- Upload zone o PDF preview --}}
                            <div class="bg-white rounded-xl shadow-sm overflow-hidden">

                                {{-- Sin archivo: zona de subida --}}
                                <div x-show="!pdfUrl"
                                     class="border-2 border-dashed border-gray-300 rounded-xl m-6 transition-colors cursor-pointer hover:border-primary hover:bg-gray-50"
                                     @click="$refs.pdfFile.click()"
                                     @dragover.prevent="$el.classList.add('border-primary','bg-primary/5')"
                                     @dragleave="$el.classList.remove('border-primary','bg-primary/5')"
                                     @drop.prevent="$el.classList.remove('border-primary','bg-primary/5'); loadFile($event.dataTransfer.files[0])">
                                    <div class="flex flex-col items-center justify-center py-16 px-6 text-center">
                                        <div class="w-16 h-16 rounded-2xl bg-gray-100 flex items-center justify-center mb-5">
                                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                            </svg>
                                        </div>
                                        <p class="text-base font-semibold text-gray-700 mb-1">Arrastra tu documento aquí</p>
                                        <p class="text-sm text-gray-500 mb-5">o haz clic para seleccionar</p>
                                        <div class="inline-flex items-center gap-3 px-4 py-2 bg-white border border-gray-200 rounded-lg shadow-sm text-xs">
                                            <span class="font-bold text-red-600">PDF</span>
                                            <span class="w-px h-3 bg-gray-200"></span>
                                            <span class="font-bold text-blue-600">TXT</span>
                                        </div>
                                    </div>
                                </div>

                                {{-- Con archivo: barra de título + iframe preview --}}
                                <div x-show="pdfUrl" x-cloak>
                                    {{-- Barra superior --}}
                                    <div class="flex items-center justify-between px-4 py-3 border-b border-gray-100 bg-gray-50">
                                        <div class="flex items-center gap-2 min-w-0">
                                            <svg class="w-4 h-4 text-red-500 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14,2H6A2,2,0,0,0,4,4V20a2,2,0,0,0,2,2H18a2,2,0,0,0,2-2V8ZM18,20H6V4h7V9h5Z"/>
                                            </svg>
                                            <span class="text-sm font-medium text-gray-700 truncate" x-text="fileName"></span>
                                        </div>
                                        <button type="button"
                                                @click="clearFile()"
                                                class="text-xs text-gray-400 hover:text-primary transition-colors shrink-0 ml-4">
                                            Cambiar archivo
                                        </button>
                                    </div>
                                    {{-- Iframe PDF --}}
                                    <iframe :src="pdfUrl"
                                            class="w-full border-0 block"
                                            style="height: 68vh;"
                                            title="Vista previa del documento"></iframe>
                                </div>

                                <input x-ref="pdfFile" type="file" name="document" accept=".pdf,.txt" class="hidden"
                                       @change="loadFile($event.target.files[0])">

                                <template x-if="error">
                                    <div class="mx-6 mb-6 flex items-start gap-3 p-4 bg-red-50 border border-red-200 rounded-xl">
                                        <svg class="w-5 h-5 text-red-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <p class="text-sm text-red-700" x-text="error"></p>
                                    </div>
                                </template>
                            </div>

                        </div>

                        {{-- Editor Quill — siempre en el DOM, visible en ambos modos --}}
                        <div x-show="mode !== null" class="bg-white rounded-xl shadow-sm p-6">
                            <div class="flex items-center justify-between mb-3">
                                <label class="block text-sm font-medium text-gray-700">Contenido del artículo *</label>
                                <span x-show="mode === 'document'" class="text-xs text-gray-400">
                                    Escribe el artículo basándote en el documento
                                </span>
                            </div>
                            <div id="quill-editor" class="min-h-96 border-0" style="font-size:15px;line-height:1.7">
                                {!! old('content') !!}
                            </div>
                            @error('content') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                    </div>

                    {{-- ── COLUMNA LATERAL ── --}}
                    <div class="space-y-6">

                        {{-- Publicar --}}
                        <div class="bg-white rounded-xl shadow-sm p-6">
                            <h3 class="text-sm font-semibold text-gray-900 mb-4">Publicación</h3>
                            <div class="space-y-3 mb-5">
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="radio" name="status" value="draft" class="text-primary"
                                           {{ old('status', 'draft') === 'draft' ? 'checked' : '' }}>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">Borrador</p>
                                        <p class="text-xs text-gray-400">No visible en el sitio</p>
                                    </div>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="radio" name="status" value="published" class="text-primary"
                                           {{ old('status') === 'published' ? 'checked' : '' }}>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">Publicar ahora</p>
                                        <p class="text-xs text-gray-400">Visible inmediatamente</p>
                                    </div>
                                </label>
                            </div>
                            <button type="submit"
                                    class="w-full px-4 py-2.5 bg-primary text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
                                Guardar Artículo
                            </button>
                            <a href="{{ route('admin.posts.index') }}"
                               class="block text-center mt-3 text-sm text-gray-500 hover:text-gray-700 transition-colors">
                                Cancelar
                            </a>
                        </div>

                        {{-- Categoría --}}
                        <div class="bg-white rounded-xl shadow-sm p-6">
                            <h3 class="text-sm font-semibold text-gray-900 mb-4">Categoría</h3>
                            <select name="category_id"
                                    class="w-full px-3 py-2.5 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors">
                                <option value="">Sin categoría</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                            <a href="{{ route('admin.categories.index') }}"
                               class="block text-xs text-primary mt-2 hover:underline">+ Gestionar categorías</a>
                        </div>

                        {{-- Etiquetas --}}
                        <div class="bg-white rounded-xl shadow-sm p-6">
                            <h3 class="text-sm font-semibold text-gray-900 mb-4">Etiquetas</h3>
                            <div x-data="tagInput({{ json_encode(old('tags', [])) }})">
                                <div class="flex flex-wrap gap-2 p-3 rounded-lg border border-gray-300 focus-within:border-primary focus-within:ring-2 focus-within:ring-primary/20 min-h-12 cursor-text"
                                     @click="$refs.tagInput.focus()">
                                    <template x-for="(tag, i) in tags" :key="i">
                                        <span class="inline-flex items-center gap-1 bg-primary/10 text-primary text-xs font-medium px-2 py-1 rounded-full">
                                            <span x-text="tag"></span>
                                            <button type="button" @click="removeTag(i)" class="hover:text-red-600 transition-colors">
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                </svg>
                                            </button>
                                        </span>
                                    </template>
                                    <input x-ref="tagInput" type="text" placeholder="Añadir etiqueta..."
                                           class="flex-1 min-w-24 text-sm outline-none bg-transparent"
                                           @keydown.enter.prevent="addTag($event.target.value); $event.target.value = ''"
                                           @keydown.comma.prevent="addTag($event.target.value); $event.target.value = ''"
                                           @keydown.backspace="if(!$event.target.value) removeTag(tags.length - 1)">
                                </div>
                                <p class="text-xs text-gray-400 mt-1">Presiona Enter o coma para añadir</p>
                                <template x-for="tag in tags" :key="tag">
                                    <input type="hidden" name="tags[]" :value="tag">
                                </template>
                            </div>
                            <a href="{{ route('admin.tags.index') }}"
                               class="block text-xs text-primary mt-2 hover:underline">+ Gestionar etiquetas</a>
                        </div>

                        {{-- Autor --}}
                        <div class="bg-white rounded-xl shadow-sm p-6"
                             x-data="{ authorType: '{{ old('author_type', 'user') }}' }">
                            <h3 class="text-sm font-semibold text-gray-900 mb-4">Autor</h3>
                            <div class="flex gap-3 mb-4">
                                <label class="flex-1 flex items-center gap-2 cursor-pointer p-2.5 rounded-lg border transition-colors"
                                       :class="authorType === 'user' ? 'border-primary bg-primary/5' : 'border-gray-200'">
                                    <input type="radio" name="author_type" value="user" x-model="authorType" class="sr-only">
                                    <svg class="w-4 h-4 shrink-0" :class="authorType === 'user' ? 'text-primary' : 'text-gray-400'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    <span class="text-xs font-medium" :class="authorType === 'user' ? 'text-primary' : 'text-gray-600'">Usuario</span>
                                </label>
                                <label class="flex-1 flex items-center gap-2 cursor-pointer p-2.5 rounded-lg border transition-colors"
                                       :class="authorType === 'guest' ? 'border-primary bg-primary/5' : 'border-gray-200'">
                                    <input type="radio" name="author_type" value="guest" x-model="authorType" class="sr-only">
                                    <svg class="w-4 h-4 shrink-0" :class="authorType === 'guest' ? 'text-primary' : 'text-gray-400'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                    </svg>
                                    <span class="text-xs font-medium" :class="authorType === 'guest' ? 'text-primary' : 'text-gray-600'">Nombre libre</span>
                                </label>
                            </div>
                            <div x-show="authorType === 'user'" x-cloak>
                                <select name="user_id"
                                        class="w-full px-3 py-2.5 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors">
                                    <option value="">— Sin autor —</option>
                                    @foreach($users as $u)
                                        <option value="{{ $u->id }}" {{ old('user_id') == $u->id ? 'selected' : '' }}>
                                            {{ $u->name }}{{ $u->job_title ? ' · ' . $u->job_title : '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div x-show="authorType === 'guest'" x-cloak>
                                <input type="text" name="guest_author" value="{{ old('guest_author') }}"
                                       placeholder="Nombre del autor externo"
                                       class="w-full px-3 py-2.5 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors">
                                <p class="text-xs text-gray-400 mt-1">Se mostrará como nombre del autor en el blog.</p>
                            </div>
                        </div>

                        {{-- SEO --}}
                        <div class="bg-white rounded-xl shadow-sm p-6"
                             x-data="seoPanel(@js(['metaTitle' => old('meta_title',''), 'metaDesc' => old('meta_description',''), 'initTitle' => old('title',''), 'initExcerpt' => old('excerpt','')]))"
                             @post-title-changed.window="onTitleChange($event.detail)"
                             @post-excerpt-changed.window="onExcerptChange($event.detail)">

                            <div class="flex items-center justify-between mb-1">
                                <h3 class="text-sm font-semibold text-gray-900">SEO</h3>
                                <span class="text-xs text-green-600 font-medium" x-show="!metaTitleTouched && !metaDescTouched">✓ Auto</span>
                                <span class="text-xs text-primary font-medium" x-show="metaTitleTouched || metaDescTouched" x-cloak>Personalizado</span>
                            </div>
                            <p class="text-xs text-gray-400 mb-4">Se autocompleta desde el título y resumen.</p>

                            <div class="space-y-4 mb-5">
                                <div>
                                    <label for="meta_title" class="flex items-center justify-between text-sm font-medium text-gray-700 mb-1">
                                        Meta título
                                        <span class="font-normal" :class="(70 - metaTitle.length) < 10 ? 'text-red-500' : 'text-gray-400'"
                                              x-text="(70 - metaTitle.length) + ' rest.'"></span>
                                    </label>
                                    <input id="meta_title" type="text" name="meta_title" maxlength="70"
                                           x-model="metaTitle" @input="metaTitleTouched = true"
                                           class="w-full px-3 py-2 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors"
                                           placeholder="Título para buscadores...">
                                </div>
                                <div>
                                    <label for="meta_description" class="flex items-center justify-between text-sm font-medium text-gray-700 mb-1">
                                        Meta descripción
                                        <span class="font-normal" :class="(160 - metaDesc.length) < 20 ? 'text-red-500' : 'text-gray-400'"
                                              x-text="(160 - metaDesc.length) + ' rest.'"></span>
                                    </label>
                                    <textarea id="meta_description" name="meta_description" rows="3" maxlength="160"
                                              x-model="metaDesc" @input="metaDescTouched = true"
                                              class="w-full px-3 py-2 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors resize-none"
                                              placeholder="Descripción para buscadores..."></textarea>
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-lg p-4 bg-gray-50">
                                <p class="text-xs text-gray-400 font-semibold uppercase tracking-wider mb-3">Vista previa Google</p>
                                <div class="flex items-start gap-2 mb-1.5">
                                    <div class="w-5 h-5 rounded-full bg-primary flex items-center justify-center text-white text-xs font-bold shrink-0 mt-0.5">O</div>
                                    <div>
                                        <p class="text-xs text-gray-800 font-medium leading-none">OTIUM</p>
                                        <p class="text-xs text-gray-500 leading-none mt-0.5" x-text="serpUrl"></p>
                                    </div>
                                </div>
                                <p class="text-base text-[#1a0dab] leading-snug mb-1 truncate" x-text="metaTitle || 'Título del artículo'"></p>
                                <p class="text-sm text-gray-600 leading-snug line-clamp-2" x-text="metaDesc || 'Descripción del artículo...'"></p>
                            </div>
                        </div>

                        {{-- Imagen de portada --}}
                        <div class="bg-white rounded-xl shadow-sm p-6">
                            <h3 class="text-sm font-semibold text-gray-900 mb-4">Imagen de portada</h3>
                            <div x-data="imagePreview()">
                                <div class="relative border-2 border-dashed border-gray-300 rounded-lg overflow-hidden hover:border-primary transition-colors cursor-pointer"
                                     @click="$refs.imageFile.click()">
                                    <template x-if="!preview">
                                        <div class="py-8 text-center">
                                            <svg class="w-8 h-8 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                            <p class="text-xs text-gray-500">Click para subir</p>
                                            <p class="text-xs text-gray-400">JPG, PNG, WebP · máx 2MB</p>
                                        </div>
                                    </template>
                                    <template x-if="preview">
                                        <div class="relative">
                                            <img :src="preview" class="w-full h-40 object-cover">
                                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                                <p class="text-white text-xs font-medium">Click para cambiar</p>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                                <input x-ref="imageFile" type="file" name="image" accept="image/*" class="hidden"
                                       @change="preview = URL.createObjectURL($event.target.files[0])">
                                @error('image') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                    </div>
                </div>

                <input type="hidden" name="content" id="content-input">
            </form>
        </div>

    </div>{{-- fin x-data="postForm()" --}}

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
        // Quill se inicializa una vez al cargar — el div siempre está en el DOM
        const quill = new Quill('#quill-editor', {
            theme: 'snow',
            placeholder: 'Escribe el contenido del artículo...',
            modules: {
                toolbar: [
                    [{ header: [1, 2, 3, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ list: 'ordered' }, { list: 'bullet' }],
                    ['blockquote', 'code-block'],
                    ['link'],
                    [{ align: [] }],
                    ['clean'],
                ]
            }
        });

        function postForm() {
            return {
                mode: null,
                setMode(m) { this.mode = m; },
                syncContent() {
                    document.getElementById('content-input').value = quill.root.innerHTML;
                }
            };
        }

        function pdfImport() {
            return {
                pdfUrl:   null,
                fileName: '',
                error:    null,

                syncTitle(val) {
                    const el = document.getElementById('title');
                    if (el) { el.value = val; el.dispatchEvent(new Event('input')); }
                },

                loadFile(file) {
                    if (!file) return;
                    const allowed = ['application/pdf', 'text/plain'];
                    if (!allowed.includes(file.type) && !file.name.match(/\.(pdf|txt)$/i)) {
                        this.error = 'Solo se admiten archivos PDF o TXT.';
                        return;
                    }
                    if (this.pdfUrl) URL.revokeObjectURL(this.pdfUrl);
                    this.pdfUrl   = URL.createObjectURL(file);
                    this.fileName = file.name;
                    this.error    = null;
                },

                clearFile() {
                    if (this.pdfUrl) URL.revokeObjectURL(this.pdfUrl);
                    this.pdfUrl   = null;
                    this.fileName = '';
                }
            };
        }

        function tagInput(initialTags) {
            return {
                tags: initialTags || [],
                addTag(v) { const t = v.trim().replace(/,/g,''); if (t && !this.tags.includes(t)) this.tags.push(t); },
                removeTag(i) { this.tags.splice(i, 1); }
            };
        }

        function imagePreview() { return { preview: null }; }

        function seoPanel(opts = {}) {
            return {
                metaTitle: opts.metaTitle || (opts.initTitle || '').substring(0, 70),
                metaDesc:  opts.metaDesc  || (opts.initExcerpt || '').substring(0, 160),
                metaTitleTouched: !!opts.metaTitle,
                metaDescTouched:  !!opts.metaDesc,
                fixedSlug: opts.serpSlug || null,
                get serpUrl() {
                    return 'otium.com.bo › blog › ' + (this.fixedSlug || this.slugify(this.metaTitle) || '...');
                },
                slugify(s) {
                    return (s||'').toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g,'')
                        .replace(/[^a-z0-9]+/g,'-').replace(/^-|-$/g,'').substring(0,50);
                },
                onTitleChange(v)  { if (!this.metaTitleTouched) this.metaTitle = v.substring(0,70); },
                onExcerptChange(v){ if (!this.metaDescTouched)  this.metaDesc  = v.substring(0,160); }
            };
        }
    </script>

</x-admin-layout>
