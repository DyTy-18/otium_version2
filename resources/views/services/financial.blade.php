<x-layout>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden text-white">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="/images/dashboard.png" alt="Operaciones Financieras" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 to-secondary/80"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight" data-aos="fade-up">
                    Operaciones<span class="text-primary"> Financieras</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-10 leading-relaxed font-light" data-aos="fade-up"
                    data-aos-delay="100">
                    ¿Tienes claridad sobre la rentabilidad real de tu empresa, el valor de tu negocio o cómo financiar
                    tus próximos proyectos?
                </p>
                <a href="{{ route('contact') }}"
                    class="inline-block px-8 py-4 bg-primary text-white font-bold rounded-lg shadow-lg hover:bg-white hover:text-primary transition-all transform hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="200">
                    Solicitar Diagnóstico Gratuito
                </a>
            </div>
        </div>
    </section>

    <!-- Intro / Value Prop -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2" data-aos="fade-right">
                    <div class="relative">
                        <div class="absolute inset-0 bg-teal-50 rounded-2xl transform translate-x-4 translate-y-4">
                        </div>
                        <img src="/images/meeting.png" alt="Estrategia Financiera"
                            class="relative rounded-2xl shadow-xl w-full h-[400px] object-cover">
                    </div>
                </div>
                <div class="w-full md:w-1/2" data-aos="fade-left">
                    <span class="text-primary font-bold tracking-wider uppercase text-sm mb-2 block">Operaciones
                        Financieras</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Claridad y Estrategia Financiera</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        En nuestro servicio de Operaciones Financieras, te ayudamos a obtener esa claridad y a optimizar
                        la gestión de tus recursos. Combinamos análisis financiero avanzado con conocimiento estratégico
                        para que tomes decisiones informadas.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Además, nos aseguramos de que tus operaciones financieras estén alineadas con una planificación
                        tributaria inteligente, cumpliendo con la normativa sin sacrificar eficiencia.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Grid -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-16" data-aos="fade-up">Análisis Financiero</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Visibilidad total</h3>
                    <p class="text-gray-600">Analizamos tus estados financieros para identificar rentabilidad por
                        producto. Te entregamos una visión clara de dónde estás ganando o perdiendo dinero.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Valoración y crecimiento</h3>
                    <p class="text-gray-600">Determinamos cuánto vale tu empresa mediante métodos profesionales.
                        Evaluamos la viabilidad financiera de nuevas inversiones o expansiones.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Optimización de recursos</h3>
                    <p class="text-gray-600">Gestión eficiente de capital de trabajo, endeudamiento e inversiones.
                        Incluye proyecciones de flujo de caja y análisis de costos.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cumplimiento y estrategia</h3>
                    <p class="text-gray-600">Integramos planificación tributaria. Identificamos oportunidades de
                        optimización y aseguramos el cumplimiento de obligaciones.</p>
                </div>

                <!-- Card 5 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Inteligencia de negocios</h3>
                    <p class="text-gray-600">Dashboards interactivos y modelos financieros (BI) para presentar
                        indicadores clave y monitorear tu desempeño en tiempo real.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Deliverables -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-16" data-aos="fade-up">Entregables</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Item 1 -->
                <div class="flex gap-4" data-aos="fade-right">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Informe de diagnóstico financiero</h4>
                        <p class="text-gray-600">Análisis detallado de la situación actual, ratios financieros, puntos
                            de equilibrio y margen de ganancias.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex gap-4" data-aos="fade-left">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Proyecciones y presupuestos</h4>
                        <p class="text-gray-600">Elaboración de proyecciones financieras a medida (presupuestos
                            anuales, flujos de caja, escenarios "what-if").</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex gap-4" data-aos="fade-right">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Valuaciones y estudios</h4>
                        <p class="text-gray-600">Informes de valuación de empresa o proyectos, y estudios de
                            factibilidad financiera para nuevas iniciativas.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="flex gap-4" data-aos="fade-left">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Dashboard financiero personalizado</h4>
                        <p class="text-gray-600">Tablero de control con indicadores financieros y operativos relevantes
                            implementado en herramientas de BI.</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="flex gap-4" data-aos="fade-right">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Plan de optimización fiscal</h4>
                        <p class="text-gray-600">Recomendaciones para aprovechar incentivos fiscales y garantizar el
                            cumplimiento normativo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-secondary text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16" data-aos="fade-up">Nuestro Proceso</h2>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-8 text-center relative">
                <!-- Connecting Line (Desktop) -->
                <div class="hidden md:block absolute top-8 left-1/10 right-1/10 h-1 bg-white/20 -z-0"></div>

                <!-- Step 1 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="0">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        1</div>
                    <h3 class="font-bold text-xl mb-2">Información</h3>
                    <p class="text-sm text-white/80">Recopilamos estados financieros históricos y reportes internos.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        2</div>
                    <h3 class="font-bold text-xl mb-2">Diagnóstico</h3>
                    <p class="text-sm text-white/80">Diagnosticamos la salud financiera identificando fortalezas y
                        riesgos.</p>
                </div>

                <!-- Step 3 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        3</div>
                    <h3 class="font-bold text-xl mb-2">Estrategia</h3>
                    <p class="text-sm text-white/80">Formulamos estrategias para reducir costos y mejorar márgenes.</p>
                </div>

                <!-- Step 4 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        4</div>
                    <h3 class="font-bold text-xl mb-2">Ejecución</h3>
                    <p class="text-sm text-white/80">Apoyamos en la ejecución, configuración de dashboards y métricas.
                    </p>
                </div>

                <!-- Step 5 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        5</div>
                    <h3 class="font-bold text-xl mb-2">Monitoreo</h3>
                    <p class="text-sm text-white/80">Revisamos indicadores periódicamente y ajustamos el plan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Preguntas Frecuentes</h2>

            <div class="space-y-4" x-data="{ active: null }">
                <!-- Q1 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 1 ? null : 1)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Diferencia con gerente financiero interno?</span>
                        <span x-text="active === 1 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 1" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        OTIUM te brinda un equipo de expertos multidisciplinarios a un costo menor que un ejecutivo
                        C-level interno. Aportamos una visión externa e imparcial, experiencia en diversas industrias y
                        herramientas especializadas.
                    </div>
                </div>

                <!-- Q2 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 2 ? null : 2)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Ayudan a conseguir financiamiento?</span>
                        <span x-text="active === 2 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 2" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Nuestro enfoque principal es optimizar tu gestión financiera interna y preparar tu empresa para
                        ser atractiva a financiamiento. Te asesoramos en la documentación y podemos conectar con
                        expertos.
                    </div>
                </div>

                <!-- Q3 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 3 ? null : 3)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Es necesario si ya tengo departamento de
                            finanzas?</span>
                        <span x-text="active === 3 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 3" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Nuestros servicios son complementarios. Trabajamos junto a tu departamento de finanzas aportando
                        análisis especializados, segundas opiniones y proyectos específicos que quizá tu equipo no pueda
                        abordar plenamente.
                    </div>
                </div>

                <!-- Q4 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 4 ? null : 4)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Cómo incorporan el aspecto tributario?</span>
                        <span x-text="active === 4 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 4" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Analizamos el impacto tributario de cada decisión financiera. Al proponer una reestructuración o
                        inversión, consideramos los efectos fiscales asociados para maximizar beneficios y minimizar
                        riesgos.
                    </div>
                </div>

                <!-- Q5 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 5 ? null : 5)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Frecuencia de reuniones y duración?</span>
                        <span x-text="active === 5 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 5" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Definimos un cronograma según tus necesidades. Puede haber reuniones mensuales o trimestrales.
                        Somos flexibles y ajustamos la duración y frecuencia del soporte para brindar el mayor valor
                        posible.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section id="contact" class="py-24 bg-secondary relative overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-primary opacity-20 rounded-full translate-x-1/3 translate-y-1/3">
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-8" data-aos="fade-up">¿Listo para asegurar su
                futuro financiero?</h2>
            <p class="text-xl text-white opacity-90 mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Contáctenos hoy para una consulta inicial gratuita con uno de nuestros expertos.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('contact') }}"
                    class="px-10 py-4 bg-primary text-white rounded-lg font-bold shadow-xl hover:bg-white hover:text-primary transition-all duration-300">
                    Contáctenos Ahora
                </a>
            </div>
        </div>
    </section>

</x-layout>
