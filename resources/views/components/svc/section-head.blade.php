{{-- Cabecera de sección: eyebrow + título a la izquierda, bajada a la derecha, línea turquesa abajo. --}}
@props(['eyebrow', 'title', 'size' => 'text-[clamp(33px,4vw,54px)]'])

<div {{ $attributes->merge(['class' => 'grid grid-cols-1 lg:grid-cols-[1.12fr_.88fr] gap-4 lg:gap-13.5 items-end mb-10 pb-4.5 border-b-2 border-accent']) }} data-aos="fade-up">
    <div>
        <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary">{{ $eyebrow }}</span>
        <h2 class="{{ $size }} font-extrabold leading-[1.08] tracking-[-0.02em] text-black max-w-[780px]">{{ $title }}</h2>
    </div>
    @if ($slot->isNotEmpty())
        <p class="text-muted max-w-[555px] lg:justify-self-end">{{ $slot }}</p>
    @endif
</div>
