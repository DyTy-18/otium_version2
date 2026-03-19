<x-layout>
    <!-- 2. Hero Section -->
    <section id="home" class="relative pt-24 pb-16 md:pt-32 md:pb-24 overflow-hidden">
        <!-- Floating Backgroung Elements -->
        <div
            class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-brand-light rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob">
        </div>
        <div
            class="absolute top-0 left-0 -ml-20 -mt-20 w-96 h-96 bg-teal-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <!-- Text Column (60%) -->
                <div class="w-full md:w-3/5 mb-12 md:mb-0 pr-0 md:pr-12" data-aos="fade-up" data-aos-duration="800">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                        Transformamos la gestión <span class="text-primary">Financiera y Digital</span> de tu empresa
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-xl">
                        Acompañamos a medianas y grandes empresas con soluciones integrales en outsourcing contable y
                        financiero, auditoría, análisis de datos y transformación digital.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}"
                            class="px-8 py-3 bg-primary text-white rounded-lg font-semibold shadow-lg hover:bg-red-700 hover:shadow-xl transition-all transform hover:-translate-y-1 text-center">
                            Solicitar Consulta
                        </a>
                        <a href="{{ route('services.index') }}"
                            class="px-8 py-3 border-2 border-primary text-primary rounded-lg font-semibold hover:bg-red-50 transition-colors text-center">
                            Nuestros Servicios
                        </a>
                    </div>
                </div>

                <!-- Image Column (40%) -->
                <div class="w-full md:w-2/5" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <div
                        class="relative transform rotate-2 hover:rotate-0 transition-transform duration-500 hover:scale-105">
                        <div
                            class="absolute inset-0 bg-primary opacity-20 blur-lg rounded-2xl transform translate-x-4 translate-y-4">
                        </div>
                        <img src="/images/hero-corporate.png" alt="OTIUM Corporate"
                            class="relative rounded-2xl shadow-2xl w-full object-cover h-auto animate-float">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW: Stats Section -->
    <section class="bg-primary py-12 text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-red-800">
                <div data-aos="fade-up">
                    <span class="block text-4xl font-bold mb-2">500+</span>
                    <span class="text-red-100 text-sm uppercase tracking-wide">Proyectos Completados</span>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <span class="block text-4xl font-bold mb-2">15+</span>
                    <span class="text-red-100 text-sm uppercase tracking-wide">Años de Experiencia</span>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <span class="block text-4xl font-bold mb-2">100%</span>
                    <span class="text-red-100 text-sm uppercase tracking-wide">Satisfacción Cliente</span>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <span class="block text-4xl font-bold mb-2">50+</span>
                    <span class="text-red-100 text-sm uppercase tracking-wide">Expertos Financieros</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Nuestro Enfoque -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Nuestro Enfoque</h2>
                <p class="text-gray-600">Garantizamos resultados mediante procesos rigurosos y tecnología avanzada.</p>
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cierres contables a tiempo</h3>
                    <p class="text-gray-600 leading-relaxed">Garantizamos cierres mensuales puntuales para tu
                        tranquilidad financiera.</p>
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cumplimiento tributario</h3>
                    <p class="text-gray-600 leading-relaxed">Gestión fiscal rigurosa sin sorpresas ni contingencias para
                        tu empresa.</p>
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Dashboards en Power BI</h3>
                    <p class="text-gray-600 leading-relaxed">Visualización de datos ejecutivos para decisiones
                        informadas al instante.</p>
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Integración de Sistemas</h3>
                    <p class="text-gray-600 leading-relaxed">Conectamos SAP/Odoo con Microsoft 365, SharePoint y Power
                        BI.</p>
                </div>

                <!-- Item 5 -->
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-md hover:shadow-xl transition-all hover:-translate-y-2 duration-300"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="w-12 h-12 bg-teal-50 rounded-lg flex items-center justify-center mb-6 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Equipos Bilingües</h3>
                    <p class="text-gray-600 leading-relaxed">Profesionales con acreditaciones internacionales a tu
                        servicio.</p>
                </div>

                <!-- Item 6 -->
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-md hover:shadow-xl transition-all hover:-translate-y-2 duration-300"
                    data-aos="fade-up" data-aos-delay="500">
                    <div class="w-12 h-12 bg-teal-50 rounded-lg flex items-center justify-center mb-6 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">+14 Años de Experiencia</h3>
                    <p class="text-gray-600 leading-relaxed">Especialistas en alimentos, exportación y servicios
                        corporativos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Por Qué Elegirnos -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center" data-aos="fade-down">Por Qué Elegirnos</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="space-y-8">
                    <div class="flex gap-4 items-start" data-aos="fade-right">
                        <div
                            class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center shrink-0 text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Metodologías Modernas</h3>
                            <p class="text-gray-600">Aplicamos las mejores prácticas en contabilidad, auditoría y
                                Business Intelligence. Procesos diseñados para minimizar riesgos.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start" data-aos="fade-right" data-aos-delay="100">
                        <div
                            class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center shrink-0 text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Integraciones Avanzadas</h3>
                            <p class="text-gray-600">Expertos en conectar SAP/Odoo con el ecosistema Microsoft 365.
                                Automatizamos flujos para ahorrar tiempo.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start" data-aos="fade-right" data-aos-delay="200">
                        <div
                            class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center shrink-0 text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Acompañamiento Estratégico</h3>
                            <p class="text-gray-600">No solo operamos, asesoramos. Nuestro equipo senior se involucra
                                en tus decisiones clave.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start" data-aos="fade-right" data-aos-delay="300">
                        <div
                            class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center shrink-0 text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v6m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Proyectos Exitosos</h3>
                            <p class="text-gray-600">Experiencia transversal en múltiples industrias con soluciones
                                probadas y efectivas.</p>
                        </div>
                    </div>
                </div>

                <!-- Image Side -->
                <div class="relative h-full min-h-[400px]" data-aos="fade-left">
                    <img src="/images/hero-corporate.png" alt="Why Choose Us"
                        class="absolute inset-0 w-full h-full object-cover rounded-2xl shadow-xl">
                    <div class="absolute inset-0 bg-accent/20 rounded-2xl mix-blend-multiply"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. INTERACTIVE SERVICES (Gradient Bg) -->
    <section id="services" class="py-24 text-white overflow-hidden relative" style="background: linear-gradient(135deg, #C48273 0%, #a05d4e 100%);"
        x-data="{ activeService: 'outsourcing' }">
        <!-- Light glow top-left -->
        <div class="absolute top-0 left-0 w-96 h-96 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none opacity-20" style="background: #FFE5DA;"></div>
        <!-- Primary glow bottom-right -->
        <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full blur-3xl translate-x-1/2 translate-y-1/2 pointer-events-none opacity-20" style="background: #B3271A;"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16" data-aos="fade-down">
                <span class="text-white/80 font-semibold tracking-wider uppercase text-sm">Nuestra Oferta</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-2 text-white">Nuestros Servicios</h2>
                <p class="text-white/90 mt-4 max-w-2xl mx-auto mb-6">Soluciones integrales diseñadas para cada etapa de
                    tu
                    negocio.</p>

            </div>

            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Main Content Display (Left/Top) -->
                <div class="w-full lg:w-2/3" data-aos="fade-right">
                    <!-- Added zoom-in animation -->
                    <div class="relative aspect-video rounded-2xl overflow-hidden shadow-2xl border border-white/20 bg-black/20 backdrop-blur-sm"
                        data-aos="zoom-in">

                        <!-- View 1: Outsourcing/Contable -->
                        <div x-show="activeService === 'outsourcing'"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100" class="absolute inset-0">
                            <img src="/images/meeting.png" alt="Outsourcing Contable"
                                class="w-full h-full object-cover opacity-70">
                            <div
                                class="absolute inset-0 bg-linear-to-t from-black via-black/60 to-transparent">
                            </div>
                            <div class="absolute bottom-8 left-8 right-8">
                                <h3 class="text-3xl font-bold text-white mb-4">Outsourcing Contable y Financiero</h3>
                                <p class="text-white text-lg mb-4">Tu departamento contable externo. Nos encargamos de
                                    tus libros, obligaciones fiscales y reportes financieros con precisión absoluta.</p>
                                <ul class="grid grid-cols-2 gap-2 text-white font-bold">
                                    <li>✔ Cierres Mensuales</li>
                                    <li>✔ Cumplimiento Legal</li>
                                </ul>
                            </div>
                        </div>

                        <!-- View 2: Transformación Digital -->
                        <div x-show="activeService === 'digital'"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100" style="display: none;"
                            class="absolute inset-0">
                            <img src="/images/dashboard.png" alt="Transformación Digital"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-linear-to-t from-black via-black/60 to-transparent">
                            </div>
                            <div class="absolute bottom-8 left-8 right-8">
                                <h3 class="text-3xl font-bold text-white mb-4">Transformación Digital e Inteligencia de
                                    Negocios</h3>
                                <p class="text-white text-lg mb-4">Digitaliza y automatiza tus procesos. Implementamos
                                    Cloud Computing y dashboards en Power BI para decisiones estratégicas.</p>
                                <ul class="grid grid-cols-2 gap-2 text-white font-bold">
                                    <li>✔ Power BI & Analytics</li>
                                    <li>✔ Automatización de Procesos</li>
                                </ul>
                            </div>
                        </div>

                        <!-- View 3: Auditoría -->
                        <div x-show="activeService === 'auditoria'"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100" style="display: none;"
                            class="absolute inset-0">
                            <img src="/images/carousel_security.png" alt="Auditoría"
                                class="w-full h-full object-cover opacity-70">
                            <div class="absolute inset-0 bg-linear-to-t from-black via-black/60 to-transparent"></div>
                            <div class="absolute bottom-8 left-8 right-8">
                                <h3 class="text-3xl font-bold text-white mb-4">Auditoría y Consultoría</h3>
                                <p class="text-white text-lg mb-4">Validación independiente y confianza para tus decisiones.
                                    Evaluamos riesgos y optimizamos controles.</p>
                                <ul class="grid grid-cols-2 gap-2 text-white font-bold">
                                    <li>✔ Evaluación de Riesgos</li>
                                    <li>✔ Control Interno</li>
                                </ul>
                            </div>
                        </div>

                        <!-- View 4: Constitución de Empresas -->
                        <div x-show="activeService === 'legal'"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100" style="display: none;"
                            class="absolute inset-0">
                            <img src="/images/carousel_strategy.png" alt="Constitución de Empresas"
                                class="w-full h-full object-cover opacity-70">
                            <div class="absolute inset-0 bg-linear-to-t from-black via-black/60 to-transparent"></div>
                            <div class="absolute bottom-8 left-8 right-8">
                                <h3 class="text-3xl font-bold text-white mb-4">Constitución de Empresas</h3>
                                <p class="text-white text-lg mb-4">Acompañamos desde el inicio legal de tu empresa hasta su
                                    estructura óptima. Rápido, seguro y sin burocracia.</p>
                                <ul class="grid grid-cols-2 gap-2 text-white font-bold">
                                    <li>✔ Registro Comercial</li>
                                    <li>✔ Estructura Legal</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation (Right/Bottom) -->
                <div class="w-full lg:w-1/3 flex flex-col justify-center space-y-4" data-aos="fade-left">
                    <button @click="activeService = 'outsourcing'"
                        :class="{ 'bg-white/20 border-white shadow-lg': activeService === 'outsourcing', 'bg-white/5 border-white/10 hover:bg-white/10': activeService !== 'outsourcing' }"
                        class="p-6 rounded-xl border transition-all text-left group" data-aos="fade-up"
                        data-aos-delay="0">
                        <div class="flex items-center justify-between mb-2">
                            <h4 :class="{ 'text-white': activeService === 'outsourcing', 'text-white/80': activeService !== 'outsourcing' }"
                                class="font-bold text-lg transition-colors">Outsourcing Contable</h4>
                            <svg class="w-5 h-5 text-white/70" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-white/70 text-sm">Gestión integral de libros y obligaciones.</p>
                    </button>

                    <button @click="activeService = 'digital'"
                        :class="{ 'bg-white/20 border-white shadow-lg': activeService === 'digital', 'bg-white/5 border-white/10 hover:bg-white/10': activeService !== 'digital' }"
                        class="p-6 rounded-xl border transition-all text-left group" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="flex items-center justify-between mb-2">
                            <h4 :class="{ 'text-white': activeService === 'digital', 'text-white/80': activeService !== 'digital' }"
                                class="font-bold text-lg transition-colors">Transformación Digital</h4>
                            <svg class="w-5 h-5 text-white/70" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-white/70 text-sm">Power BI, Cloud y Automatización.</p>
                    </button>

                    <button @click="activeService = 'auditoria'"
                        :class="{ 'bg-white/20 border-white shadow-lg': activeService === 'auditoria', 'bg-white/5 border-white/10 hover:bg-white/10': activeService !== 'auditoria' }"
                        class="p-6 rounded-xl border transition-all text-left group" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="flex items-center justify-between mb-2">
                            <h4 :class="{ 'text-white': activeService === 'auditoria', 'text-white/80': activeService !== 'auditoria' }"
                                class="font-bold text-lg transition-colors">Auditoría</h4>
                            <svg class="w-5 h-5 text-white/70" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-white/70 text-sm">Validación independiente y fiscal.</p>
                    </button>

                    <button @click="activeService = 'legal'"
                        :class="{ 'bg-white/20 border-white shadow-lg': activeService === 'legal', 'bg-white/5 border-white/10 hover:bg-white/10': activeService !== 'legal' }"
                        class="p-6 rounded-xl border transition-all text-left group" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="flex items-center justify-between mb-2">
                            <h4 :class="{ 'text-white': activeService === 'legal', 'text-white/80': activeService !== 'legal' }"
                                class="font-bold text-lg transition-colors">Constitución de Empresas</h4>
                            <svg class="w-5 h-5 text-white/70" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <p class="text-white/70 text-sm">Registro legal y estructura empresarial.</p>
                    </button>

                    <a href="{{ route('services.index') }}"
                        class="block text-center text-white/80 hover:text-white font-semibold hover:underline mt-2"
                        data-aos="fade-up" data-aos-delay="400">Ver Todos los Servicios →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Quiénes Somos (UPDATED SECTION) -->
    <section id="about" class="py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-6 space-y-24">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <!-- Enlarged Layout without rotation -->
                <div class="w-full md:w-1/2 relative" data-aos="fade-right">
                    <div class="relative w-full h-[500px] md:h-[600px] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="/images/meeting.png" alt="Equipo OTIUM" class="w-full h-full object-cover">
                        <!-- Gradient fade to white at the bottom -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-white via-white/40 to-transparent">
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2" data-aos="fade-left">
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Quiénes Somos</h3>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Somos una firma de consultoría con oficinas en <strong>La Paz y Santa Cruz</strong>. Guiamos a
                        empresas y emprendedores desde su constitución hasta la optimización completa de sus operaciones
                        financieras, tributarias y digitales.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Ayudamos a organizaciones bolivianas y extranjeras a ordenar sus finanzas, mejorar la eficiencia
                        operativa y escalar mediante tecnología.
                    </p>
                    <div class="flex gap-4">
                        <span class="px-4 py-2 bg-gray-100 rounded-full text-sm font-semibold text-gray-700">📍 Oficina
                            La Paz</span>
                        <span class="px-4 py-2 bg-gray-100 rounded-full text-sm font-semibold text-gray-700">📍 Oficina
                            Santa Cruz</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Testimonials (Carousel 6 items, 3 per view) -->
    <section class="py-20 bg-gray-50" x-data="{ activePage: 0 }">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-4 text-center">Lo que dicen nuestros clientes</h2>
            <p class="text-center text-gray-600 mb-12">La confianza de nuestros clientes es nuestro mayor activo.</p>

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
                            <p class="text-gray-600 italic mb-6 relative z-10">OTIUM transformó nuestra gestión
                                financiera. Su atención al detalle y consejos estratégicos nos ayudaron a optimizar
                                nuestros recursos.</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    CM</div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Carlos Mendoza</h4>
                                    <p class="text-xs text-gray-500">CEO, TechSolutions</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div
                            class="bg-white p-8 rounded-xl shadow-lg relative hover:-translate-y-2 transition-transform duration-300">
                            <div class="text-6xl text-primary opacity-20 absolute top-4 left-4 font-serif">"</div>
                            <p class="text-gray-600 italic mb-6 relative z-10">Profesionalismo puro. Nos guiaron a
                                través de una auditoría compleja sin problemas. Altamente recomendados.</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-accent rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    AG</div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Ana García</h4>
                                    <p class="text-xs text-gray-500">Directora Financiera, Grupo Alfa</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div
                            class="bg-white p-8 rounded-xl shadow-lg relative hover:-translate-y-2 transition-transform duration-300">
                            <div class="text-6xl text-primary opacity-20 absolute top-4 left-4 font-serif">"</div>
                            <p class="text-gray-600 italic mb-6 relative z-10">El equipo de OTIUM no solo son
                                auditores, son socios estratégicos. Su visión nos ayudó a expandirnos con seguridad.</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    RD</div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Roberto Díaz</h4>
                                    <p class="text-xs text-gray-500">Fundador, Inversiones RD</p>
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
                            <p class="text-gray-600 italic mb-6 relative z-10">Gracias a sus dashboards en Power BI,
                                ahora tomamos decisiones basadas en datos reales y no en suposiciones.</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-accent rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    MG</div>
                                <div>
                                    <h4 class="font-bold text-gray-900">María González</h4>
                                    <p class="text-xs text-gray-500">Gerente General, Importadora Sur</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div
                            class="bg-white p-8 rounded-xl shadow-lg relative hover:-translate-y-2 transition-transform duration-300">
                            <div class="text-6xl text-primary opacity-20 absolute top-4 left-4 font-serif">"</div>
                            <p class="text-gray-600 italic mb-6 relative z-10">La integración de Odoo con nuestras
                                operaciones fue impecable. Un equipo técnico de primer nivel.</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    JT</div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Javier Torrez</h4>
                                    <p class="text-xs text-gray-500">CTO, DataBolivia</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 6 -->
                        <div
                            class="bg-white p-8 rounded-xl shadow-lg relative hover:-translate-y-2 transition-transform duration-300">
                            <div class="text-6xl text-primary opacity-20 absolute top-4 left-4 font-serif">"</div>
                            <p class="text-gray-600 italic mb-6 relative z-10">Su asesoría tributaria nos permitió
                                reestructurar costos y mejorar nuestra rentabilidad un 15% el primer año.</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    LF</div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Lucía Fernández</h4>
                                    <p class="text-xs text-gray-500">VP Operaciones, Logística Global</p>
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
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Últimos Insights</h2>
                    <p class="text-gray-600">Mantente informado con nuestras últimas publicaciones sobre finanzas,
                        impuestos y tecnología.</p>
                </div>
                <a href="{{ route('blog.index') }}" class="hidden md:block text-primary font-semibold hover:underline">
                    Ver todas las publicaciones &rarr;
                </a>
            </div>

            @if($latestPosts->isNotEmpty())
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($latestPosts as $i => $post)
                <article class="group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all hover:-translate-y-2 duration-300 cursor-pointer"
                         data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <a href="{{ route('blog.show', $post->slug) }}" class="block">
                        @if($post->image)
                            <div class="h-48 overflow-hidden">
                                <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                        @else
                            <div class="h-48 bg-linear-to-br from-primary/10 to-accent/10 flex items-center justify-center">
                                <svg class="w-10 h-10 text-primary/30 group-hover:text-primary/50 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                        @endif
                    </a>
                    <a href="{{ route('blog.show', $post->slug) }}" class="block p-6">
                        <div class="flex items-center gap-2 text-xs text-gray-500 mb-3 group-hover:text-primary/70 transition-colors duration-300">
                            @if($post->category)
                                <span class="text-primary font-bold">{{ $post->category->name }}</span>
                                <span>•</span>
                            @endif
                            <span>{{ $post->published_at->format('d M, Y') }}</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors duration-300">{{ $post->title }}</h3>
                        @if($post->excerpt)
                            <p class="text-gray-500 text-sm mb-4 line-clamp-2 group-hover:text-primary/60 transition-colors duration-300">{{ $post->excerpt }}</p>
                        @endif
                        <span class="text-primary text-sm font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all duration-300">
                            Leer más
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                </article>
                @endforeach
            </div>
            @else
            <div class="text-center py-12 bg-gray-50 rounded-2xl">
                <p class="text-gray-400">Próximamente compartiremos nuestros primeros artículos.</p>
                <a href="{{ route('blog.index') }}" class="mt-3 inline-block text-primary text-sm font-semibold hover:underline">
                    Ir al blog →
                </a>
            </div>
            @endif
        </div>
    </section>

    <!-- 10. CTA Final -->
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
