<x-layout
    title="Gestión Tributaria Bolivia | IVA, IT, IUE | Otium"
    description="Gestión tributaria con revisión, criterio técnico y soporte continuo para empresas en Bolivia. IVA, IT, IUE, RCV y más."
>

    <!-- ─── HERO: texto izquierda + imagen flotante derecha ─── -->
    <section class="relative pt-32 pb-20 md:pt-44 md:pb-28 overflow-hidden text-white bg-secondary">
        <div class="absolute top-0 right-0 w-150 h-150 bg-primary rounded-full mix-blend-multiply blur-3xl opacity-20 -translate-y-1/2 translate-x-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-primary rounded-full mix-blend-multiply blur-3xl opacity-20 translate-y-1/2 -translate-x-1/4 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row items-center gap-12">

                <!-- Texto -->
                <div class="w-full md:w-1/2" data-aos="fade-right" data-aos-duration="900">
                    <span class="inline-block bg-white/20 text-white text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-6">Servicio tributario</span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        {{ __('Gestión Tributaria') }}
                    </h1>
                    <p class="text-xl md:text-2xl text-white/90 mb-8 leading-relaxed font-light">
                        {{ __('Cumplimiento fiscal con revisión, criterio técnico y soporte continuo para empresas en Bolivia.') }}
                    </p>
                    <blockquote class="border-l-4 border-primary pl-5 mb-10 text-white/80 italic text-lg">
                        "Una gestión tributaria moderna no solo cumple: revisa, ordena, documenta y da visibilidad."
                    </blockquote>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}"
                            class="inline-block px-8 py-4 bg-primary text-white font-bold rounded-lg shadow-lg hover:bg-white hover:text-primary transition-all transform hover:-translate-y-1">
                            {{ __('Solicitar información') }}
                        </a>
                        <a href="/pdfs/OTIUM_Base_comercial_y_comunicacional_Gestion_Tributaria.pdf" download
                            class="inline-flex items-center gap-2 px-8 py-4 bg-white text-secondary font-bold rounded-lg shadow-lg hover:bg-primary hover:text-white transition-all transform hover:-translate-y-1">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17v3a1 1 0 001 1h16a1 1 0 001-1v-3"/></svg>
                            {{ __('Descargar brochure') }}
                        </a>
                    </div>
                </div>

                <!-- Imagen flotante -->
                <div class="w-full md:w-1/2 flex justify-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="900">
                    <div class="relative w-full max-w-sm md:max-w-md">
                        <!-- sombra decorativa desplazada -->
                        <div class="absolute inset-0 bg-primary/40 rounded-2xl translate-x-4 translate-y-4"></div>
                        <!-- borde decorativo esquina superior izquierda -->
                        <div class="absolute -top-3 -left-3 w-16 h-16 border-4 border-white/30 rounded-xl"></div>
                        <img src="/images/meeting.png"
                            alt="Reunión de gestión tributaria"
                            class="relative z-10 rounded-2xl shadow-2xl w-full h-72 md:h-80 object-cover object-center animate-float">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ─── INTRO: imagen grande + texto integrados ─── -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row rounded-3xl overflow-hidden shadow-2xl">
                <!-- Imagen 55% -->
                <div class="w-full lg:w-[55%] relative min-h-95 lg:min-h-130" data-aos="fade-right" data-aos-duration="1000">
                    <img src="/images/carousel_strategy.png"
                        alt="Estrategia tributaria Otium"
                        class="absolute inset-0 w-full h-full object-cover">
                    <!-- overlay gradiente -->
                    <div class="absolute inset-0 bg-linear-to-t from-secondary/70 via-transparent to-transparent"></div>
                    <div class="absolute inset-0 bg-linear-to-r from-transparent via-transparent to-gray-50/30 hidden lg:block"></div>
                    <!-- badge -->
                    <div class="absolute bottom-8 left-10 z-10">
                        <span class="bg-primary text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">Gestión Tributaria</span>
                    </div>
                </div>
                <!-- Texto 45% -->
                <div class="w-full lg:w-[45%] bg-white p-10 lg:p-14 flex flex-col justify-center" data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-snug">{{ __('Más que declarar: revisar, ordenar y documentar') }}</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-5">
                        En Otium gestionamos las obligaciones tributarias de tu empresa con orden, revisión y respaldo real. No se trata solo de presentar formularios: revisamos información clave antes de declarar, controlamos el RCV, identificamos operaciones bancarizables, documentamos observaciones y resolvemos consultas del día a día.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Trabajamos con herramientas digitales, documentación en la nube y acompañamiento continuo para que tu empresa tenga una gestión fiscal más clara, menos improvisada y mejor sustentada. Podemos trabajar este servicio de forma independiente o integrado a tu outsourcing contable.
                    </p>
                    <a href="{{ route('contact') }}"
                        class="self-start inline-flex items-center gap-2 px-6 py-3 border-2 border-primary text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-all duration-300 group">
                        Hablar con un especialista
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ─── PARA QUIÉN: cards con hover lift ─── -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-primary font-bold tracking-widest uppercase text-xs">Clientes ideales</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 mt-3">{{ __('¿Para quién es este servicio?') }}</h2>
                <p class="text-gray-500 text-lg max-w-3xl mx-auto">
                    Empresas que operan en Bolivia — o que están evaluando hacerlo — y necesitan cumplir sus obligaciones fiscales con orden, criterio técnico y respaldo real.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">

                <div class="group bg-white rounded-2xl shadow-md border border-gray-100 p-8 hover:border-primary/40 hover:shadow-xl hover:-translate-y-1 hover:bg-primary/5 transition-all duration-300" data-aos="zoom-in-up">
                    <div class="w-14 h-14 bg-red-50 group-hover:bg-primary/15 rounded-xl flex items-center justify-center mb-5 text-primary transition-colors duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-2 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Empresas locales con gestión reactiva') }}</h3>
                    <p class="text-gray-600">Con gestión tributaria improvisada que necesitan más orden, control y respaldo documental.</p>
                </div>

                <div class="group bg-white rounded-2xl shadow-md border border-gray-100 p-8 hover:border-primary/40 hover:shadow-xl hover:-translate-y-1 hover:bg-primary/5 transition-all duration-300" data-aos="zoom-in-up" data-aos-delay="80">
                    <div class="w-14 h-14 bg-red-50 group-hover:bg-primary/15 rounded-xl flex items-center justify-center mb-5 text-primary transition-colors duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Negocios en crecimiento') }}</h3>
                    <p class="text-gray-600">Que necesitan más control fiscal a medida que sus operaciones y obligaciones se vuelven más complejas.</p>
                </div>

                <div class="group bg-white rounded-2xl shadow-md border border-gray-100 p-8 hover:border-primary/40 hover:shadow-xl hover:-translate-y-1 hover:bg-primary/5 transition-all duration-300" data-aos="zoom-in-up" data-aos-delay="160">
                    <div class="w-14 h-14 bg-red-50 group-hover:bg-primary/15 rounded-xl flex items-center justify-center mb-5 text-primary transition-colors duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Empresas de capital extranjero') }}</h3>
                    <p class="text-gray-600">Con operaciones en Bolivia que necesitan cumplimiento local con criterio técnico y trazabilidad.</p>
                </div>

                <div class="group bg-white rounded-2xl shadow-md border border-gray-100 p-8 hover:border-primary/40 hover:shadow-xl hover:-translate-y-1 hover:bg-primary/5 transition-all duration-300" data-aos="zoom-in-up" data-aos-delay="240">
                    <div class="w-14 h-14 bg-red-50 group-hover:bg-primary/15 rounded-xl flex items-center justify-center mb-5 text-primary transition-colors duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Inversionistas formalizando empresa') }}</h3>
                    <p class="text-gray-600">Instalando o formalizando empresa en el país que necesitan cumplimiento desde el inicio.</p>
                </div>

                <div class="group bg-white rounded-2xl shadow-md border border-gray-100 p-8 hover:border-primary/40 hover:shadow-xl hover:-translate-y-1 hover:bg-primary/5 transition-all duration-300" data-aos="zoom-in-up" data-aos-delay="320">
                    <div class="w-14 h-14 bg-red-50 group-hover:bg-primary/15 rounded-xl flex items-center justify-center mb-5 text-primary transition-colors duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Gerentes que reportan al exterior') }}</h3>
                    <p class="text-gray-600">Que reportan a directorio o socios fuera de Bolivia y necesitan visibilidad y claridad en su gestión fiscal.</p>
                </div>

                <div class="group bg-white rounded-2xl shadow-md border border-gray-100 p-8 hover:border-primary/40 hover:shadow-xl hover:-translate-y-1 hover:bg-primary/5 transition-all duration-300" data-aos="zoom-in-up" data-aos-delay="400">
                    <div class="w-14 h-14 bg-red-50 group-hover:bg-primary/15 rounded-xl flex items-center justify-center mb-5 text-primary transition-colors duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Empresas con documentación en la nube') }}</h3>
                    <p class="text-gray-600">Con acceso remoto que buscan una gestión tributaria alineada a su forma de trabajar.</p>
                </div>

            </div>

            <div class="bg-primary/8 border-l-4 border-primary rounded-2xl p-6 max-w-4xl mx-auto" data-aos="fade-up">
                <p class="text-gray-700 text-lg">
                    <strong class="text-primary">El problema que comparten:</strong> Tienen operaciones reales en Bolivia pero su gestión tributaria no refleja eso — declaran tarde, sin revisión, sin respaldo suficiente y sin visibilidad para quien toma decisiones.
                </p>
            </div>
        </div>
    </section>

    <!-- ─── BREAK: Nuestra filosofía ─── -->
    <section class="bg-secondary" data-aos="fade" data-aos-duration="1200">
        <div class="flex flex-col items-center justify-center text-center px-8 py-24 md:py-32">
            <p class="text-white/60 text-xs font-bold uppercase tracking-widest mb-6">Nuestra filosofía</p>
            <blockquote class="text-2xl md:text-4xl font-bold text-white max-w-3xl leading-snug">
                "Una gestión tributaria ordenada es la base de una empresa que puede crecer sin sorpresas."
            </blockquote>
        </div>
    </section>

    <!-- ─── QUÉ INCLUYE: flip-left / flip-right alternados ─── -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-primary font-bold tracking-widest uppercase text-xs">Alcance del servicio</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">{{ __('¿Qué incluye el servicio?') }}</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">

                <div class="flex gap-5 p-6 rounded-2xl border border-gray-100 hover:border-primary/30 hover:shadow-md transition-all duration-300" data-aos="flip-left">
                    <div class="w-12 h-12 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Revisión tributaria operativa antes de declarar</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">No solo presentamos — revisamos información clave antes de cada declaración.</p>
                    </div>
                </div>

                <div class="flex gap-5 p-6 rounded-2xl border border-gray-100 hover:border-primary/30 hover:shadow-md transition-all duration-300" data-aos="flip-right">
                    <div class="w-12 h-12 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Revisión del RCV (Libro de Compras y Ventas)</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Control del RCV para identificar inconsistencias y asegurar la trazabilidad documental.</p>
                    </div>
                </div>

                <div class="flex gap-5 p-6 rounded-2xl border border-gray-100 hover:border-primary/30 hover:shadow-md transition-all duration-300" data-aos="flip-left" data-aos-delay="80">
                    <div class="w-12 h-12 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Operaciones bancarizables y sustento documental</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Identificación de operaciones bancarizables y verificación del respaldo documental correspondiente.</p>
                    </div>
                </div>

                <div class="flex gap-5 p-6 rounded-2xl border border-gray-100 hover:border-primary/30 hover:shadow-md transition-all duration-300" data-aos="flip-right" data-aos-delay="80">
                    <div class="w-12 h-12 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Formularios según rubro</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            <span class="inline-block bg-primary/10 text-primary text-xs font-semibold px-2 py-0.5 rounded mr-1">F-200 IVA</span>
                            <span class="inline-block bg-primary/10 text-primary text-xs font-semibold px-2 py-0.5 rounded mr-1">F-210</span>
                            <span class="inline-block bg-primary/10 text-primary text-xs font-semibold px-2 py-0.5 rounded mr-1">F-400 IT</span>
                            <span class="inline-block bg-primary/10 text-primary text-xs font-semibold px-2 py-0.5 rounded">F-500 IUE</span>
                            <span class="block mt-1">y otros según rubro.</span>
                        </p>
                    </div>
                </div>

                <div class="flex gap-5 p-6 rounded-2xl border border-gray-100 hover:border-primary/30 hover:shadow-md transition-all duration-300" data-aos="flip-left" data-aos-delay="160">
                    <div class="w-12 h-12 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Seguimiento de vencimientos y obligaciones formales</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Control continuo del calendario fiscal y seguimiento de obligaciones formales.</p>
                    </div>
                </div>

                <div class="flex gap-5 p-6 rounded-2xl border border-gray-100 hover:border-primary/30 hover:shadow-md transition-all duration-300" data-aos="flip-right" data-aos-delay="160">
                    <div class="w-12 h-12 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Resolución de consultas tributarias operativas</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Respuestas a consultas puntuales del día a día con criterio técnico.</p>
                    </div>
                </div>

                <div class="flex gap-5 p-6 rounded-2xl border border-gray-100 hover:border-primary/30 hover:shadow-md transition-all duration-300" data-aos="flip-left" data-aos-delay="240">
                    <div class="w-12 h-12 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Reportes periódicos</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Mensual, trimestral, semestral o anual según el alcance acordado con el cliente.</p>
                    </div>
                </div>

                <div class="flex gap-5 p-6 rounded-2xl border border-gray-100 hover:border-primary/30 hover:shadow-md transition-all duration-300" data-aos="flip-right" data-aos-delay="240">
                    <div class="w-12 h-12 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Documentación en la nube</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Trabajo documentado y respaldado en la nube (SharePoint cuando corresponde), con trazabilidad real.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ─── QUÉ RECIBE: grid con zoom-in ─── -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-primary font-bold tracking-widest uppercase text-xs">Entregables</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">{{ __('¿Qué recibe tu empresa al final?') }}</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 max-w-5xl mx-auto">

                @php
                $deliverables = [
                    ['Declaraciones tributarias preparadas y/o revisadas', 50],
                    ['Informe de observaciones: RCV, bancarización, sustento', 100],
                    ['Reporte tributario periódico', 150],
                    ['Alertas y seguimiento de vencimientos', 200],
                    ['Respuestas a consultas tributarias operativas', 250],
                    ['Registro documentado del trabajo en la nube', 300],
                    ['Seguimiento de hallazgos y pendientes de regularización', 350],
                ];
                @endphp

                @foreach($deliverables as [$text, $delay])
                <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex gap-3 items-start hover:shadow-md hover:-translate-y-1 transition-all duration-300"
                    data-aos="zoom-in" data-aos-delay="{{ $delay }}">
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="text-gray-700 font-medium text-sm leading-snug">{{ $text }}</p>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- ─── COMPARACIÓN: Otium vs contador tradicional ─── -->
    <section class="py-24 bg-secondary text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16" data-aos="fade-up">{{ __('Por qué Otium vs. el contador tradicional') }}</h2>
            <div class="max-w-4xl mx-auto overflow-x-auto" data-aos="fade-up" data-aos-delay="100">
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="text-left p-4 bg-white/10 rounded-tl-xl font-bold text-white/70 text-sm uppercase tracking-wider w-1/2">Contador tradicional</th>
                            <th class="text-left p-4 bg-primary rounded-tr-xl font-bold text-white text-sm uppercase tracking-wider w-1/2">Otium</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/10">
                        @php
                        $rows = [
                            ['Presenta el formulario y listo', 'Revisa información antes de declarar'],
                            ['RCV sin revisión previa', 'Control de RCV, bancarización y sustento documental'],
                            ['Gestión de un solo responsable', 'Equipo con criterio contable, tributario y tecnológico'],
                            ['Archivos en carpetas o correos', 'Documentación en la nube con trazabilidad real'],
                            ['Reactivo ante urgencias', 'Seguimiento continuo con alertas y reportes'],
                            ['Sin visibilidad para gerencia', 'Reportes claros para administración y gerencia'],
                        ];
                        @endphp
                        @foreach($rows as $i => [$left, $right])
                        <tr class="hover:bg-white/5 transition-colors" data-aos="fade-right" data-aos-delay="{{ $i * 60 }}">
                            <td class="p-4 text-white/70 border-r border-white/10 {{ $i === count($rows)-1 ? 'rounded-bl-xl' : '' }}">{{ $left }}</td>
                            <td class="p-4 text-white font-medium {{ $i === count($rows)-1 ? 'rounded-br-xl' : '' }}">{{ $right }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ─── FAQ ─── -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-14" data-aos="fade-up">
                <span class="text-primary font-bold tracking-widest uppercase text-xs">Dudas frecuentes</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">{{ __('Preguntas Frecuentes') }}</h2>
            </div>
            <div class="space-y-3" x-data="{ active: null }">

                @php
                $faqs = [
                    [1, '¿Qué impuestos gestionan?', 'Gestionamos todos los tributos aplicables según el rubro: IVA (F-200, F-210), IT (F-400), IUE (F-500) y otros formularios según corresponda. También controlamos el RCV y el sustento documental asociado.'],
                    [2, '¿Se puede contratar solo gestión tributaria sin outsourcing contable?', 'Sí. El servicio de gestión tributaria puede contratarse de forma independiente o integrado a un servicio de outsourcing contable. Adaptamos el alcance a la realidad y necesidades de cada empresa.'],
                    [3, '¿Pueden ayudarme si ya tengo una deuda tributaria?', 'Sí. Analizamos la situación, te asesoramos sobre las opciones disponibles y gestionamos el proceso de regularización o impugnación según corresponda.'],
                    [4, '¿Cómo me avisan sobre los vencimientos?', 'Enviamos alertas con anticipación suficiente y realizamos seguimiento continuo del calendario fiscal. Además, el cliente recibe reportes periódicos con el estado de sus obligaciones.'],
                    [5, '¿Qué necesito para empezar?', 'Solo una reunión inicial. Revisamos tu situación actual, identificamos oportunidades de mejora y presentamos una propuesta adaptada a tu empresa.'],
                ];
                @endphp

                @foreach($faqs as [$id, $q, $a])
                <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100" data-aos="fade-up" data-aos-delay="{{ ($id - 1) * 60 }}">
                    <button @click="active = (active === {{ $id }} ? null : {{ $id }})"
                        class="w-full px-6 py-5 text-left flex justify-between items-center hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900 pr-4">{{ $q }}</span>
                        <span class="text-primary font-bold text-xl shrink-0 transition-transform duration-300"
                            :class="active === {{ $id }} ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="active === {{ $id }}" x-transition class="px-6 pb-5 text-gray-600 leading-relaxed border-t border-gray-200">
                        <p class="pt-4">{{ $a }}</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- ─── CTA final ─── -->
    <section id="contact" class="bg-secondary">
        <div class="container mx-auto px-8 py-24 md:py-32 text-center">
            <span class="inline-block bg-white/20 text-white text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full mb-8" data-aos="fade-up">Listo para ordenar tu gestión fiscal</span>
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight" data-aos="fade-up" data-aos-delay="80">
                {{ __('¿Tu gestión tributaria refleja tu empresa?') }}
            </h2>
            <p class="text-xl text-white/85 mb-12 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="160">
                Contáctanos para una reunión inicial y revisamos juntos tu situación fiscal actual.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="zoom-in" data-aos-delay="240">
                <a href="{{ route('contact') }}"
                    class="px-10 py-5 bg-primary text-white rounded-xl font-bold shadow-xl hover:bg-white hover:text-primary transition-all duration-300 hover:scale-105">
                    {{ __('Contáctenos Ahora') }}
                </a>
                <a href="{{ route('services.index') }}"
                    class="px-10 py-5 bg-white/10 text-white border border-white/30 rounded-xl font-bold hover:bg-white/20 transition-all duration-300">
                    Ver otros servicios
                </a>
            </div>
        </div>
    </section>

</x-layout>
