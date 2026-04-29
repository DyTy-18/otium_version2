<x-layout
    title="Nuestros Servicios"
    description="Descubre todos los servicios de OTIUM Consultores: outsourcing contable, operaciones financieras, auditoría, transformación digital y constitución de empresas en Bolivia."
>
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

                <!-- 1: Outsourcing Contable -->
                <a href="{{ route('services.outsourcing') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="0">
                    <div class="h-48 bg-teal-50 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-accent opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Outsourcing Contable</h3>
                        <p class="text-gray-600 mb-6">Gestión integral de libros, obligaciones y cierres mensuales.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">Más Información <span class="text-xl">→</span></span>
                    </div>
                </a>

                <!-- 2: Gestión Tributaria y Laboral -->
                <a href="{{ route('services.gestion-tributaria') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 bg-red-50 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-primary opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Gestión Tributaria y Laboral</h3>
                        <p class="text-gray-600 mb-6">Declaraciones, planeación fiscal y defensa ante el SIN.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">Más Información <span class="text-xl">→</span></span>
                    </div>
                </a>

                <!-- 3: Auditoría Financiera y Tributaria -->
                <a href="{{ route('services.audit') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 bg-gray-50 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-gray-500 opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Auditoría Financiera y Tributaria</h3>
                        <p class="text-gray-600 mb-6">Validación independiente, fiscal y de aseguramiento.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">Más Información <span class="text-xl">→</span></span>
                    </div>
                </a>

                <!-- 4: Reportes y Dashboards (Power BI) -->
                <a href="{{ route('services.reportes-power-bi') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="h-48 bg-purple-50 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-purple-600 opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Reportes y Dashboards (Power BI)</h3>
                        <p class="text-gray-600 mb-6">Reportes gerenciales visuales para tomar decisiones.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">Más Información <span class="text-xl">→</span></span>
                    </div>
                </a>

                <!-- 5: SharePoint Documental -->
                <a href="{{ route('services.sharepoint-documental') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="h-48 bg-blue-50 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-blue-500 opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7a2 2 0 012-2h3l2 2h7a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7zm4 6h.01M10 13h4"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">SharePoint Documental</h3>
                        <p class="text-gray-600 mb-6">Control y trazabilidad de documentos en la nube.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">Más Información <span class="text-xl">→</span></span>
                    </div>
                </a>

                <!-- 6: Outsourcing Laboral -->
                <a href="{{ route('services.outsourcing-laboral') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="500">
                    <div class="h-48 bg-orange-50 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-orange-500 opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Outsourcing Laboral</h3>
                        <p class="text-gray-600 mb-6">Planilla, seguro social y contratos al día.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">Más Información <span class="text-xl">→</span></span>
                    </div>
                </a>

                <!-- 7: Consultoría Empresarial -->
                <a href="{{ route('services.consultoria') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="600">
                    <div class="h-48 bg-green-50 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-green-600 opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Consultoría Empresarial</h3>
                        <p class="text-gray-600 mb-6">Acompañamiento estratégico y financiero.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">Más Información <span class="text-xl">→</span></span>
                    </div>
                </a>

                <!-- 8: Revalúo Técnico y Gestión Digital de Activos Fijos -->
                <a href="{{ route('services.revaluo-activos') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="700">
                    <div class="h-48 bg-amber-50 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-amber-600 opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Revalúo y Gestión de Activos Fijos</h3>
                        <p class="text-gray-600 mb-6">Inventario físico, etiquetado QR y base patrimonial digital.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">Más Información <span class="text-xl">→</span></span>
                    </div>
                </a>

                <!-- 9: Constitución y Formalización de Empresas -->
                <a href="{{ route('services.constitucion-empresas') }}"
                    class="group block bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="800">
                    <div class="h-48 bg-indigo-50 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-indigo-600 opacity-80 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-2 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Constitución de Empresas en Bolivia</h3>
                        <p class="text-gray-600 mb-6">SEPREC, NIT, facturación electrónica y documentación desde el día uno.</p>
                        <span class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">Más Información <span class="text-xl">→</span></span>
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
