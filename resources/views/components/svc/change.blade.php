{{-- Comparaciones "Sin proceso estructurado" / "Con OTIUM" en tarjetas de 2 columnas. $pairs = [[antes, después], ...] --}}
@props(['pairs'])

<div class="grid grid-cols-1 md:grid-cols-2 gap-4.5">
    @foreach ($pairs as $i => [$before, $after])
    <div class="overflow-hidden bg-white border border-line" data-aos="fade-up" data-aos-delay="{{ ($i % 2) * 100 }}">
        <div class="p-6 bg-soft lg:min-h-27.5">
            <span class="block mb-2 text-[10px] font-extrabold uppercase tracking-widest text-muted">{{ __('Sin proceso estructurado') }}</span>
            <strong>{{ $before }}</strong>
        </div>
        <div class="p-6 border-t-4 border-accent">
            <span class="block mb-2 text-[10px] font-extrabold uppercase tracking-widest text-[#2e8792]">{{ __('Con OTIUM') }}</span>
            <strong>{{ $after }}</strong>
        </div>
    </div>
    @endforeach
</div>
