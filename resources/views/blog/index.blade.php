<x-layout>
    {{-- Hero --}}
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-28 overflow-hidden text-white">
        <div class="absolute inset-0">
            <img src="/images/carousel_innovation.png" alt="Blog OTIUM" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 to-secondary/80"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block text-white/80 font-semibold tracking-wider uppercase text-sm mb-4" data-aos="fade-up">
                Conocimiento & Tendencias
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight" data-aos="fade-up">
                Últimos Insights
            </h1>
            <p class="text-xl text-white/90 mb-8 font-light max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Artículos sobre finanzas, auditoría, impuestos y transformación digital para empresas en Bolivia.
            </p>
        </div>
    </section>

    {{-- Filtros por categoría --}}
    @if($categories->isNotEmpty())
    <section class="bg-white border-b border-gray-100 sticky top-0 z-30 shadow-sm">
        <div class="container mx-auto px-6">
            <div class="flex items-center gap-2 overflow-x-auto py-4 scrollbar-none">
                <a href="{{ route('blog.index') }}"
                   class="shrink-0 px-4 py-2 rounded-full text-sm font-medium transition-colors
                          {{ !$activeCategory ? 'bg-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                    Todos
                </a>
                @foreach($categories as $cat)
                    @if($cat->posts_count > 0)
                    <a href="{{ route('blog.index', ['categoria' => $cat->slug]) }}"
                       class="shrink-0 px-4 py-2 rounded-full text-sm font-medium transition-colors
                              {{ $activeCategory === $cat->slug ? 'bg-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                        {{ $cat->name }}
                        <span class="ml-1 text-xs opacity-70">({{ $cat->posts_count }})</span>
                    </a>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Grid de posts --}}
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">

            @if($posts->isEmpty())
                <div class="text-center py-20">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">No hay publicaciones todavía</h3>
                    <p class="text-gray-500">Pronto compartiremos nuevos artículos.</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($posts as $post)
                        <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all hover:-translate-y-1 duration-300 cursor-pointer" data-aos="fade-up">
                            {{-- Imagen --}}
                            <a href="{{ route('blog.show', $post->slug) }}" class="block">
                                @if($post->image)
                                    <div class="h-52 overflow-hidden">
                                        <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}"
                                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    </div>
                                @else
                                    <div class="h-52 bg-linear-to-br from-primary/10 to-accent/10 flex items-center justify-center group-hover:from-primary/20 group-hover:to-accent/20 transition-all duration-300">
                                        <svg class="w-12 h-12 text-primary/30 group-hover:text-primary/50 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                    </div>
                                @endif
                            </a>

                            <a href="{{ route('blog.show', $post->slug) }}" class="block p-6">
                                {{-- Meta --}}
                                <div class="flex items-center gap-2 text-xs mb-3 text-gray-500 group-hover:text-primary/70 transition-colors duration-300">
                                    @if($post->category)
                                        <span class="font-bold text-primary group-hover:text-primary transition-colors">{{ $post->category->name }}</span>
                                        <span>•</span>
                                    @endif
                                    <span>{{ $post->published_at->format('d M, Y') }}</span>
                                    <span>•</span>
                                    <span>{{ $post->reading_time }} min lectura</span>
                                </div>

                                {{-- Título --}}
                                <h3 class="text-lg font-bold text-gray-900 mb-2 leading-snug group-hover:text-primary transition-colors duration-300">
                                    {{ $post->title }}
                                </h3>

                                {{-- Excerpt --}}
                                @if($post->excerpt)
                                    <p class="text-gray-500 text-sm mb-4 line-clamp-2 group-hover:text-primary/60 transition-colors duration-300">{{ $post->excerpt }}</p>
                                @endif

                                {{-- Tags --}}
                                @if($post->tags->isNotEmpty())
                                    <div class="flex flex-wrap gap-1 mb-4">
                                        @foreach($post->tags->take(3) as $tag)
                                            <span class="px-2 py-0.5 bg-gray-100 text-gray-600 text-xs rounded-full group-hover:bg-primary/10 group-hover:text-primary transition-colors duration-300">{{ $tag->name }}</span>
                                        @endforeach
                                    </div>
                                @endif

                                <span class="text-primary text-sm font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all duration-300">
                                    Leer más
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </span>
                            </a>
                        </article>
                    @endforeach
                </div>

                {{-- Paginación --}}
                @if($posts->hasPages())
                    <div class="mt-12 flex justify-center">
                        {{ $posts->appends(request()->query())->links() }}
                    </div>
                @endif
            @endif
        </div>
    </section>
</x-layout>
