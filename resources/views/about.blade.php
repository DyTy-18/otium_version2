<x-layout
    title="Sobre Otium"
    description="Contabilidad, impuestos y consultoría con criterio profesional. Outsourcing contable, gestión tributaria, auditoría y consultoría empresarial con enfoque digital."
>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden text-white">
        <div class="absolute inset-0">
            <img src="/images/hero-corporate.png" alt="Sobre Otium" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 to-secondary/80"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight" data-aos="fade-up">
                {{ __('Sobre') }} <span class="text-primary">Otium</span>
            </h1>
            <p class="text-xl md:text-2xl text-white/90 mb-4 font-light" data-aos="fade-up" data-aos-delay="100">
                {{ __('Contabilidad, impuestos y consultoría con criterio profesional') }}
            </p>
            <p class="text-lg text-white/80 max-w-2xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="200">
                {{ __('Outsourcing contable, gestión tributaria, auditoría y consultoría empresarial con enfoque digital.') }}
            </p>
            <p class="text-base text-white/70 max-w-2xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="300">
                {{ __('Otium acompaña a empresas que buscan ordenar su gestión contable, tributaria y documental, entender mejor sus números y tomar decisiones con mayor respaldo.') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center px-8 py-4 bg-primary text-white font-semibold rounded-lg hover:bg-primary/90 transition-colors">
                    {{ __('Solicitar diagnóstico gratuito') }}
                </a>
                <a href="{{ route('services.index') }}"
                    class="inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-semibold rounded-lg border border-white/30 hover:bg-white/20 transition-colors">
                    {{ __('Ver servicios') }}
                </a>
            </div>
        </div>
    </section>

    <!-- Nuestra historia -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-start">

                <div class="space-y-5" data-aos="fade-right">
                    <p class="text-sm font-semibold text-primary uppercase tracking-widest">{{ __('Nuestra historia') }}</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                        Una forma distinta de acompañar la gestión empresarial
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        Otium nace en 2011 con la idea de ofrecer una experiencia diferente en servicios contables, tributarios y de auditoría: más cercana, más ordenada, más moderna y apoyada en tecnología.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Desde sus primeros años, la firma acompañó a empresas en contabilidad mensual, auditoría y asesoramiento tributario. Con el tiempo, evolucionó hacia un modelo de outsourcing contable digital, incorporando herramientas como Microsoft 365, SharePoint, reportes de gestión y procesos documentales más trazables.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Hoy, Otium trabaja desde Santa Cruz y La Paz con empresas locales y extranjeras que operan en Bolivia, combinando conocimiento normativo, criterio profesional y herramientas digitales para acompañar mejor la toma de decisiones.
                    </p>
                </div>

                <div class="flex flex-col gap-5" data-aos="fade-left">
                    <div class="bg-gray-100 rounded-2xl overflow-hidden aspect-video flex items-center justify-center">
                        <div class="text-center text-gray-400 p-10">
                            <div class="text-6xl mb-4">🏢</div>
                            <p class="text-sm">Fotografía institucional</p>
                            <p class="text-xs">Oficina o equipo Otium</p>
                        </div>
                    </div>
                    <div class="border-l-4 border-secondary bg-gray-50 rounded-r-xl px-5 py-4">
                        <p class="text-sm text-gray-600 leading-relaxed">
                            <strong class="text-secondary font-semibold">Participación institucional:</strong> IECnet — host de reunión LATAM 2016.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Lo que nos mueve -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <p class="text-sm font-semibold text-primary uppercase tracking-widest mb-4 text-center" data-aos="fade-up">{{ __('Lo que nos mueve') }}</p>
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-16" data-aos="fade-up" data-aos-delay="100">
                Propósito y mirada
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div data-aos="fade-right">
                    <div class="bg-white rounded-2xl p-10 h-full shadow-sm border border-gray-100 relative overflow-hidden">
                        <div class="text-2xl mb-4">◎</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Nuestro propósito</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Ayudamos a ordenar la gestión contable, tributaria y documental de las empresas mediante criterio profesional y herramientas digitales.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <div class="bg-white rounded-2xl p-10 h-full shadow-sm border border-gray-100 relative overflow-hidden">
                        <div class="text-2xl mb-4">→</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Nuestra mirada al futuro</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Buscamos acompañar a empresas que quieren ordenar su gestión, entender mejor sus números y tomar decisiones con mayor respaldo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Metodología -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <p class="text-sm font-semibold text-primary uppercase tracking-widest mb-4 text-center" data-aos="fade-up">{{ __('Metodología') }}</p>
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-6" data-aos="fade-up" data-aos-delay="100">
                Nuestra forma de trabajo
            </h2>
            <p class="text-lg text-center text-gray-600 max-w-2xl mx-auto mb-16" data-aos="fade-up" data-aos-delay="200">
                Trabajamos con procesos ordenados, herramientas digitales y criterio profesional para que cada cliente tenga información clara, trazable y útil.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
                @php
                    $steps = [
                        ['01', 'Diagnóstico y alcance', 'Revisamos la situación inicial del cliente para definir el alcance del servicio, los procesos a acompañar y los entregables esperados.'],
                        ['02', 'Orden documental', 'Organizamos la documentación en repositorios digitales — en herramientas como SharePoint o Microsoft 365, según el alcance del servicio — para que todo sea trazable y accesible.'],
                        ['03', 'Seguimiento periódico', 'Cada cliente tiene un equipo asignado y reuniones de seguimiento para revisar avances, resolver consultas y anticipar situaciones.'],
                        ['04', 'Reportes y alertas', 'Entregamos reportes según el alcance del servicio: estados financieros, situación tributaria, alertas de vencimientos o dashboards de gestión.'],
                        ['05', 'Supervisión profesional', 'Los socios o responsables de cada área supervisan el trabajo de manera continua. Los procesos están estandarizados pero son adaptables a cada cliente.'],
                        ['06', 'Herramientas digitales', 'Usamos tecnología para mejorar el orden, la eficiencia y la trazabilidad. Cada herramienta se selecciona según las necesidades del cliente, no como solución única para todos.'],
                    ];
                @endphp
                @foreach ($steps as $i => $step)
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-100 hover:border-secondary/40 hover:shadow-sm transition-all" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                        <div class="w-8 h-8 rounded-full bg-gray-900 text-white text-xs font-bold flex items-center justify-center mb-4">{{ $step[0] }}</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">{{ $step[1] }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ $step[2] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-10 max-w-5xl mx-auto bg-blue-50 rounded-xl p-6 flex gap-4 items-start" data-aos="fade-up">
                <span class="text-xl shrink-0">ℹ</span>
                <p class="text-sm text-gray-600">
                    <strong>Uso de inteligencia artificial:</strong> Incorporamos herramientas de IA como apoyo interno en procesos de revisión, organización y análisis. No reemplaza el criterio profesional del equipo — lo apoya.
                </p>
            </div>
        </div>
    </section>

    <!-- Servicios -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <p class="text-sm font-semibold text-primary uppercase tracking-widest mb-4 text-center" data-aos="fade-up">{{ __('Servicios') }}</p>
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-4" data-aos="fade-up" data-aos-delay="100">
                {{ __('Áreas en las que acompañamos a nuestros clientes') }}
            </h2>
            <p class="text-lg text-center text-gray-600 max-w-2xl mx-auto mb-16" data-aos="fade-up" data-aos-delay="200">
                {{ __('Acompañamos a empresas en distintas etapas de su gestión contable, tributaria, laboral y empresarial.') }}
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $services = [
                        ['📊', __('Outsourcing Contable Digital'), __('Gestión contable mensual con organización documental, seguimiento y herramientas digitales según el alcance del servicio.'), 'services.outsourcing'],
                        ['🧾', __('Gestión Tributaria'), __('Asesoramiento y control tributario para apoyar el cumplimiento, reducir riesgos y mejorar la lectura fiscal de la empresa.'), 'services.gestion-tributaria'],
                        ['👥', __('Outsourcing Laboral'), __('Acompañamiento en procesos laborales, planillas y obligaciones vinculadas al personal, según las necesidades del cliente.'), 'services.outsourcing-laboral'],
                        ['🔍', __('Auditoría'), __('Revisión independiente de información financiera y procesos, con criterio técnico y enfoque en riesgos relevantes.'), 'services.audit'],
                        ['📈', __('Consultoría Empresarial'), __('Apoyo en análisis, control de gestión, due diligence, reportes financieros y lectura de información para tomar mejores decisiones.'), 'services.consultoria'],
                        ['🏗', __('Constitución y Formalización'), __('Acompañamiento en etapas de constitución, formalización y ordenamiento inicial de empresas que operan en Bolivia.'), 'services.constitucion-empresas'],
                    ];
                @endphp
                @foreach ($services as $i => $service)
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 flex flex-col hover:border-secondary/40 hover:shadow-md hover:-translate-y-0.5 transition-all" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                        <div class="text-4xl mb-4">{{ $service[0] }}</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">{{ $service[1] }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed flex-1 mb-6">{{ $service[2] }}</p>
                        <a href="{{ route($service[3]) }}"
                            class="inline-flex items-center gap-2 text-secondary font-semibold text-sm hover:gap-3 transition-all">
                            {{ __('Ver servicio') }} <span>→</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Sectores -->
    <section class="py-20 bg-secondary text-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
            <div class="absolute top-10 left-10 w-64 h-64 bg-primary rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
            <div class="absolute bottom-10 right-10 w-64 h-64 bg-accent rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <p class="text-sm font-semibold text-white/60 uppercase tracking-widest mb-4 text-center" data-aos="fade-up">{{ __('Sectores') }}</p>
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-6" data-aos="fade-up" data-aos-delay="100">
                Experiencia en distintos sectores
            </h2>
            <p class="text-lg text-center text-white/80 max-w-2xl mx-auto mb-16" data-aos="fade-up" data-aos-delay="200">
                Trabajamos con empresas locales y extranjeras en Bolivia, combinando conocimiento normativo, criterio profesional y herramientas digitales.
            </p>

            @php
                $sectors = [
                    ['label' => 'Comercio', 'highlight' => false],
                    ['label' => 'Servicios profesionales', 'highlight' => false],
                    ['label' => 'Industria', 'highlight' => false],
                    ['label' => 'Gastronomía y alimentos', 'highlight' => false],
                    ['label' => 'Importación y distribución', 'highlight' => false],
                    ['label' => 'Construcción e inmobiliario', 'highlight' => false],
                    ['label' => 'Tecnología', 'highlight' => false],
                    ['label' => 'Empresas extranjeras en Bolivia', 'highlight' => true],
                    ['label' => 'Exportadores', 'highlight' => false],
                    ['label' => 'Asociaciones y fundaciones', 'highlight' => false],
                    ['label' => 'Restaurantes y franquicias', 'highlight' => false],
                ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($sectors as $i => $sector)
                    <div class="{{ $sector['highlight'] ? 'bg-primary border-primary/50' : 'bg-white/10 border-white/10 hover:bg-white/20' }} backdrop-blur-sm rounded-xl px-6 py-5 border transition-colors flex items-center gap-4"
                        data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 100 }}">
                        <span class="text-white text-xl font-bold leading-none">•</span>
                        <span class="text-white font-medium">{{ $sector['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Valores -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <p class="text-sm font-semibold text-primary uppercase tracking-widest mb-4 text-center" data-aos="fade-up">{{ __('Valores') }}</p>
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-6" data-aos="fade-up" data-aos-delay="100">
                {{ __('Valores de Otium') }}
            </h2>
            <p class="text-lg text-center text-gray-600 max-w-2xl mx-auto mb-16" data-aos="fade-up" data-aos-delay="200">
                Creemos en una forma de trabajo profesional, cercana y ordenada, donde la tecnología acompaña al criterio humano.
            </p>

            @php
                $values = [
                    [__('Compromiso con el resultado'), __('Nos hacemos cargo del trabajo asumido y cuidamos que cada entrega tenga sentido para el cliente.')],
                    [__('Transparencia'), __('Trabajamos con comunicación clara, criterios visibles y respaldo documental.')],
                    [__('Criterio profesional'), __('No nos limitamos a procesar información: analizamos, revisamos y advertimos riesgos relevantes.')],
                    [__('Orden y trazabilidad'), __('Buscamos que la información, los documentos y los procesos puedan seguirse con claridad.')],
                    [__('Tecnología con criterio humano'), __('Usamos herramientas digitales para mejorar el orden y la eficiencia, sin reemplazar el juicio profesional.')],
                    [__('Aprendizaje continuo'), __('Actualizamos nuestra forma de trabajar para responder mejor a los cambios normativos, tecnológicos y empresariales.')],
                ];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($values as $i => $value)
                    <div class="p-8 rounded-xl bg-white border border-gray-100 hover:border-secondary/40 hover:shadow-sm transition-all" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                        <div class="w-8 h-1 bg-secondary rounded-full mb-5"></div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">{{ $value[0] }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ $value[1] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Registros profesionales -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 max-w-3xl">
            <p class="text-sm font-semibold text-primary uppercase tracking-widest mb-3 text-center" data-aos="fade-up">Registros profesionales</p>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 text-center mb-12" data-aos="fade-up" data-aos-delay="100">Firma y profesionales habilitados</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="bg-gray-50 border border-gray-100 rounded-2xl p-8 text-center hover:shadow-sm hover:border-secondary/30 transition-all" data-aos="fade-right">
                    <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center mx-auto mb-5">
                        <span class="text-secondary text-xl">🏛</span>
                    </div>
                    <p class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">Firma registrada</p>
                    <p class="text-3xl font-bold text-gray-900 mb-2">CAUB</p>
                    <p class="text-sm text-gray-500">Colegio de Auditores de Bolivia</p>
                </div>

                <div class="bg-gray-50 border border-gray-100 rounded-2xl p-8 text-center hover:shadow-sm hover:border-secondary/30 transition-all" data-aos="fade-left">
                    <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center mx-auto mb-5">
                        <span class="text-secondary text-xl">✦</span>
                    </div>
                    <p class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">Profesionales registrados</p>
                    <p class="text-xl font-bold text-gray-900 mb-2">CAULP · CAUCRUZ · CAUB</p>
                    <p class="text-sm text-gray-500">Colegios departamentales de Auditores — La Paz, Santa Cruz y Bolivia</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Equipo -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <p class="text-sm font-semibold text-primary uppercase tracking-widest mb-4 text-center" data-aos="fade-up">{{ __('Equipo') }}</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-5xl mx-auto">

                <!-- Zaulo -->
                <div class="bg-white rounded-2xl p-10 shadow-sm border border-gray-100 flex flex-col gap-6" data-aos="fade-right">
                    <div class="flex items-center gap-6">
                        <div class="w-20 h-20 rounded-full bg-gray-200 shrink-0 flex items-center justify-center text-2xl font-bold text-gray-500 shadow-md border-4 border-white">
                            ZV
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Zaulo Vásquez</h3>
                            <p class="text-primary font-medium text-sm">Manager | Impuestos, Consultoría y Datos</p>
                        </div>
                    </div>
                    <p class="inline-flex items-center gap-1.5 text-xs text-gray-400 font-medium">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        Santa Cruz, Bolivia
                    </p>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Zaulo acompaña a empresas en temas contables y tributarios, combinando experiencia en distintos modelos de negocio con consultoría empresarial, análisis de datos y herramientas digitales. Su trabajo parte del cumplimiento y la revisión de riesgos, pero se extiende hacia control de gestión, automatización y toma de decisiones con mayor respaldo. Fuera de la oficina, estudia filosofía y dedica tiempo a la historia griega, la romana y la literatura filosófica crítica.
                    </p>
                    <a href="https://www.linkedin.com/in/zaulo-vasquez/" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-primary transition-colors font-medium">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn
                    </a>
                </div>

                <!-- Brian -->
                <div class="bg-white rounded-2xl p-10 shadow-sm border border-gray-100 flex flex-col gap-6" data-aos="fade-left">
                    <div class="flex items-center gap-6">
                        <div class="w-20 h-20 rounded-full bg-gray-200 shrink-0 flex items-center justify-center text-2xl font-bold text-gray-500 shadow-md border-4 border-white">
                            BJ
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Brian Jauregui</h3>
                            <p class="text-primary font-medium text-sm">Manager | Impuestos, Auditoría y Finanzas</p>
                        </div>
                    </div>
                    <p class="inline-flex items-center gap-1.5 text-xs text-gray-400 font-medium">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        La Paz, Bolivia
                    </p>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Brian acompaña a empresas en gestión tributaria, auditoría y finanzas, con experiencia en contingencias tributarias, auditorías financieras y proyectos especiales bajo NIIF. Desde la oficina de Otium en La Paz, trabaja con clientes empresariales que necesitan cumplimiento, criterio técnico y una lectura clara de sus riesgos financieros y fiscales. Apasionado de las historietas — género que conoce en profundidad —, en su tiempo libre juega fútbol y se mantiene activo en videojuegos en línea.
                    </p>
                    <a href="https://www.linkedin.com/in/brian-jauregui-oc/" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-primary transition-colors font-medium">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="py-24 bg-secondary relative overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary opacity-20 rounded-full translate-x-1/3 translate-y-1/3"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-8" data-aos="fade-up">
                {{ __('¿Querés conocer cómo Otium puede acompañar a tu empresa?') }}
            </h2>
            <p class="text-xl text-white/90 mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                {{ __('Podemos revisar tu situación actual y orientarte sobre el alcance de servicio que mejor se ajuste a tus necesidades contables, tributarias o empresariales.') }}
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('contact') }}"
                    class="px-10 py-4 bg-primary text-white rounded-lg font-bold shadow-xl hover:bg-white hover:text-primary transition-all duration-300">
                    {{ __('Solicitar diagnóstico gratuito') }}
                </a>
                <a href="{{ route('services.index') }}"
                    class="px-10 py-4 bg-white/10 text-white rounded-lg font-bold border border-white/20 hover:bg-white/20 transition-all duration-300">
                    {{ __('Ver servicios') }}
                </a>
            </div>
        </div>
    </section>

</x-layout>
