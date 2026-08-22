@props([
    'title'       => 'Otium | Outsourcing Contable Digital Bolivia · Santa Cruz · La Paz',
    'description' => 'Firma boliviana especializada en outsourcing contable, auditoría integral y transformación digital para medianas y grandes empresas.',
    'ogImage'     => '/images/hero-corporate.png',
])
@php
    $pageTitle = str_contains($title, 'Otium') ? $title : $title . ' | Otium';
    $canonical = url()->current();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $description }}">
    <link rel="canonical" href="{{ $canonical }}">
    <link rel="icon" href="/images/logo-otium.webp" type="image/webp">

    <!-- Open Graph -->
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="{{ $canonical }}">
    <meta property="og:title"       content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image"       content="{{ $ogImage }}">
    <meta property="og:locale"      content="es_BO">
    <meta property="og:site_name"   content="OTIUM Consultores">

    <!-- Twitter Card -->
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image"       content="{{ $ogImage }}">

    <!-- Schema.org LocalBusiness -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "AccountingService",
        "name": "OTIUM Consultores",
        "url": "{{ config('app.url') }}",
        "logo": "{{ config('app.url') }}/images/logo-otium.webp",
        "description": "{{ $description }}",
        "telephone": ["+59172505583", "+59122792824"],
        "email": "info@otium.com.bo",
        "address": [
            {
                "@@type": "PostalAddress",
                "streetAddress": "San Miguel, Calle Ferrecio Nro. 1154 A, Bloque C 14, Edif. Munditoys Piso 4",
                "addressLocality": "La Paz",
                "addressCountry": "BO"
            },
            {
                "@@type": "PostalAddress",
                "streetAddress": "Equipetrol, Calle Los Lirios Nro. 100, Av. San Martín",
                "addressLocality": "Santa Cruz",
                "addressCountry": "BO"
            }
        ],
        "areaServed": "BO",
        "sameAs": []
    }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('meta')
</head>

<body class="font-sans antialiased text-gray-800 bg-brand-light">

    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    {{-- ═══════════════════════════════════
         Popup de entrada global
         · Se muestra en toda la web excepto en el blog
         · Una sola vez por usuario (localStorage)
    ═══════════════════════════════════ --}}
    @php
        $currentRoute = Route::currentRouteName() ?? '';
        $showPopup    = !str_starts_with($currentRoute, 'blog.');
        $popupPost    = null;
        if ($showPopup) {
            $popupPost = \App\Models\Post::published()
                ->where('popup_enabled', true)
                ->latest('published_at')
                ->first();
        }
    @endphp

    @if($popupPost)
    <div x-data="{
            open: false,
            init() {
                const key = 'popup_seen_{{ $popupPost->id }}_{{ $popupPost->published_at->timestamp }}';
                if (!localStorage.getItem(key)) {
                    setTimeout(() => { this.open = true; }, 900);
                }
            },
            close() {
                this.open = false;
                localStorage.setItem('popup_seen_{{ $popupPost->id }}_{{ $popupPost->published_at->timestamp }}', '1');
            }
         }"
         x-show="open"
         x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @keydown.escape.window="close()"
         @click.self="close()"
         class="fixed inset-0 z-50 flex items-center justify-center p-4"
         style="background: rgba(20,12,8,0.6);"
         role="dialog" aria-modal="true" aria-labelledby="global-popup-title">

        <div class="bg-white rounded-2xl w-full max-w-sm min-w-0 max-h-[90vh] overflow-x-hidden overflow-y-auto shadow-2xl"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95 translate-y-2"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-95 translate-y-2"
             @click.stop>

            {{-- Header: logo centrado, X a la derecha --}}
            <div class="flex items-center px-5 py-4 bg-gray-50 border-b border-gray-200">
                <div class="flex-1"></div>
                <img src="{{ asset('images/logo-otium.webp') }}" alt="Otium" class="h-9 w-auto">
                <div class="flex-1 flex justify-end">
                    <button type="button" @click="close()"
                            class="text-gray-500 hover:text-gray-700 w-7 h-7 rounded-full bg-gray-200 hover:bg-gray-300 text-xs flex items-center justify-center transition-colors leading-none"
                            aria-label="Cerrar">
                        ✕
                    </button>
                </div>
            </div>

            {{-- Cuerpo centrado --}}
            <div class="px-6 sm:px-8 py-7 border-l-4 border-primary text-center">

                <h2 id="global-popup-title" class="text-xl font-bold text-gray-900 mb-3 leading-snug break-words">
                    {{ $popupPost->title }}
                </h2>

                @if($popupPost->excerpt)
                    <p class="text-sm text-gray-600 leading-relaxed mb-5 break-words">{{ $popupPost->excerpt }}</p>
                @endif

                {{-- Líneas con colores de la marca --}}
                <div class="flex gap-1.5 justify-center mb-6">
                    <span class="h-1 w-8 bg-primary rounded-full"></span>
                    <span class="h-1 w-8 bg-accent rounded-full"></span>
                    <span class="h-1 w-8 bg-secondary rounded-full"></span>
                    <span class="h-1 w-5 bg-gray-900 rounded-full"></span>
                </div>

                <div class="flex gap-3 justify-center flex-wrap">
                    @if($popupPost->document_path)
                        <a href="{{ $popupPost->document_url }}"
                           target="_blank" rel="noopener" download
                           class="inline-flex items-center gap-2 bg-primary hover:bg-red-700 text-white text-sm font-semibold py-3 px-6 rounded-lg transition-colors">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                            </svg>
                            Descargar
                        </a>
                    @endif
                    <a href="{{ route('blog.show', $popupPost->slug) }}" @click="close()"
                       class="inline-flex items-center border-2 border-accent text-accent hover:bg-accent/10 text-sm font-semibold py-3 px-6 rounded-lg transition-colors">
                        Ver artículo →
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- Botones flotantes (columna derecha) --}}
    @php
        $wa          = env('WHATSAPP_NUMBER', '59170654104');
        $latestPost  = \App\Models\Post::published()->latest('published_at')->first();
    @endphp
    <div class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-4">

        {{-- Blog: último artículo --}}
        @if($latestPost)
        <div class="relative flex items-center gap-3 group">
            <span class="absolute right-full mr-3 opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all duration-300 bg-gray-900 text-white text-sm font-medium px-4 py-2 rounded-xl shadow-lg whitespace-nowrap pointer-events-none">
                {{ Str::limit($latestPost->title, 40) }}
            </span>
            <a href="{{ route('blog.show', $latestPost->slug) }}"
               aria-label="Ver último artículo"
               class="relative w-14 h-14 rounded-full shadow-xl flex items-center justify-center transition-transform hover:scale-110 duration-300 bg-primary">
                <span class="absolute inset-0 rounded-full animate-ping opacity-20 bg-primary"></span>
                <svg class="relative w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l6 6v8a2 2 0 01-2 2z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20v-8H7v8M7 4v4h8"/>
                </svg>
            </a>
        </div>
        @endif

        {{-- WhatsApp --}}
        <div class="relative flex items-center gap-3 group">
            <span class="absolute right-full mr-3 opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all duration-300 bg-gray-900 text-white text-sm font-medium px-4 py-2 rounded-xl shadow-lg whitespace-nowrap pointer-events-none">
                Escríbenos por WhatsApp
            </span>
            <a href="https://wa.me/{{ $wa }}?text=Hola%2C%20me%20comunico%20desde%20el%20sitio%20web%20de%20OTIUM%20Consultores.%20Quisiera%20m%C3%A1s%20informaci%C3%B3n."
               target="_blank" rel="noopener" aria-label="Contactar por WhatsApp"
               class="relative w-14 h-14 rounded-full shadow-xl flex items-center justify-center transition-transform hover:scale-110 duration-300"
               style="background:#25D366;">
                <span class="absolute inset-0 rounded-full animate-ping opacity-30" style="background:#25D366;"></span>
                <svg xmlns="http://www.w3.org/2000/svg" class="relative w-7 h-7 text-white" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                    <path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.558 4.112 1.528 5.837L.057 23.215a.75.75 0 00.928.928l5.378-1.471A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.75a9.713 9.713 0 01-4.953-1.356l-.355-.211-3.676 1.005 1.005-3.676-.211-.355A9.713 9.713 0 012.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
                </svg>
            </a>
        </div>

    </div>

</body>

</html>
