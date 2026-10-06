{{-- Dos columnas de checks: lo que hace OTIUM (rojo) y lo que aporta el cliente (turquesa). --}}
@props(['otium', 'client', 'clientTitle' => null])

<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
    @foreach ([
        ['OTIUM', 'border-t-primary', 'bg-brand-light text-primary', $otium],
        [$clientTitle ?? __('Su empresa'), 'border-t-accent', 'bg-accent/14 text-[#2e8792]', $client],
    ] as $i => [$who, $border, $check, $items])
    <div class="p-7.5 bg-white border border-line border-t-[5px] {{ $border }}" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
        <h3 class="text-[25px] font-bold leading-[1.08] tracking-[-0.02em] mb-4.5">{{ $who }}</h3>
        <div class="grid gap-3">
            @foreach ($items as $item)
            <div class="grid grid-cols-[27px_1fr] gap-2.5 text-muted">
                <i class="w-6 h-6 grid place-items-center not-italic font-black {{ $check }}">✓</i>
                <span>{{ $item }}</span>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
