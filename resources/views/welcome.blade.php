<x-layout title="Outsourcing Contable, Impuestos y Transformación Digital en Bolivia | Otium"
    description="OTIUM Consultores: expertos en outsourcing contable y financiero, auditoría integral, transformación digital y constitución de empresas en Bolivia. Más de 15 años de experiencia."
    ogImage="/images/otium/hero/hero.png">


    

    <!-- 2. Hero Section — Brand Guidelines 2026: fondo plano + reporte mensual de ejemplo -->
    <section id="home" class="pt-32 pb-20 md:pt-36 bg-white">
        <div class="container-2026 grid grid-cols-1 lg:grid-cols-[1.05fr_.95fr] gap-14 items-center">
            <div data-aos="fade-up">
                <p class="mb-3 text-xs font-bold tracking-[.14em] uppercase text-primary">{{ __('Outsourcing contable · Impuestos · Transformación digital') }}</p>
                <h1 class="text-[clamp(38px,5.4vw,62px)] font-bold leading-[1.06] tracking-[-0.02em] text-black">
                    {{ __('Transformamos la gestión') }} <span class="text-primary">{{ __('Financiera y Digital') }}</span> {{ __('de tu empresa') }}
                </h1>
                <p class="mt-5.5 text-lg text-muted max-w-[52ch]">
                    {{ __('Gestionamos tu contabilidad, impuestos y nómina. Y te entregamos un dashboard mensual que tu gerencia entiende — con Microsoft 365, SharePoint y Power BI.') }}
                </p>
                <div class="flex flex-wrap gap-3 mt-7.5">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-5.5 py-3.25 rounded-md bg-primary text-white font-semibold hover:bg-[#962219] transition-colors">{{ __('Agenda tu diagnóstico gratuito') }}</a>
                    <a href="#como-trabajamos" class="inline-flex items-center justify-center px-5.5 py-3.25 rounded-md border-[1.5px] border-primary text-primary font-semibold hover:bg-brand-light transition-colors">{{ __('Ver cómo trabajamos') }}</a>
                </div>
                <div class="flex flex-wrap gap-2 mt-7">
                    @foreach (['La Paz · Santa Cruz', 'Independent Member of GGI', __('+15 años')] as $chip)
                    <span class="px-3 py-1.5 rounded-full border border-line bg-white text-[12.5px] text-muted">{{ $chip }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Ejemplo del reporte mensual que recibe el cliente (datos ilustrativos) --}}
            <div class="p-6.5 bg-white border border-line border-t-4 border-t-primary" aria-label="{{ __('Ejemplo de reporte mensual') }}" data-aos="fade-left" data-aos-delay="150">
                <div class="flex justify-between items-baseline gap-3 mb-4.5">
                    <span class="font-bold">{{ __('Reporte mensual a gerencia') }}</span>
                    <span class="text-[11px] tracking-widest uppercase text-muted">{{ __('Ejemplo') }}</span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">
                    @foreach ([
                        [__('Ingresos'),    'Bs 1,40 MM', '▲ 16,1 %',            'text-[#2F8D99]'],
                        [__('Carga IUE'),   '25,0 %',     '— ' . __('estable'),  'text-muted'],
                        [__('Margen neto'), '64,4 %',     '▲ 2,1 pp',            'text-[#2F8D99]'],
                    ] as [$label, $value, $delta, $color])
                    <div class="p-3 border border-line">
                        <div class="text-[10.5px] uppercase tracking-[.06em] text-muted">{{ $label }}</div>
                        <div class="mt-1 text-[22px] font-bold tabular-nums">{{ $value }}</div>
                        <div class="mt-0.5 text-[11.5px] font-bold {{ $color }}">{{ $delta }}</div>
                    </div>
                    @endforeach
                </div>
                <div class="flex items-end gap-3.5 h-30 mt-5 px-1.5 border-b-2 border-black" aria-hidden="true">
                    @foreach ([[62, 'bg-mid'], [78, 'bg-accent'], [54, 'bg-mid'], [91, 'bg-primary']] as [$h, $c])
                    <div class="relative flex-1 {{ $c }}" style="height: {{ $h }}%"><span class="absolute -top-5 inset-x-0 text-center text-[11.5px] font-bold tabular-nums">{{ $h }}%</span></div>
                    @endforeach
                </div>
                <div class="flex gap-3.5 px-1.5 pt-1.5" aria-hidden="true">
                    @foreach (['T1', 'T2', 'T3', 'T4'] as $q)
                    <div class="flex-1 text-center text-[11px] text-muted">{{ $q }}</div>
                    @endforeach
                </div>
                <p class="mt-3.5 text-[11px] text-mid">{{ __('Datos de ejemplo · Power BI sobre información conciliada') }}</p>
            </div>
        </div>
    </section>

    <!-- HERO V2 — 2 columnas: imagen izq | texto der con fondo difuminado -->
    {{-- <section id="home-v2" class="relative min-h-screen overflow-hidden flex flex-col md:flex-row items-stretch pt-24">

        <!-- Background blobs -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-brand-light rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob pointer-events-none"></div>
        <div class="absolute top-0 left-0 -ml-20 -mt-20 w-96 h-96 bg-teal-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000 pointer-events-none"></div>

        <!-- Columna izquierda (50%): 40% vacío + imagen pegada a la derecha (60%) -->
        <div class="w-full md:w-1/2 relative self-stretch min-h-[50vh] md:min-h-0">
            <div class="absolute inset-y-0 right-0 w-4/5">
                <img src="/images/otium/hero/hero2.jpeg" alt="OTIUM Corporate"
                    class="w-full h-full object-cover" style="filter: blur(3px);">
            </div>
        </div>

        <!-- Columna derecha (50%): fondo de la sección + card frosted glass centrado -->
        <div class="w-full md:w-1/2 relative z-10 flex items-center justify-start px-4 py-16 md:py-0">
            <div class="bg-white/55 backdrop-blur-2xl rounded-2xl p-10 md:p-14 shadow-2xl border border-white/40 w-[105%] -translate-x-[20%]">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-8">
                    {{ __('Transformamos la gestión') }}
                    <span class="text-primary">{{ __('Financiera y Digital') }}</span>
                    {{ __('de tu empresa') }}
                </h1>
                <p class="text-lg md:text-xl text-gray-600 mb-10">
                    {{ __('Gestionamos tu contabilidad, impuestos y nómina. Y te entregamos un dashboard mensual que tu gerencia entiende — con Microsoft 365, SharePoint y Power BI.') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-5">
                    <a href="{{ route('contact') }}"
                        class="px-9 py-4 bg-primary text-white rounded-lg text-lg font-semibold shadow-lg hover:bg-red-700 hover:shadow-xl transition-all transform hover:-translate-y-1 text-center">
                        {{ __('Agenda tu diagnóstico gratuito') }}
                    </a>
                    <a href="{{ route('services.index') }}"
                        class="px-9 py-4 border-2 border-primary text-primary rounded-lg text-lg font-semibold hover:bg-red-50 transition-colors text-center">
                        {{ __('Ver cómo trabajamos') }}
                    </a>
                </div>
            </div>
        </div>

    </section> --}}
    <!-- FIN HERO V2 -->

<!-- Stats Section — barra de cifras en carbón (el rojo nunca cubre fondos grandes) -->
    <section class="bg-[#1E1C1B] text-white">
        <div class="container-2026 grid grid-cols-2 md:grid-cols-4">
            @foreach ([
                ['8<span class="text-accent">+</span>', 'text-[34px]', __('Sectores Atendidos')],
                ['15<span class="text-accent">+</span>', 'text-[34px]', __('Años de Experiencia')],
                ['Santa Cruz · La Paz', 'text-xl', __('Bolivia')],
                ['Microsoft 365', 'text-xl', 'SharePoint · Power BI · Partner'],
            ] as $i => [$value, $size, $label])
            <div class="px-5 py-8.5 text-center border-[#3A3735] {{ $i % 2 ? 'border-l' : 'md:border-l md:first:border-l-0' }} {{ $i >= 2 ? 'border-t md:border-t-0' : '' }}" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="{{ $size }} font-bold leading-[1.1]">{!! $value !!}</div>
                <div class="mt-2 text-[11.5px] tracking-[.12em] uppercase text-mid">{{ $label }}</div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- 3. Nuestro Enfoque -->
    <section id="como-trabajamos" class="py-20 bg-white scroll-mt-24">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-sm font-semibold uppercase tracking-wider text-primary">{{ __('Cómo trabajamos') }}</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">{{ __('Nuestro Enfoque') }}</h2>
                <p class="text-lg text-gray-600">{{ __('Garantizamos resultados mediante procesos rigurosos y tecnología avanzada.') }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Item 1 -->
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-md hover:shadow-xl transition-all hover:-translate-y-2 duration-300"
                    data-aos="fade-up">
                    <div class="w-12 h-12 bg-teal-50 rounded-lg flex items-center justify-center mb-6 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Cierres contables a tiempo') }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ __('Garantizamos cierres mensuales puntuales para tu tranquilidad financiera.') }}</p>
                </div>

                <!-- Item 2 -->
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-md hover:shadow-xl transition-all hover:-translate-y-2 duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-teal-50 rounded-lg flex items-center justify-center mb-6 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Cumplimiento tributario') }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ __('Gestión fiscal rigurosa sin sorpresas ni contingencias para tu empresa.') }}</p>
                </div>

                <!-- Item 3 -->
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-md hover:shadow-xl transition-all hover:-translate-y-2 duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-teal-50 rounded-lg flex items-center justify-center mb-6 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Dashboards en Power BI') }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ __('Visualización de datos ejecutivos para decisiones informadas al instante.') }}</p>
                </div>

                <!-- Item 4 -->
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-md hover:shadow-xl transition-all hover:-translate-y-2 duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-teal-50 rounded-lg flex items-center justify-center mb-6 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Integración de Sistemas') }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ __('Conectamos QuickBooks y Odoo con Microsoft 365, SharePoint y Power BI.') }}</p>
                </div>

                <!-- Item 5 -->
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-md hover:shadow-xl transition-all hover:-translate-y-2 duration-300"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="w-12 h-12 bg-teal-50 rounded-lg flex items-center justify-center mb-6 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7a2 2 0 012-2h3l2 2h7a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z M7 13h.01M10 13h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Trazabilidad Documental') }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ __('Tus documentos en SharePoint. Acceso desde donde estés, sin papeles ni correos perdidos.') }}</p>
                </div>

                <!-- Item 6 -->
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-md hover:shadow-xl transition-all hover:-translate-y-2 duration-300"
                    data-aos="fade-up" data-aos-delay="500">
                    <div class="w-12 h-12 bg-teal-50 rounded-lg flex items-center justify-center mb-6 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Acompañamiento Estratégico') }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ __('No solo cumplimos con el SIN. Te ayudamos a entender tus números y tomar mejores decisiones.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Por Qué Elegirnos -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12" data-aos="fade-down">
                <span class="text-sm font-semibold uppercase tracking-wider text-primary">{{ __('Nuestras ventajas') }}</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-3">{{ __('Por Qué Elegirnos') }}</h2>
                <p class="text-lg text-gray-600">{{ __('Un equipo que opera contigo, no para ti.') }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="space-y-8">
                    <div class="flex gap-4 items-start" data-aos="fade-right">
                        <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center shrink-0 text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('Metodologías Modernas') }}</h3>
                            <p class="text-gray-600">{{ __('Procesos diseñados para empresa mediana boliviana: cierres mensuales antes del día 10, reportes listos para gerencia, cumplimiento tributario sin sorpresas.') }}</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start" data-aos="fade-right" data-aos-delay="100">
                        <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center shrink-0 text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('Integraciones Avanzadas') }}</h3>
                            <p class="text-gray-600">{{ __('Conectamos tu sistema actual (QuickBooks, Odoo, Excel) con Microsoft 365 y Power BI para que toda tu información financiera esté en un solo lugar.') }}</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start" data-aos="fade-right" data-aos-delay="200">
                        <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center shrink-0 text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('Acompañamiento Estratégico') }}</h3>
                            <p class="text-gray-600">{{ __('Tenés un equipo dedicado: tu contador, tu tributarista y tu analista — no un tercero que aparece solo el 15 de cada mes.') }}</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start" data-aos="fade-right" data-aos-delay="300">
                        <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center shrink-0 text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('Trabajo en la Nube') }}</h3>
                            <p class="text-gray-600">{{ __('Tus documentos, reportes y comunicaciones en la nube. Accedés a tu información contable desde donde estés, en tiempo real.') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Image Side -->
                <div class="relative h-full min-h-[400px]" data-aos="fade-left">
                    <img src="/images/otium/chouse/img_seccion_porqueelegrinos.jpeg" alt="Why Choose Us"
                        class="absolute inset-0 w-full h-full object-cover rounded-2xl shadow-xl">
                    <div class="absolute inset-0 bg-accent/20 rounded-2xl mix-blend-multiply"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Partners Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="text-sm font-semibold uppercase tracking-wider text-primary">{{ __('Tecnología') }}</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-3">{{ __('Trabajamos con la tecnología que ya conocés') }}</h2>
                <p class="text-lg text-gray-600">{{ __('O te ayudamos a adoptarla.') }}</p>
            </div>

            <!-- Logos -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6 mb-12" data-aos="fade-up" data-aos-delay="100">

                <!-- Microsoft 365 -->
                <div class="flex flex-col items-center gap-3 group bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="grayscale group-hover:grayscale-0 transition-all duration-300 opacity-60 group-hover:opacity-100">
                        <svg width="56" height="56" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1"  y="1"  width="10" height="10" fill="#F25022"/>
                            <rect x="12" y="1"  width="10" height="10" fill="#7FBA00"/>
                            <rect x="1"  y="12" width="10" height="10" fill="#00A4EF"/>
                            <rect x="12" y="12" width="10" height="10" fill="#FFB900"/>
                        </svg>
                    </div>
                    <span class="text-sm font-semibold text-gray-500 group-hover:text-gray-800 transition-colors text-center">Microsoft 365</span>
                </div>

                <!-- SharePoint -->
                <div class="flex flex-col items-center gap-3 group bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="grayscale group-hover:grayscale-0 transition-all duration-300 opacity-60 group-hover:opacity-100">
                        <svg width="56" height="56" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="18" r="12" fill="#0364B8"/>
                            <circle cx="18" cy="28" r="10" fill="#0078D4"/>
                            <circle cx="10" cy="36" r="8"  fill="#1490DF"/>
                            <rect x="10" y="28" width="28" height="14" rx="2" fill="#1490DF"/>
                        </svg>
                    </div>
                    <span class="text-sm font-semibold text-gray-500 group-hover:text-gray-800 transition-colors text-center">SharePoint</span>
                </div>

                <!-- Power BI -->
                <div class="flex flex-col items-center gap-3 group bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="grayscale group-hover:grayscale-0 transition-all duration-300 opacity-60 group-hover:opacity-100">
                        <svg width="56" height="56" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="6"  y="28" width="8"  height="14" rx="2" fill="#F2C811"/>
                            <rect x="18" y="20" width="8"  height="22" rx="2" fill="#F2C811"/>
                            <rect x="30" y="10" width="8"  height="32" rx="2" fill="#F2C811"/>
                        </svg>
                    </div>
                    <span class="text-sm font-semibold text-gray-500 group-hover:text-gray-800 transition-colors text-center">Power BI</span>
                </div>

                <!-- QuickBooks — nuevo. Sin archivo oficial de Intuit en el paquete: marca de texto neutra hasta tener el logo -->
                <div class="flex flex-col items-center gap-3 group bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300 ring-1 ring-primary">
                    <div class="w-14 h-14 rounded-lg bg-gray-100 grid place-items-center text-sm font-bold text-gray-500">QB</div>
                    <span class="text-sm font-semibold text-gray-800 text-center">QuickBooks</span>
                    <span class="-mt-2 text-[11px] font-bold text-primary">{{ __('Nuevo') }}</span>
                </div>

                <!-- Odoo -->
                <div class="flex flex-col items-center gap-3 group bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="grayscale group-hover:grayscale-0 transition-all duration-300 opacity-60 group-hover:opacity-100">
                        <svg width="56" height="56" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="22" fill="#714B67"/>
                            <circle cx="24" cy="24" r="10" fill="white"/>
                            <circle cx="24" cy="24" r="5"  fill="#714B67"/>
                        </svg>
                    </div>
                    <span class="text-sm font-semibold text-gray-500 group-hover:text-gray-800 transition-colors text-center">Odoo</span>
                </div>

            </div>

            <!-- Descripción -->
            <p class="text-center text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                {{ __('Integramos tu contabilidad en') }} <strong class="text-gray-900">QuickBooks</strong> {{ __('u') }} <strong class="text-gray-900">Odoo</strong> {{ __('con el ecosistema Microsoft para que tengas tus datos financieros') }}
                <strong class="text-gray-900">{{ __('organizados, trazables y disponibles en tiempo real.') }}</strong>
            </p>
        </div>
    </section>

    <!-- 5. Nuestros servicios — 9 cards planas, mismos nombres e íconos que el catálogo (config/services_catalog.php) -->
    <section id="services" class="py-22 bg-soft">
        <div class="container-2026">
            <div class="flex flex-wrap justify-between items-end gap-5 mb-10" data-aos="fade-up">
                <div class="max-w-[720px]">
                    <p class="mb-3 text-xs font-bold tracking-[.14em] uppercase text-primary">{{ __('Nuestra Oferta') }}</p>
                    <h2 class="text-[clamp(28px,3.4vw,40px)] font-bold leading-[1.15] text-black">{{ __('Nuestros Servicios') }}</h2>
                    <div class="w-16 h-0.75 my-4.5 bg-accent"></div>
                    <p class="text-[17px] text-muted">{{ __('Soluciones integrales diseñadas para cada etapa de tu negocio.') }}</p>
                </div>
                <a href="{{ route('services.index') }}" class="inline-flex items-center gap-1.5 font-semibold text-primary hover:underline">{{ __('Ver catálogo completo') }} →</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach (config('services_catalog') as $i => $service)
                    <x-service-card :service="$service" :delay="($i % 3) * 75" />
                @endforeach
            </div>
        </div>
    </section>

    <!-- 7. Quiénes Somos -->
    <section id="about" class="py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-6 space-y-24">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <!-- Enlarged Layout without rotation -->
                <div class="w-full md:w-1/2 relative" data-aos="fade-right">
                    <div class="relative w-full h-[500px] md:h-[600px] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="/images/otium/carousel/outsourcung_contable.png" alt="Equipo OTIUM" class="w-full h-full object-cover">
                        <!-- Gradient fade to white at the bottom -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-white via-white/40 to-transparent">
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2" data-aos="fade-left">
                    <span class="text-sm font-semibold uppercase tracking-wider text-primary">{{ __('La firma') }}</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">{{ __('Quiénes Somos') }}</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        {{ __('Somos una firma de consultoría con oficinas en') }} <strong>{{ __('La Paz y Santa Cruz') }}</strong>{{ __('. Guiamos a empresas y emprendedores desde su constitución hasta la optimización completa de sus operaciones financieras, tributarias y digitales.') }}
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        {{ __('Ayudamos a organizaciones bolivianas y extranjeras a ordenar sus finanzas, mejorar la eficiencia operativa y escalar mediante tecnología.') }}
                    </p>
                    <div class="flex gap-4">
                        <span class="inline-flex items-center gap-2 px-3.5 py-2.5 border border-line text-sm font-semibold text-gray-700"><x-service-icon name="ubicacion" class="w-4.5 h-4.5 text-primary" />{{ __('Oficina La Paz') }}</span>
                        <span class="inline-flex items-center gap-2 px-3.5 py-2.5 border border-line text-sm font-semibold text-gray-700"><x-service-icon name="ubicacion" class="w-4.5 h-4.5 text-primary" />{{ __('Oficina Santa Cruz') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Testimonials (Carousel 6 items, 3 per view) -->
    <section class="py-20 bg-gray-50" x-data="{ activePage: 0 }">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <span class="text-sm font-semibold uppercase tracking-wider text-primary">{{ __('Testimonios') }}</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-3">{{ __('Lo que dicen nuestros clientes') }}</h2>
                <p class="text-lg text-gray-600">{{ __('La confianza de nuestros clientes es nuestro mayor activo.') }}</p>
            </div>

            <!-- Carousel Window -->
            <div class="relative overflow-hidden">
                <!-- Sliding Track -->
                <div class="flex transition-transform duration-700 ease-in-out"
                    :style="'transform: translateX(-' + (activePage * 100) + '%)'">

                    <!-- Page 1 (Items 1-3) -->
                    <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-3 gap-8 px-2">
                        <!-- Testimonial 1 -->
                        <div
                            class="bg-white p-8 rounded-xl shadow-lg relative hover:-translate-y-2 transition-transform duration-300">
                            <div class="text-6xl text-primary opacity-20 absolute top-4 left-4 font-serif">"</div>
                            <p class="text-gray-600 italic mb-6 relative z-10">Valoro mucho el acompañamiento de Otium en temas laborales. Nos han apoyado con seriedad, criterio y claridad en situaciones importantes, dándonos mayor tranquilidad al momento de tomar decisiones.</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    JCM</div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Juan Carlos Medina</h4>
                                    <p class="text-xs text-gray-500">Gerente General, Casa del Camba</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div
                            class="bg-white p-8 rounded-xl shadow-lg relative hover:-translate-y-2 transition-transform duration-300">
                            <div class="text-6xl text-primary opacity-20 absolute top-4 left-4 font-serif">"</div>
                            <p class="text-gray-600 italic mb-6 relative z-10">Otium nos ha acompañado en temas tributarios y contables en el transcurso de la expansión de la marca. Su apoyo me ha dado información valiosa para tomar decisiones.</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-accent rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    BF</div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Bianca Foianini</h4>
                                    <p class="text-xs text-gray-500">CEO/Founder, La Fábrica de Biancaflor</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div
                            class="bg-white p-8 rounded-xl shadow-lg relative hover:-translate-y-2 transition-transform duration-300">
                            <div class="text-6xl text-primary opacity-20 absolute top-4 left-4 font-serif">"</div>
                            <p class="text-gray-600 italic mb-6 relative z-10">En Intesprog valoramos el acompañamiento de Otium en temas contables y tributarios. Durante más de 7 años, su apoyo nos ha permitido trabajar con mayor criterio y tranquilidad.</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    DA</div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Dalcy Aguilar</h4>
                                    <p class="text-xs text-gray-500">Gerente General, Intesprog SRL</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Page 2 (Items 4-6) -->
                    <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-3 gap-8 px-2">
                        <!-- Testimonial 4 -->
                        <div
                            class="bg-white p-8 rounded-xl shadow-lg relative hover:-translate-y-2 transition-transform duration-300">
                            <div class="text-6xl text-primary opacity-20 absolute top-4 left-4 font-serif">"</div>
                            <p class="text-gray-600 italic mb-6 relative z-10">En iTeam SRL valoramos el trabajo de Otium en temas contables y tributarios, porque nos ha ayudado a manejar estos procesos con más orden, claridad y confianza a lo largo de 8 años.</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-accent rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    ME</div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Marcelo Espinoza</h4>
                                    <p class="text-xs text-gray-500">Gerente General, iTeam SRL</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div
                            class="bg-white p-8 rounded-xl shadow-lg relative hover:-translate-y-2 transition-transform duration-300">
                            <div class="text-6xl text-primary opacity-20 absolute top-4 left-4 font-serif">"</div>
                            <p class="text-gray-600 italic mb-6 relative z-10">I have been working with Otium since the very beginning of my business journey, and honestly, it has been one of the best professional experiences I've had. Their team is always professional, supportive, and whenever I need help, they are always there for me.</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    KS</div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Karan Sharma</h4>
                                    <p class="text-xs text-gray-500">Propietario, Sabor de la India</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 6 -->
                        <div
                            class="bg-white p-8 rounded-xl shadow-lg relative hover:-translate-y-2 transition-transform duration-300">
                            <div class="text-6xl text-primary opacity-20 absolute top-4 left-4 font-serif">"</div>
                            <p class="text-gray-600 italic mb-6 relative z-10">Otium was a member of IECnet — they performed their activities in a very professional and good standing way during their time with us.</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    SC</div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Stefano Ciccioriccio</h4>
                                    <p class="text-xs text-gray-500">Partner, Ciccioriccio e Associati</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls (Dots) -->
            <div class="flex justify-center mt-12 gap-3">
                <button @click="activePage = 0" class="w-3 h-3 rounded-full transition-all duration-300"
                    :class="activePage === 0 ? 'bg-primary scale-125' : 'bg-gray-300 hover:bg-gray-400'"></button>
                <button @click="activePage = 1" class="w-3 h-3 rounded-full transition-all duration-300"
                    :class="activePage === 1 ? 'bg-primary scale-125' : 'bg-gray-300 hover:bg-gray-400'"></button>
            </div>
        </div>
    </section>

    <!-- 9. Blog / Insights -->
    @php $latestPosts = \App\Models\Post::published()->with('category')->latest('published_at')->take(3)->get(); @endphp
    <section id="blog" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-wider text-primary">{{ __('Blog') }}</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-2">{{ __('Últimos Insights') }}</h2>
                    <p class="text-lg text-gray-600">{{ __('Mantente informado con nuestras últimas publicaciones sobre finanzas, impuestos y tecnología.') }}</p>
                </div>
                <a href="{{ route('blog.index') }}"
                    class="hidden md:block text-primary font-semibold hover:underline">
                    {{ __('Ver todas las publicaciones →') }}
                </a>
            </div>

            @if ($latestPosts->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($latestPosts as $i => $post)
                        <article
                            class="group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all hover:-translate-y-2 duration-300 cursor-pointer"
                            data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                            <a href="{{ route('blog.show', $post->slug) }}" class="block">
                                @if ($post->image)
                                    <div class="h-48 overflow-hidden">
                                        <img src="{{ $post->image_url }}" alt="{{ $post->title }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    </div>
                                @else
                                    <div
                                        class="h-48 bg-linear-to-br from-primary/10 to-accent/10 flex items-center justify-center">
                                        <svg class="w-10 h-10 text-primary/30 group-hover:text-primary/50 transition-colors duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                @endif
                            </a>
                            <a href="{{ route('blog.show', $post->slug) }}" class="block p-6">
                                <div
                                    class="flex items-center gap-2 text-xs text-gray-500 mb-3 group-hover:text-primary/70 transition-colors duration-300">
                                    @if ($post->category)
                                        <span class="text-primary font-bold">{{ $post->category->name }}</span>
                                        <span>•</span>
                                    @endif
                                    <span>{{ $post->published_at->format('d M, Y') }}</span>
                                </div>
                                <h3
                                    class="text-lg font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors duration-300">
                                    {{ $post->title }}</h3>
                                @if ($post->excerpt)
                                    <p
                                        class="text-gray-500 text-sm mb-4 line-clamp-2 group-hover:text-primary/60 transition-colors duration-300">
                                        {{ $post->excerpt }}</p>
                                @endif
                                <span
                                    class="text-primary text-sm font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all duration-300">
                                    {{ __('Leer más') }}
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        </article>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12 bg-gray-50 rounded-2xl">
                    <p class="text-gray-400">{{ __('Próximamente compartiremos nuestros primeros artículos.') }}</p>
                    <a href="{{ route('blog.index') }}"
                        class="mt-3 inline-block text-primary text-sm font-semibold hover:underline">
                        {{ __('Ir al blog →') }}
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Sectores -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="text-sm font-semibold uppercase tracking-wider text-primary">{{ __('Experiencia sectorial') }}</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">{{ __('Sectores en los que trabajamos') }}</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="100">

                <div class="group relative bg-gray-50 border border-gray-100 rounded-2xl p-4 md:p-6 hover:border-primary/40 hover:shadow-lg transition-all duration-300 overflow-hidden">
                    <div class="absolute inset-0 bg-linear-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col md:flex-row items-center md:items-center gap-2 md:gap-4 text-center md:text-left">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-primary/10 flex items-center justify-center shrink-0 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>
                        <span class="font-semibold text-sm md:text-base text-gray-700 group-hover:text-gray-900 transition-colors">{{ __('Importadoras y exportadoras') }}</span>
                    </div>
                </div>

                <div class="group relative bg-gray-50 border border-gray-100 rounded-2xl p-4 md:p-6 hover:border-primary/40 hover:shadow-lg transition-all duration-300 overflow-hidden">
                    <div class="absolute inset-0 bg-linear-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col md:flex-row items-center md:items-center gap-2 md:gap-4 text-center md:text-left">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-primary/10 flex items-center justify-center shrink-0 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <span class="font-semibold text-sm md:text-base text-gray-700 group-hover:text-gray-900 transition-colors">{{ __('Construcción y proyectos') }}</span>
                    </div>
                </div>

                <div class="group relative bg-gray-50 border border-gray-100 rounded-2xl p-4 md:p-6 hover:border-primary/40 hover:shadow-lg transition-all duration-300 overflow-hidden">
                    <div class="absolute inset-0 bg-linear-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col md:flex-row items-center md:items-center gap-2 md:gap-4 text-center md:text-left">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-primary/10 flex items-center justify-center shrink-0 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <span class="font-semibold text-sm md:text-base text-gray-700 group-hover:text-gray-900 transition-colors">{{ __('Alimentos y manufactura') }}</span>
                    </div>
                </div>

                <div class="group relative bg-gray-50 border border-gray-100 rounded-2xl p-4 md:p-6 hover:border-primary/40 hover:shadow-lg transition-all duration-300 overflow-hidden">
                    <div class="absolute inset-0 bg-linear-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col md:flex-row items-center md:items-center gap-2 md:gap-4 text-center md:text-left">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-primary/10 flex items-center justify-center shrink-0 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                            </svg>
                        </div>
                        <span class="font-semibold text-sm md:text-base text-gray-700 group-hover:text-gray-900 transition-colors">{{ __('Restaurantes y gastronomía') }}</span>
                    </div>
                </div>

                <div class="group relative bg-gray-50 border border-gray-100 rounded-2xl p-4 md:p-6 hover:border-primary/40 hover:shadow-lg transition-all duration-300 overflow-hidden">
                    <div class="absolute inset-0 bg-linear-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col md:flex-row items-center md:items-center gap-2 md:gap-4 text-center md:text-left">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-primary/10 flex items-center justify-center shrink-0 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <span class="font-semibold text-sm md:text-base text-gray-700 group-hover:text-gray-900 transition-colors">{{ __('Servicios especializados') }}</span>
                    </div>
                </div>

                <div class="group relative bg-gray-50 border border-gray-100 rounded-2xl p-4 md:p-6 hover:border-primary/40 hover:shadow-lg transition-all duration-300 overflow-hidden">
                    <div class="absolute inset-0 bg-linear-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col md:flex-row items-center md:items-center gap-2 md:gap-4 text-center md:text-left">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-primary/10 flex items-center justify-center shrink-0 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                        </div>
                        <span class="font-semibold text-sm md:text-base text-gray-700 group-hover:text-gray-900 transition-colors">{{ __('Comercio e industria') }}</span>
                    </div>
                </div>

            </div>

            <p class="text-center text-gray-400 font-medium mt-10 tracking-widest uppercase text-sm" data-aos="fade-up" data-aos-delay="200">
                Santa Cruz · La Paz · Bolivia
            </p>
        </div>
    </section>

    <!-- International Reach — GGI -->
    {{-- Bloque del .docx de GGI (punto 4a): colores exactos de marca --}}
    <section class="py-16 bg-white">
        <div class="max-w-[1120px] mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-[1.3fr_1fr] gap-9 items-center">
                <div data-aos="fade-right">
                    <span class="block mb-2.5 text-xs font-bold leading-none tracking-widest uppercase text-[#B42E25]">{{ __('International Reach') }}</span>
                    <h2 class="text-[28px] font-extrabold leading-[1.15] text-[#0F172A]">{{ __('Bolivia expertise. Global reach.') }}</h2>
                    <p class="mt-3 text-[15px] text-[#334155] max-w-[48ch]">
                        {{ __('Como Independent Member of GGI, Otium conecta la experiencia local que ya conocés con una red de firmas profesionales presente en más de 120 países. Mismo equipo de siempre, alcance internacional cuando lo necesitás.') }}
                    </p>
                    <a href="{{ route('international') }}"
                        class="inline-flex items-center gap-2 mt-5 text-sm font-semibold leading-none text-[#B42E25] hover:underline">
                        {{ __('Explorar alcance internacional') }} →
                    </a>
                </div>
                <div class="p-5 bg-[#FFF6F1] border border-[#E2E8F0] rounded-[14px]" data-aos="fade-left" data-aos-delay="100">
                    <div class="inline-flex items-center px-3.5 py-2.5 bg-white border border-[#E2E8F0] rounded-[10px]">
                        <img src="{{ asset('images/ggi-independent-member.png') }}" alt="GGI Independent Member" class="h-8.5 w-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doing Business in Bolivia -->
    <section class="py-20 bg-accent/10 border-y border-accent/20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <!-- Icon + Text -->
                <div class="flex-1" data-aos="fade-right">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center text-accent">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold uppercase tracking-wider text-accent">{{ __('Empresas Extranjeras') }}</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ __('Doing Business in Bolivia') }}</h2>
                    <p class="text-lg text-gray-600 mb-6 max-w-xl">
                        {{ __('¿Tu empresa quiere operar en Bolivia? Te acompañamos en cada paso: constitución legal, NIT, cumplimiento tributario y gestión contable — desde el primer día y en tu idioma.') }}
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-gray-700">{{ __('Constitución de sucursal o sociedad nueva en Bolivia') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-gray-700">{{ __('Gestión de apostillas, poderes y documentación internacional') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-gray-700">{{ __('Contabilidad, impuestos y nómina bajo normativa boliviana') }}</span>
                        </li>
                    </ul>
                    <a href="{{ route('doing-business') }}"
                        class="inline-flex items-center gap-2 px-8 py-3 bg-accent text-white rounded-lg font-semibold shadow-lg hover:bg-teal-600 transition-all transform hover:-translate-y-1">
                        {{ __('Ver guía completa') }}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
                <!-- Stats / Highlights -->
                <div class="flex-1 grid grid-cols-2 gap-4" data-aos="fade-left" data-aos-delay="100">
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 text-center">
                        <div class="text-3xl font-bold text-accent mb-1">25%</div>
                        <div class="text-sm text-gray-600">{{ __('Tasa IUE corporativa') }}</div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 text-center">
                        <div class="text-3xl font-bold text-accent mb-1">20</div>
                        <div class="text-sm text-gray-600">{{ __('Días hábiles para constituir') }}</div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 text-center">
                        <div class="text-3xl font-bold text-accent mb-1">3</div>
                        <div class="text-sm text-gray-600">{{ __('Idiomas de atención') }}</div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 text-center">
                        <div class="text-3xl font-bold text-accent mb-1">15+</div>
                        <div class="text-sm text-gray-600">{{ __('Años con clientes internacionales') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA final (compartido) -->
    <x-cta-final />
</x-layout>
