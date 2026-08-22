<x-layout
    title="{{ __('International Support | Otium coordina tu operación fuera de Bolivia') }}"
    description="{{ __('Tu equipo en Bolivia, con acceso directo a especialistas de GGI en más de 120 países. Coordinación centralizada, sin perder a tu contacto de siempre.') }}"
    ogImage="/images/otium/hero/hero.png"
>
    <!-- Hero -->
    <section class="relative pt-32 pb-20 md:pt-44 md:pb-28 overflow-hidden text-white bg-accent">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full mix-blend-multiply blur-3xl opacity-10 -translate-y-1/2 translate-x-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-primary rounded-full mix-blend-multiply blur-3xl opacity-15 translate-y-1/2 -translate-x-1/4 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl">
                <nav class="flex items-center gap-2 text-sm text-white/60 mb-5" data-aos="fade-up">
                    <a href="{{ route('international') }}" class="hover:text-white transition-colors">{{ __('International') }}</a>
                    <span>/</span>
                    <span class="text-white/90">{{ __('International Support') }}</span>
                </nav>
                <div class="flex items-center gap-2 mb-4" data-aos="fade-up">
                    <span class="text-sm font-semibold uppercase tracking-wider text-white/70">{{ __('Empresas bolivianas con operación fuera de Bolivia') }}</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight" data-aos="fade-up" data-aos-delay="50">
                    International Support
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 leading-relaxed font-light" data-aos="fade-up" data-aos-delay="100">
                    {{ __('Tu equipo en Bolivia, con acceso directo a especialistas de GGI en más de 120 países — coordinación centralizada, sin perder a tu contacto de siempre.') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4" data-aos="fade-up" data-aos-delay="150">
                    <a href="{{ route('contact') }}"
                        class="inline-block px-8 py-4 bg-primary text-white font-bold rounded-lg shadow-lg hover:bg-white hover:text-primary transition-all transform hover:-translate-y-1 text-center">
                        {{ __('Agendar Consulta Gratuita') }}
                    </a>
                    <a href="#ggi"
                        class="inline-block px-8 py-4 border-2 border-white/50 text-white font-semibold rounded-lg hover:bg-white/10 transition-all text-center">
                        {{ __('Ver Alcance de GGI') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- La oportunidad -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-sm font-semibold uppercase tracking-wider text-accent">{{ __('La oportunidad') }}</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">{{ __('¿Cuándo necesitás soporte internacional?') }}</h2>
                <p class="text-lg text-gray-600">{{ __('Tres momentos típicos en los que una empresa boliviana necesita una firma de confianza fuera del país.') }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl p-8 border border-gray-100" data-aos="fade-up">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-5 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Expansión al exterior') }}</h3>
                    <p class="text-gray-600">{{ __('Constituís presencia, filial o representación en otro país y necesitás una firma confiable en destino, desde el primer trámite.') }}</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8 border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-5 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.6 3.8 5.8 3.8 9s-1.3 6.4-3.8 9c-2.5-2.6-3.8-5.8-3.8-9S9.5 5.6 12 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Operación multi-país en marcha') }}</h3>
                    <p class="text-gray-600">{{ __('Ya operás en varios países y necesitás consolidar reportes, cumplimiento e impuestos bajo un mismo criterio.') }}</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8 border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-5 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Especialista puntual') }}</h3>
                    <p class="text-gray-600">{{ __('Necesitás una opinión legal, fiscal o de auditoría en un país específico, para una operación o transacción concreta.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- El proceso -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-sm font-semibold uppercase tracking-wider text-accent">{{ __('El proceso') }}</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">{{ __('¿Cómo funciona el soporte internacional con Otium?') }}</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">{{ __('Un solo punto de contacto en Bolivia — nosotros coordinamos con la firma miembro de GGI en el país que necesites.') }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
                @php
                $steps = [
                    ['num' => '01', 'title' => __('Diagnóstico de necesidad'), 'desc' => __('Entendemos qué necesitás: un país, una función específica, o coordinación entre varios países a la vez.')],
                    ['num' => '02', 'title' => __('Conexión con la firma GGI correcta'), 'desc' => __('Identificamos, dentro de la red GGI, la firma miembro con la especialidad y jurisdicción que corresponde.')],
                    ['num' => '03', 'title' => __('Introducción y alcance'), 'desc' => __('Coordinamos el primer contacto y definimos alcance, honorarios y cronograma junto con la firma miembro.')],
                    ['num' => '04', 'title' => __('Punto de contacto único'), 'desc' => __('Vos seguís hablando con tu equipo de Otium en Bolivia; nosotros coordinamos con la firma en el otro país.')],
                    ['num' => '05', 'title' => __('Seguimiento del trabajo'), 'desc' => __('Damos seguimiento al avance y centralizamos la comunicación y los entregables desde Bolivia.')],
                    ['num' => '06', 'title' => __('Consolidación'), 'desc' => __('Si trabajás en varios países a la vez, consolidamos reportes y cumplimiento bajo un mismo criterio.')],
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

    <!-- Intro cierre proceso -->
    <section class="py-12 bg-white border-t border-gray-100">
        <div class="container mx-auto px-6 max-w-3xl text-center" data-aos="fade-up">
            <p class="text-lg text-gray-600 leading-relaxed">
                {{ __('Coordinamos con firmas miembro de GGI en más de 120 países, sin que pierdas a tu equipo de siempre en Bolivia. Un solo punto de contacto, criterio consistente, alcance verdaderamente global.') }}
            </p>
        </div>
    </section>

    <!-- Lo que hacemos -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="w-full md:w-1/2" data-aos="fade-right">
                    <span class="text-sm font-semibold uppercase tracking-wider text-accent mb-2 block">{{ __('Lo que hacemos') }}</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">{{ __('Otium coordina tu operación fuera de Bolivia de punta a punta') }}</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        {{ __('No tercerizamos y desaparecemos: seguimos siendo tu equipo en Bolivia durante todo el proceso, mientras coordinamos con la firma miembro de GGI que corresponda.') }}
                    </p>
                    <ul class="space-y-4">
                        @foreach([
                            __('Coordinación con firmas miembro de GGI en el país que necesites'),
                            __('Diagnóstico y alcance del trabajo antes de conectar con la firma'),
                            __('Seguimiento único del avance, sin importar cuántos países involucre'),
                            __('Consolidación de reportes para operaciones multi-país'),
                            __('Traducción y adaptación de criterios entre jurisdicciones'),
                            __('Un mismo punto de contacto en Bolivia durante todo el proceso'),
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
                        <div class="text-4xl font-bold text-accent mb-1">120+</div>
                        <div class="text-sm text-gray-600">{{ __('Países con presencia GGI') }}</div>
                    </div>
                    <div class="bg-accent/10 rounded-xl p-6 text-center">
                        <div class="text-4xl font-bold text-accent mb-1">Top 10</div>
                        <div class="text-sm text-gray-600">{{ __('Alianzas internacionales') }}</div>
                    </div>
                    <div class="bg-accent/10 rounded-xl p-6 text-center">
                        <div class="text-4xl font-bold text-accent mb-1">1</div>
                        <div class="text-sm text-gray-600">{{ __('Punto de contacto en Bolivia') }}</div>
                    </div>
                    <div class="bg-accent/10 rounded-xl p-6 text-center">
                        <div class="text-4xl font-bold text-accent mb-1">ES · EN · PT</div>
                        <div class="text-sm text-gray-600">{{ __('Idiomas de coordinación') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Respaldo institucional — GGI -->
    <section id="ggi" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-[55%_45%] items-center gap-10 md:gap-12">
                <div class="text-center md:text-left" data-aos="fade-right">
                    <span class="text-sm font-semibold uppercase tracking-wider text-accent">{{ __('Respaldo institucional') }}</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">{{ __('Coordinado a través de GGI') }}</h2>
                    <p class="text-gray-600 leading-relaxed max-w-xl mx-auto md:mx-0 mb-4">
                        {{ __('Como Independent Member of GGI, Otium no improvisa contactos: coordina con firmas que ya forman parte de la misma alianza internacional, con los mismos estándares de calidad e independencia profesional.') }}
                    </p>
                    <a href="{{ route('international') }}" class="inline-flex items-center gap-2 text-primary font-semibold hover:gap-3 transition-all">
                        {{ __('Ver Global Reach through GGI') }}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
                <div class="w-full flex flex-col items-center gap-3" data-aos="fade-left" data-aos-delay="100">
                    <x-ggi-slot size="xl" class="w-full max-w-sm" />
                    <span class="text-xs text-gray-400 text-center max-w-xs">{{ __('Sin testimonios propios todavía — sección a sumar cuando existan casos con la red GGI.') }}</span>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12" data-aos="fade-up">{{ __('Preguntas Frecuentes') }}</h2>
            <div class="space-y-4" x-data="{ active: 0 }">
                @php
                $faqs = [
                    [
                        'q' => __('¿Otium cobra por coordinar con una firma GGI en otro país?'),
                        'a' => __('La coordinación inicial y el diagnóstico son gratuitos. Los honorarios de la firma miembro en destino se acuerdan directamente y se comunican con transparencia antes de comenzar.'),
                    ],
                    [
                        'q' => __('¿Qué tipo de especialistas puedo pedir?'),
                        'a' => __('Contables, tributarios, legales, de auditoría o de asesoría empresarial — según lo que ofrezca la firma miembro de GGI en cada país.'),
                    ],
                    [
                        'q' => __('¿Puedo pedir soporte en varios países a la vez?'),
                        'a' => __('Sí. Coordinamos con más de una firma miembro simultáneamente y consolidamos el seguimiento desde Bolivia.'),
                    ],
                    [
                        'q' => __('¿Sigo trabajando con mi equipo de Otium?'),
                        'a' => __('Sí. Tu punto de contacto en Bolivia no cambia — nosotros coordinamos con la firma en el otro país y seguimos el trabajo junto a vos.'),
                    ],
                    [
                        'q' => __('¿Qué es GGI exactamente?'),
                        'a' => __('Una alianza internacional de firmas profesionales independientes, presente en más de 120 países. Cada firma miembro opera de forma independiente, con el mismo criterio riguroso.'),
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

            <div class="mt-10 max-w-3xl mx-auto flex items-start gap-4 bg-accent/5 border border-accent/20 rounded-xl p-6" data-aos="fade-up">
                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center shrink-0 text-accent">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18M6 21V7l6-4 6 4v14"/></svg>
                </div>
                <div>
                    <p class="text-gray-700"><strong class="text-gray-900">{{ __('¿Tu empresa también necesita instalarse en Bolivia?') }}</strong> {{ __('Gestionamos constitución, NIT y cumplimiento local desde el primer día.') }}</p>
                    <a href="{{ route('doing-business') }}"
                        class="inline-flex items-center gap-1 text-accent font-semibold text-sm mt-2 hover:gap-2 transition-all">
                        {{ __('Ver Doing Business in Bolivia') }}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="py-24 bg-accent relative overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary opacity-20 rounded-full translate-x-1/3 translate-y-1/3"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6" data-aos="fade-up">{{ __('¿Necesitás una firma de confianza fuera de Bolivia?') }}</h2>
            <p class="text-xl text-white/90 mb-10 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                {{ __('Contanos qué necesitás y en qué país. Te conectamos con la firma miembro de GGI correcta y coordinamos el trabajo de principio a fin.') }}
            </p>
            <a href="{{ route('contact') }}"
                class="inline-block px-10 py-4 bg-primary text-white rounded-lg font-bold shadow-xl hover:bg-white hover:text-primary transition-all duration-300"
                data-aos="fade-up" data-aos-delay="200">
                {{ __('Agendar Consulta Gratuita') }}
            </a>
        </div>
    </section>
</x-layout>
