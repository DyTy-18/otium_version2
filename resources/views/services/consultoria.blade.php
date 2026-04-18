<x-layout
    title="Consultoría Empresarial y Financiera Bolivia | Otium"
    description="Asesoría financiera, análisis organizacional y estrategia empresarial para empresas en Bolivia. Acompañamos decisiones clave con datos reales. Santa Cruz y La Paz."
>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-44 md:pb-28 overflow-hidden text-white bg-secondary">
        <!-- Decorative blobs -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-primary rounded-full mix-blend-multiply blur-3xl opacity-30 -translate-y-1/2 translate-x-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-primary rounded-full mix-blend-multiply blur-3xl opacity-20 translate-y-1/2 -translate-x-1/4 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight" data-aos="fade-up">
                    Consultoría que acompaña<span class="text-primary"> decisiones, no solo reportes</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-10 leading-relaxed font-light" data-aos="fade-up" data-aos-delay="100">
                    ¿Tienes los números pero no sabes qué hacer con ellos para crecer?
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
                        <div class="absolute inset-0 bg-green-50 rounded-2xl transform translate-x-4 translate-y-4"></div>
                        <img src="/images/otium/carousel/constitucion_de_empresas.png" alt="Consultoría Empresarial"
                            class="relative rounded-2xl shadow-xl w-full h-100 object-cover">
                    </div>
                </div>
                <div class="w-full md:w-1/2" data-aos="fade-left">
                    <span class="text-primary font-bold tracking-wider uppercase text-sm mb-2 block">Consultoría Empresarial</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Tu socio estratégico, no solo tu proveedor</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Analizamos tu modelo de negocio, tus finanzas y tus procesos para identificar oportunidades de mejora, reducir costos y diseñar una hoja de ruta para crecer con solidez.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        En <strong class="text-secondary">OTIUM</strong> integramos asesoría estratégica, planeación financiera y acompañamiento en constitución y reestructuración de empresas — desde el inicio hasta la optimización completa.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Grid -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-16" data-aos="fade-up">Por qué elegir nuestra Consultoría</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary" data-aos="fade-up">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Visión integral del negocio</h3>
                    <p class="text-gray-600">No miramos solo los números — analizamos procesos, estructura y estrategia para darte recomendaciones con impacto real.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Planeación financiera sólida</h3>
                    <p class="text-gray-600">Proyecciones, flujo de caja y análisis de escenarios para decisiones estratégicas fundamentadas.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Constitución y reestructuración</h3>
                    <p class="text-gray-600">Acompañamiento desde el inicio legal de tu empresa hasta cambios en estructura societaria y operativa.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Optimización de costos</h3>
                    <p class="text-gray-600">Identificamos gastos innecesarios y oportunidades de eficiencia operativa y financiera con impacto medible.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Equipo dedicado</h3>
                    <p class="text-gray-600">Un equipo que conoce tu negocio y te acompaña en cada decisión importante, no solo en las urgentes.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Resultados medibles</h3>
                    <p class="text-gray-600">Definimos indicadores de éxito desde el inicio para que puedas medir el impacto de nuestra asesoría.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Deliverables -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-16" data-aos="fade-up">¿Qué incluye nuestro servicio?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex gap-4" data-aos="fade-right">
                    <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Asesoría financiera y empresarial</h4>
                        <p class="text-gray-600">Análisis de estados financieros, flujo de caja y proyecciones para decisiones estratégicas fundamentadas.</p>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-left">
                    <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Análisis y diagnósticos organizacionales</h4>
                        <p class="text-gray-600">Evaluación de procesos, estructura y modelo de negocio para identificar brechas y oportunidades de mejora.</p>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-right">
                    <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Estrategia y planificación</h4>
                        <p class="text-gray-600">Hoja de ruta con objetivos, indicadores y acciones concretas alineadas al crecimiento de tu empresa.</p>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-left">
                    <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Acompañamiento en decisiones clave</h4>
                        <p class="text-gray-600">Reuniones periódicas para revisar avances, ajustar la estrategia y responder consultas del directorio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-secondary text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16" data-aos="fade-up">Nuestro Proceso de Trabajo</h2>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8 text-center relative">
                <div class="hidden md:block absolute top-8 left-1/10 right-1/10 h-1 bg-white/20 z-0"></div>
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">1</div>
                    <h3 class="font-bold text-xl mb-2">Diagnóstico</h3>
                    <p class="text-sm text-white/80">Evaluación de situación financiera, operativa y estratégica.</p>
                </div>
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">2</div>
                    <h3 class="font-bold text-xl mb-2">Diseño</h3>
                    <p class="text-sm text-white/80">Plan estratégico con objetivos, indicadores y acciones prioritarias.</p>
                </div>
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">3</div>
                    <h3 class="font-bold text-xl mb-2">Implementación</h3>
                    <p class="text-sm text-white/80">Ejecución de iniciativas con acompañamiento continuo.</p>
                </div>
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">4</div>
                    <h3 class="font-bold text-xl mb-2">Seguimiento</h3>
                    <p class="text-sm text-white/80">Revisión periódica de avances y ajuste de estrategias.</p>
                </div>
                <div class="relative z-10 transition-transform duration-300 hover:-translate-y-2 hover:scale-105 cursor-pointer" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg border-4 border-secondary">5</div>
                    <h3 class="font-bold text-xl mb-2">Optimización</h3>
                    <p class="text-sm text-white/80">Mejora continua basada en resultados y nuevos desafíos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Preguntas Frecuentes</h2>
            <div class="space-y-4" x-data="{ active: null }">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 1 ? null : 1)" class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿En qué se diferencia la consultoría del outsourcing contable?</span>
                        <span x-text="active === 1 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 1" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        El outsourcing contable gestiona operaciones del día a día. La consultoría empresarial va más allá: analiza tu modelo de negocio, define estrategia, optimiza estructura y acompaña decisiones de alto impacto.
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 2 ? null : 2)" class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Pueden ayudarnos a constituir una empresa nueva?</span>
                        <span x-text="active === 2 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 2" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Sí. Acompañamos todo el proceso: elección del tipo societario, registro comercial, obtención de NIT y estructura legal óptima para tu actividad y objetivos de negocio.
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 3 ? null : 3)" class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Trabajan con empresas que ya están en crisis financiera?</span>
                        <span x-text="active === 3 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 3" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Sí. Tenemos experiencia en reestructuración financiera y operativa. Diagnosticamos la situación, priorizamos acciones urgentes y diseñamos un plan de recuperación realista.
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 4 ? null : 4)" class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Cuánto tiempo dura un proyecto de consultoría?</span>
                        <span x-text="active === 4 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 4" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Depende del alcance. Un diagnóstico puede durar 2 semanas. Un acompañamiento estratégico continuo puede ser mensual por 6 a 12 meses. Definimos el alcance juntos en la primera reunión.
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 5 ? null : 5)" class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Cómo empiezo con OTIUM?</span>
                        <span x-text="active === 5 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 5" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Contáctanos para una reunión inicial gratuita. Escuchamos tu situación, identificamos las áreas de mayor oportunidad y presentamos una propuesta adaptada a tus objetivos.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section id="contact" class="py-24 bg-secondary relative overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary opacity-20 rounded-full translate-x-1/3 translate-y-1/3"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-8" data-aos="fade-up">¿Listo para crecer con estrategia?</h2>
            <p class="text-xl text-white opacity-90 mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Contáctenos hoy para una consulta inicial gratuita con nuestros expertos.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('contact') }}" class="px-10 py-4 bg-primary text-white rounded-lg font-bold shadow-xl hover:bg-white hover:text-primary transition-all duration-300">Contáctenos Ahora</a>
            </div>
        </div>
    </section>

</x-layout>
