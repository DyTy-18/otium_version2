<x-layout
    title="Gestión Documental en SharePoint Bolivia | Microsoft 365 | Otium"
    description="Implementamos SharePoint como el centro documental de tu empresa: bibliotecas, permisos, listas de control y acceso remoto dentro de Microsoft 365. Bolivia."
>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-44 md:pb-28 overflow-hidden text-white bg-secondary">
        <div class="absolute top-0 right-0 w-96 h-96 bg-primary rounded-full mix-blend-multiply blur-3xl opacity-30 -translate-y-1/2 translate-x-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-primary rounded-full mix-blend-multiply blur-3xl opacity-20 translate-y-1/2 -translate-x-1/4 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight" data-aos="fade-up">
                    {{ __('Gestión Documental en SharePoint') }}
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 leading-relaxed font-light" data-aos="fade-up" data-aos-delay="100">
                    {{ __('Orden documental, control y trazabilidad dentro de Microsoft 365 para empresas en Bolivia.') }}
                </p>
                <blockquote class="border-l-4 border-primary pl-5 mb-10 text-white/80 italic text-lg" data-aos="fade-up" data-aos-delay="150">
                    "No es solo una carpeta en la nube — es un sistema documental diseñado con criterio empresarial para que tu información esté donde la necesitás, cuando la necesitás."
                </blockquote>
                <a href="{{ route('contact') }}"
                    class="inline-block px-8 py-4 bg-primary text-white font-bold rounded-lg shadow-lg hover:bg-white hover:text-primary transition-all transform hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="200">
                    {{ __('Solicitar información') }}
                </a>
            </div>
        </div>
    </section>

    <!-- Intro / Description -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2" data-aos="fade-right">
                    <div class="relative">
                        <div class="absolute inset-0 bg-blue-50 rounded-2xl transform translate-x-4 translate-y-4"></div>
                        <img src="/images/otium/carousel/transformacion_digital.png" alt="Gestión Documental SharePoint Otium"
                            class="relative rounded-2xl shadow-xl w-full h-100 object-cover">
                    </div>
                </div>
                <div class="w-full md:w-1/2" data-aos="fade-left">
                    <span class="text-primary font-bold tracking-wider uppercase text-sm mb-2 block">Gestión Documental en SharePoint</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">{{ __('Un sistema documental diseñado para tu empresa, no al revés') }}</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        En Otium implementamos SharePoint como el centro documental de tu empresa: bibliotecas organizadas, permisos por usuario, listas de control, alertas automáticas y acceso desde cualquier lugar.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        No se trata de guardar archivos en la nube — se trata de que cada documento tenga un lugar, cada proceso tenga responsables y la información crítica esté disponible cuando realmente se necesita. Diseñamos la estructura según cómo trabaja tu empresa.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Para quién es -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('¿Para quién es este servicio?') }}</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Empresas que ya tienen cierto nivel de organización pero necesitan escalar, profesionalizar sus controles y reducir la dependencia de procesos manuales o información dispersa.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary" data-aos="fade-up">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Socios o directivos fuera de Bolivia') }}</h3>
                    <p class="text-gray-600">Que necesitan acceso remoto ordenado a la documentación de la operación boliviana sin depender de que alguien les envíe archivos.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-2 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Subsidiarias con casa matriz internacional') }}</h3>
                    <p class="text-gray-600">Que deben mantener documentación accesible, ordenada y trazable para reportar o responder ante la sede central.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Empresas que pagan Microsoft 365 sin usar SharePoint') }}</h3>
                    <p class="text-gray-600">Que tienen la herramienta disponible en su licencia pero no la están aprovechando para organizar su documentación.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Negocios que comparten documentos por correo') }}</h3>
                    <p class="text-gray-600">Con varios responsables enviando versiones por correo — sin saber cuál es la final ni quién hizo qué cambio.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Empresas preparándose para auditorías') }}</h3>
                    <p class="text-gray-600">O fiscalizaciones que necesitan tener su documentación accesible, ordenada y con trazabilidad real.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-primary" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-primary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Organizaciones con dependencia de una sola persona') }}</h3>
                    <p class="text-gray-600">Que quieren reducir el riesgo de que todo el conocimiento documental esté concentrado en una persona o computadora.</p>
                </div>
            </div>
            <div class="bg-primary/10 border-l-4 border-primary rounded-xl p-6 max-w-4xl mx-auto" data-aos="fade-up">
                <p class="text-gray-700 text-lg">
                    <strong class="text-primary">El problema que comparten:</strong> La información importante está en cinco lugares distintos — y cuando alguien la necesita urgente, nadie sabe exactamente dónde está ni quién tiene la versión correcta.
                </p>
            </div>
        </div>
    </section>

    <!-- Qué incluye -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-16" data-aos="fade-up">{{ __('¿Qué incluye el servicio?') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex gap-4" data-aos="fade-right">
                    <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Diagnóstico documental inicial</h4>
                        <p class="text-gray-600">Relevamiento de cómo trabaja la empresa y qué necesita ordenar — antes de diseñar cualquier estructura.</p>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-left">
                    <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Diseño de estructura SharePoint</h4>
                        <p class="text-gray-600">Bibliotecas, carpetas, listas, permisos, vistas y responsables — diseñados según la realidad de cada empresa.</p>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-right">
                    <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Implementación técnica en Microsoft 365</h4>
                        <p class="text-gray-600">Configuración completa del entorno dentro de la licencia de Microsoft 365 del cliente.</p>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-left">
                    <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Listas de control operativas</h4>
                        <p class="text-gray-600">Obligaciones, vencimientos, contratos, personal, tareas y pendientes integrados como listas dentro de SharePoint.</p>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-right">
                    <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Organización por proceso</h4>
                        <p class="text-gray-600">Contable, tributario, laboral, contractual, societario y reportes — cada área con su repositorio definido.</p>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-left">
                    <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Manuales y procedimientos documentales</h4>
                        <p class="text-gray-600">Guía de uso interna para que el equipo sepa dónde guardar, cómo nombrar y quién es responsable de qué.</p>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-right">
                    <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Capacitación a usuarios responsables</h4>
                        <p class="text-gray-600">Entrenamiento al equipo para adoptar la estructura sin depender de soporte externo en el día a día.</p>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-left">
                    <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">
                            Automatizaciones con Power Automate
                            <span class="ml-2 inline-block bg-gray-100 text-gray-500 text-xs font-semibold px-2 py-0.5 rounded">Complemento</span>
                        </h4>
                        <p class="text-gray-600">Alertas, flujos de aprobación y recordatorios automáticos — disponible como módulo adicional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Qué recibe el cliente -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-16" data-aos="fade-up">{{ __('¿Qué recibe tu empresa al final?') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex gap-4" data-aos="fade-up">
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="text-gray-700 font-medium">Diagnóstico y mapa de necesidades documentales</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex gap-4" data-aos="fade-up" data-aos-delay="50">
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="text-gray-700 font-medium">Estructura SharePoint diseñada e implementada</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex gap-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="text-gray-700 font-medium">Bibliotecas y listas de control operativas</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex gap-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="text-gray-700 font-medium">Permisos configurados por usuario y área</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex gap-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="text-gray-700 font-medium">Repositorios contables, tributarios y laborales</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex gap-4" data-aos="fade-up" data-aos-delay="250">
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="text-gray-700 font-medium">Guía de uso y manual de procedimientos</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex gap-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="text-gray-700 font-medium">Equipo capacitado para mantener la estructura</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex gap-4" data-aos="fade-up" data-aos-delay="350">
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white shrink-0 mt-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="text-gray-700 font-medium">Automatizaciones activas <span class="text-gray-400 font-normal text-sm">(módulo adicional)</span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Por qué Otium vs. carpeta compartida genérica -->
    <section class="py-20 bg-secondary text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16" data-aos="fade-up">{{ __('Por qué Otium vs. "simplemente usar Google Drive"') }}</h2>
            <div class="max-w-4xl mx-auto overflow-x-auto" data-aos="fade-up" data-aos-delay="100">
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="text-left p-4 bg-white/10 rounded-tl-xl font-bold text-white/70 text-sm uppercase tracking-wider w-1/2">Carpeta compartida genérica</th>
                            <th class="text-left p-4 bg-primary rounded-tr-xl font-bold text-white text-sm uppercase tracking-wider w-1/2">Otium con SharePoint</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/10">
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="p-4 text-white/70 border-r border-white/10">Cualquiera puede ver todo</td>
                            <td class="p-4 text-white font-medium">Permisos diferenciados por usuario, área o proceso</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="p-4 text-white/70 border-r border-white/10">Sin listas ni controles</td>
                            <td class="p-4 text-white font-medium">Listas de vencimientos, obligaciones y pendientes integradas</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="p-4 text-white/70 border-r border-white/10">Sin flujos ni alertas</td>
                            <td class="p-4 text-white font-medium">Automatizaciones con Power Automate disponibles</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="p-4 text-white/70 border-r border-white/10">Estructura que cada quien arma distinto</td>
                            <td class="p-4 text-white font-medium">Diseñada con criterio contable, tributario y laboral</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="p-4 text-white/70 border-r border-white/10">Sin visibilidad para quien está afuera</td>
                            <td class="p-4 text-white font-medium">Acceso ordenado para socios o casas matrices en el exterior</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="p-4 rounded-bl-xl text-white/70 border-r border-white/10">Desconectada de la operación</td>
                            <td class="p-4 rounded-br-xl text-white font-medium">Integrada con contabilidad, tributación, laboral y auditoría</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">{{ __('Preguntas Frecuentes') }}</h2>
            <div class="space-y-4" x-data="{ active: null }">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 1 ? null : 1)" class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Necesitamos una licencia especial de Microsoft?</span>
                        <span x-text="active === 1 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 1" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        SharePoint está incluido en la mayoría de los planes de Microsoft 365 Business. Si ya pagás Microsoft 365, probablemente ya tenés acceso sin costo adicional. Si aún no tenés licencias, te ayudamos a seleccionar el plan adecuado.
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 2 ? null : 2)" class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Pueden migrar documentos desde Google Drive u otras plataformas?</span>
                        <span x-text="active === 2 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 2" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Sí. Migramos desde Google Drive, Dropbox, servidores locales y otras plataformas, organizando los archivos dentro de la nueva estructura diseñada para la empresa.
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 3 ? null : 3)" class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Qué tan fácil es de usar para el equipo?</span>
                        <span x-text="active === 3 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 3" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        SharePoint funciona como una carpeta web intuitiva. Con la capacitación que incluimos, cualquier miembro del equipo puede subir, buscar y gestionar documentos sin conocimientos técnicos.
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 4 ? null : 4)" class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Se puede acceder desde el celular o desde el exterior?</span>
                        <span x-text="active === 4 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 4" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Sí. SharePoint es accesible desde cualquier navegador o desde la app móvil de Microsoft (iOS y Android), desde cualquier lugar del mundo — sin VPN ni servidores locales.
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <button @click="active = (active === 5 ? null : 5)" class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-50 hover:bg-gray-100 transition-colors">
                        <span class="font-bold text-gray-900">¿Cuánto tiempo toma la implementación?</span>
                        <span x-text="active === 5 ? '-' : '+'" class="text-2xl text-primary font-bold"></span>
                    </button>
                    <div x-show="active === 5" class="px-6 py-4 text-gray-600 border-t border-gray-100" x-transition>
                        Una implementación estándar toma entre 3 y 6 semanas. El plazo depende del volumen de documentación existente y la complejidad de los procesos a organizar.
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
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-8" data-aos="fade-up">{{ __('¿Tu información importante tiene un lugar definido?') }}</h2>
            <p class="text-xl text-white opacity-90 mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Contáctanos y diseñamos juntos la estructura documental que tu empresa necesita — dentro de las herramientas que ya tenés.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('contact') }}" class="px-10 py-4 bg-primary text-white rounded-lg font-bold shadow-xl hover:bg-white hover:text-primary transition-all duration-300">{{ __('Contáctenos Ahora') }}</a>
            </div>
        </div>
    </section>

</x-layout>
