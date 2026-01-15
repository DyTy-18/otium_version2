<x-layout>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 overflow-hidden text-white bg-secondary">
        <div class="absolute inset-0 bg-secondary">
            <div
                class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob">
            </div>
            <div
                class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 bg-teal-800 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000">
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6" data-aos="fade-up">
                Nuestros Servicios
            </h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Soluciones integrales diseñadas para impulsar el crecimiento y la estabilidad de su empresa.
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Service 1: Outsourcing Contable -->
                <a href="{{ route('services.outsourcing') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up">
                    <div class="h-48 bg-teal-50 relative overflow-hidden">
                        <!-- Icon or illustration placeholder -->
                        <div
                            class="absolute inset-0 flex items-center justify-center text-secondary opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                            Outsourcing Contable</h3>
                        <p class="text-gray-600 mb-6">Gestión integral de su contabilidad, nóminas y cumplimiento
                            tributario.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">
                            Más Información <span class="text-xl">→</span>
                        </span>
                    </div>
                </a>

                <!-- Service 2: Operaciones Financieras -->
                <a href="{{ route('services.financial') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 bg-blue-50 relative overflow-hidden">
                        <div
                            class="absolute inset-0 flex items-center justify-center text-blue-600 opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                            Operaciones Financieras</h3>
                        <p class="text-gray-600 mb-6">Optimización de tesorería, planeamiento financiero y evaluación de
                            proyectos.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">
                            Más Información <span class="text-xl">→</span>
                        </span>
                    </div>
                </a>

                <!-- Service 3: Auditoría -->
                <a href="{{ route('services.audit') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 bg-gray-50 relative overflow-hidden">
                        <div
                            class="absolute inset-0 flex items-center justify-center text-gray-600 opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                            Auditoría</h3>
                        <p class="text-gray-600 mb-6">Auditoría financiera, operativa y forense para garantizar
                            transparencia y confianza.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">
                            Más Información <span class="text-xl">→</span>
                        </span>
                    </div>
                </a>

                <!-- Service 4: Transformación Digital -->
                <a href="{{ route('services.digital') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="h-48 bg-purple-50 relative overflow-hidden">
                        <div
                            class="absolute inset-0 flex items-center justify-center text-purple-600 opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                            Transformación Digital</h3>
                        <p class="text-gray-600 mb-6">Implementación de ERPs, automatización y modernización
                            tecnológica.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">
                            Más Información <span class="text-xl">→</span>
                        </span>
                    </div>
                </a>

                <!-- Service 5: Constitución de Empresas -->
                <a href="{{ route('services.legal') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="h-48 bg-yellow-50 relative overflow-hidden">
                        <div
                            class="absolute inset-0 flex items-center justify-center text-yellow-600 opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v6m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                            Constitución de Empresas</h3>
                        <p class="text-gray-600 mb-6">Asesoría legal y fiscal para el inicio de nuevas operaciones
                            comerciales.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">
                            Más Información <span class="text-xl">→</span>
                        </span>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-4" data-aos="fade-up">Nuestro Proceso de
                Trabajo</h2>
            <p class="text-gray-600 text-center mb-16 max-w-2xl mx-auto" data-aos="fade-up">Un enfoque estructurado
                para garantizar resultados excepcionales en cada proyecto.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="text-center" data-aos="fade-up">
                    <div
                        class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6 shadow-xl">
                        1</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Análisis Inicial</h3>
                    <p class="text-gray-600 leading-relaxed">Evaluamos su situación actual, identificamos necesidades y
                        definimos el alcance del proyecto con precisión.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6 shadow-xl">
                        2</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Estrategia y Ejecución</h3>
                    <p class="text-gray-600 leading-relaxed">Diseñamos soluciones a medida e implementamos las mejores
                        prácticas con nuestro equipo de expertos.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6 shadow-xl">
                        3</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Resultados y Seguimiento</h3>
                    <p class="text-gray-600 leading-relaxed">Entregamos informes detallados y realizamos seguimiento
                        continuo para asegurar el éxito a largo plazo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-3xl">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Preguntas Frecuentes</h2>

            <div class="space-y-4" x-data="{ active: null }">
                <!-- Q1 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 1 ? null : 1)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Trabajan con empresas de todos los tamaños?</span>
                        <span x-text="active === 1 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 1" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Sí, adaptamos nuestros servicios tanto para startups y PYMES como para grandes corporaciones.
                    </div>
                </div>

                <!-- Q2 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 2 ? null : 2)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Ofrecen servicios internacionales?</span>
                        <span x-text="active === 2 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 2" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Sí, contamos con experiencia en normativas internacionales y podemos asistir a empresas con
                        operaciones en el extranjero.
                    </div>
                </div>

                <!-- Q3 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 3 ? null : 3)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Cómo se estructuran sus tarifas?</span>
                        <span x-text="active === 3 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 3" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Nuestras tarifas se basan en la complejidad y alcance del proyecto. Ofrecemos cotizaciones
                        personalizadas tras una evaluación inicial gratuita.
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
