<x-layout
    title="Administración Laboral Bolivia | Planillas y Entidades | Otium"
    description="Planillas, declaraciones ante Ministerio de Trabajo, Caja de Salud y Gestora, contratos, finiquitos y respaldo digital en SharePoint para empresas en Bolivia."
>
    @php
        $wa = env('WHATSAPP_NUMBER', '59170654104');
        $waService = 'https://wa.me/' . $wa . '?text=' . rawurlencode(__('Hola, quiero información sobre Administración Laboral.'));

        // Estilos repetidos del diseño "Administración Laboral 2026"
        $card   = 'bg-white/92 border border-[#1F1617]/8 rounded-3xl shadow-[0_18px_40px_rgba(31,22,23,.08)]';
        $tag    = 'text-xs uppercase tracking-[.14em] text-primary font-bold mb-2';
        $h2     = 'text-[clamp(28px,3.4vw,42px)] font-bold leading-normal tracking-[-0.02em] mb-1';
        $desc   = 'max-w-[720px] text-[#4E4849] text-[17px] mb-4';
        $kicker = 'inline-flex items-center gap-2 px-3 py-2 rounded-full text-xs uppercase tracking-[.12em] font-bold';
        $btn    = 'inline-flex items-center gap-2.5 px-4.5 py-3.5 rounded-[14px] font-bold text-[15px] transition-all hover:-translate-y-px';
        $dots   = ['bg-primary', 'bg-secondary', 'bg-accent', 'bg-[#1F1617]'];
        $dots5  = ['bg-primary', 'bg-secondary', 'bg-brand-light', 'bg-accent', 'bg-[#1F1617]'];
    @endphp

    <div class="text-[#1F1617] leading-normal" style="background: radial-gradient(circle at top right, rgba(84,186,199,.12), transparent 22%), radial-gradient(circle at top left, rgba(180,46,37,.06), transparent 24%), linear-gradient(180deg, #fbf9f8 0%, #f7f4f2 100%);">

    <!-- Hero -->
    <section class="pt-32 pb-7 md:pt-36">
        <div class="container-2026 grid grid-cols-1 lg:grid-cols-[1.2fr_.8fr] gap-7 items-stretch">
            <article class="{{ $card }} relative overflow-hidden p-5.5 md:p-8.5" data-aos="fade-up">
                <div class="{{ $kicker }} mb-4.5 bg-primary/8 text-primary">OTIUM | {{ __('Administración Laboral') }}</div>
                <h1 class="text-[clamp(34px,5vw,58px)] font-bold leading-[1.02] tracking-[-0.02em] mb-4.5">{{ __('Administrar personal no debería convertirse en perseguir planillas, vencimientos y documentos.') }}</h1>
                <p class="text-lg md:text-xl leading-[1.45] text-[#443D3E] max-w-[780px] mb-4">{{ __('OTIUM administra su proceso laboral mensual para que la empresa tenga control sobre planillas, obligaciones, documentación y pendientes, con información ordenada y visible para gerencia.') }}</p>
                <div class="flex flex-wrap gap-3.5 mt-6.5">
                    <a href="#proceso" class="{{ $btn }} bg-[#1F1617] text-white hover:bg-[#0d090a]">{{ __('Así trabajamos') }}</a>
                    <a href="#entregables" class="{{ $btn }} bg-accent/12 text-[#175864] hover:bg-accent/18">{{ __('Qué recibe cada mes') }}</a>
                </div>
                <div class="grid grid-cols-4 w-[min(380px,100%)] h-3.5 mt-6 rounded-full overflow-hidden" aria-hidden="true">
                    <span class="bg-primary"></span><span class="bg-secondary"></span><span class="bg-brand-light"></span><span class="bg-accent"></span>
                </div>
            </article>

            <aside class="{{ $card }} flex flex-col gap-4.5 p-5.5 md:p-6.5" data-aos="fade-left" data-aos-delay="100">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5">
                    @foreach ([
                        ['8',    __('Pasos de control en el ciclo mensual')],
                        ['2',    __('Modalidades de trabajo')],
                        ['360°', __('Seguimiento de proceso, evidencia y pendientes')],
                        ['1',    __('Lectura mensual para gerencia')],
                    ] as [$v, $l])
                    <div class="p-4 rounded-[18px] bg-[#F7F4F2] border border-[#E6E1DE]">
                        <div class="text-[30px] font-bold leading-none mb-2">{{ $v }}</div>
                        <div class="text-[13px] text-[#5F5A5B] font-semibold">{{ $l }}</div>
                    </div>
                    @endforeach
                </div>
                <div class="grid gap-3 mt-1">
                    @foreach ([
                        [__('Más que planillas'),       __('Administramos un ciclo recurrente de trabajo, control y seguimiento.')],
                        [__('Todo visible'),            __('Respaldos, constancias, files digitales, pendientes y próximos vencimientos.')],
                        [__('Gerencia sabe qué pasó'),  __('Una lectura clara de lo realizado, lo pendiente y lo que sigue.')],
                    ] as $i => [$t, $d])
                    <div class="grid grid-cols-[30px_1fr] gap-3 items-start">
                        <div class="w-7.5 h-7.5 grid place-items-center rounded-[10px] bg-primary/10 text-primary font-extrabold">{{ $i + 1 }}</div>
                        <div><strong class="block mb-0.5 text-sm">{{ $t }}</strong><span class="text-[13px] text-[#5F5A5B]">{{ $d }}</span></div>
                    </div>
                    @endforeach
                </div>
            </aside>
        </div>
    </section>

    <!-- Qué resolvemos -->
    <section id="problema" class="py-7 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-4.5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué resolvemos') }}</div>
                <h2 class="{{ $h2 }}">{{ __('La gestión laboral se complica cuando todo depende de recordatorios, archivos dispersos y personas clave.') }}</h2>
                <p class="{{ $desc }}">{{ __('OTIUM convierte tareas aisladas en un proceso mensual con responsables, evidencia, seguimiento y visibilidad para la empresa.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4.5">
                @foreach ([
                    ['bg-primary/10',   '↺', __('Menos carga operativa'), __('Gerencia, administración y RR.HH. dejan de absorber tareas repetitivas que pueden ser estructuradas y gestionadas.')],
                    ['bg-secondary/18', '✓', __('Más control'),           __('Obligaciones, trámites, documentos y pendientes dejan de depender exclusivamente de la memoria o de seguimientos informales.')],
                    ['bg-accent/16',    '⌁', __('Más trazabilidad'),      __('La empresa puede entender qué se hizo, qué falta, quién debe actuar y cuáles son los próximos vencimientos.')],
                ] as $i => [$chip, $icon, $t, $d])
                <article class="p-5.5 bg-white/90 border border-[#1F1617]/8 rounded-[20px] shadow-[0_18px_40px_rgba(31,22,23,.08)]" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}">
                    <div class="w-11 h-11 grid place-items-center mb-3.5 rounded-[14px] text-[22px] {{ $chip }}" aria-hidden="true">{{ $icon }}</div>
                    <h3 class="text-xl font-bold tracking-[-0.02em] mb-2">{{ $t }}</h3>
                    <p class="text-[#5F5A5B]">{{ $d }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Qué hacemos -->
    <section id="incluye" class="py-7 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-4.5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué hacemos por usted') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Administramos el ciclo laboral mensual.') }}</h2>
                <p class="{{ $desc }}">{{ __('Nos ocupamos de conectar las novedades del personal con la planilla, las obligaciones, la documentación y el seguimiento. El alcance exacto se define según la operación de cada empresa.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4.5">
                @foreach ([
                    [__('Novedades'),    __('Recibimos y ordenamos la información del período'), __('Altas, bajas, ausencias, vacaciones, cambios, remuneraciones y demás novedades relevantes.')],
                    [__('Planilla'),     __('Calculamos o revisamos'),                           __('OTIUM puede preparar la planilla completa o revisar la elaborada por el cliente, según la modalidad contratada.')],
                    [__('Obligaciones'), __('Preparamos y presentamos cuando corresponde'),       __('Ministerio de Trabajo / OVT, Gestora, Caja de Salud y RC-IVA dependientes, dentro del alcance acordado.')],
                    [__('Evidencia'),    __('Documentamos lo realizado'),                        __('Conservamos constancias, respaldos y documentación para que el proceso sea entendible y reconstruible.')],
                    [__('Seguimiento'),  __('Mantenemos visibles los pendientes'),               __('Identificamos documentación faltante, responsabilidades, próximas acciones y vencimientos.')],
                    [__('Gestión'),      __('Reportamos a la empresa'),                          __('Entregamos una lectura mensual de lo realizado, lo pendiente y lo que requiere decisión o acción.')],
                ] as $i => [$step, $t, $d])
                <article class="p-5.5 rounded-[20px] border border-[#1F1617]/8 bg-white/95 shadow-[0_18px_40px_rgba(31,22,23,.08)]" data-aos="fade-up" data-aos-delay="{{ ($i % 2) * 75 }}">
                    <div class="mb-2.5 text-xs font-extrabold tracking-[.12em] uppercase text-primary">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }} | {{ $step }}</div>
                    <h3 class="text-xl font-bold tracking-[-0.02em] mb-2">{{ $t }}</h3>
                    <p class="text-[#5F5A5B]">{{ $d }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Proceso -->
    <section id="proceso" class="py-7 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-4.5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Nuestro proceso de trabajo') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Un proceso recurrente y documentado, no una serie de tareas aisladas.') }}</h2>
                <p class="{{ $desc }}">{{ __('Este es el corazón del servicio: cada mes recorremos una secuencia definida para transformar novedades y obligaciones en un proceso controlado, documentado y visible.') }}</p>
            </div>
            <div class="{{ $card }} p-5.5 md:p-7" data-aos="fade-up">
                <div class="flex flex-wrap items-center gap-4.5 mb-5">
                    @foreach ([__('Rutina mensual'), __('Control gerencial'), __('Evidencia organizada'), __('Pendientes visibles')] as $pill)
                    <span class="px-3.5 py-2 rounded-full text-[13px] font-bold bg-[#F7F4F2] text-[#4F4849] border border-[#E6E1DE]">{{ $pill }}</span>
                    @endforeach
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4.5">
                    @foreach ([
                        [__('Recibimos novedades'),       __('Concentramos la información del período y validamos la base de trabajo del mes.')],
                        [__('Revisamos la información'),  __('Detectamos faltantes, inconsistencias y puntos que requieren respuesta del cliente.')],
                        [__('Calculamos o revisamos'),    __('Preparamos la planilla o revisamos la elaborada por el cliente, según la modalidad acordada.')],
                        [__('Validamos con usted'),       __('Confirmamos la información y obtenemos las aprobaciones necesarias antes de continuar.')],
                        [__('Gestionamos obligaciones'),  __('Preparamos y presentamos las obligaciones laborales comprendidas en el alcance.')],
                        [__('Documentamos'),              __('Conservamos la evidencia y mantenemos el orden documental del proceso.')],
                        [__('Reportamos'),                __('Entregamos una lectura clara de la gestión realizada, las obligaciones y los pendientes.')],
                        [__('Damos seguimiento'),         __('Mantenemos visibles la documentación faltante, las acciones abiertas y los próximos vencimientos.')],
                    ] as $i => [$t, $d])
                    <article class="relative p-5.5 rounded-[22px] bg-white border border-[#E6E1DE] md:min-h-47.5" data-aos="fade-up" data-aos-delay="{{ ($i % 4) * 75 }}">
                        {{-- Conector hacia la siguiente tarjeta de la fila (4 por fila en desktop, 2 en tablet) --}}
                        <span class="hidden {{ $i % 2 === 0 ? 'md:block' : '' }} {{ $i % 4 === 3 ? 'lg:hidden' : 'lg:block' }} absolute top-8.5 -right-4.5 w-4.5 h-0.5 bg-linear-to-r from-primary/45 to-accent/45"></span>
                        <div class="w-10.5 h-10.5 grid place-items-center mb-4 rounded-[14px] font-extrabold {{ $i % 2 === 0 ? 'bg-primary/10 text-primary' : 'bg-accent/14 text-[#186272]' }}">{{ $i + 1 }}</div>
                        <h3 class="text-lg font-bold tracking-[-0.02em] mb-2">{{ $t }}</h3>
                        <p class="text-[#5F5A5B] text-sm">{{ $d }}</p>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Modalidad de servicio -->
    <section class="py-7">
        <div class="container-2026">
            <div class="mb-4.5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Modalidad de servicio') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Nos adaptamos al punto en el que está su empresa.') }}</h2>
                <p class="{{ $desc }}">{{ __('Podemos asumir el cálculo completo de planilla o integrarnos como capa de revisión y control sobre un proceso que ya existe internamente.') }}</p>
            </div>
            @php
                $modes = [
                    'calculo' => [
                        'label'  => __('Cálculo completo'),
                        'otium'  => [
                            __('Prepara el cálculo de la planilla a partir de la información y novedades entregadas por el cliente.'),
                            __('Controla el flujo laboral del período y coordina las obligaciones aplicables.'),
                            __('Documenta, conserva respaldos y emite el Reporte Mensual.'),
                        ],
                        'client' => [
                            __('Novedades oportunas del período.'),
                            __('Documentación y datos necesarios para cada trámite.'),
                            __('Aprobaciones, accesos, firmas y fondos cuando correspondan.'),
                        ],
                    ],
                    'revision' => [
                        'label'  => __('Revisión'),
                        'otium'  => [
                            __('Revisa la planilla preparada por el cliente conforme al alcance definido.'),
                            __('Continúa con las obligaciones, documentación y seguimiento pactados.'),
                            __('Da visibilidad sobre pendientes, constancias y siguientes acciones.'),
                        ],
                        'client' => [
                            __('Planilla preparada y base documental suficiente para la revisión.'),
                            __('Respuesta oportuna sobre observaciones o correcciones.'),
                            __('Accesos, aprobaciones y coordinación interna del empleador.'),
                        ],
                    ],
                ];
            @endphp
            <div class="{{ $card }} p-5.5 md:p-6.5" x-data="{ tab: 'calculo' }" data-aos="fade-up">
                <div class="inline-flex gap-2 p-1.5 mb-5 rounded-full bg-[#F7F4F2] border border-[#E6E1DE]" role="tablist" aria-label="{{ __('Modalidades del servicio') }}">
                    @foreach ($modes as $key => $mode)
                    <button type="button" role="tab" @click="tab = '{{ $key }}'" :aria-selected="tab === '{{ $key }}'"
                        class="px-4 py-3 rounded-full font-bold cursor-pointer transition-all"
                        :class="tab === '{{ $key }}' ? 'bg-white text-[#1F1617] shadow-[0_6px_14px_rgba(31,22,23,.08)]' : 'bg-transparent text-[#5F5A5B]'">{{ $mode['label'] }}</button>
                    @endforeach
                </div>
                @foreach ($modes as $key => $mode)
                <div x-show="tab === '{{ $key }}'" @if (! $loop->first) style="display:none" @endif role="tabpanel">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                        @foreach ([[__('Qué hace OTIUM'), '✓', $mode['otium']], [__('Qué necesita del cliente'), '•', $mode['client']]] as [$title, $mark, $items])
                        <div class="p-4.5 rounded-[18px] bg-[#F7F4F2] border border-[#E6E1DE]">
                            <h4 class="text-lg font-bold tracking-[-0.02em] mb-2">{{ $title }}</h4>
                            <div class="grid gap-2.5 mt-3">
                                @foreach ($items as $item)
                                <div class="grid grid-cols-[22px_1fr] gap-2.5 text-sm text-[#474142]">
                                    <i class="not-italic text-accent font-extrabold">{{ $mark }}</i><span>{{ $item }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Todo queda organizado -->
    <section id="digital" class="py-7 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-4.5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Todo queda organizado') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Un modelo digital para encontrar, seguir y reconstruir la gestión laboral.') }}</h2>
                <p class="{{ $desc }}">{{ __('Cuando el alcance lo requiere, usamos SharePoint y Microsoft 365 para estructurar la evidencia, los files y los controles. La tecnología está al servicio del proceso, no al revés.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-[1.05fr_.95fr] gap-4.5">
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-right">
                    <table class="w-full border-collapse text-sm">
                        <thead>
                            <tr>
                                <th class="text-left px-3 py-3.5 text-xs uppercase tracking-[.12em] text-primary border-b border-[#E6E1DE]">{{ __('Componente') }}</th>
                                <th class="text-left px-3 py-3.5 text-xs uppercase tracking-[.12em] text-primary border-b border-[#E6E1DE]">{{ __('Qué puede organizar') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ([
                                [__('Lista maestra de trabajadores'), __('Datos y estado general del personal.')],
                                [__('Files digitales'),               __('Documentación individual y respaldos.')],
                                [__('Planillas mensuales'),           __('Histórico del período y evidencia del trabajo realizado.')],
                                [__('Ministerio / Gestora / Caja'),   __('Constancias, documentación y trazabilidad por entidad.')],
                                [__('Vacaciones y antigüedad'),       __('Controles cuando se encuentran dentro del alcance.')],
                                [__('Novedades y pendientes'),        __('Registro mensual estructurado, faltantes y siguientes acciones.')],
                                [__('Vencimientos'),                  __('Vistas o alertas según implementación.')],
                            ] as [$c, $o])
                            <tr>
                                <td class="align-top px-3 py-3.5 font-bold w-[34%] {{ $loop->first ? '' : 'border-t border-[#E6E1DE]' }}">{{ $c }}</td>
                                <td class="align-top px-3 py-3.5 {{ $loop->first ? '' : 'border-t border-[#E6E1DE]' }}">{{ $o }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4.5 px-4.5 py-4 rounded-2xl bg-accent/10 border-l-4 border-accent text-[#28525A]"><strong>{{ __('Alternativa:') }}</strong> {{ __('cuando SharePoint no forma parte del alcance, OTIUM puede estructurar ciertos controles en Excel preparado a medida.') }}</div>
                </article>
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-left" data-aos-delay="100">
                    <h3 class="text-[1.17em] font-bold tracking-[-0.02em] mb-2">{{ __('Lo que este modelo hace posible') }}</h3>
                    <div class="grid gap-2.5 mt-4">
                        @foreach ([
                            [__('Más orden'),                  __('El proceso mensual se vuelve más estructurado y documentado.')],
                            [__('Menor dependencia personal'), __('La información deja de estar concentrada en una sola persona.')],
                            [__('Mejor trazabilidad'),         __('Constancias, archivos y pendientes son más fáciles de localizar.')],
                            [__('Mejor lectura gerencial'),    __('Gerencia ve lo ocurrido en el mes y los próximos vencimientos.')],
                        ] as $i => [$b, $d])
                        <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ $dots[$i] }}"></span>
                            <div><b class="block mb-0.5 text-sm">{{ $b }}</b><span>{{ $d }}</span></div>
                        </div>
                        @endforeach
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Qué recibe cada mes -->
    <section id="entregables" class="py-7 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-4.5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué recibe cada mes') }}</div>
                <h2 class="{{ $h2 }}">{{ __('La empresa no tiene que preguntar “¿qué pasó este mes?”.') }}</h2>
                <p class="{{ $desc }}">{{ __('El Reporte Mensual de Gestión Laboral resume lo realizado, lo presentado, lo pendiente y lo que requiere una próxima acción. Además se entregan los documentos y controles definidos en el alcance.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-[1.1fr_.9fr] gap-4.5">
                @foreach ([
                    [__('Reporte Mensual de Gestión Laboral'), __('Una lectura ejecutiva del ciclo laboral del período.'), [
                        __('Actividades realizadas y obligaciones preparadas / presentadas.'),
                        __('Altas, bajas y novedades relevantes del período.'),
                        __('Trámites abiertos, documentos faltantes y decisiones requeridas.'),
                        __('Pendientes del cliente, pendientes OTIUM y próximos vencimientos.'),
                    ]],
                    [__('Evidencia y controles según alcance'), null, [
                        __('Planillas y constancias.'),
                        __('Estado de trámites y respaldos digitales.'),
                        __('Files actualizados cuando aplica.'),
                        __('Controles de vacaciones / antigüedad cuando se hayan configurado.'),
                    ]],
                ] as $k => [$title, $sub, $items])
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <h3 class="text-[1.17em] font-bold tracking-[-0.02em] mb-2">{{ $title }}</h3>
                    @if ($sub)<p class="text-[#5F5A5B] -mt-0.5">{{ $sub }}</p>@endif
                    <div class="grid gap-2.5 mt-4">
                        @foreach ($items as $i => $item)
                        <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ ['bg-primary', 'bg-secondary', 'bg-brand-light', 'bg-accent'][$i] }}"></span>
                            <div>{{ $item }}</div>
                        </div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Responsabilidades -->
    <section id="responsabilidades" class="py-7 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-4.5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Responsabilidades claras') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Trabajamos junto a su empresa sin confundir roles.') }}</h2>
                <p class="{{ $desc }}">{{ __('OTIUM administra el proceso contratado; el empleador conserva las decisiones y responsabilidades que le son propias. Esa claridad hace que el servicio funcione mejor.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                @foreach ([
                    ['OTIUM', 'bg-primary/8 text-primary', __('Nos hacemos cargo del proceso operativo acordado'), [
                        [__('Preparamos o revisamos'),   __('Planillas, obligaciones y documentación según alcance.')],
                        [__('Controlamos y presentamos'), __('Seguimos el calendario y efectuamos presentaciones cuando corresponda.')],
                        [__('Documentamos y reportamos'), __('Conservamos evidencia y entregamos visibilidad sobre la gestión.')],
                        [__('Damos seguimiento'),         __('Mantenemos visibles pendientes, faltantes y próximas acciones.')],
                    ]],
                    [__('Su empresa'), 'bg-accent/12 text-[#17606d]', __('Conserva las decisiones propias del empleador'), [
                        [__('Entrega novedades e información'),       __('Ingresos, salidas, cambios, ausencias, vacaciones, remuneraciones y respaldos.')],
                        [__('Aprueba cuando corresponde'),            __('Planilla, pagos, decisiones, excepciones y asuntos relevantes.')],
                        [__('Proporciona accesos, firmas y fondos'),  __('Cuando sean necesarios para operar portales, presentar o pagar obligaciones.')],
                        [__('Coordina internamente'),                 __('Gerencia, administración, RR.HH. y contabilidad participan según su organización.')],
                    ]],
                ] as $k => [$who, $kc, $title, $items])
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <div class="{{ $kicker }} mb-3.5 {{ $kc }}">{{ $who }}</div>
                    <h3 class="text-[1.17em] font-bold tracking-[-0.02em] mb-2">{{ $title }}</h3>
                    <div class="grid gap-2.5 mt-4">
                        @foreach ($items as $i => [$b, $d])
                        <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ ['bg-primary', 'bg-secondary', 'bg-accent', 'bg-[#1F1617]'][$i] }}"></span>
                            <div><b class="block mb-0.5 text-sm">{{ $b }}</b><span>{{ $d }}</span></div>
                        </div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Casos de tratamiento especial -->
    <section id="alcance" class="py-7 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $card }} p-5.5 md:p-6 bg-linear-to-b! from-white/95 to-[#F7F4F2]/98" data-aos="fade-up">
                <div class="{{ $kicker }} mb-4 bg-primary/10 text-primary font-extrabold">{{ __('Casos de tratamiento especial') }}</div>
                <h3 class="text-[1.17em] font-bold tracking-[-0.02em] mb-2">{{ __('Cuando el caso exige trabajo adicional, lo definimos antes de avanzar.') }}</h3>
                <p class="text-[#5F5A5B] max-w-[900px]">{{ __('Contratos, finiquitos, fiscalizaciones, regularizaciones históricas, reconstrucciones, representación formal, auditoría laboral preventiva o asesoría jurídica especializada se evalúan y cotizan separadamente. Cuando el caso requiere criterio jurídico, puede intervenir una firma legal asociada.') }}</p>
                <div class="mt-4 px-4.5 py-4 rounded-2xl bg-primary/6 border-l-4 border-primary text-[#6B2E2A]"><strong>{{ __('Además:') }}</strong> {{ __('aportes, tasas, valores, formularios, multas, intereses, gastos institucionales y otros desembolsos por cuenta del cliente no forman parte del honorario profesional, salvo acuerdo expreso.') }}</div>
            </div>
        </div>
    </section>

    <!-- Qué cambia -->
    <section class="py-7">
        <div class="container-2026">
            <div class="mb-4.5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué cambia') }}</div>
                <h2 class="{{ $h2 }}">{{ __('De una gestión reactiva a un proceso visible y controlado.') }}</h2>
                <p class="{{ $desc }}">{{ __('El objetivo no es agregar burocracia. Es que la empresa pueda operar con menos dependencia personal, más evidencia y una lectura más clara de sus obligaciones.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                @foreach ([
                    [__('Sin un proceso estructurado'), 'bg-[#5F5A5B]/10 text-[#5F5A5B]', ['bg-[#b6b6b7]', 'bg-[#b6b6b7]', 'bg-[#b6b6b7]', 'bg-[#b6b6b7]'], [
                        [__('Información dispersa'),      __('Archivos y constancias repartidos en distintos lugares.')],
                        [__('Recordatorios manuales'),    __('El control depende de agendas, correos o memoria.')],
                        [__('Dependencia de una persona'),__('El conocimiento operativo se concentra y cuesta reconstruirlo.')],
                        [__('Pendientes poco visibles'),  __('Gerencia debe preguntar para saber qué falta o qué sigue.')],
                    ]],
                    [__('Con OTIUM'), 'bg-accent/12 text-[#17606d]', $dots, [
                        [__('Proceso estructurado'), __('El ciclo mensual tiene una secuencia de trabajo definida.')],
                        [__('Seguimiento continuo'), __('Obligaciones, documentación y próximos pasos se mantienen visibles.')],
                        [__('Evidencia organizada'), __('Constancias y respaldos quedan documentados según el modelo acordado.')],
                        [__('Lectura gerencial'),    __('La empresa recibe una visión mensual de lo realizado, lo pendiente y lo que sigue.')],
                    ]],
                ] as $k => [$label, $kc, $colors, $items])
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <div class="{{ $kicker }} mb-3.5 {{ $kc }}">{{ $label }}</div>
                    <div class="grid gap-2.5 mt-4">
                        @foreach ($items as $i => [$b, $d])
                        <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ $colors[$i] }}"></span>
                            <div><b class="block mb-0.5 text-sm">{{ $b }}</b><span>{{ $d }}</span></div>
                        </div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Cómo empezamos -->
    <section id="empezamos" class="pt-10 pb-14 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $card }} relative overflow-hidden p-5.5 md:p-8.5" data-aos="fade-up">
                <span class="absolute -right-10 -bottom-10 w-55 h-55 rounded-full bg-[radial-gradient(circle,rgba(84,186,199,.16),rgba(84,186,199,0))] pointer-events-none"></span>
                <div class="relative grid grid-cols-1 lg:grid-cols-[1.1fr_.9fr] gap-6 items-center">
                    <div>
                        <div class="{{ $tag }}">{{ __('Cómo empezamos') }}</div>
                        <h2 class="text-[clamp(28px,3.5vw,44px)] font-bold leading-normal tracking-[-0.02em] mb-2.5">{{ __('Ordenemos su gestión laboral.') }}</h2>
                        <p class="text-[#494344] text-[17px] max-w-[700px] mb-4">{{ __('Cada empresa tiene una dinámica distinta de personal, novedades, planillas y obligaciones. Antes de definir el alcance, revisamos cómo funciona actualmente su proceso laboral y dónde se encuentran los principales puntos de carga, riesgo o falta de trazabilidad.') }}</p>
                        <div class="flex flex-wrap gap-3.5 mt-5">
                            <a href="{{ $waService }}" target="_blank" rel="noopener" class="{{ $btn }} bg-[#1F1617] text-white hover:bg-[#0d090a]">{{ __('Conversemos sobre su proceso laboral') }}</a>
                        </div>
                    </div>
                    <div class="p-5.5 rounded-[20px] bg-[#F7F4F2] border border-[#E6E1DE]">
                        <h3 class="text-lg font-bold tracking-[-0.02em] mb-2.5">{{ __('Para definir el servicio revisamos') }}</h3>
                        <div class="grid gap-2.5 mt-2">
                            @foreach ([
                                __('Cantidad de trabajadores y frecuencia de novedades.'),
                                __('Cómo se prepara hoy la planilla y quién participa.'),
                                __('Obligaciones y entidades que forman parte de la operación.'),
                                __('Documentación, controles existentes y nivel de soporte requerido.'),
                                __('Si conviene cálculo completo, revisión y/o modelo digital con SharePoint.'),
                            ] as $i => $item)
                            <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                                <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ $dots5[$i] }}"></span>
                                <div>{{ $item }}</div>
                            </div>
                            @endforeach
                        </div>
                        <p class="mt-4.5 text-[#5F5A5B] text-sm"><strong>{{ __('A partir de esta revisión') }}</strong> {{ __('definimos un alcance claro, responsabilidades y una forma de trabajo mensual adaptada a su operación.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
</x-layout>
