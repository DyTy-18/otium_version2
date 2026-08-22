@props(['size' => 'md'])

@php
    // Logo oficial GGI (blanco) — emitido por GGI Head Office.
    // Nota: es una versión blanca del logo — sin una placa oscura detrás (el manual §2.4
    // solo permite fondo blanco, negro o GGI Green) queda invisible sobre fondos claros.
    $heights = ['sm' => 'h-8', 'md' => 'h-10', 'lg' => 'h-14', 'xl' => 'h-28'];
    $heightClass = $heights[$size] ?? $heights['md'];
@endphp
<div {{ $attributes->merge(['class' => 'inline-flex items-center justify-center rounded-xl px-6 py-5 shrink-0']) }}>
    <img src="{{ asset('images/ggi_logo_green.png') }}" alt="GGI Independent Member"
        class="{{ $heightClass }} w-auto max-w-full">
</div>
