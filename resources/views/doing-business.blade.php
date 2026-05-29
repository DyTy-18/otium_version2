<x-layout
    title="{{ __('Doing Business in Bolivia | Instala tu empresa con Otium') }}"
    description="{{ __('Empresas extranjeras que operan en Bolivia: constitución legal, NIT, cumplimiento tributario y contabilidad. Otium te acompaña desde el primer día y en tu idioma.') }}"
    ogImage="/images/otium/hero/hero.png"
>
    <!-- Hero -->
    <section class="relative pt-32 pb-20 md:pt-44 md:pb-28 overflow-hidden text-white bg-accent">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full mix-blend-multiply blur-3xl opacity-10 -translate-y-1/2 translate-x-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-primary rounded-full mix-blend-multiply blur-3xl opacity-15 translate-y-1/2 -translate-x-1/4 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl">
                <div class="flex items-center gap-2 mb-4" data-aos="fade-up">
                    <span class="text-sm font-semibold uppercase tracking-wider text-white/70">Bolivia · Santa Cruz · La Paz</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight" data-aos="fade-up" data-aos-delay="50">
                    {{ __('Doing Business in Bolivia') }}
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 leading-relaxed font-light" data-aos="fade-up" data-aos-delay="100">
                    {{ __('Tu socio local experto para constitución legal, cumplimiento tributario, contabilidad y nómina — desde el primer día y en tu idioma.') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4" data-aos="fade-up" data-aos-delay="150">
                    <a href="{{ route('contact') }}"
                        class="inline-block px-8 py-4 bg-primary text-white font-bold rounded-lg shadow-lg hover:bg-white hover:text-primary transition-all transform hover:-translate-y-1 text-center">
                        {{ __('Agendar Consulta Gratuita') }}
                    </a>
                    <a href="{{ route('services.constitucion-empresas') }}"
                        class="inline-block px-8 py-4 border-2 border-white/50 text-white font-semibold rounded-lg hover:bg-white/10 transition-all text-center">
                        {{ __('Constitución de Empresas') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Por qué Bolivia -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-sm font-semibold uppercase tracking-wider text-accent">{{ __('La oportunidad') }}</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">{{ __('¿Por qué Bolivia?') }}</h2>
                <p class="text-lg text-gray-600">{{ __('Un mercado estratégico en el corazón de Sudamérica, con costos competitivos y sectores en crecimiento.') }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl p-8 border border-gray-100" data-aos="fade-up">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-5 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Tasa de impuesto competitiva') }}</h3>
                    <p class="text-gray-600">{{ __('25% de impuesto a las utilidades empresariales (IUE). Sin impuesto sobre ganancias de capital en utilidades reinvertidas. Marco tributario estable y con regulaciones claras.') }}</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8 border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-5 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Ubicación estratégica') }}</h3>
                    <p class="text-gray-600">{{ __('Limita con Argentina, Brasil, Chile, Perú y Paraguay. Un centro natural para el comercio, la logística y la distribución regional.') }}</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8 border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-5 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Sectores en crecimiento') }}</h3>
                    <p class="text-gray-600">{{ __('Agroindustria, minería, energía, servicios tecnológicos y servicios financieros — con flujos crecientes de inversión extranjera.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Qué necesita una empresa extranjera -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-sm font-semibold uppercase tracking-wider text-accent">{{ __('El proceso') }}</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">{{ __('¿Qué necesita una empresa extranjera para operar en Bolivia?') }}</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">{{ __('Ya sea que abras una sucursal o constituyas una nueva sociedad, el camino regulatorio es el mismo — y Otium gestiona cada paso.') }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
                @php
                $steps = [
                    ['num' => '01', 'title' => __('Decisión de estructura legal'), 'desc' => __('Sucursal o nueva sociedad (SRL/SA). Evaluamos tu actividad, socios y objetivos para recomendar la estructura correcta.')],
                    ['num' => '02', 'title' => __('Apostilla y traducción de documentos'), 'desc' => __('Los documentos societarios extranjeros (estatutos, poderes notariales) deben ser apostillados y traducidos. Coordinamos toda la cadena.')],
                    ['num' => '03', 'title' => __('Inscripción en SEPREC'), 'desc' => __('Registro de comercio ante el Servicio Plurinacional de Registro de Comercio. Obligatorio antes de cualquier otro paso.')],
                    ['num' => '04', 'title' => __('NIT — Registro Tributario (SIN)'), 'desc' => __('Inscripción en el Servicio de Impuestos Nacionales de Bolivia, incluyendo la selección del régimen tributario aplicable.')],
                    ['num' => '05', 'title' => __('Habilitación de facturación electrónica'), 'desc' => __('Bolivia utiliza facturación electrónica obligatoria. Configuramos tu sistema para que puedas facturar desde el primer día.')],
                    ['num' => '06', 'title' => __('Cumplimiento continuo'), 'desc' => __('IVA mensual, impuesto corporativo (IUE), nómina (AFP/CNS) e informes financieros — gestionado por nuestro equipo.')],
                ];
                @endphp
                @foreach ($steps as $step)
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex gap-5" data-aos="fade-up">
                    <div class="text-2xl font-bold text-accent/30 shrink-0 leading-none pt-1">{{ $step['num'] }}</div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">{{ $step['title'] }}</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ $step['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Intro Otium -->
    <section class="py-12 bg-white border-t border-gray-100">
        <div class="container mx-auto px-6 max-w-3xl text-center" data-aos="fade-up">
            <p class="text-lg text-gray-600 leading-relaxed">
                {{ __('Acompañamos a empresas extranjeras desde el primer trámite hasta el primer balance — constitución, cumplimiento tributario, nómina local y estructura contable en un solo equipo. Operamos en Santa Cruz y La Paz, y trabajamos en español, inglés e italiano.') }}
            </p>
        </div>
    </section>

    <!-- Servicios incluidos -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="w-full md:w-1/2" data-aos="fade-right">
                    <span class="text-sm font-semibold uppercase tracking-wider text-accent mb-2 block">{{ __('Lo que hacemos') }}</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">{{ __('Otium gestiona la instalación operativa completa') }}</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        {{ __('No somos un estudio jurídico ni una oficina de trámites. Somos una firma multidisciplinaria — abogados asociados, contadores, asesores tributarios y equipo tecnológico — trabajando juntos para que tu empresa arranque sin brechas de cumplimiento.') }}
                    </p>
                    <ul class="space-y-4">
                        @foreach([
                            __('Constitución de empresa (SEPREC + NIT + facturación)'),
                            __('Contabilidad mensual y cierre financiero'),
                            __('Declaraciones impositivas (IVA, IT, IUE) ante el SIN'),
                            __('Nómina, AFP y trámites ante el Ministerio de Trabajo'),
                            __('Dashboards ejecutivos en Power BI en tu idioma'),
                            __('Gestión Documental en SharePoint'),
                        ] as $item)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-gray-700">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="w-full md:w-1/2 grid grid-cols-2 gap-4" data-aos="fade-left" data-aos-delay="100">
                    <div class="bg-accent/10 rounded-xl p-6 text-center">
                        <div class="text-4xl font-bold text-accent mb-1">25%</div>
                        <div class="text-sm text-gray-600">{{ __('IUE — Impuesto Corporativo') }}</div>
                    </div>
                    <div class="bg-accent/10 rounded-xl p-6 text-center">
                        <div class="text-4xl font-bold text-accent mb-1">13%</div>
                        <div class="text-sm text-gray-600">{{ __('IVA — Impuesto al Valor Agregado') }}</div>
                    </div>
                    <div class="bg-accent/10 rounded-xl p-6 text-center">
                        <div class="text-4xl font-bold text-accent mb-1">20</div>
                        <div class="text-sm text-gray-600">{{ __('Días hábiles para constituir') }}</div>
                    </div>
                    <div class="bg-accent/10 rounded-xl p-6 text-center">
                        <div class="text-4xl font-bold text-accent mb-1">ES · EN · PT</div>
                        <div class="text-sm text-gray-600">{{ __('Idiomas en los que trabajamos') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoniales internacionales -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="text-sm font-semibold uppercase tracking-wider text-accent">{{ __('Clientes internacionales') }}</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-2">{{ __('Con la confianza de empresas internacionales que operan en Bolivia') }}</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg relative" data-aos="fade-up">
                    <div class="text-6xl text-accent opacity-20 absolute top-4 left-4 font-serif">"</div>
                    <p class="text-gray-600 italic mb-6 relative z-10">I have been working with Otium since the very beginning of my business journey, and honestly, it has been one of the best professional experiences I've had. Their team is always professional, supportive, and whenever I need help, they are always there for me.</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm">KS</div>
                        <div>
                            <h4 class="font-bold text-gray-900">Karan Sharma</h4>
                            <p class="text-xs text-gray-500">Propietario, Sabor de la India</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-6xl text-accent opacity-20 absolute top-4 left-4 font-serif">"</div>
                    <p class="text-gray-600 italic mb-6 relative z-10">Otium was a member of IECnet — they performed their activities in a very professional and good standing way during their time with us.</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center text-white font-bold text-sm">SC</div>
                        <div>
                            <h4 class="font-bold text-gray-900">Stefano Ciccioriccio</h4>
                            <p class="text-xs text-gray-500">Partner, Ciccioriccio e Associati</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12" data-aos="fade-up">{{ __('Preguntas Frecuentes') }}</h2>
            <div class="space-y-4" x-data="{ active: null }">
                @php
                $faqs = [
                    [
                        'q' => __('¿Puede una empresa 100% extranjera operar en Bolivia?'),
                        'a' => __('Sí. Bolivia permite la propiedad extranjera total en sociedades comerciales (SRL o SA). No se requiere socio local, aunque sí se necesita un representante legal con cédula boliviana para ciertos trámites ante el SIN y SEPREC.'),
                    ],
                    [
                        'q' => __('¿Necesito una oficina física en Bolivia?'),
                        'a' => __('Se requiere un domicilio legal registrado para SEPREC y el SIN. Otium puede orientarte sobre soluciones eficientes según tu modelo operativo.'),
                    ],
                    [
                        'q' => __('¿Otium puede comunicarse en inglés o portugués?'),
                        'a' => __('Sí. Nuestro equipo trabaja en español, inglés y portugués. Los reportes, dashboards y la comunicación habitual pueden entregarse en tu idioma preferido.'),
                    ],
                    [
                        'q' => __('¿Cuánto tiempo toma la instalación completa?'),
                        'a' => __('La constitución de la empresa toma aproximadamente 20 días hábiles una vez que los documentos están listos. El registro tributario y la facturación se configuran inmediatamente después. Entregamos un cronograma detallado en la propuesta inicial.'),
                    ],
                    [
                        'q' => __('¿Qué obligaciones recurrentes tiene mi empresa en Bolivia?'),
                        'a' => __('Mensualmente: declaraciones de IVA e IT. Anualmente: declaración del IUE (impuesto corporativo). Si tenés empleados: aportes mensuales a AFP y CNS. Otium gestiona todas estas obligaciones como parte de nuestros servicios de outsourcing.'),
                    ],
                ];
                @endphp
                @foreach ($faqs as $i => $faq)
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden" data-aos="fade-up">
                    <button @click="active = (active === {{ $i }} ? null : {{ $i }})"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">{{ $faq['q'] }}</span>
                        <span x-text="active === {{ $i }} ? '-' : '+'" class="text-2xl text-accent font-bold shrink-0 ml-4"></span>
                    </button>
                    <div x-show="active === {{ $i }}" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        {{ $faq['a'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="py-24 bg-accent relative overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary opacity-20 rounded-full translate-x-1/3 translate-y-1/3"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6" data-aos="fade-up">{{ __('¿Listo para entrar al mercado boliviano?') }}</h2>
            <p class="text-xl text-white/90 mb-10 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                {{ __('Agenda una consulta inicial gratuita. Revisamos tu estructura, cronograma y requisitos de cumplimiento — sin compromiso.') }}
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('contact') }}"
                    class="px-10 py-4 bg-primary text-white rounded-lg font-bold shadow-xl hover:bg-white hover:text-primary transition-all duration-300">
                    {{ __('Agendar Consulta Gratuita') }}
                </a>
                <a href="{{ route('services.constitucion-empresas') }}"
                    class="px-10 py-4 border-2 border-white/50 text-white rounded-lg font-semibold hover:bg-white/10 transition-all duration-300">
                    {{ __('Detalles de Constitución de Empresas') }}
                </a>
            </div>
        </div>
    </section>
</x-layout>
