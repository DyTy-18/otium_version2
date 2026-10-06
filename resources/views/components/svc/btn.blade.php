{{-- Botón rectangular del sistema 2026. variant: primary (rojo) | secondary (borde rojo) | inverse (blanco sobre rojo) --}}
@props(['href', 'variant' => 'primary', 'external' => false])

@php
    $variants = [
        'primary'   => 'bg-primary border-primary text-white hover:bg-[#98261f] hover:border-[#98261f]',
        'secondary' => 'bg-white border-primary text-primary hover:bg-brand-light',
        'inverse'   => 'bg-white border-white text-primary hover:bg-brand-light',
    ];
@endphp
<a href="{{ $href }}" @if ($external) target="_blank" rel="noopener" @endif
    {{ $attributes->merge(['class' => 'inline-flex items-center justify-center gap-2 min-h-12 px-5.5 border text-sm font-bold transition-colors ' . $variants[$variant]]) }}>
    {{ $slot }}
</a>
