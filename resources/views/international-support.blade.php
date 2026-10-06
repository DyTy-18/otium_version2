<x-layout
    title="{{ __('International Support | Otium coordina tu operación fuera de Bolivia') }}"
    description="{{ __('Tu equipo en Bolivia, con acceso directo a especialistas de GGI en más de 120 países. Coordinación centralizada, sin perder a tu contacto de siempre.') }}"
    ogImage="/images/otium/hero/hero.png"
>
    @php
        $wa = env('WHATSAPP_NUMBER', '59170654104');
        $waSupport = 'https://wa.me/' . $wa . '?text=' . rawurlencode(__('Hola, quiero información sobre International Support.'));
    @endphp

    <!-- Hero -->
    <section class="relative overflow-hidden pt-32 pb-11 md:pt-40 md:pb-15 bg-linear-to-b from-brand-light from-0% to-white to-78%">
        <div class="absolute -right-14 top-0 w-72 h-3 bg-secondary -skew-x-[28deg] pointer-events-none"></div>

        <div class="container-2026 relative z-10">
            <nav class="flex items-center gap-1.5 mb-4 text-xs text-muted" aria-label="Breadcrumb" data-aos="fade-up">
                <a href="{{ route('international') }}" class="hover:text-primary transition-colors">International</a>
                <span class="text-mid">/</span>
                <span class="text-black font-bold">International Support</span>
            </nav>
            <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary" data-aos="fade-up">{{ __('Empresas bolivianas con operación fuera de Bolivia') }}</span>
            <h1 class="text-[clamp(38px,5vw,58px)] font-extrabold leading-[1.08] tracking-[-0.02em] text-black max-w-3xl" data-aos="fade-up" data-aos-delay="50">
                {{ __('International Support') }}
            </h1>
            <p class="mt-5.5 text-muted text-base md:text-lg max-w-[660px]" data-aos="fade-up" data-aos-delay="100">
                {{ __('Tu equipo en Bolivia, con acceso directo a especialistas de GGI en más de 120 países — coordinación centralizada, sin perder a tu contacto de siempre.') }}
            </p>
            <div class="flex flex-wrap gap-3 mt-7.5" data-aos="fade-up" data-aos-delay="150">
                <a href="{{ $waSupport }}" target="_blank" rel="noopener"
                    class="inline-flex items-center justify-center gap-2 min-h-12 px-5.5 bg-primary border border-primary text-white text-sm font-bold hover:bg-[#98261f] hover:border-[#98261f] transition-colors">
                    {{ __('Agendar Consulta Gratuita') }}
                </a>
                <a href="{{ route('international') }}#ggi"
                    class="inline-flex items-center justify-center gap-2 min-h-12 px-5.5 bg-white border border-primary text-primary text-sm font-bold hover:bg-brand-light transition-colors">
                    {{ __('Ver Alcance de GGI') }}
                </a>
            </div>
        </div>
    </section>

    <!-- La oportunidad -->
    <section id="oportunidad" class="py-16 md:py-22 bg-white">
        <div class="container-2026">
            <div class="grid grid-cols-1 lg:grid-cols-[1.12fr_.88fr] gap-4 lg:gap-13.5 items-end mb-10 pb-4.5 border-b-2 border-accent" data-aos="fade-up">
                <div>
                    <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary">{{ __('La oportunidad') }}</span>
                    <h2 class="text-[clamp(30px,3.6vw,46px)] font-extrabold leading-[1.08] tracking-[-0.02em] text-black">{{ __('¿Cuándo necesitás soporte internacional?') }}</h2>
                </div>
                <p class="text-muted max-w-xl lg:justify-self-end">{{ __('Tres momentos típicos en los que una empresa boliviana necesita una firma de confianza fuera del país.') }}</p>
            </div>

            @php
                $moments = [
                    ['bar' => 'bg-primary',   'title' => __('Expansión al exterior'),         'desc' => __('Constituís presencia, filial o representación en otro país y necesitás una firma confiable en destino, desde el primer trámite.')],
                    ['bar' => 'bg-secondary', 'title' => __('Operación multi-país en marcha'), 'desc' => __('Ya operás en varios países y necesitás consolidar reportes, cumplimiento e impuestos bajo un mismo criterio.')],
                    ['bar' => 'bg-accent',    'title' => __('Especialista puntual'),           'desc' => __('Necesitás una opinión legal, fiscal o de auditoría en un país específico, para una operación o transacción concreta.')],
                ];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4.5">
                @foreach ($moments as $i => $m)
                <article class="relative p-6 bg-white border border-line" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <span class="absolute left-0 top-0 w-1 h-full {{ $m['bar'] }}"></span>
                    <h3 class="text-lg font-bold leading-tight tracking-[-0.02em] mb-2.5">{{ $m['title'] }}</h3>
                    <p class="text-muted text-sm">{{ $m['desc'] }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- El proceso -->
    <section id="proceso" class="py-16 md:py-22 bg-soft">
        <div class="container-2026">
            <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary">{{ __('El proceso') }}</span>
            <div class="p-6 md:p-9 bg-white border border-line" data-aos="fade-up">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-10 items-end pb-5.5 border-b-2 border-accent">
                    <h3 class="text-[clamp(24px,2.8vw,34px)] font-extrabold leading-[1.08] tracking-[-0.02em]">{{ __('¿Cómo funciona el soporte internacional con Otium?') }}</h3>
                    <p class="text-muted max-w-[520px] lg:justify-self-end">{{ __('Un solo punto de contacto en Bolivia — nosotros coordinamos con la firma miembro de GGI en el país que necesites.') }}</p>
                </div>

                @php
                    $steps = [
                        ['title' => __('Diagnóstico'),   'desc' => __('Entendemos qué necesitás: un país, una función, o coordinación entre varios países.')],
                        ['title' => __('Conexión GGI'),  'desc' => __('Identificamos la firma miembro con la especialidad y jurisdicción que corresponde.')],
                        ['title' => __('Introducción'),  'desc' => __('Coordinamos el primer contacto y definimos alcance, honorarios y cronograma.')],
                        ['title' => __('Punto único'),   'desc' => __('Vos seguís hablando con tu equipo de Otium en Bolivia.')],
                        ['title' => __('Seguimiento'),   'desc' => __('Damos seguimiento al avance y centralizamos comunicación y entregables.')],
                        ['title' => __('Consolidación'), 'desc' => __('Si hay varios países a la vez, consolidamos reportes bajo un mismo criterio.')],
                    ];
                @endphp
                <div class="relative grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-3 md:gap-y-6.5 mt-10.5">
                    <span class="hidden lg:block absolute left-[8%] right-[8%] top-[18px] h-0.5 bg-mid"></span>
                    @foreach ($steps as $i => $s)
                    <div class="relative pl-12 pb-6 md:pl-0 md:pb-0 md:pt-12.5 lg:pt-14.5 lg:min-h-44" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}">
                        @unless ($loop->last)
                        <span class="md:hidden absolute top-9.5 bottom-0 left-[18px] w-px bg-mid"></span>
                        @endunless
                        <div class="absolute top-0 left-0 z-10 w-9.5 h-9.5 grid place-items-center bg-white border-2 font-extrabold {{ $i < 3 ? 'border-primary text-primary' : 'border-accent text-[#2e8792]' }}">{{ $i + 1 }}</div>
                        <h4 class="text-[15px] font-bold leading-tight mb-1.5">{{ $s['title'] }}</h4>
                        <p class="text-muted text-[13px]">{{ $s['desc'] }}</p>
                    </div>
                    @endforeach
                </div>

                <div class="mt-5 px-4.5 py-4 bg-soft border-l-4 border-primary text-muted text-sm">
                    <strong class="text-black">{{ __('Coordinamos con firmas miembro de GGI en más de 120 países') }}</strong>, {{ __('sin que pierdas a tu equipo de siempre en Bolivia. Un solo punto de contacto, criterio consistente, alcance verdaderamente global.') }}
                </div>
            </div>
        </div>
    </section>

    <!-- Lo que hacemos -->
    <section class="py-16 md:py-22 bg-white">
        <div class="container-2026">
            <div class="grid grid-cols-1 lg:grid-cols-[1.12fr_.88fr] gap-4 lg:gap-13.5 items-end mb-10 pb-4.5 border-b-2 border-accent" data-aos="fade-up">
                <div>
                    <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary">{{ __('Lo que hacemos') }}</span>
                    <h2 class="text-[clamp(30px,3.6vw,46px)] font-extrabold leading-[1.08] tracking-[-0.02em] text-black">{{ __('Otium coordina tu operación fuera de Bolivia de punta a punta') }}</h2>
                </div>
                <p class="text-muted max-w-xl lg:justify-self-end">{{ __('No tercerizamos y desaparecemos: seguimos siendo tu equipo en Bolivia durante todo el proceso.') }}</p>
            </div>

            @php
                $bullets = [
                    __('Coordinación con firmas miembro de GGI en el país que necesites'),
                    __('Diagnóstico y alcance del trabajo antes de conectar con la firma'),
                    __('Seguimiento único del avance, sin importar cuántos países involucre'),
                    __('Consolidación de reportes para operaciones multi-país'),
                    __('Traducción y adaptación de criterios entre jurisdicciones'),
                    __('Un mismo punto de contacto en Bolivia durante todo el proceso'),
                ];
                $stats = [
                    ['value' => '120+',     'label' => __('Países con presencia GGI')],
                    ['value' => 'Top 10',   'label' => __('Alianzas internacionales')],
                    ['value' => '1',        'label' => __('Punto de contacto en Bolivia')],
                    ['value' => 'ES·EN·PT', 'label' => __('Idiomas de coordinación')],
                ];
            @endphp
            <ul class="grid gap-2 max-w-[60ch] mt-4" data-aos="fade-up">
                @foreach ($bullets as $b)
                <li class="relative pl-4.5 text-sm text-black before:content-[''] before:absolute before:left-0 before:top-[7px] before:w-1.5 before:h-1.5 before:rounded-full before:bg-primary">{{ $b }}</li>
                @endforeach
            </ul>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4.5 mt-6.5">
                @foreach ($stats as $i => $st)
                <div data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <b class="block text-[clamp(22px,2.8vw,30px)] font-extrabold text-primary">{{ $st['value'] }}</b>
                    <span class="block mt-1 text-[11.5px] uppercase tracking-[.03em] text-muted">{{ $st['label'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Respaldo institucional -->
    <section id="respaldo" class="py-16 md:py-22 bg-soft">
        <div class="container-2026">
            <div class="grid grid-cols-1 lg:grid-cols-[1.4fr_1fr] gap-10 items-center">
                <div data-aos="fade-right">
                    <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary">{{ __('Respaldo institucional') }}</span>
                    <h2 class="text-[clamp(33px,4vw,54px)] font-extrabold leading-[1.08] tracking-[-0.02em] text-black">{{ __('Coordinado a través de GGI') }}</h2>
                    <p class="mt-3.5 text-muted text-[15px] max-w-[56ch]">{{ __('Como Independent Member of GGI, Otium no improvisa contactos: coordina con firmas que ya forman parte de la misma alianza internacional, con los mismos estándares de calidad e independencia profesional.') }}</p>
                    <a href="{{ route('international') }}#ggi" class="inline-flex gap-1.5 mt-4 text-[13px] font-bold text-primary hover:underline">{{ __('Ver Global Reach through GGI') }} →</a>
                </div>
                <div class="flex flex-col items-center gap-3 p-6.5 bg-white border border-line text-center" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{ asset('images/ggi-independent-member.png') }}" alt="GGI Independent Member" class="max-w-[180px] h-auto">
                    <span class="text-xs text-muted">{{ __('Sin testimonios propios todavía — sección a sumar cuando existan casos con la red GGI.') }}</span>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-16 md:py-22 bg-white">
        <div class="container-2026">
            <div class="mb-10 pb-4.5 border-b-2 border-accent" data-aos="fade-up">
                <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary">{{ __('Preguntas frecuentes') }}</span>
                <h2 class="text-[clamp(30px,3.6vw,46px)] font-extrabold leading-[1.08] tracking-[-0.02em] text-black">{{ __('Lo que más preguntan') }}</h2>
            </div>

            @php
                $faqs = [
                    ['q' => __('¿Otium cobra por coordinar con una firma GGI en otro país?'), 'a' => __('La coordinación inicial y el diagnóstico son gratuitos. Los honorarios de la firma miembro en destino se acuerdan directamente y se comunican con transparencia antes de comenzar.')],
                    ['q' => __('¿Qué tipo de especialistas puedo pedir?'),                     'a' => __('Contables, tributarios, legales, de auditoría o de asesoría empresarial — según lo que ofrezca la firma miembro de GGI en cada país.')],
                    ['q' => __('¿Puedo pedir soporte en varios países a la vez?'),             'a' => __('Sí. Coordinamos con más de una firma miembro simultáneamente y consolidamos el seguimiento desde Bolivia.')],
                    ['q' => __('¿Sigo trabajando con mi equipo de Otium?'),                    'a' => __('Sí. Tu punto de contacto en Bolivia no cambia — nosotros coordinamos con la firma en el otro país y seguimos el trabajo junto a vos.')],
                    ['q' => __('¿Qué es GGI exactamente?'),                                    'a' => __('Una alianza internacional de firmas profesionales independientes, presente en más de 120 países. Cada firma miembro opera de forma independiente, con el mismo criterio riguroso. Más detalle en nuestra página International.')],
                ];
            @endphp
            <div class="space-y-3" data-aos="fade-up">
                @foreach ($faqs as $faq)
                <details class="group px-5 bg-white border border-line" @if ($loop->first) open @endif>
                    <summary class="flex justify-between gap-3.5 py-4.5 font-bold cursor-pointer list-none [&::-webkit-details-marker]:hidden">
                        {{ $faq['q'] }}
                        <span class="text-primary text-[22px] leading-none group-open:hidden" aria-hidden="true">+</span>
                        <span class="text-primary text-[22px] leading-none hidden group-open:inline" aria-hidden="true">–</span>
                    </summary>
                    <div class="pt-4 pb-5 border-t border-line text-muted text-sm">{{ $faq['a'] }}</div>
                </details>
                @endforeach
            </div>

            <div class="flex gap-3 items-start mt-6 px-5 py-4.5 bg-soft border border-line" data-aos="fade-up">
                <div>
                    <p class="text-sm text-black"><strong>{{ __('¿Tu empresa también necesita instalarse en Bolivia?') }}</strong> {{ __('Gestionamos constitución, NIT y cumplimiento local desde el primer día.') }}</p>
                    <a href="{{ route('doing-business') }}" class="inline-flex gap-1.5 mt-2 text-[13px] font-bold text-primary hover:underline">{{ __('Ver Doing Business in Bolivia') }} →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="py-14 bg-primary text-white text-center">
        <div class="container-2026">
            <h2 class="text-[clamp(26px,3.6vw,40px)] font-bold leading-[1.08] tracking-[-0.02em] text-white" data-aos="fade-up">{{ __('¿Necesitás una firma de confianza fuera de Bolivia?') }}</h2>
            <p class="mt-2.5 text-[15px] text-[#FFD9D0] max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">{{ __('Contanos qué necesitás y en qué país. Te conectamos con la firma miembro de GGI correcta y coordinamos el trabajo de principio a fin.') }}</p>
            <a href="{{ $waSupport }}" target="_blank" rel="noopener"
                class="inline-flex items-center justify-center gap-2 min-h-12 px-5.5 mt-6.5 bg-white border border-white text-primary text-sm font-bold hover:bg-brand-light transition-colors"
                data-aos="fade-up" data-aos-delay="200">
                {{ __('Agendar Consulta Gratuita') }}
            </a>
        </div>
    </section>
</x-layout>
