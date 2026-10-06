{{-- Caja de "alcance especial" con borde salmón: trabajos que se cotizan aparte. --}}
@props(['eyebrow', 'title', 'items', 'note'])

<div class="grid grid-cols-1 lg:grid-cols-[.9fr_1.1fr] gap-6 lg:gap-12.5 p-7.5 bg-white border border-line border-l-[5px] border-l-secondary" data-aos="fade-up">
    <div>
        <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary">{{ $eyebrow }}</span>
        <h3 class="text-[30px] font-bold leading-[1.08] tracking-[-0.02em]">{{ $title }}</h3>
    </div>
    <div>
        <ul class="grid gap-2 text-muted">
            @foreach ($items as $item)
            <li>• {{ $item }}</li>
            @endforeach
        </ul>
        <p class="mt-3.5 text-black font-bold">{{ $note }}</p>
    </div>
</div>
