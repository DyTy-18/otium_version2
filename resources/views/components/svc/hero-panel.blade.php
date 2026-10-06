{{-- Panel lateral del hero: título + etiqueta y una lista de pasos numerados unidos por una línea. --}}
@props(['title', 'status' => null, 'steps', 'label' => null])

@php
    $num = fn ($i) => match (true) {
        $i === 0 => 'border-primary text-primary bg-white',
        $i === 1 => 'border-secondary text-secondary bg-white',
        $i === 2 => 'border-brand-light text-primary bg-brand-light',
        default  => 'border-accent text-[#2e8792] bg-white',
    };
@endphp
<aside class="p-5.5 md:p-7.5 bg-white border border-line border-t-[5px] border-t-primary shadow-[0_10px_26px_rgba(0,0,0,.055)]"
    @if ($label) aria-label="{{ $label }}" @endif data-aos="fade-left" data-aos-delay="150">
    <div class="flex items-center justify-between gap-4.5 pb-4.5 mb-2 border-b-2 border-accent">
        <strong class="text-[19px]">{{ $title }}</strong>
        @if ($status)
            <span class="shrink-0 px-2 py-1.5 bg-brand-light text-primary text-[10px] font-extrabold uppercase tracking-[.06em]">{{ $status }}</span>
        @endif
    </div>
    <div class="grid">
        @foreach ($steps as $i => $s)
        <div class="relative grid grid-cols-[42px_1fr] gap-3 items-start py-4">
            @unless ($loop->last)
            <span class="absolute left-4 top-12 -bottom-0.5 w-px bg-mid"></span>
            @endunless
            <span class="w-8.5 h-8.5 grid place-items-center border text-[11px] font-extrabold {{ $num($i) }}">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
            <span>
                <strong class="block mb-0.5 text-sm">{{ $s['title'] }}</strong>
                <small class="block text-muted text-[12.5px]">{{ $s['desc'] }}</small>
            </span>
        </div>
        @endforeach
    </div>
</aside>
