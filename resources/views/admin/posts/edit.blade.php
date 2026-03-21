<x-admin-layout title="Editar Artículo">

    <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">
        <a href="{{ route('admin.posts.index') }}" class="hover:text-primary transition-colors">Posts</a>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
        <span class="text-gray-900 font-medium truncate max-w-xs">{{ $post->title }}</span>
    </div>

    <form method="POST" action="{{ route('admin.posts.update', $post) }}" enctype="multipart/form-data"
          x-data="postForm()" @submit="syncContent">
        @csrf @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- Columna principal --}}
            <div class="lg:col-span-2 space-y-6">

                <div class="bg-white rounded-xl shadow-sm p-6">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Título del artículo *</label>
                    <input id="title" type="text" name="title" value="{{ old('title', $post->title) }}"
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 text-lg font-semibold focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors"
                           placeholder="Título del artículo..."
                           @input="$dispatch('post-title-changed', $event.target.value)">
                    @error('title')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6">
                    <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-2">
                        Resumen / Extracto
                        <span class="text-gray-400 font-normal">(máx. 500 caracteres)</span>
                    </label>
                    <textarea id="excerpt" name="excerpt" rows="3"
                              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors resize-none text-sm"
                              placeholder="Breve descripción..."
                              @input="$dispatch('post-excerpt-changed', $event.target.value)">{{ old('excerpt', $post->excerpt) }}</textarea>
                </div>

                {{-- Documento adjunto (si el post tiene documento) --}}
                @if($post->document_path)
                <div class="bg-white rounded-xl shadow-sm p-6" x-data="docReplace()">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-sm font-semibold text-gray-900">Documento adjunto</h3>
                        <button type="button" @click="replacing = !replacing"
                                class="text-xs text-primary hover:underline" x-text="replacing ? 'Cancelar' : 'Reemplazar documento'"></button>
                    </div>

                    {{-- Iframe con documento actual --}}
                    <div x-show="!replacing">
                        <div class="rounded-xl overflow-hidden border border-gray-200">
                            <div class="flex items-center gap-2 px-4 py-2 bg-gray-50 border-b border-gray-200">
                                <svg class="w-4 h-4 text-red-500 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14,2H6A2,2,0,0,0,4,4V20a2,2,0,0,0,2,2H18a2,2,0,0,0,2-2V8ZM18,20H6V4h7V9h5Z"/>
                                </svg>
                                <span class="text-xs text-gray-600 font-medium truncate">{{ basename($post->document_path) }}</span>
                                <a href="{{ Storage::url($post->document_path) }}" target="_blank" rel="noopener"
                                   class="ml-auto text-xs text-primary hover:underline shrink-0">Abrir ↗</a>
                            </div>
                            <iframe src="{{ Storage::url($post->document_path) }}#toolbar=0&navpanes=0"
                                    class="w-full border-0 block" style="height: 60vh;"
                                    title="Documento adjunto"></iframe>
                        </div>
                    </div>

                    {{-- Zona de reemplazo --}}
                    <div x-show="replacing" x-cloak>
                        <label class="block border-2 border-dashed border-gray-300 rounded-lg p-6 text-center cursor-pointer hover:border-primary transition-colors"
                               :class="newFile ? 'border-primary bg-primary/5' : ''">
                            <input type="file" name="document" accept=".pdf,.txt" class="hidden"
                                   @change="newFile = $event.target.files[0]?.name">
                            <svg class="w-8 h-8 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                            </svg>
                            <p class="text-sm text-gray-600" x-text="newFile || 'Seleccionar PDF o TXT'"></p>
                            <p class="text-xs text-gray-400 mt-1">Máx. 50 MB</p>
                        </label>
                        <p class="text-xs text-amber-600 mt-2">El documento actual será reemplazado al guardar.</p>
                    </div>
                </div>
                @endif

                <div class="bg-white rounded-xl shadow-sm p-6">
                    <label class="block text-sm font-medium text-gray-700 mb-3">Contenido del artículo
                        @if(!$post->document_path) <span class="text-red-500">*</span> @endif
                    </label>
                    <div id="quill-editor" class="min-h-96 border-0" style="font-size: 15px; line-height: 1.7;">
                        {!! old('content', $post->content) !!}
                    </div>
                    <input type="hidden" name="content" id="content-input">
                    @error('content')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            {{-- Columna lateral --}}
            <div class="space-y-6">

                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">Publicación</h3>
                    <div class="space-y-3 mb-5">
                        <label class="flex items-center gap-3 cursor-pointer">
                            <input type="radio" name="status" value="draft" class="text-primary"
                                   {{ old('status', $post->status) === 'draft' ? 'checked' : '' }}>
                            <div>
                                <p class="text-sm font-medium text-gray-700">Borrador</p>
                                <p class="text-xs text-gray-400">No visible en el sitio</p>
                            </div>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer">
                            <input type="radio" name="status" value="published" class="text-primary"
                                   {{ old('status', $post->status) === 'published' ? 'checked' : '' }}>
                            <div>
                                <p class="text-sm font-medium text-gray-700">Publicado</p>
                                @if($post->published_at)
                                    <p class="text-xs text-gray-400">Desde {{ $post->published_at->format('d/m/Y') }}</p>
                                @else
                                    <p class="text-xs text-gray-400">Se publicará ahora</p>
                                @endif
                            </div>
                        </label>
                    </div>

                    <button type="submit"
                            class="w-full px-4 py-2.5 bg-primary text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
                        Guardar Cambios
                    </button>

                    @if($post->isPublished())
                        <a href="{{ route('blog.show', $post->slug) }}" target="_blank"
                           class="flex items-center justify-center gap-1 mt-3 text-sm text-gray-500 hover:text-primary transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Ver en el sitio
                        </a>
                    @endif
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">Categoría</h3>
                    <select name="category_id"
                            class="w-full px-3 py-2.5 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors">
                        <option value="">Sin categoría</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id', $post->category_id) == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">Etiquetas</h3>
                    <div x-data="tagInput({{ json_encode(old('tags', $post->tags->pluck('name')->toArray())) }})">
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
                </div>

                {{-- Autor --}}
                @php
                    $currentAuthorType = old('author_type', $post->user_id ? 'user' : 'guest');
                @endphp
                <div class="bg-white rounded-xl shadow-sm p-6"
                     x-data="{ authorType: '{{ $currentAuthorType }}' }">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">Autor</h3>

                    <div class="flex gap-3 mb-4">
                        <label class="flex-1 flex items-center gap-2 cursor-pointer p-2.5 rounded-lg border transition-colors"
                               :class="authorType === 'user' ? 'border-primary bg-primary/5' : 'border-gray-200'">
                            <input type="radio" name="author_type" value="user" x-model="authorType" class="sr-only">
                            <svg class="w-4 h-4 shrink-0" :class="authorType === 'user' ? 'text-primary' : 'text-gray-400'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span class="text-xs font-medium" :class="authorType === 'user' ? 'text-primary' : 'text-gray-600'">Usuario del sistema</span>
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
                                <option value="{{ $u->id }}" {{ old('user_id', $post->user_id) == $u->id ? 'selected' : '' }}>
                                    {{ $u->name }}{{ $u->job_title ? ' · ' . $u->job_title : '' }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div x-show="authorType === 'guest'" x-cloak>
                        <input type="text" name="guest_author" value="{{ old('guest_author', $post->guest_author) }}"
                               placeholder="Nombre del autor externo"
                               class="w-full px-3 py-2.5 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors">
                        <p class="text-xs text-gray-400 mt-1">Se mostrará como nombre del autor en el blog.</p>
                    </div>
                </div>

                {{-- SEO --}}
                <div class="bg-white rounded-xl shadow-sm p-6"
                     x-data="seoPanel(@js(['metaTitle' => old('meta_title', $post->meta_title ?? ''), 'metaDesc' => old('meta_description', $post->meta_description ?? ''), 'initTitle' => old('title', $post->title), 'initExcerpt' => old('excerpt', $post->excerpt ?? ''), 'serpSlug' => $post->slug]))"
                     @post-title-changed.window="onTitleChange($event.detail)"
                     @post-excerpt-changed.window="onExcerptChange($event.detail)">

                    <div class="flex items-center justify-between mb-1">
                        <h3 class="text-sm font-semibold text-gray-900">SEO</h3>
                        <span class="text-xs text-green-600 font-medium" x-show="!metaTitleTouched && !metaDescTouched">
                            ✓ Autocompletando desde título y resumen
                        </span>
                        <span class="text-xs text-primary font-medium" x-show="metaTitleTouched || metaDescTouched" x-cloak>
                            Personalizado
                        </span>
                    </div>
                    <p class="text-xs text-gray-400 mb-4">Se autocompleta automáticamente. Edítalo si quieres personalizar.</p>

                    <div class="space-y-4 mb-5">
                        <div>
                            <label for="meta_title" class="flex items-center justify-between text-sm font-medium text-gray-700 mb-1">
                                Meta título
                                <span class="font-normal" :class="(70 - metaTitle.length) < 10 ? 'text-red-500' : 'text-gray-400'"
                                      x-text="(70 - metaTitle.length) + ' restantes'"></span>
                            </label>
                            <input id="meta_title" type="text" name="meta_title" maxlength="70"
                                   x-model="metaTitle"
                                   @input="metaTitleTouched = true"
                                   class="w-full px-3 py-2 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors"
                                   placeholder="Título para buscadores...">
                        </div>
                        <div>
                            <label for="meta_description" class="flex items-center justify-between text-sm font-medium text-gray-700 mb-1">
                                Meta descripción
                                <span class="font-normal" :class="(160 - metaDesc.length) < 20 ? 'text-red-500' : 'text-gray-400'"
                                      x-text="(160 - metaDesc.length) + ' restantes'"></span>
                            </label>
                            <textarea id="meta_description" name="meta_description" rows="3" maxlength="160"
                                      x-model="metaDesc"
                                      @input="metaDescTouched = true"
                                      class="w-full px-3 py-2 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors resize-none"
                                      placeholder="Descripción para buscadores..."></textarea>
                        </div>
                    </div>

                    {{-- Vista previa SERP --}}
                    <div class="border border-gray-200 rounded-lg p-4 bg-gray-50">
                        <p class="text-xs text-gray-400 font-semibold uppercase tracking-wider mb-3">Vista previa en Google</p>
                        <div class="flex items-start gap-2 mb-1.5">
                            <div class="w-5 h-5 rounded-full bg-primary flex items-center justify-center text-white text-xs font-bold shrink-0 mt-0.5">O</div>
                            <div>
                                <p class="text-xs text-gray-800 font-medium leading-none">OTIUM</p>
                                <p class="text-xs text-gray-500 leading-none mt-0.5" x-text="serpUrl"></p>
                            </div>
                        </div>
                        <p class="text-base text-[#1a0dab] leading-snug mb-1 hover:underline cursor-pointer truncate"
                           x-text="metaTitle || 'Título del artículo'"></p>
                        <p class="text-sm text-gray-600 leading-snug line-clamp-2"
                           x-text="metaDesc || 'Descripción del artículo que aparecerá en los resultados de búsqueda...'"></p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">Imagen de portada</h3>
                    <div x-data="imagePreview('{{ $post->image ? Storage::url($post->image) : '' }}')">
                        <div class="relative border-2 border-dashed border-gray-300 rounded-lg overflow-hidden hover:border-primary transition-colors cursor-pointer"
                             @click="$refs.imageFile.click()">
                            <template x-if="!preview">
                                <div class="py-8 text-center">
                                    <svg class="w-8 h-8 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <p class="text-xs text-gray-500">Click para subir imagen</p>
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
                    </div>
                </div>

            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    <script>
        const quill = new Quill('#quill-editor', {
            theme: 'snow',
            placeholder: 'Escribe el contenido de tu artículo...',
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
                syncContent() {
                    document.getElementById('content-input').value = quill.root.innerHTML;
                }
            };
        }

        function tagInput(initialTags) {
            return {
                tags: initialTags || [],
                addTag(value) {
                    const tag = value.trim().replace(/,/g, '');
                    if (tag && !this.tags.includes(tag)) {
                        this.tags.push(tag);
                    }
                },
                removeTag(index) {
                    this.tags.splice(index, 1);
                }
            };
        }

        function imagePreview(existing) {
            return { preview: existing || null };
        }

        function docReplace() {
            return { replacing: false, newFile: null };
        }

        function seoPanel(opts = {}) {
            const hasMeta = !!opts.metaTitle;
            const hasDesc = !!opts.metaDesc;
            return {
                metaTitle: opts.metaTitle || (opts.initTitle || '').substring(0, 70),
                metaDesc:  opts.metaDesc  || (opts.initExcerpt || '').substring(0, 160),
                metaTitleTouched: hasMeta,
                metaDescTouched:  hasDesc,
                fixedSlug: opts.serpSlug || null,

                get serpUrl() {
                    const slug = this.fixedSlug || this.slugify(this.metaTitle) || '...';
                    return 'otium.com.bo › blog › ' + slug;
                },

                slugify(str) {
                    return (str || '').toLowerCase()
                        .normalize('NFD').replace(/[\u0300-\u036f]/g, '')
                        .replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '')
                        .substring(0, 50);
                },

                onTitleChange(val) {
                    if (!this.metaTitleTouched) this.metaTitle = val.substring(0, 70);
                },

                onExcerptChange(val) {
                    if (!this.metaDescTouched) this.metaDesc = val.substring(0, 160);
                }
            };
        }
    </script>

</x-admin-layout>
