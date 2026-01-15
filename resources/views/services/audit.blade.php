<x-layout>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden text-white">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="/images/hero-corporate.png" alt="Auditoría Integral" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 to-secondary/80"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight" data-aos="fade-up">
                    Auditoría<span class="text-primary"> Integral</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-10 leading-relaxed font-light" data-aos="fade-up"
                    data-aos-delay="100">
                    ¿Te suena aburrido el término auditoría? No eres el único. En OTIUM hacemos de la auditoría un
                    servicio moderno, útil y entendible.
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
                        <img src="/images/carousel_success.png" alt="Confianza y Transparencia"
                            class="relative rounded-2xl shadow-xl w-full h-[400px] object-cover">
                    </div>
                </div>
                <div class="w-full md:w-1/2" data-aos="fade-left">
                    <span class="text-primary font-bold tracking-wider uppercase text-sm mb-2 block">Auditoría
                        Integral</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Confianza y Transparencia</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Nuestro objetivo es validar y brindar confianza sobre cualquier tipo de información que
                        necesites verificar. No pienses solo en estados financieros: podemos auditar tu campaña de
                        marketing, la eficiencia de tu proceso de producción o incluso cómo se están gestionando tus
                        recursos humanos.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Cuéntanos qué información te genera dudas o incertidumbre, y nosotros te daremos una opinión
                        profesional e independiente.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Grid -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-16" data-aos="fade-up">Auditoría</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Confianza para tus decisiones</h3>
                    <p class="text-gray-600">Una auditoría proporciona la tranquilidad de saber que los datos con los
                        que trabajas son correctos y fiables.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Visión independiente</h3>
                    <p class="text-gray-600">Revisamos tus operaciones sin sesgos. Detectamos errores, riesgos o fraudes
                        potenciales que podrían pasar desapercibidos internamente.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Más que números financieros</h3>
                    <p class="text-gray-600">Nuestra experiencia abarca auditorías operativas, de sistemas, de
                        cumplimiento y más. Donde haya datos y procesos, podemos evaluarlos.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cumplimiento normativo</h3>
                    <p class="text-gray-600">Nos aseguramos de que cumplas con las normas nacionales e internacionales
                        aplicables. Validamos que tus estados financieros sigan principios contables.</p>
                </div>

                <!-- Card 5 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Recomendaciones accionables</h3>
                    <p class="text-gray-600">Entregamos sugerencias concretas de mejora. Identificamos debilidades en
                        controles u oportunidades de optimización.</p>
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
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Informe de auditoría independiente</h4>
                        <p class="text-gray-600">Documento detallado con el alcance, procedimientos, hallazgos y
                            nuestra opinión profesional sobre la confiabilidad de la información.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex gap-4" data-aos="fade-left">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Carta de recomendaciones</h4>
                        <p class="text-gray-600">Lista de observaciones y recomendaciones prácticas priorizadas para
                            que sepas exactamente en qué enfocarte.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex gap-4" data-aos="fade-right">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Reunión de cierre y presentación</h4>
                        <p class="text-gray-600">Sesión para presentar resultados, explicar hallazgos y responder
                            preguntas para asegurar la comprensión.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="flex gap-4" data-aos="fade-left">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Seguimiento pactado</h4>
                        <p class="text-gray-600">Opcionalmente, ofrecemos seguimiento posterior para verificar la
                            implementación de las recomendaciones.</p>
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
                    <h3 class="font-bold text-xl mb-2">Planificación</h3>
                    <p class="text-sm text-white/80">Definimos alcance y objetivos, establecemos plan de trabajo.</p>
                </div>

                <!-- Step 2 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        2</div>
                    <h3 class="font-bold text-xl mb-2">Ejecución</h3>
                    <p class="text-sm text-white/80">Recabamos evidencia mediante pruebas y entrevistas.</p>
                </div>

                <!-- Step 3 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        3</div>
                    <h3 class="font-bold text-xl mb-2">Análisis</h3>
                    <p class="text-sm text-white/80">Procesamos evidencia y formulamos opinión profesional.</p>
                </div>

                <!-- Step 4 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        4</div>
                    <h3 class="font-bold text-xl mb-2">Informe</h3>
                    <p class="text-sm text-white/80">Elaboramos informe y carta de recomendaciones.</p>
                </div>

                <!-- Step 5 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        5</div>
                    <h3 class="font-bold text-xl mb-2">Presentación</h3>
                    <p class="text-sm text-white/80">Entregamos el informe final y presentamos hallazgos.</p>
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
                        <span class="font-bold text-gray-900">¿Por qué realizar una auditoría si no estoy
                            obligado?</span>
                        <span x-text="active === 1 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 1" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Una auditoría voluntaria puede revelar oportunidades de mejora y prevenir problemas futuros.
                        Aporta transparencia y confianza, valioso para inversionistas o financiamiento.
                    </div>
                </div>

                <!-- Q2 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 2 ? null : 2)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Qué tipos de auditoría pueden llevar a cabo?</span>
                        <span x-text="active === 2 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 2" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Realizamos auditorías financieras, operativas, de cumplimiento y especiales (sistemas,
                        proyectos). Nos adaptamos al ámbito que requieras auditar.
                    </div>
                </div>

                <!-- Q3 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 3 ? null : 3)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Cuánto tiempo toma y cuánto involucramiento
                            requiere?</span>
                        <span x-text="active === 3 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 3" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        La duración depende del alcance. Una auditoría financiera típica dura algunas semanas.
                        Requerimos cierta colaboración, pero nos esforzamos por no entorpecer su trabajo diario.
                    </div>
                </div>

                <!-- Q4 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 4 ? null : 4)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Cómo manejan la confidencialidad?</span>
                        <span x-text="active === 4 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 4" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Firmamos acuerdos de confidencialidad y aplicamos estrictos protocolos de seguridad. Toda
                        documentación se resguarda y solo se usa para la auditoría.
                    </div>
                </div>

                <!-- Q5 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 5 ? null : 5)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Si detectan un problema serio o fraude?</span>
                        <span x-text="active === 5 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 5" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Te lo comunicamos de inmediato. Te asesoramos sobre implicaciones y pasos a seguir. Nuestro rol
                        es informarte objetivamente; la decisión final recae en la empresa.
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
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-8" data-aos="fade-up">¿Necesitas verificar tus
                números?</h2>
            <p class="text-xl text-white opacity-90 mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Contáctanos hoy para una consulta inicial gratuita con uno de nuestros auditores expertos.
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
