<x-layout
    title="Gestión Documental en SharePoint Bolivia | Microsoft 365 | Otium"
    description="Implementamos SharePoint como el centro documental de tu empresa: bibliotecas, permisos, listas de control y acceso remoto dentro de Microsoft 365. Bolivia."
>
    @php
        $wa = env('WHATSAPP_NUMBER', '59170654104');
        $waService = 'https://wa.me/' . $wa . '?text=' . rawurlencode(__('Hola, quiero información sobre Gestión Documental en SharePoint.'));

        // Estilos repetidos del diseño "SharePoint 2026"
        $card = 'bg-white/94 border border-[#1F1617]/8 rounded-3xl shadow-[0_18px_40px_rgba(31,22,23,.08)]';
        $tag  = 'text-primary uppercase tracking-[.14em] text-[11px] font-extrabold';
        $h2   = 'text-[clamp(28px,3.5vw,42px)] font-bold leading-[1.05] tracking-[-0.02em] mt-1.5';
        $head = 'grid grid-cols-1 lg:grid-cols-[.72fr_1.28fr] gap-4 lg:gap-7 items-end mb-5';
        $desc = 'text-[#4d4748] max-w-[760px]';
        $btn  = 'inline-flex items-center justify-center gap-2.25 px-4.25 py-3.25 rounded-[13px] font-extrabold text-sm transition-all hover:-translate-y-px';
        $eco  = 'p-3.25 rounded-[14px] border border-[#E6E1DE] bg-[#F7F4F2]';
        $note = 'mt-4 px-3.75 py-3.25 rounded-[14px] bg-primary/7 text-[#713229] text-[13px]';
    @endphp

    <div class="text-[#1F1617] leading-[1.55]" style="background: radial-gradient(circle at top right, rgba(84,186,199,.12), transparent 22%), radial-gradient(circle at top left, rgba(180,46,37,.06), transparent 24%), linear-gradient(180deg, #fbf9f8 0%, #f7f4f2 100%);">

    <!-- Hero -->
    <section class="pt-32 pb-7 md:pt-36">
        <div class="container-2026 grid grid-cols-1 lg:grid-cols-[1.18fr_.82fr] gap-6 items-stretch">
            <article class="{{ $card }} relative overflow-hidden p-5.25 md:p-9" data-aos="fade-up">
                <span class="absolute -right-30 -bottom-36 w-65 h-65 rounded-full bg-[radial-gradient(circle,rgba(84,186,199,.20),transparent_68%)] pointer-events-none"></span>
                <div class="inline-flex mb-4.5 px-3 py-2 rounded-full bg-primary/8 {{ $tag }}">OTIUM | {{ __('Gestión Documental y Automatización en SharePoint') }}</div>
                <h1 class="text-[clamp(36px,5vw,60px)] font-bold leading-[1.02] tracking-[-0.02em] max-w-[850px]">{{ __('La información de tu empresa no debería depender de saber quién tiene el archivo.') }}</h1>
                <p class="mt-5 text-[#453f40] text-[17px] md:text-[19px] leading-normal max-w-[760px]">{{ __('OTIUM diseña e implementa una estructura documental en SharePoint para centralizar respaldos, responsables, vencimientos y evidencias dentro de Microsoft 365, con una lógica adaptada a los procesos reales de tu empresa.') }}</p>
                <div class="relative z-10 flex flex-wrap gap-3 mt-6.5">
                    <a href="#arquitectura" class="{{ $btn }} bg-[#1F1617] text-white">{{ __('Ver cómo lo organizamos') }}</a>
                    <a href="#entregables" class="{{ $btn }} bg-accent/13 text-[#175864]">{{ __('Ver qué recibe tu empresa') }}</a>
                </div>
                <div class="grid grid-cols-4 max-w-[370px] h-3 mt-6.25 rounded-full overflow-hidden" aria-hidden="true">
                    <span class="bg-primary"></span><span class="bg-secondary"></span><span class="bg-brand-light"></span><span class="bg-accent"></span>
                </div>
            </article>

            <aside class="{{ $card }} flex flex-col gap-4 p-5.25 md:p-6.75" data-aos="fade-left" data-aos-delay="100">
                <div class="{{ $tag }}">{{ __('La idea central') }}</div>
                <h2 class="text-[23px] font-bold leading-[1.15] tracking-[-0.02em]">{{ __('SharePoint no es el fin. El objetivo es ordenar cómo se trabaja con la información.') }}</h2>
                <div class="grid gap-2.75">
                    @foreach ([
                        [false, __('No es solo una carpeta en la nube'),          __('Guardar archivos no resuelve por sí solo responsables, permisos, vencimientos o trazabilidad.')],
                        [true,  __('Es una estructura documental de trabajo'),    __('Bibliotecas, listas, vistas, permisos y reglas conectadas al proceso real de la empresa.')],
                        [true,  __('Puede crecer por módulos'),                   __('Automatizaciones y reportes se incorporan cuando el alcance y la operación lo justifican.')],
                    ] as [$yes, $t, $d])
                    <div class="grid grid-cols-[35px_1fr] gap-3 p-3.5 rounded-2xl border border-[#E6E1DE] bg-[#F7F4F2]">
                        <div class="w-8.75 h-8.75 grid place-items-center rounded-[11px] font-black {{ $yes ? 'text-[#176473] bg-accent/16' : 'text-primary bg-primary/9' }}">{{ $yes ? '✓' : '×' }}</div>
                        <div><strong class="block text-sm mb-0.75">{{ $t }}</strong><span class="text-[#5F5A5B] text-[13px]">{{ $d }}</span></div>
                    </div>
                    @endforeach
                </div>
            </aside>
        </div>
    </section>

    <!-- Qué resolvemos -->
    <section id="problema" class="py-8.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Qué resolvemos') }}</div><h2 class="{{ $h2 }}">{{ __('El problema no es que falten archivos. Es que la información está dispersa.') }}</h2></div>
                <p class="{{ $desc }}">{{ __('Cuando documentos, respaldos y pendientes viven en correos, WhatsApp, computadoras personales, carpetas sueltas o distintas nubes, reconstruir un proceso se vuelve lento y dependiente de personas específicas.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3.5">
                @foreach ([
                    [__('Documentos dispersos'),     __('Información repartida entre personas, equipos, correos, carpetas y archivos físicos sin una estructura común.')],
                    [__('Poca trazabilidad'),        __('No siempre está claro quién debe cargar, revisar, actualizar o mantener un documento o pendiente.')],
                    [__('Vencimientos manuales'),    __('Contratos, obligaciones, tareas o documentos dependen de recordatorios informales y seguimiento personal.')],
                    [__('Dependencia de personas'),  __('La salida, ausencia o cambio de un colaborador puede afectar el acceso o la reconstrucción de información crítica.')],
                ] as $i => [$t, $d])
                <article class="p-5 rounded-[19px] bg-white border border-[#E6E1DE] shadow-[0_18px_40px_rgba(31,22,23,.08)]" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}">
                    <div class="mb-2.5 text-[11px] font-black text-primary tracking-[.12em] uppercase">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3 class="text-lg font-bold tracking-[-0.02em] mb-2">{{ $t }}</h3>
                    <p class="text-[#5F5A5B] text-sm">{{ $d }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ¿Qué es SharePoint? -->
    <section id="sharepoint" class="py-8.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Antes de implementar') }}</div><h2 class="{{ $h2 }}">{{ __('¿Qué es SharePoint dentro de Microsoft 365?') }}</h2></div>
                <p class="{{ $desc }}">{{ __('Es una plataforma de Microsoft 365 para organizar información compartida de una empresa mediante sitios, bibliotecas de documentos, listas, permisos, vistas y espacios de colaboración. OTIUM la utiliza como base para construir un sistema documental ordenado y utilizable.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                <article class="{{ $card }} p-6.5" data-aos="fade-right">
                    <h3 class="text-2xl font-bold tracking-[-0.02em] mb-3">{{ __('SharePoint organiza la información compartida') }}</h3>
                    <p class="text-[#4d4748]">{{ __('Permite que documentos y registros de trabajo dejen de depender de carpetas personales. La empresa puede estructurar archivos, datos de control y accesos según áreas, procesos, responsables o periodos.') }}</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2.5 mt-4.5">
                        @foreach ([
                            [__('Bibliotecas'), __('Documentos y respaldos')],
                            [__('Listas'),      __('Estados, responsables y vencimientos')],
                            [__('Permisos'),    __('Accesos según necesidad')],
                            [__('Vistas'),      __('Información filtrada por usuario o proceso')],
                            [__('Históricos'),  __('Evidencia organizada en el tiempo')],
                            [__('Seguimiento'), __('Pendientes y controles visibles')],
                        ] as [$b, $s])
                        <div class="{{ $eco }}"><b class="block text-[13px] mb-0.75">{{ $b }}</b><span class="text-[#5F5A5B] text-xs">{{ $s }}</span></div>
                        @endforeach
                    </div>
                </article>
                <article class="{{ $card }} p-6.5" data-aos="fade-left" data-aos-delay="100">
                    <h3 class="text-2xl font-bold tracking-[-0.02em] mb-3">{{ __('Funciona dentro de un ecosistema conectado') }}</h3>
                    <p class="text-[#4d4748]">{{ __('Dependiendo del alcance y las licencias disponibles, la estructura puede convivir con herramientas que el equipo ya utiliza dentro de Microsoft 365.') }}</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2.5 mt-4.5">
                        @foreach ([
                            ['Teams',          __('Acceso del equipo a espacios compartidos')],
                            ['OneDrive',       __('Sincronización y trabajo con archivos')],
                            ['Excel',          __('Matrices y cargas estructuradas de apoyo')],
                            ['Power Automate', __('Alertas y flujos como módulo adicional')],
                            ['Power BI',       __('Visualización de controles cuando aplica')],
                            ['Microsoft 365',  __('Identidad y entorno empresarial')],
                        ] as [$b, $s])
                        <div class="{{ $eco }}"><b class="block text-[13px] mb-0.75">{{ $b }}</b><span class="text-[#5F5A5B] text-xs">{{ $s }}</span></div>
                        @endforeach
                    </div>
                    <div class="{{ $note }}">{{ __('Si la empresa todavía no cuenta con una estructura adecuada de Microsoft 365, OTIUM puede orientar sobre las condiciones necesarias. En determinados servicios también puede trabajarse desde un entorno documental de OTIUM.') }}</div>
                </article>
            </div>
        </div>
    </section>

    <!-- Qué hacemos -->
    <section id="hacemos" class="py-8.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Qué hacemos por tu empresa') }}</div><h2 class="{{ $h2 }}">{{ __('No empezamos creando carpetas. Primero entendemos cómo funciona el proceso.') }}</h2></div>
                <p class="{{ $desc }}">{{ __('La estructura se diseña después de revisar áreas, documentos, usuarios, responsables y puntos de control. Así SharePoint responde a la operación y no al revés.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3.75">
                @foreach ([
                    [__('Diagnóstico documental'),       __('Revisamos cómo se organiza hoy la información, qué fuentes existen y dónde están los principales problemas.')],
                    [__('Diseño de estructura'),         __('Definimos bibliotecas, carpetas, listas, vistas, reglas y criterios de organización según el proceso real.')],
                    [__('Permisos y responsables'),      __('Configuramos accesos básicos y vistas según usuarios, áreas, procesos o tipos de documento.')],
                    [__('Listas de control'),            __('Estructuramos controles para clientes, personal, obligaciones, contratos, activos, pendientes, tareas o vencimientos.')],
                    [__('Documentación y capacitación'), __('Dejamos guía, procedimientos de uso y capacitación para que el sistema pueda sostenerse en el trabajo diario.')],
                    [__('Acompañamiento inicial'),       __('Validamos la implementación con el cliente, ajustamos detalles y acompañamos la adopción inicial.')],
                ] as $i => [$t, $d])
                <article class="p-5.5 bg-white border border-[#E6E1DE] rounded-[19px]" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 75 }}">
                    <div class="mb-2.5 text-primary font-black text-xs tracking-[.12em]">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3 class="text-[19px] font-bold tracking-[-0.02em] mb-2">{{ $t }}</h3>
                    <p class="text-[#5F5A5B] text-sm">{{ $d }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Arquitectura documental -->
    <section id="arquitectura" class="py-8.5 scroll-mt-24">
        <div class="container-2026 {{ $card }} p-5.25 md:p-7" data-aos="fade-up">
            <div class="flex flex-col md:flex-row justify-between gap-4.5 md:items-end mb-5">
                <div><div class="{{ $tag }}">{{ __('La arquitectura documental') }}</div><h2 class="text-[clamp(28px,3.5vw,42px)] font-bold leading-[1.55] tracking-[-0.02em]">{{ __('De fuentes dispersas a un sistema documental que se puede seguir.') }}</h2></div>
                <p class="max-w-[640px] text-[#5F5A5B]">{{ __('Esta es la pieza central del servicio: entender de dónde viene la información, cómo debe organizarse y qué controles necesita para poder encontrarse, seguirse y reconstruirse.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-[1fr_.12fr_1.15fr_.12fr_1.15fr_.12fr_1fr] gap-2.5 items-stretch" role="img" aria-label="{{ __('Arquitectura documental del servicio SharePoint OTIUM') }}">
                @foreach ([
                    ['bg-white',                                                                       __('Fuentes actuales'),         __('La información que ya existe'),            [__('Carpetas locales'), 'OneDrive / Drive / Dropbox', __('Correos y documentos físicos'), __('Archivos por persona o área')]],
                    ['bg-linear-to-b from-accent/12 to-white/96 border-accent/35!',                    __('Diseño OTIUM'),             __('La estructura que ordena el proceso'),     [__('Bibliotecas y carpetas'), __('Listas y metadatos'), __('Vistas y responsables'), __('Permisos y reglas de uso')]],
                    ['bg-linear-to-b from-secondary/12 to-white/96',                                   __('SharePoint en operación'),  __('Documentos + controles + evidencia'),      [__('Archivos centralizados'), __('Pendientes visibles'), __('Vencimientos y estados'), __('Históricos y respaldo')]],
                    ['bg-white',                                                                       __('Uso empresarial'),          __('Información lista para trabajar'),         [__('Contabilidad e impuestos'), __('Laboral y administración'), __('Auditoría y revisiones'), __('Gerencia y seguimiento')]],
                ] as $i => [$bg, $label, $title, $items])
                    @unless ($loop->first)
                    <div class="grid place-items-center min-h-6 text-primary text-[26px] font-black rotate-90 lg:rotate-0" aria-hidden="true">→</div>
                    @endunless
                    <div class="min-w-0 p-4.5 rounded-[19px] border border-[#E6E1DE] {{ $bg }}">
                        <div class="mb-2 text-primary text-[10px] font-black tracking-[.13em] uppercase">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }} · {{ $label }}</div>
                        <h3 class="text-lg font-bold tracking-[-0.02em] mb-3">{{ $title }}</h3>
                        <div class="grid gap-2">
                            @foreach ($items as $item)
                            <div class="px-2.75 py-2.5 rounded-xl bg-[#F7F4F2] border border-[#E6E1DE] text-xs font-semibold text-[#494344]">{{ $item }}</div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4.5 px-4.25 py-3.75 border-l-4 border-accent bg-accent/9 rounded-[14px] text-[#295a63] text-sm"><strong>{{ __('Automatización como módulo complementario:') }}</strong> {{ __('alertas de vencimiento, avisos por documentos pendientes, flujos de aprobación, recordatorios, actualización de estados y otras automatizaciones pueden incorporarse según alcance y complejidad.') }}</div>
        </div>
    </section>

    <!-- Ejemplos de aplicación -->
    <section class="py-8.5">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Ejemplos de aplicación') }}</div><h2 class="{{ $h2 }}">{{ __('La estructura se adapta al tipo de documentación que necesita controlar tu empresa.') }}</h2></div>
                <p class="{{ $desc }}">{{ __('No son paquetes automáticos. Son ejemplos reales de soluciones documentales que pueden formar parte de un proyecto según el alcance definido.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3.5">
                @foreach ([
                    [__('Contable'),     __('Archivo contable mensual'),          __('Documentos organizados por gestión, mes, proceso o criterio definido para facilitar revisión y respaldo.')],
                    [__('Tributario'),   __('Archivo tributario y vencimientos'), __('Declaraciones, formularios, pagos, requerimientos, obligaciones, fechas clave y evidencia documental.')],
                    [__('Laboral'),      __('File digital del trabajador'),       __('Contratos, documentos personales, planillas, vacaciones, permisos, finiquitos y respaldos relacionados.')],
                    [__('Legal / Adm.'), __('Contratos y societario'),            __('Contratos, actas, poderes, registros, documentos corporativos y fechas que requieren seguimiento.')],
                    [__('Control'),      __('Respaldos para auditoría'),          __('Estructura para facilitar solicitudes de evidencia, revisiones internas y procesos de auditoría externa.')],
                    [__('Gestión'),      __('Reportes y listas maestras'),        __('Bibliotecas de reportes y listas de control para responsables, pendientes, activos, clientes o tareas recurrentes.')],
                ] as $i => [$chip, $t, $d])
                <article class="p-5.25 rounded-[18px] bg-white border border-[#E6E1DE]" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 75 }}">
                    <div class="inline-block mb-2.75 px-2.25 py-1.5 rounded-full text-[10px] font-extrabold tracking-[.08em] uppercase text-[#176473] bg-accent/12">{{ $chip }}</div>
                    <h3 class="text-lg font-bold tracking-[-0.02em] mb-1.75">{{ $t }}</h3>
                    <p class="text-[#5F5A5B] text-[13px]">{{ $d }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Módulos complementarios -->
    <section class="py-8.5">
        <div class="container-2026 grid grid-cols-1 lg:grid-cols-[1.05fr_.95fr] gap-4.5">
            <article class="{{ $card }} p-5.25 md:p-6.25" data-aos="fade-right">
                <div class="{{ $tag }}">{{ __('Módulos complementarios') }}</div>
                <h3 class="text-2xl font-bold tracking-[-0.02em] mb-2.5">{{ __('Automatización cuando el proceso la necesita') }}</h3>
                <p class="text-[#5F5A5B]">{{ __('Una vez que la información está bien estructurada, pueden incorporarse flujos adicionales. OTIUM los evalúa y cotiza según el proceso, el volumen y la complejidad.') }}</p>
                <div class="flex flex-wrap gap-2.25 mt-4.25">
                    @foreach ([__('Alertas de vencimiento'), __('Documentos pendientes'), __('Flujos de aprobación'), __('Recordatorios'), __('Actualización de estados'), __('Alertas a responsables')] as $pill)
                    <span class="px-2.75 py-2 border border-[#E6E1DE] bg-[#F7F4F2] rounded-full text-xs font-bold">{{ $pill }}</span>
                    @endforeach
                </div>
            </article>
            <article class="{{ $card }} p-5.25 md:p-6.25" data-aos="fade-left" data-aos-delay="100">
                <div class="{{ $tag }}">{{ __('Reportabilidad') }}</div>
                <h3 class="text-2xl font-bold tracking-[-0.02em] mb-2.5">{{ __('Power BI cuando existe información que vale la pena visualizar') }}</h3>
                <p class="text-[#5F5A5B]">{{ __('Si el proyecto lo requiere, las listas y estados de SharePoint pueden servir de base para reportes o visualizaciones de seguimiento en Power BI.') }}</p>
                <div class="{{ $note }}">{{ __('La integración con Power BI no forma parte automática del servicio base. Se incorpora como complemento cuando aporta valor al caso.') }}</div>
            </article>
        </div>
    </section>

    <!-- Qué recibe el cliente -->
    <section id="entregables" class="py-8.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Qué recibe el cliente') }}</div><h2 class="{{ $h2 }}">{{ __('Una estructura implementada, documentada y entendible para el equipo.') }}</h2></div>
                <p class="{{ $desc }}">{{ __('Los entregables finales dependen del alcance, volumen de información y complejidad del proyecto. El servicio base se concentra en dejar un modelo utilizable, no solo una configuración técnica.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-[1.1fr_.9fr] gap-4.5">
                <article class="{{ $card }} p-5.25 md:p-6" data-aos="fade-right">
                    <h3 class="text-[23px] font-bold tracking-[-0.02em] mb-3">{{ __('Entregables habituales') }}</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-3.5 gap-y-2.25">
                        @foreach ([
                            __('Diagnóstico documental inicial'),
                            __('Estructura de SharePoint implementada'),
                            __('Bibliotecas y carpetas organizadas'),
                            __('Listas de control y vistas filtradas'),
                            __('Configuración básica de permisos'),
                            __('Carga inicial limitada de documentos modelo'),
                            __('Guía de uso y procedimientos documentales'),
                            __('Capacitación y acompañamiento inicial'),
                        ] as $item)
                        <div class="grid grid-cols-[20px_1fr] gap-2 text-[#494344] text-[13px]"><i class="not-italic text-[#176473] font-black">✓</i><span>{{ $item }}</span></div>
                        @endforeach
                    </div>
                </article>
                <div class="grid gap-3" data-aos="fade-left" data-aos-delay="100">
                    @foreach ([
                        [__('Repositorios específicos'), __('Archivo contable, tributario, laboral, contratos, societario, auditoría o reportes, según alcance.')],
                        [__('Listas maestras'),          __('Clientes, personal, obligaciones, vencimientos, contratos, pendientes, activos, tareas o vacaciones.')],
                        [__('Seguimiento posterior'),    __('La administración mensual o trimestral puede contratarse de forma adicional.')],
                    ] as [$b, $s])
                    <div class="p-4 rounded-[15px] bg-[#F7F4F2] border border-[#E6E1DE]"><b class="block text-sm mb-1">{{ $b }}</b><span class="text-[#5F5A5B] text-xs">{{ $s }}</span></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Responsabilidades -->
    <section id="responsabilidades" class="py-8.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Responsabilidades') }}</div><h2 class="{{ $h2 }}">{{ __('La implementación funciona mejor cuando cada parte sabe qué debe aportar.') }}</h2></div>
                <p class="{{ $desc }}">{{ __('OTIUM diseña e implementa la estructura. El cliente aporta el conocimiento de su operación, define autorizaciones y valida que el modelo represente su forma de trabajo.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4.5">
                @foreach ([
                    ['OTIUM', [
                        __('Diagnostica la situación documental actual.'),
                        __('Diseña bibliotecas, listas, vistas y criterios de organización.'),
                        __('Configura la estructura y permisos básicos acordados.'),
                        __('Documenta reglas de uso y capacita a los usuarios definidos.'),
                        __('Acompaña la implementación inicial y ajustes acordados.'),
                    ]],
                    [__('Tu empresa'), [
                        __('Designa un responsable interno del proyecto.'),
                        __('Entrega información sobre áreas, usuarios, responsables y tipos de documentos.'),
                        __('Facilita fuentes documentales y accesos administrativos cuando sean necesarios.'),
                        __('Define y valida qué usuarios están autorizados para cada información.'),
                        __('Valida que la estructura represente correctamente la operación de la empresa.'),
                    ]],
                ] as $k => [$who, $items])
                <article class="{{ $card }} p-5.25 md:p-6" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <h3 class="text-[22px] font-bold tracking-[-0.02em] mb-3.25">{{ $who }}</h3>
                    <div class="grid gap-2.25">
                        @foreach ($items as $item)
                        <div class="grid grid-cols-[24px_1fr] gap-2.5 items-start text-[13px] text-[#4b4546]">
                            <span class="w-6 h-6 grid place-items-center rounded-lg font-black text-[#176473] bg-accent/13">✓</span><span>{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Qué cambia -->
    <section class="py-8.5">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Qué cambia') }}</div><h2 class="{{ $h2 }}">{{ __('La diferencia se nota cuando necesitas encontrar, seguir o reconstruir información.') }}</h2></div>
                <p class="{{ $desc }}">{{ __('No prometemos que desaparezca todo trabajo manual. Buscamos que la información tenga una estructura clara y que los pendientes sean más visibles y reconstruibles.') }}</p>
            </div>
            <div class="{{ $card }} overflow-hidden" data-aos="fade-up">
                <div class="grid grid-cols-2 text-[11px] font-black tracking-[.11em] uppercase">
                    <div class="p-3 md:px-4.5 md:py-3.75 bg-primary/8 text-primary">{{ __('Sin un proceso estructurado') }}</div>
                    <div class="p-3 md:px-4.5 md:py-3.75 bg-accent/12 text-[#176473]">{{ __('Con una estructura OTIUM en SharePoint') }}</div>
                </div>
                @foreach ([
                    [__('Archivos repartidos entre personas y carpetas'),           __('Documentos centralizados según una lógica común')],
                    [__('Seguimiento por correo, mensajes o memoria'),               __('Listas, estados, responsables y vencimientos visibles')],
                    [__('Dependencia de quien conoce “dónde está todo”'),           __('Proceso documentado y consultable por usuarios autorizados')],
                    [__('Reunir respaldos requiere reconstruir el proceso'),         __('Evidencias e históricos organizados para su consulta')],
                    [__('Microsoft 365 usado principalmente para guardar archivos'), __('Microsoft 365 utilizado como soporte de un modelo documental')],
                ] as [$before, $after])
                <div class="grid grid-cols-2 text-[13px]">
                    <div class="p-3 md:px-4.5 md:py-3.75 border-t border-[#E6E1DE] text-[#665f60]">{{ $before }}</div>
                    <div class="p-3 md:px-4.5 md:py-3.75 border-t border-[#E6E1DE] font-bold">{{ $after }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Alcance especial -->
    <section class="py-8.5">
        <div class="container-2026 {{ $card }} p-5.25 md:p-6" data-aos="fade-up">
            <div class="{{ $tag }}">{{ __('Cuando el caso requiere un alcance especial') }}</div>
            <h3 class="text-[22px] font-bold tracking-[-0.02em] mb-2.5">{{ __('Algunos trabajos se evalúan y cotizan por separado.') }}</h3>
            <p class="text-[#5F5A5B] text-sm">{{ __('La implementación base no incluye automáticamente actividades que requieren mayor volumen, especialidad técnica o servicios distintos de OTIUM.') }}</p>
            <ul class="list-disc pl-5 mt-3.5 text-[#4a4445] text-[13px] md:columns-2 gap-7.5">
                @foreach ([
                    __('Migración histórica o masiva de documentos.'),
                    __('Limpieza y depuración de archivos antiguos.'),
                    __('Digitalización física masiva o escaneo histórico.'),
                    __('Automatizaciones avanzadas.'),
                    __('Integración con Power BI.'),
                    __('Administración mensual o trimestral posterior.'),
                    __('Compra de licencias Microsoft.'),
                    __('Soporte de equipos, red o internet.'),
                    __('Desarrollo de software a medida.'),
                    __('Ciberseguridad avanzada.'),
                    __('Validación jurídica de contratos.'),
                    __('Certificación técnica de cada documento cargado fuera del servicio correspondiente.'),
                ] as $item)
                <li class="mb-2 break-inside-avoid">{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    <!-- Cómo empezamos -->
    <section id="contacto" class="pt-10.5 pb-14.5 scroll-mt-24">
        <div class="container-2026 {{ $card }} relative overflow-hidden grid grid-cols-1 lg:grid-cols-[1.1fr_.9fr] gap-6.25 items-center p-5.25 md:p-8.5" data-aos="fade-up">
            <span class="absolute -right-27.5 -bottom-36 w-67.5 h-67.5 rounded-full bg-[radial-gradient(circle,rgba(84,186,199,.18),transparent_68%)] pointer-events-none"></span>
            <div class="relative">
                <div class="{{ $tag }}">{{ __('Cómo empezamos') }}</div>
                <h2 class="text-[clamp(30px,4vw,46px)] font-bold leading-[1.04] tracking-[-0.02em] mt-1.25">{{ __('Primero entendamos cómo está organizada hoy la documentación de tu empresa.') }}</h2>
                <p class="mt-3.25 text-[#4b4546] max-w-[720px]">{{ __('Realizamos un diagnóstico documental inicial para revisar fuentes, procesos, usuarios, responsables y necesidades de control. Con esa base definimos el alcance y la estructura adecuada para implementar SharePoint.') }}</p>
                <div class="relative z-10 flex flex-wrap gap-3 mt-6.5">
                    <a href="{{ $waService }}" target="_blank" rel="noopener" class="{{ $btn }} bg-[#1F1617] text-white">{{ __('Solicitar diagnóstico documental gratuito') }}</a>
                    <a href="#arquitectura" class="{{ $btn }} bg-accent/13 text-[#175864]">{{ __('Revisar la arquitectura') }}</a>
                </div>
            </div>
            <aside class="relative z-10 p-5.25 border border-[#E6E1DE] bg-[#F7F4F2] rounded-[18px]">
                <h3 class="text-[17px] font-bold tracking-[-0.02em] mb-2.5">{{ __('Variables que revisamos para definir el proyecto') }}</h3>
                <ul class="list-disc pl-5 text-[#4b4546] text-[13px] space-y-1.5">
                    @foreach ([
                        __('Volumen y fuentes de documentación.'),
                        __('Áreas, usuarios y responsables involucrados.'),
                        __('Procesos y tipos de documentos.'),
                        __('Permisos y confidencialidad.'),
                        __('Microsoft 365 y licencias disponibles.'),
                        __('Necesidad de migración, automatización o reportes.'),
                    ] as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </section>

    </div>
</x-layout>
