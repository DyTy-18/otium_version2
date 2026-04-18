@php
    $seoTitle    = $post->meta_title ?? $post->title;
    $seoDesc     = $post->meta_description ?? $post->excerpt ?? 'Artículo de OTIUM Consultores sobre finanzas, tributación y tecnología empresarial.';
    $seoImage    = $post->image ? Storage::url($post->image) : '/images/hero-corporate.png';
@endphp
<x-layout :title="$seoTitle" :description="$seoDesc" :ogImage="$seoImage">

    {{-- Hero del artículo --}}
    <section class="relative pt-32 pb-12 md:pt-44 md:pb-16 overflow-hidden">
        @if($post->image)
            <div class="absolute inset-0">
                <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-linear-to-t from-gray-900/90 via-gray-900/60 to-gray-900/30"></div>
            </div>
            <div class="container mx-auto px-6 relative z-10 text-white">
        @else
            <div class="bg-gray-900">
            <div class="container mx-auto px-6 relative z-10 text-white py-8">
        @endif
                {{-- Breadcrumb --}}
                <div class="flex items-center gap-2 text-sm text-white/70 mb-6">
                    <a href="{{ route('blog.index') }}" class="hover:text-white transition-colors">Blog</a>
                    <span>/</span>
                    @if($post->category)
                        <a href="{{ route('blog.index', ['categoria' => $post->category->slug]) }}" class="hover:text-white transition-colors">
                            {{ $post->category->name }}
                        </a>
                        <span>/</span>
                    @endif
                    <span class="text-white/50 truncate max-w-xs">{{ $post->title }}</span>
                </div>

                @if($post->category)
                    <span class="inline-block bg-primary text-white text-xs font-bold px-3 py-1 rounded-full mb-4">
                        {{ $post->category->name }}
                    </span>
                @endif

                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 max-w-3xl leading-tight">
                    {{ $post->title }}
                </h1>

                <div class="flex items-center gap-4 text-sm text-white/80 flex-wrap">
                    <span class="flex items-center gap-2">
                        @if($post->author_avatar)
                            <img src="{{ Storage::url($post->author_avatar) }}" alt="{{ $post->author_name }}"
                                 class="w-7 h-7 rounded-full object-cover">
                        @else
                            <div class="w-7 h-7 rounded-full bg-white/20 flex items-center justify-center text-xs font-bold">
                                {{ strtoupper(substr($post->author_name, 0, 1)) }}
                            </div>
                        @endif
                        {{ $post->author_name }}
                    </span>
                    <span>•</span>
                    <span>{{ $post->published_at->format('d \d\e F, Y') }}</span>
                    <span>•</span>
                    <span>{{ $post->reading_time }} min de lectura</span>
                </div>
            </div>
        @if($post->image)
        </div>
        @else
        </div>
        </div>
        @endif
    </section>

    {{-- Contenido principal --}}
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto">

                {{-- Excerpt / intro --}}
                @if($post->excerpt)
                    <p class="text-xl text-gray-600 font-light leading-relaxed mb-10 border-l-4 border-primary pl-6">
                        {{ $post->excerpt }}
                    </p>
                @endif

                {{-- Documento embebido (si el post se creó desde un archivo) --}}
                @if($post->document_path)
                    <div class="mb-10">
                        <div id="pdf-viewer"
                             data-src="{{ Storage::url($post->document_path) }}"
                             class="space-y-2">
                            <p class="text-sm text-gray-400 text-center py-8">Cargando documento…</p>
                        </div>
                        <div class="mt-3 text-right">
                            <a href="{{ Storage::url($post->document_path) }}" target="_blank" rel="noopener"
                               class="text-xs text-gray-400 hover:text-primary transition-colors">
                                Descargar documento ↓
                            </a>
                        </div>
                    </div>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
                    <script>
                        (function () {
                            const container = document.getElementById('pdf-viewer');
                            const url = container.dataset.src;
                            pdfjsLib.GlobalWorkerOptions.workerSrc =
                                'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

                            pdfjsLib.getDocument(url).promise.then(function (pdf) {
                                container.innerHTML = '';
                                const renderPage = function (num) {
                                    return pdf.getPage(num).then(function (page) {
                                        const baseVp  = page.getViewport({ scale: 1 });
                                        const scale   = container.clientWidth / baseVp.width;
                                        const vp      = page.getViewport({ scale });

                                        const canvas  = document.createElement('canvas');
                                        canvas.width  = vp.width;
                                        canvas.height = vp.height;
                                        canvas.style.width  = '100%';
                                        canvas.style.display = 'block';
                                        canvas.style.borderRadius = '8px';
                                        canvas.style.boxShadow = '0 1px 6px rgba(0,0,0,.12)';
                                        container.appendChild(canvas);

                                        return page.render({ canvasContext: canvas.getContext('2d'), viewport: vp }).promise;
                                    });
                                };

                                let chain = Promise.resolve();
                                for (let i = 1; i <= pdf.numPages; i++) {
                                    (function (n) {
                                        chain = chain.then(function () { return renderPage(n); });
                                    })(i);
                                }
                            }).catch(function () {
                                container.innerHTML = '<p class="text-sm text-red-500 text-center py-6">No se pudo cargar el documento.</p>';
                            });
                        })();
                    </script>
                @endif

                {{-- Contenido del artículo (HTML de Quill) --}}
                @if($post->content)
                <div class="prose prose-lg max-w-none
                            prose-headings:text-gray-900 prose-headings:font-bold
                            prose-p:text-gray-700 prose-p:leading-relaxed
                            prose-a:text-primary prose-a:no-underline hover:prose-a:underline
                            prose-strong:text-gray-900
                            prose-blockquote:border-primary prose-blockquote:text-gray-600
                            prose-code:text-primary prose-code:bg-gray-50 prose-code:rounded prose-code:px-1
                            prose-img:rounded-xl prose-img:shadow-md
                            prose-ul:text-gray-700 prose-ol:text-gray-700">
                    {!! $post->content !!}
                </div>
                @endif

                {{-- Tags --}}
                @if($post->tags->isNotEmpty())
                    <div class="flex items-center gap-2 flex-wrap mt-12 pt-8 border-t border-gray-100">
                        <span class="text-sm text-gray-500 font-medium">Etiquetas:</span>
                        @foreach($post->tags as $tag)
                            <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}"
                               class="px-3 py-1 bg-gray-100 hover:bg-primary hover:text-white text-gray-600 text-sm rounded-full transition-colors">
                                {{ $tag->name }}
                            </a>
                        @endforeach
                    </div>
                @endif

                {{-- Autor (solo si hay info real) --}}
                @if($post->user_id || $post->guest_author)
                <div class="mt-10 p-6 bg-gray-50 rounded-2xl">
                    <div class="flex items-start gap-5">
                        {{-- Avatar --}}
                        @if($post->author_avatar)
                            <img src="{{ Storage::url($post->author_avatar) }}" alt="{{ $post->author_name }}"
                                 class="w-16 h-16 rounded-full object-cover shrink-0 shadow">
                        @else
                            <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center text-2xl font-bold text-primary shrink-0">
                                {{ strtoupper(substr($post->author_name, 0, 1)) }}
                            </div>
                        @endif

                        <div class="flex-1 min-w-0">
                            <p class="font-bold text-gray-900 text-base">{{ $post->author_name }}</p>
                            @if($post->author_job_title)
                                <p class="text-sm text-primary font-medium mb-2">{{ $post->author_job_title }}</p>
                            @endif
                            @if($post->author_bio)
                                <p class="text-sm text-gray-600 leading-relaxed mb-3">{{ $post->author_bio }}</p>
                            @endif

                            {{-- Redes sociales (solo si es usuario del sistema) --}}
                            @if($post->author_linkedin || $post->author_twitter)
                                <div class="flex items-center gap-3">
                                    @if($post->author_linkedin)
                                        <a href="{{ $post->author_linkedin }}" target="_blank" rel="noopener"
                                           class="text-gray-400 hover:text-primary transition-colors">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                            </svg>
                                        </a>
                                    @endif
                                    @if($post->author_twitter)
                                        <a href="{{ $post->author_twitter }}" target="_blank" rel="noopener"
                                           class="text-gray-400 hover:text-primary transition-colors">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif

                {{-- Volver al blog --}}
                <div class="mt-10">
                    <a href="{{ route('blog.index') }}"
                       class="inline-flex items-center gap-2 text-sm text-gray-600 hover:text-primary font-medium transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Volver al blog
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Posts relacionados --}}
    @if($related->isNotEmpty())
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Artículos relacionados</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($related as $relPost)
                    <article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all hover:-translate-y-1 duration-300">
                        @if($relPost->image)
                            <a href="{{ route('blog.show', $relPost->slug) }}" class="block h-40 overflow-hidden">
                                <img src="{{ Storage::url($relPost->image) }}" alt="{{ $relPost->title }}"
                                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                            </a>
                        @else
                            <div class="h-40 bg-linear-to-br from-primary/10 to-accent/10"></div>
                        @endif
                        <div class="p-5">
                            <p class="text-xs text-primary font-bold mb-2">{{ $relPost->category?->name }}</p>
                            <h3 class="text-sm font-bold text-gray-900 leading-snug mb-2">
                                <a href="{{ route('blog.show', $relPost->slug) }}" class="hover:text-primary transition-colors">
                                    {{ $relPost->title }}
                                </a>
                            </h3>
                            <p class="text-xs text-gray-400">{{ $relPost->published_at->format('d M, Y') }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

</x-layout>
