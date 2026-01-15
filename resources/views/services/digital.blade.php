<x-layout>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden text-white">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="/images/carousel_innovation.png" alt="Transformación Digital" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 to-secondary/80"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight" data-aos="fade-up">
                    Transformación<span class="text-primary"> Digital</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-10 leading-relaxed font-light" data-aos="fade-up"
                    data-aos-delay="100">
                    La contabilidad y la gestión financiera tradicionales están cambiando rápidamente con las nuevas
                    tecnologías.
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
                        <img src="/images/dashboard.png" alt="Eficiencia y Modernidad"
                            class="relative rounded-2xl shadow-xl w-full h-[400px] object-cover">
                    </div>
                </div>
                <div class="w-full md:w-1/2" data-aos="fade-left">
                    <span class="text-primary font-bold tracking-wider uppercase text-sm mb-2 block">Transformación
                        Digital</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Eficiencia y Modernidad</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        En nuestro servicio de Transformación Digital, llevamos tus procesos contables y administrativos
                        al siguiente nivel de eficiencia y modernidad. ¿En qué consiste? En digitalizar y automatizar
                        tus operaciones financieras: menos papeleo, más información en tiempo real y mejor control desde
                        cualquier lugar.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        La tecnología se convierte en tu aliada para que tomes decisiones informadas de forma ágil.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Grid -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-16" data-aos="fade-up">Transformación Digital
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Contabilidad sin papel</h3>
                    <p class="text-gray-600">Desmaterializamos la documentación física y migramos todo a formatos
                        electrónicos seguros en la nube, accesibles con unos clics.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Información en tiempo real</h3>
                    <p class="text-gray-600">Con sistemas contables modernos, podrás ver el estado financiero de tu
                        empresa al día. Tableros de control y reportes actualizados.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Automatización de tareas</h3>
                    <p class="text-gray-600">Implementamos herramientas que ejecutan automáticamente procesos
                        repetitivos como conciliaciones bancarias o emisión de facturas.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Integración de sistemas</h3>
                    <p class="text-gray-600">Conectamos tus plataformas de negocio (facturación, inventarios, bancos,
                        CRM) con tu contabilidad para eliminar la doble digitación.</p>
                </div>

                <!-- Card 5 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Adaptación y capacitación</h3>
                    <p class="text-gray-600">Capacitamos a tu equipo en el uso de las nuevas herramientas y brindamos
                        acompañamiento durante la transición.</p>
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
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Implementación de software contable</h4>
                        <p class="text-gray-600">Asesoría, configuración y migración a la plataforma adecuada (somos
                            partners de Alegra).</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex gap-4" data-aos="fade-left">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Migración de datos y respaldo</h4>
                        <p class="text-gray-600">Digitalización de registros, importación de catálogos y traslado de
                            saldos e historial al nuevo entorno.</p>
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
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Reportes y dashboards</h4>
                        <p class="text-gray-600">Reportes financieros a medida y paneles visuales interactivos para
                            obtener insights valiosos.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="flex gap-4" data-aos="fade-left">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Manual de procesos digitales</h4>
                        <p class="text-gray-600">Guía de referencia clara que describe cómo llevar a cabo las tareas
                            cotidianas en las nuevas plataformas.</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="flex gap-4" data-aos="fade-right">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Capacitación y soporte</h4>
                        <p class="text-gray-600">Sesiones de entrenamiento y periodo de soporte post-implementación
                            para asegurar el éxito.</p>
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
                    <h3 class="font-bold text-xl mb-2">Evaluación</h3>
                    <p class="text-sm text-white/80">Analizamos situación actual y dolores operativos.</p>
                </div>

                <!-- Step 2 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        2</div>
                    <h3 class="font-bold text-xl mb-2">Plan</h3>
                    <p class="text-sm text-white/80">Diseñamos un plan y seleccionamos herramientas.</p>
                </div>

                <!-- Step 3 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        3</div>
                    <h3 class="font-bold text-xl mb-2">Implementación</h3>
                    <p class="text-sm text-white/80">Configuramos soluciones, migramos datos y probamos.</p>
                </div>

                <!-- Step 4 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        4</div>
                    <h3 class="font-bold text-xl mb-2">Formación</h3>
                    <p class="text-sm text-white/80">Capacitamos a tu personal y gestionamos el cambio.</p>
                </div>

                <!-- Step 5 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        5</div>
                    <h3 class="font-bold text-xl mb-2">Acompañamiento</h3>
                    <p class="text-sm text-white/80">Lanzamos los nuevos procesos y te acompañamos.</p>
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
                        <span class="font-bold text-gray-900">¿Implica cambiar todo mi software actual?</span>
                        <span x-text="active === 1 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 1" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        No necesariamente. Evaluamos caso por caso. A veces basta con integrar lo que ya tienes; otras,
                        recomendaremos un software más moderno si es beneficioso.
                    </div>
                </div>

                <!-- Q2 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 2 ? null : 2)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Qué tan seguro es manejar la contabilidad en la
                            nube?</span>
                        <span x-text="active === 2 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 2" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Muy seguro. Las plataformas utilizan encriptación de nivel bancario. Además, configuramos
                        accesos seguros y backups. Suele ser más seguro que servidores locales.
                    </div>
                </div>

                <!-- Q3 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 3 ? null : 3)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿La transformación digital solo aplica a empresas
                            grandes?</span>
                        <span x-text="active === 3 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 3" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        En absoluto. Las pymes también obtienen grandes beneficios. Adaptamos la escala del proyecto a
                        tu tamaño, desde implementaciones sencillas hasta complejas.
                    </div>
                </div>

                <!-- Q4 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 4 ? null : 4)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Cuánto tiempo lleva ver resultados?</span>
                        <span x-text="active === 4 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 4" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Muchos resultados son inmediatos (acceso en línea). Otros, como eficiencia, se evidencian tras
                        el primer ciclo contable. En pocos meses se notan ahorros significativos.
                    </div>
                </div>

                <!-- Q5 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 5 ? null : 5)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Qué pasa si mi equipo no se adapta bien?</span>
                        <span x-text="active === 5 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 5" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Ponemos énfasis en capacitación y acompañamiento. Ofrecemos sesiones adicionales y designamos
                        "campeones digitales" para asegurar que nadie se quede atrás.
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
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-8" data-aos="fade-up">¿Listo para innovar?</h2>
            <p class="text-xl text-white opacity-90 mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Lleva tu empresa al futuro digital hoy mismo. Contáctanos.
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
