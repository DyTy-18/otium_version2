{{-- Bloque "Modelo digital": texto a la izquierda y mapa Entrada → Trabajo OTIUM → Salida a la derecha. --}}
@props(['title', 'copy', 'nodes', 'label' => null])

@php
    $bgs = ['bg-soft', 'bg-brand-light', 'bg-accent/12'];
@endphp
<div class="grid grid-cols-1 lg:grid-cols-[.72fr_1.28fr] gap-5">
    <div class="p-7.5 bg-white border border-line border-t-[5px] border-t-primary" data-aos="fade-right">
        <h3 class="text-[27px] font-bold leading-[1.08] tracking-[-0.02em] mb-3.5">{{ $title }}</h3>
        <p class="text-muted">{{ $copy }}</p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-[1fr_auto_1fr_auto_1fr] gap-3 items-stretch p-6.5 bg-white border border-line"
        @if ($label) aria-label="{{ $label }}" @endif data-aos="fade-left" data-aos-delay="100">
        @foreach ($nodes as $i => $n)
            @unless ($loop->first)
            <div class="self-center text-center text-accent text-[22px] rotate-90 lg:rotate-0" aria-hidden="true">→</div>
            @endunless
            <div class="flex flex-col justify-center p-5.5 border border-line {{ $bgs[$i] ?? 'bg-soft' }}">
                <small class="text-primary text-xs uppercase font-extrabold tracking-[.08em]">{{ $n['label'] }}</small>
                <strong class="my-1.5">{{ $n['title'] }}</strong>
                <span class="text-muted text-[12.5px]">{{ $n['desc'] }}</span>
            </div>
        @endforeach
    </div>
</div>
