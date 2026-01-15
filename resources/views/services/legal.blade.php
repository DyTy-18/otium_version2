<x-layout>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden text-white">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="/images/carousel_strategy.png" alt="Constitución de Empresas" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 to-secondary/80"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight" data-aos="fade-up">
                    Constitución de<span class="text-primary"> Empresas</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-10 leading-relaxed font-light" data-aos="fade-up"
                    data-aos-delay="100">
                    Dar vida legal a un negocio en Bolivia implica múltiples pasos y trámites. En Constitución de
                    Empresas, te acompañamos en todo el proceso.
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
                        <img src="/images/hero-corporate.png" alt="Tu Empresa, Legalmente Sólida"
                            class="relative rounded-2xl shadow-xl w-full h-[400px] object-cover">
                    </div>
                </div>
                <div class="w-full md:w-1/2" data-aos="fade-left">
                    <span class="text-primary font-bold tracking-wider uppercase text-sm mb-2 block">Constitución de
                        Empresas</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Tu Empresa, Legalmente Sólida</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Tanto si eres un emprendedor iniciando su primer proyecto como si representas a una empresa
                        extranjera expandiéndose al país, nuestro equipo facilita la apertura de tu empresa de manera
                        rápida, segura y conforme a normativa.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Grid -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-16" data-aos="fade-up">Constitución de Empresas
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Asesoramiento desde el inicio</h3>
                    <p class="text-gray-600">Te ayudamos a definir la figura legal más conveniente (SRL, SA, etc.) según
                        tus objetivos. Tomar esta decisión correctamente evitará cambios costosos.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Trámites simplificados</h3>
                    <p class="text-gray-600">Olvídate de peregrinar por oficinas públicas. Nosotros gestionamos todo:
                        reserva de nombre, minuta, notaría, registro de comercio y NIT.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cumplimiento integral</h3>
                    <p class="text-gray-600">Aseguramos que cumplas con obligaciones mercantiles, tributarias y
                        laborales (cajas de salud, AFPs) desde el primer día.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Agilidad y experiencia local</h3>
                    <p class="text-gray-600">Aceleramos el proceso gracias a nuestra experiencia. Conocemos los
                        requisitos al detalle y anticipamos observaciones para evitar demoras.</p>
                </div>

                <!-- Card 5 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v6m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Base administrativa sólida</h3>
                    <p class="text-gray-600">Te orientamos en los primeros pasos: apertura de cuentas bancarias,
                        emisión de facturas y plan básico de contabilidad.</p>
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
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Escritura de constitución y estatutos</h4>
                        <p class="text-gray-600">Documento legal firmado ante notario que da origen a tu empresa.
                            Entregamos copia protocolizada y testimonios.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex gap-4" data-aos="fade-left">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v6m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Matrícula de comercio</h4>
                        <p class="text-gray-600">Inscripción exitosa en el Registro de Comercio que acredita la
                            existencia oficial de tu empresa.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex gap-4" data-aos="fade-right">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">NIT y registro tributario</h4>
                        <p class="text-gray-600">Gestión del Número de Identificación Tributaria ante autoridades
                            fiscales, habilitándote para facturar.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="flex gap-4" data-aos="fade-left">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Registro en entidades laborales</h4>
                        <p class="text-gray-600">Inscripción en cajas de salud, AFPs y Ministerio de Trabajo para
                            asegurar cobertura social a tu personal.</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="flex gap-4" data-aos="fade-right">
                    <div
                        class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Kit de inicio administrativo</h4>
                        <p class="text-gray-600">Paquete con guías prácticas, formatos de contratos, calendario de
                            obligaciones y recomendaciones iniciales.</p>
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
                    <h3 class="font-bold text-xl mb-2">Reunión</h3>
                    <p class="text-sm text-white/80">Conocemos tu proyecto y recopilamos documentos.</p>
                </div>

                <!-- Step 2 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        2</div>
                    <h3 class="font-bold text-xl mb-2">Preparación</h3>
                    <p class="text-sm text-white/80">Redactamos minuta y coordinamos firma notarial.</p>
                </div>

                <!-- Step 3 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        3</div>
                    <h3 class="font-bold text-xl mb-2">Inscripciones</h3>
                    <p class="text-sm text-white/80">Inscribimos en Registro de Comercio y tramitamos NIT.</p>
                </div>

                <!-- Step 4 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        4</div>
                    <h3 class="font-bold text-xl mb-2">Complementarios</h3>
                    <p class="text-sm text-white/80">Realizamos inscripciones adicionales (alcaldía, cajas).</p>
                </div>

                <!-- Step 5 -->
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">
                        5</div>
                    <h3 class="font-bold text-xl mb-2">Entrega</h3>
                    <p class="text-sm text-white/80">Entregamos documentos y repasamos obligaciones.</p>
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
                        <span class="font-bold text-gray-900">¿Qué tipo de empresa me conviene crear?</span>
                        <span x-text="active === 1 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 1" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Depende de tus planes. SRL es ideal para pocos socios, SA para atraer inversionistas y
                        unipersonal es sencilla. Te asesoramos para elegir la mejor opción.
                    </div>
                </div>

                <!-- Q2 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 2 ? null : 2)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Cuánto tiempo tarda constituir una empresa?</span>
                        <span x-text="active === 2 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 2" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Generalmente entre 2 a 6 semanas. Varía según documentos y tiempos de instituciones. Intentamos
                        acortar plazos.
                    </div>
                </div>

                <!-- Q3 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 3 ? null : 3)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Qué documentos debo aportar?</span>
                        <span x-text="active === 3 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 3" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Copias de cédulas de identidad, nombre deseado, actividad y domicilio legal. Si hay socios
                        extranjeros, se pueden requerir poderes.
                    </div>
                </div>

                <!-- Q4 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 4 ? null : 4)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Pueden constituir una empresa para extranjeros?</span>
                        <span x-text="active === 4 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 4" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Sí. Asistimos a inversionistas extranjeros, coordinando documentos y representándolos mediante
                        poder si es necesario.
                    </div>
                </div>

                <!-- Q5 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 5 ? null : 5)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Qué sigue luego de constituir mi empresa?</span>
                        <span x-text="active === 5 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 5" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Tendrás obligaciones periódicas como impuestos y contabilidad. Podemos seguir apoyándote con
                        outsourcing contable.
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
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-8" data-aos="fade-up">¿Listo para emprender?</h2>
            <p class="text-xl text-white opacity-90 mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Inicia tu empresa con paso firme. Contáctanos hoy.
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
