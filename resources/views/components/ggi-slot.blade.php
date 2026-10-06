@props(['size' => 'md'])

@php
    // Logo oficial "GGI Independent Member" (horizontal, gris sobre transparente) — paquete GGI 2025.
    // Usar solo sobre fondos claros (manual §2.4: fondo blanco, negro o GGI Green).
    $heights = ['sm' => 'h-8', 'md' => 'h-10', 'lg' => 'h-14', 'xl' => 'h-28'];
    $heightClass = $heights[$size] ?? $heights['md'];
@endphp
<div {{ $attributes->merge(['class' => 'inline-flex items-center justify-center rounded-xl px-6 py-5 shrink-0']) }}>
    <img src="{{ asset('images/ggi-independent-member.png') }}" alt="GGI Independent Member"
        class="{{ $heightClass }} w-auto max-w-full">
</div>
