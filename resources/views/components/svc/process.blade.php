{{--
    Proceso en pasos numerados dentro de una caja blanca.
    Desktop: una fila unida por una línea · Tablet: 3 columnas · Mobile: lista vertical con línea a la izquierda.
    Colores de los números: 1 rojo, 2 salmón, 3 crema, 4+ turquesa.
--}}
@props(['eyebrow', 'title', 'intro', 'steps'])

@php
    $dot = fn ($i) => match (true) {
        $i === 0 => 'border-primary text-primary bg-white',
        $i === 1 => 'border-secondary text-secondary bg-white',
        $i === 2 => 'border-brand-light text-primary bg-brand-light',
        default  => 'border-accent text-[#2e8792] bg-white',
    };
    $cols = ['lg:grid-cols-4', 'lg:grid-cols-5', 'lg:grid-cols-6'][max(0, min(2, count($steps) - 4))];
@endphp
<span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary">{{ $eyebrow }}</span>
<div class="p-6 md:p-9 bg-white border border-line" data-aos="fade-up">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-3.5 lg:gap-10 items-end pb-5.5 border-b-2 border-accent">
        <h3 class="text-[clamp(28px,3vw,42px)] font-extrabold leading-[1.08] tracking-[-0.02em]">{{ $title }}</h3>
        <p class="text-muted max-w-[540px] lg:justify-self-end">{{ $intro }}</p>
    </div>

    <div class="relative grid grid-cols-1 md:grid-cols-3 {{ $cols }} gap-3 md:gap-y-6.5 mt-10.5">
        <span class="hidden lg:block absolute left-[8%] right-[8%] top-[18px] h-0.5 bg-mid"></span>
        @foreach ($steps as $i => $s)
        <div class="relative pl-12 pb-6 md:pl-0 md:pb-0 md:pt-12.5 lg:pt-14.5 lg:min-h-44" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}">
            @unless ($loop->last)
            <span class="md:hidden absolute top-9.5 bottom-0 left-[18px] w-px bg-mid"></span>
            @endunless
            <div class="absolute top-0 left-0 z-10 w-9.5 h-9.5 grid place-items-center border-2 font-extrabold {{ $dot($i) }}">{{ $i + 1 }}</div>
            <h4 class="text-base font-bold leading-tight mb-1.5">{{ $s['title'] }}</h4>
            <p class="text-muted text-[13.5px]">{{ $s['desc'] }}</p>
        </div>
        @endforeach
    </div>

    {{ $slot }}
</div>
