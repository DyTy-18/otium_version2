<x-layout
    title="Nuestros Servicios"
    description="Descubre todos los servicios de OTIUM Consultores: outsourcing contable, operaciones financieras, auditoría, transformación digital y constitución de empresas en Bolivia."
>
    <!-- Cabecera — gris plano #F6F6F6 (Brief Web Otium 2026, cambio 9) -->
    <section class="pt-36 pb-16 bg-soft border-b border-line">
        <div class="container-2026">
            <p class="mb-4.5 text-[13px] text-muted" data-aos="fade-up"><a href="{{ route('home') }}" class="text-primary hover:underline">{{ __('Inicio') }}</a> / {{ __('Servicios') }}</p>
            <h1 class="text-[clamp(36px,5vw,56px)] font-bold tracking-[-0.02em] text-black" data-aos="fade-up" data-aos-delay="50">{{ __('Nuestros Servicios') }}</h1>
            <p class="mt-3.5 text-lg text-muted max-w-[56ch]" data-aos="fade-up" data-aos-delay="100">{{ __('Soluciones integrales diseñadas para impulsar el crecimiento y la estabilidad de tu empresa.') }}</p>
        </div>
    </section>

    <!-- Catálogo — 9 cards con un solo tratamiento (cambio 10). Fuente: config/services_catalog.php -->
    <section class="py-22 bg-white">
        <div class="container-2026 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach (config('services_catalog') as $i => $service)
                <x-service-card :service="$service" :label="__('Ver one pager')" :delay="($i % 3) * 75" />
            @endforeach
        </div>
    </section>

    <!-- Nuestro proceso -->
    <section class="py-22 bg-soft">
        <div class="container-2026">
            <div class="max-w-[720px] mx-auto mb-11 text-center" data-aos="fade-up">
                <p class="mb-3 text-xs font-bold tracking-[.14em] uppercase text-primary">{{ __('Cómo empezamos') }}</p>
                <h2 class="text-[clamp(28px,3.4vw,40px)] font-bold leading-[1.15] text-black">{{ __('Nuestro proceso') }}</h2>
                <div class="w-16 h-0.75 mx-auto mt-4.5 bg-accent"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                @foreach ([
                    ['border-t-black',   __('Análisis inicial'),          __('Evaluamos tu situación actual, identificamos necesidades y definimos el alcance del proyecto con precisión.')],
                    ['border-t-accent',  __('Estrategia y ejecución'),    __('Diseñamos soluciones a medida e implementamos las mejores prácticas con nuestro equipo de especialistas.')],
                    ['border-t-primary', __('Resultados y seguimiento'),  __('Entregamos informes detallados y realizamos seguimiento continuo para asegurar el éxito a largo plazo.')],
                ] as $i => [$border, $title, $desc])
                <div class="pt-5.5 border-t-3 {{ $border }}" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <div class="text-[13px] font-bold tracking-widest text-muted">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3 class="mt-2 mb-2 text-xl font-bold text-black">{{ $title }}</h3>
                    <p class="text-[14.5px] text-muted">{{ $desc }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Preguntas frecuentes -->
    <section class="py-22 bg-white">
        <div class="container-2026">
            <div class="max-w-[720px] mx-auto mb-11 text-center" data-aos="fade-up">
                <p class="mb-3 text-xs font-bold tracking-[.14em] uppercase text-primary">{{ __('Dudas comunes') }}</p>
                <h2 class="text-[clamp(28px,3.4vw,40px)] font-bold leading-[1.15] text-black">{{ __('Preguntas Frecuentes') }}</h2>
                <div class="w-16 h-0.75 mx-auto mt-4.5 bg-accent"></div>
            </div>
            <div class="max-w-[780px] mx-auto border-t border-line" data-aos="fade-up">
                @foreach ([
                    [__('¿Trabajan con empresas de todos los tamaños?'), __('Sí, adaptamos nuestros servicios tanto para startups y PYMES como para grandes corporaciones.')],
                    [__('¿Ofrecen servicios internacionales?'),          __('Sí, contamos con experiencia en normativas internacionales y podemos asistir a empresas con operaciones en el extranjero.')],
                    [__('¿Cómo se estructuran sus tarifas?'),            __('Nuestras tarifas se basan en la complejidad y alcance del proyecto. Ofrecemos cotizaciones personalizadas tras una evaluación inicial gratuita.')],
                ] as [$q, $a])
                <details class="group border-b border-line">
                    <summary class="flex justify-between gap-4 px-1 py-5 font-semibold text-[16.5px] cursor-pointer list-none [&::-webkit-details-marker]:hidden">
                        {{ $q }}
                        <span class="text-primary text-[22px] leading-none group-open:hidden" aria-hidden="true">+</span>
                        <span class="text-primary text-[22px] leading-none hidden group-open:inline" aria-hidden="true">−</span>
                    </summary>
                    <p class="px-1 pb-5 text-muted">{{ $a }}</p>
                </details>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA final (compartido) -->
    <x-cta-final />

</x-layout>
