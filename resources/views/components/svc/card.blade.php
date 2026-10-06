{{-- Tarjeta numerada con barra lateral. La barra rota rojo → salmón → turquesa según la posición (n). --}}
@props(['n', 'title', 'index' => null])

@php
    $bar = $n % 3 === 0 ? 'bg-accent' : ($n % 2 === 0 ? 'bg-secondary' : 'bg-primary');
@endphp
<article {{ $attributes->merge(['class' => 'relative h-full pt-6 px-6 pb-6 bg-white border border-line']) }} data-aos="fade-up" data-aos-delay="{{ (($n - 1) % 4) * 75 }}">
    <span class="absolute left-0 top-0 w-1 h-full {{ $bar }}"></span>
    @if ($index !== false)
        <div class="mb-5.5 text-[11px] font-extrabold tracking-[.08em] text-primary">{{ $index ?? str_pad($n, 2, '0', STR_PAD_LEFT) }}</div>
    @endif
    <h3 class="text-xl font-bold leading-tight tracking-[-0.02em] mb-2.5">{{ $title }}</h3>
    <p class="text-muted text-sm">{{ $slot }}</p>
</article>
