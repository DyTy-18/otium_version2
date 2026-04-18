@props([
    'title'       => 'Otium | Outsourcing Contable Digital Bolivia · Santa Cruz · La Paz',
    'description' => 'Firma boliviana especializada en outsourcing contable, auditoría integral y transformación digital para medianas y grandes empresas.',
    'ogImage'     => '/images/hero-corporate.png',
])
@php
    $pageTitle = ($title !== 'Otium | Outsourcing Contable Digital Bolivia · Santa Cruz · La Paz') ? $title . ' | Otium' : $title;
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
        "telephone": "+591722505583",
        "email": "contacto@otium.bo",
        "address": [
            {
                "@@type": "PostalAddress",
                "streetAddress": "Av. Ballivián Esq. C. 21",
                "addressLocality": "La Paz",
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

    <!-- WhatsApp Floating Button -->
    @php $wa = env('WHATSAPP_NUMBER', '59172505583'); @endphp
    <div class="fixed bottom-6 right-6 z-50 flex items-center gap-3 group">
        {{-- Tooltip --}}
        <span class="opacity-0 group-hover:opacity-100 translate-x-2 group-hover:translate-x-0 transition-all duration-300 bg-gray-900 text-white text-sm font-medium px-4 py-2 rounded-xl shadow-lg whitespace-nowrap pointer-events-none">
            Escríbenos por WhatsApp
        </span>
        {{-- Botón --}}
        <a href="https://wa.me/{{ $wa }}?text=Hola%2C%20me%20comunico%20desde%20el%20sitio%20web%20de%20OTIUM%20Consultores.%20Quisiera%20m%C3%A1s%20informaci%C3%B3n."
            target="_blank" rel="noopener" aria-label="Contactar por WhatsApp"
            class="relative w-16 h-16 rounded-full shadow-2xl flex items-center justify-center transition-transform hover:scale-110 duration-300"
            style="background:#25D366;">
            {{-- Pulso animado --}}
            <span class="absolute inset-0 rounded-full animate-ping opacity-30" style="background:#25D366;"></span>
            <svg xmlns="http://www.w3.org/2000/svg" class="relative w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                <path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.558 4.112 1.528 5.837L.057 23.215a.75.75 0 00.928.928l5.378-1.471A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.75a9.713 9.713 0 01-4.953-1.356l-.355-.211-3.676 1.005 1.005-3.676-.211-.355A9.713 9.713 0 012.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
            </svg>
        </a>
    </div>

</body>

</html>
