{{-- Sección final "Cómo empezamos": título + variables a la izquierda, tarjeta con CTA a la derecha. --}}
@props(['title', 'text', 'variables', 'cardTitle', 'cardText', 'ctaHref', 'ctaLabel'])

<section id="como-empezamos" class="py-16 md:py-22 bg-soft">
    <div class="container-2026">
        <div class="grid grid-cols-1 lg:grid-cols-[1.12fr_.88fr] gap-7.5 items-start">
            <div data-aos="fade-right">
                <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary">{{ __('Cómo empezamos') }}</span>
                <h2 class="text-[clamp(34px,4.5vw,58px)] font-extrabold leading-[1.08] tracking-[-0.02em] text-black max-w-[790px]">{{ $title }}</h2>
                <p class="mt-4.5 text-muted max-w-[680px]">{{ $text }}</p>
                <div class="flex flex-wrap gap-2 mt-6.5" aria-label="{{ __('Variables para definir el alcance') }}">
                    @foreach ($variables as $var)
                    <span class="px-2.5 py-2 bg-white border border-mid text-muted text-xs">{{ $var }}</span>
                    @endforeach
                </div>
            </div>
            <div class="p-7.5 bg-white border border-line border-t-[5px] border-t-primary" data-aos="fade-left" data-aos-delay="100">
                <h3 class="text-[25px] font-bold leading-[1.08] tracking-[-0.02em]">{{ $cardTitle }}</h3>
                <p class="mt-4.5 mb-6 text-muted text-sm">{{ $cardText }}</p>
                <x-svc.btn :href="$ctaHref" external>{{ $ctaLabel }}</x-svc.btn>
            </div>
        </div>
    </div>
</section>
