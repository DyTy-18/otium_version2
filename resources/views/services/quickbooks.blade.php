<x-layout
    title="QuickBooks + Contabilidad en Bolivia | Otium"
    description="Llevamos o supervisamos tu contabilidad directamente en QuickBooks, conectada con el cumplimiento tributario en Bolivia. Atención en español o inglés."
>
    @php
        // Estilos repetidos del diseño "QuickBooks + Contabilidad 2026"
        $card  = 'bg-white/94 border border-[#1F1617]/7.5 rounded-[28px] shadow-[0_18px_40px_rgba(31,22,23,.08)]';
        $soft  = 'shadow-[0_10px_24px_rgba(31,22,23,.055)]';
        $tag   = 'text-[11px] font-extrabold tracking-[.14em] uppercase text-primary mb-2';
        $h2    = 'text-[clamp(28px,3.45vw,44px)] font-bold leading-[1.08] tracking-[-0.025em] text-black mb-2';
        $desc  = 'max-w-[760px] text-[16.5px] text-[#4f4849]';
        $head  = 'flex flex-col md:flex-row md:items-end md:justify-between gap-2.25 md:gap-5.5 mb-5';
        $btn   = 'inline-flex items-center justify-center gap-2 min-h-12 px-4.5 py-3.25 rounded-[14px] border font-extrabold text-sm transition-all hover:-translate-y-px';
        $box   = 'border border-mid bg-soft';
        $teal  = 'text-[#176171]';
    @endphp

    <div class="text-black leading-[1.52]" style="background: radial-gradient(circle at 92% 3%, rgba(88,184,198,.12), transparent 23%), radial-gradient(circle at 7% 9%, rgba(197,45,33,.055), transparent 22%), linear-gradient(180deg, #fbfaf9 0%, #f7f4f2 100%);">

    <!-- Hero -->
    <section id="inicio" class="pt-32 pb-7.5 md:pt-36 scroll-mt-24">
        <div class="container-2026 grid grid-cols-1 lg:grid-cols-[1.16fr_.84fr] gap-5.5 items-stretch">
            <article class="{{ $card }} relative overflow-hidden p-5.25 md:p-10" data-aos="fade-up">
                <span class="absolute -right-22.5 -bottom-27.5 w-62.5 h-62.5 rounded-full bg-[radial-gradient(circle,rgba(88,184,198,.16),rgba(88,184,198,0)_67%)] pointer-events-none"></span>
                <div class="inline-flex gap-2 items-center mb-4.5 px-3 py-2 rounded-full bg-primary/8.5 text-primary text-[11px] font-extrabold tracking-[.13em] uppercase">OTIUM | {{ __('QuickBooks + Contabilidad en Bolivia') }}</div>
                <h1 class="text-[clamp(35px,5vw,62px)] font-bold leading-[1.01] tracking-[-0.025em] max-w-[820px] mb-5">
                    {{ __('Tu operación en Bolivia.') }}
                    <span class="block">{{ __('Tu contabilidad en QuickBooks.') }}</span>
                    <span class="block">{{ __('Bajo control desde cualquier lugar.') }}</span>
                </h1>
                <p class="max-w-[820px] mb-4 text-[17px] md:text-[19px] leading-normal text-[#453F40]">{{ __('OTIUM puede llevar o supervisar la contabilidad de tu empresa directamente en QuickBooks, conciliando la información y acompañando el cumplimiento contable y tributario en Bolivia.') }}</p>
                <p class="max-w-[820px] mb-4 text-[17px] md:text-[19px] leading-normal text-[#453F40]">{{ __('Trabajamos con propietarios, gerentes, equipos financieros y casas matrices en') }} <strong>{{ __('español o inglés') }}</strong>.</p>
                <div class="relative z-10 flex flex-wrap gap-3 mt-6.5">
                    <a href="#modalidades" class="{{ $btn }} bg-black border-transparent text-white hover:bg-[#0f0a0b]">{{ __('Ver cómo podemos trabajar') }}</a>
                    <a href="#proceso" class="{{ $btn }} bg-accent/11 border-accent/18 text-[#175864] hover:bg-accent/17">{{ __('Ver el ciclo contable') }}</a>
                </div>
                <div class="flex flex-wrap gap-2 items-center mt-5 text-[13px] text-muted">
                    @foreach (['QuickBooks', __('Contabilidad local'), __('Tributación Bolivia'), 'SharePoint', 'Español / English'] as $pill)
                    <span class="px-2.5 py-1.5 rounded-full {{ $box }} font-bold text-[#4c4546]">{{ $pill }}</span>
                    @endforeach
                </div>
                <div class="grid grid-cols-4 w-[min(390px,100%)] h-3 mt-6.25 rounded-full overflow-hidden" aria-hidden="true">
                    <span class="bg-primary"></span><span class="bg-secondary"></span><span class="bg-brand-light"></span><span class="bg-accent"></span>
                </div>
            </article>

            <aside class="{{ $card }} flex flex-col justify-between gap-4.5 p-5.25 md:p-7" data-aos="fade-left" data-aos-delay="100">
                <div>
                    <div class="text-[11px] font-extrabold tracking-[.13em] uppercase text-primary">{{ __('La decisión principal') }}</div>
                    <h2 class="mt-2 text-[27px] font-bold leading-[1.15] tracking-[-0.025em]">{{ __('¿Quién lleva actualmente tu contabilidad?') }}</h2>
                </div>
                <div class="grid gap-3">
                    @foreach ([
                        [__('Quiero delegarla'), 'QB Contable',   __('OTIUM registra, concilia, revisa y cierra directamente en QuickBooks.')],
                        [__('Ya tengo equipo'),  'QB Controller', __('Tu equipo registra. OTIUM revisa, controla y acompaña el cierre y la tributación.')],
                    ] as [$label, $name, $d])
                    <div class="p-4.5 rounded-[18px] {{ $box }}">
                        <div class="mb-1.75 text-[11px] font-extrabold tracking-[.1em] uppercase text-accent">{{ $label }}</div>
                        <strong class="block mb-1 text-base">{{ $name }}</strong>
                        <span class="block text-[13px] text-muted">{{ $d }}</span>
                    </div>
                    @endforeach
                </div>
                <div class="pt-4.5 border-t border-mid text-[13px] text-[#4b4546]"><strong>{{ __('¿Ya usás QuickBooks pero no sabés cómo está?') }}</strong><br>{{ __('Podemos empezar con un QB Checkup. Si todavía no lo utilizás, también podemos ayudarte a ponerlo en marcha.') }}</div>
            </aside>
        </div>
    </section>

    <!-- Qué resolvemos -->
    <section id="problema" class="py-6 md:py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Qué resolvemos') }}</div><h2 class="{{ $h2 }}">{{ __('Tener QuickBooks no es lo mismo que tener la contabilidad bajo control.') }}</h2></div>
                <p class="{{ $desc }} mb-4">{{ __('La plataforma da acceso a la información. El valor de OTIUM está en convertir esa información en un proceso contable conciliado, cerrado, documentado y conectado con las obligaciones locales.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3.75">
                @foreach ([
                    ['text-primary bg-primary/9',        __('Visibilidad desde fuera de Bolivia'), __('Propietarios, gerencia o casa matriz pueden acceder a QuickBooks sin depender solamente de reportes enviados por terceros.')],
                    ['text-[#8b5d50] bg-secondary/17',   __('Criterio contable local'),            __('La información se revisa considerando la operación y las necesidades contables de una empresa que trabaja en Bolivia.')],
                    ['text-[#176171] bg-accent/14',      __('Conexión con tributación'),           __('QuickBooks no reemplaza al SIN ni al SIAT. OTIUM concilia la información y gestiona las obligaciones incluidas en el alcance.')],
                    ['text-[#176171] bg-accent/14',      __('Una segunda capa de control'),        __('Si ya tenés contador o equipo administrativo, OTIUM puede revisar el trabajo, acompañar ajustes y supervisar el cierre.')],
                ] as $i => [$chip, $t, $d])
                <article class="p-5.25 rounded-[19px] bg-white/92 border border-mid {{ $soft }}" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}">
                    <div class="w-9 h-9 grid place-items-center mb-4 rounded-xl text-xs font-black {{ $chip }}">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3 class="text-lg font-bold tracking-[-0.025em] mb-2">{{ $t }}</h3>
                    <p class="text-sm text-muted">{{ $d }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modalidades -->
    <section id="modalidades" class="py-6 md:py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Dos formas principales de trabajar') }}</div><h2 class="{{ $h2 }}">{{ __('Delegá la contabilidad o mantené tu equipo interno.') }}</h2></div>
                <p class="{{ $desc }} mb-4">{{ __('El modelo se adapta a quién realiza el registro operativo. No son cuatro servicios equivalentes: QB Contable y QB Controller son las modalidades recurrentes centrales.') }}</p>
            </div>

            @php
                $modes = [
                    'contable' => [
                        'label' => 'QB Contable',
                        'title' => __('OTIUM lleva tu contabilidad en QuickBooks.'),
                        'lead'  => __('Para empresas que prefieren delegar el proceso contable y conservar acceso directo a su información.'),
                        'items' => [
                            __('Registro de compras, ventas, gastos, cobros, pagos, bancos y asientos necesarios para el cierre, según alcance.'),
                            __('Conciliaciones bancarias y revisión de CxC, CxP y otros saldos relevantes cuando exista información suficiente.'),
                            __('Revisión, ajustes y cierre contable dentro del calendario acordado.'),
                            __('Balance General, Estado de Resultados y auxiliares cuando correspondan.'),
                            __('Preparación y presentación de obligaciones tributarias incluidas en el servicio.'),
                        ],
                        'note'  => '<strong>' . e(__('Facturación:')) . '</strong> ' . e(__('normalmente la empresa emite sus facturas. OTIUM puede apoyar en casos especiales cuando se acuerde expresamente.')),
                        'sideTitle' => __('Qué cambia para la empresa'),
                        'side'  => [
                            __('OTIUM ejecuta el proceso contable recurrente.'),
                            __('La empresa mantiene acceso a QuickBooks.'),
                            __('El cierre se organiza con un calendario acordado, no con una fecha universal.'),
                            __('El cliente realiza los pagos de impuestos; OTIUM prepara y presenta las declaraciones incluidas.'),
                        ],
                    ],
                    'controller' => [
                        'label' => 'QB Controller',
                        'title' => __('Tu equipo contabiliza. OTIUM revisa y controla.'),
                        'lead'  => __('Para empresas que ya cuentan con contador o equipo administrativo y quieren una segunda capa profesional de revisión, cierre y soporte local.'),
                        'items' => [
                            __('Revisión de registros, clasificación, saldos, CxC, CxP, bancos, auxiliares y estados financieros.'),
                            __('Conciliaciones realizadas por el cliente u OTIUM, según el alcance contratado.'),
                            __('Observaciones, aclaraciones y ajustes: OTIUM puede instruir al equipo o registrar directamente cuando corresponda.'),
                            __('Supervisión del cierre y acompañamiento del cumplimiento tributario.'),
                            __('Periodicidad mensual, trimestral o semestral, según volumen, riesgo y necesidad de control.'),
                        ],
                        'note'  => e(__('OTIUM puede orientar al equipo interno sobre criterios contables y uso de QuickBooks cuando sea necesario, pero la capacitación no es el objetivo principal del Controller.')),
                        'sideTitle' => __('Qué conserva tu equipo'),
                        'side'  => [
                            __('El registro operativo cotidiano permanece en la empresa.'),
                            __('OTIUM identifica inconsistencias, faltantes y temas que requieren criterio.'),
                            __('La gerencia obtiene una lectura adicional del cierre y los pendientes.'),
                            __('La frecuencia se ajusta a la realidad de la operación.'),
                        ],
                    ],
                ];
            @endphp
            <div class="{{ $card }} p-5.25 md:p-7" x-data="{ tab: 'contable' }" data-aos="fade-up">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 md:gap-4 pb-5 mb-5 border-b border-mid">
                    <div><strong class="text-lg">{{ __('Elegí la situación que más se parece a tu empresa') }}</strong><br><span class="text-sm text-muted">{{ __('El alcance final se define después de entender la operación.') }}</span></div>
                    <div class="grid grid-cols-2 md:inline-flex gap-1.75 p-1.5 rounded-full {{ $box }}" role="tablist" aria-label="{{ __('Modalidades QuickBooks') }}">
                        @foreach ($modes as $key => $mode)
                        <button type="button" role="tab" @click="tab = '{{ $key }}'" :aria-selected="tab === '{{ $key }}'"
                            class="px-3.75 py-2.75 rounded-full font-extrabold cursor-pointer transition-all"
                            :class="tab === '{{ $key }}' ? 'bg-white text-black shadow-[0_6px_16px_rgba(31,22,23,.08)]' : 'bg-transparent text-muted'">{{ $mode['label'] }}</button>
                        @endforeach
                    </div>
                </div>
                @foreach ($modes as $key => $mode)
                <div x-show="tab === '{{ $key }}'" @if (! $loop->first) style="display:none" @endif role="tabpanel">
                    <div class="grid grid-cols-1 lg:grid-cols-[1.05fr_.95fr] gap-4.5">
                        <div class="p-6 rounded-[20px] border border-mid bg-linear-to-b from-white to-[#fbfaf9]">
                            <div class="{{ $tag }}">{{ $mode['label'] }}</div>
                            <h3 class="text-[27px] font-bold leading-tight tracking-[-0.025em] mb-2">{{ $mode['title'] }}</h3>
                            <p class="text-base text-[#494243]">{{ $mode['lead'] }}</p>
                            <div class="grid gap-2.5 mt-3.5">
                                @foreach ($mode['items'] as $item)
                                <div class="grid grid-cols-[22px_1fr] gap-2.25 text-sm text-[#464041]"><i class="not-italic font-black text-accent">✓</i><span>{{ $item }}</span></div>
                                @endforeach
                            </div>
                            <div class="mt-4 px-4 py-3.5 rounded-[14px] bg-accent/10 border-l-4 border-accent text-[#28555e] text-sm">{!! $mode['note'] !!}</div>
                        </div>
                        <aside class="p-5.5 rounded-[20px] {{ $box }}">
                            <h4 class="text-[17px] font-bold tracking-[-0.025em] mb-2">{{ $mode['sideTitle'] }}</h4>
                            <div class="grid gap-2.5 mt-3.5">
                                @foreach ($mode['side'] as $item)
                                <div class="grid grid-cols-[22px_1fr] gap-2.25 text-sm text-[#464041]"><i class="not-italic font-black text-accent">→</i><span>{{ $item }}</span></div>
                                @endforeach
                            </div>
                        </aside>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4.5">
                @foreach ([
                    [__('Puerta de entrada'), 'QB Checkup', __('Una revisión diagnóstica para entender cómo está QuickBooks y la contabilidad antes de continuar, delegar o pasar a Controller.'), [
                        __('Normalmente revisa el último mes.'),
                        __('Configuración, saldos, conciliaciones, CxC, CxP y estados financieros.'),
                        __('Diagnóstico + semáforo + plan de acción + reunión de cierre.'),
                    ]],
                    [__('Capacidad complementaria'), __('Puesta en marcha de QuickBooks'), __('Si todavía no utilizás QuickBooks o necesitás reordenarlo, podemos dejar la plataforma preparada para comenzar a trabajar.'), [
                        __('Configuración y estructura contable.'),
                        __('Saldos de apertura y auxiliares necesarios según el caso.'),
                        __('Capacitación orientada a la operación real y a los reportes.'),
                    ]],
                ] as $k => [$label, $title, $d, $items])
                <article class="p-5.25 rounded-[20px] border border-mid bg-white/92" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <div class="text-[10.5px] font-extrabold tracking-[.11em] uppercase text-primary">{{ $label }}</div>
                    <h3 class="mt-1.75 mb-2 text-xl font-bold tracking-[-0.025em]">{{ $title }}</h3>
                    <p class="text-sm text-muted">{{ $d }}</p>
                    <ul class="list-disc mt-3 pl-4.5 text-sm text-[#494344] space-y-1.5">
                        @foreach ($items as $item)<li>{{ $item }}</li>@endforeach
                    </ul>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- El proceso -->
    <section id="proceso" class="py-6 md:py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('El proceso como evidencia') }}</div><h2 class="{{ $h2 }}">{{ __('La contabilidad no termina cuando se registra una factura.') }}</h2></div>
                <p class="{{ $desc }} mb-4">{{ __('Cada período debe pasar por un ciclo de información, registro, conciliación, revisión, tributación, cierre y seguimiento. Ese ciclo es la pieza central del servicio.') }}</p>
            </div>
            <div class="{{ $card }} relative overflow-hidden p-5.25 md:p-7" data-aos="fade-up">
                <span class="absolute inset-0 bg-linear-to-br from-primary/2.5 to-accent/4.5 pointer-events-none"></span>
                <div class="relative flex flex-wrap gap-2.25 mb-4.5">
                    @foreach ([__('QB Contable: OTIUM registra'), __('QB Controller: tu equipo registra'), __('Calendario según operación y vencimientos')] as $pill)
                    <span class="px-3 py-2 rounded-full {{ $box }} text-[12.5px] font-bold text-[#4a4445]">{{ $pill }}</span>
                    @endforeach
                </div>
                <div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3.5">
                    @foreach ([
                        [__('Información'),          __('Recibimos documentación, accesos y datos necesarios para trabajar el período.')],
                        [__('Registro'),             __('OTIUM o tu equipo registra la operación en QuickBooks, según modalidad.')],
                        [__('Conciliaciones'),       __('Contrastamos bancos, CxC, CxP y otros saldos relevantes cuando corresponda.')],
                        [__('Revisión'),             __('Analizamos clasificación, partidas pendientes, saldos inusuales y faltantes.')],
                        [__('Tributación'),          __('Conciliamos la contabilidad con las obligaciones comprendidas en el alcance.')],
                        [__('Ajustes y cierre'),     __('Preparamos o coordinamos ajustes y revisamos los principales saldos del período.')],
                        [__('Estados financieros'),  __('Generamos y revisamos Balance General y Estado de Resultados.')],
                        [__('Seguimiento'),          __('Hacemos visibles resultados, observaciones, pendientes y próximos pasos.')],
                    ] as $i => [$t, $d])
                    <article class="relative p-5 rounded-[20px] bg-white border border-mid md:min-h-45" data-aos="fade-up" data-aos-delay="{{ ($i % 4) * 75 }}">
                        {{-- Conector hacia la siguiente tarjeta de la fila (4 por fila en desktop, 2 en tablet) --}}
                        <span class="hidden {{ $i % 2 === 0 ? 'md:block' : '' }} {{ $i % 4 === 3 ? 'lg:hidden' : 'lg:block' }} absolute top-8.5 -right-3.5 w-3.5 h-0.5 bg-linear-to-r from-primary/45 to-accent/50"></span>
                        <div class="w-10 h-10 grid place-items-center mb-3.5 rounded-[13px] font-black {{ $i % 2 === 0 ? 'bg-primary/9 text-primary' : 'bg-accent/14 ' . $teal }}">{{ $i + 1 }}</div>
                        <h3 class="text-[17px] font-bold tracking-[-0.025em] mb-2">{{ $t }}</h3>
                        <p class="text-[13.5px] text-muted">{{ $d }}</p>
                    </article>
                    @endforeach
                </div>
                <div class="relative mt-4 px-4.25 py-3.75 rounded-[15px] bg-[#E8D0C2]/32 text-[#5b4c49] text-sm"><strong>{{ __('Calendario realista:') }}</strong> {{ __('OTIUM acuerda con cada empresa un calendario de cierre y cumplimiento según la operación, la disponibilidad de información y los vencimientos aplicables. No se promete una fecha universal de cierre para todos los clientes.') }}</div>
            </div>
        </div>
    </section>

    <!-- QuickBooks + Bolivia -->
    <section id="bolivia" class="py-6 md:py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('QuickBooks + Bolivia') }}</div><h2 class="{{ $h2 }}">{{ __('QuickBooks organiza la contabilidad. OTIUM conecta esa información con el cumplimiento local.') }}</h2></div>
                <p class="{{ $desc }} mb-4">{{ __('QuickBooks no sustituye al SIAT, al SIN ni a las obligaciones formales aplicables en Bolivia. Por eso el proceso necesita una capa local de conciliación y criterio.') }}</p>
            </div>
            <div class="{{ $card }} p-5.25 md:p-7" data-aos="fade-up">
                <div class="grid grid-cols-1 lg:grid-cols-[1fr_70px_1fr_70px_1fr] gap-2.5 items-stretch">
                    @foreach ([
                        [__('Plataforma'),      'QuickBooks',   __('Registros, bancos, CxC, CxP, Balance General, Estado de Resultados y reportes.')],
                        [__('Criterio local'),  'OTIUM',        __('Conciliación contable-tributaria, revisión, ajustes, cierre y preparación de obligaciones según alcance.')],
                        [__('Cumplimiento'),    'SIN / SIAT',   __('Declaraciones y obligaciones locales comprendidas en el servicio contratado.')],
                    ] as [$label, $title, $d])
                        @unless ($loop->first)
                        <div class="grid place-items-center min-h-8.5 text-accent text-[31px] rotate-90 lg:rotate-0" aria-hidden="true">→</div>
                        @endunless
                        <div class="p-5.5 rounded-[20px] border border-mid bg-white">
                            <div class="mb-2 text-[10.5px] font-extrabold tracking-[.12em] uppercase text-primary">{{ $label }}</div>
                            <h3 class="text-[21px] font-bold tracking-[-0.025em] mb-2">{{ $title }}</h3>
                            <p class="text-sm text-muted">{{ $d }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5 mt-4.5">
                    @foreach ([
                        ['OTIUM',            __('Prepara y presenta las declaraciones incluidas, comunica importes, vencimientos, diferencias y documentación faltante.')],
                        [__('La empresa'),   __('Entrega información y aprobaciones oportunamente y realiza el pago de los impuestos.')],
                    ] as [$who, $d])
                    <div class="p-4.25 rounded-2xl {{ $box }}"><strong class="block mb-1">{{ $who }}</strong><span class="text-[13.5px] text-muted">{{ $d }}</span></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Modelo digital -->
    <section id="modelo" class="py-6 md:py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Modelo digital') }}</div><h2 class="{{ $h2 }}">{{ __('Contabilidad, evidencia y lectura gerencial cumplen funciones distintas.') }}</h2></div>
                <p class="{{ $desc }} mb-4">{{ __('No intentamos que una sola herramienta haga todo. QuickBooks contiene la información, SharePoint conserva la evidencia y OTIUM ayuda a interpretar resultados y pendientes.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                <article class="{{ $card }} p-5.25 md:p-6" data-aos="fade-right">
                    <h3 class="text-[1.17em] font-bold tracking-[-0.025em] mb-2">{{ __('Tres capas que trabajan juntas') }}</h3>
                    <div class="grid gap-3 mt-4">
                        @foreach ([
                            ['QB', 'bg-primary/10 text-primary',      __('QuickBooks — Contabilidad'),        __('Registros, bancos, CxC, CxP, Balance, Estado de Resultados y reportes.')],
                            ['SP', 'bg-secondary/18 text-[#845548]',  __('SharePoint — Evidencia'),           __('Declaraciones, respaldos, constancias, históricos, archivos y pendientes cuando aplica.')],
                            ['OT', 'bg-accent/14 text-[#176171]',     __('Seguimiento OTIUM — Lectura'),      __('Resultados, variaciones, observaciones, pendientes y temas que requieren atención.')],
                        ] as [$badge, $bc, $t, $d])
                        <div class="grid grid-cols-[48px_1fr] gap-3.25 items-center p-3.75 rounded-[17px] {{ $box }}">
                            <div class="w-12 h-12 grid place-items-center rounded-[15px] text-[13px] font-black {{ $bc }}">{{ $badge }}</div>
                            <div><strong class="block mb-0.5">{{ $t }}</strong><span class="text-[13.5px] text-muted">{{ $d }}</span></div>
                        </div>
                        @endforeach
                    </div>
                </article>

                <article class="{{ $card }} p-5.25 md:p-6" data-aos="fade-left" data-aos-delay="100">
                    <h3 class="text-[1.17em] font-bold tracking-[-0.025em] mb-2">{{ __('El seguimiento puede presentarse en HTML') }}</h3>
                    <p class="text-sm text-muted mb-4">{{ __('Un resumen gerencial con datos reales del período, sin crear otro sistema paralelo.') }}</p>
                    <div class="mt-3.75 rounded-[18px] overflow-hidden border border-mid bg-white {{ $soft }}" aria-label="{{ __('Ejemplo conceptual de reporte OTIUM') }}">
                        <div class="flex justify-between items-center gap-2.5 px-3.5 py-3 bg-[#fbfaf9] border-b border-mid text-xs font-extrabold">
                            <span>OTIUM | {{ __('Seguimiento del período') }}</span>
                            <span class="flex gap-1.25" aria-hidden="true"><i class="block w-2 h-2 rounded-full bg-brand-light"></i><i class="block w-2 h-2 rounded-full bg-brand-light"></i><i class="block w-2 h-2 rounded-full bg-brand-light"></i></span>
                        </div>
                        <div class="p-3.75">
                            <div class="grid grid-cols-2 gap-2.25">
                                @foreach ([[__('Ventas'), __('Dato del período')], [__('Resultado'), __('Dato del período')], ['CxC', __('Saldo / ageing')], ['CxP', __('Saldo / ageing')]] as [$k, $v])
                                <div class="p-3 rounded-[14px] {{ $box }}"><small class="block mb-1.5 text-muted">{{ $k }}</small><strong class="text-[13px]">{{ $v }}</strong></div>
                                @endforeach
                            </div>
                            <div class="grid gap-2 mt-3">
                                @foreach ([[__('Conciliaciones'), 'bg-accent/55', 58], [__('Pendientes'), 'bg-primary/45', 34], [__('Observaciones'), 'bg-secondary/55', 47]] as [$k, $c, $w])
                                <div class="grid grid-cols-[100px_1fr] gap-2.5 items-center text-xs text-muted">
                                    <span>{{ $k }}</span>
                                    <div class="h-2 rounded-full bg-[#E6E1DE]/80 overflow-hidden"><div class="h-full {{ $c }}" style="width: {{ $w }}%"></div></div>
                                </div>
                                @endforeach
                            </div>
                            <div class="mt-3 p-3 rounded-[13px] bg-accent/9 text-[#31555c] text-[12.5px]">{{ __('La estructura se alimenta con información real de los estados financieros y del proceso de cierre. Los elementos mostrados aquí son únicamente la forma visual del reporte, no cifras simuladas.') }}</div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Qué recibe la empresa -->
    <section id="entregables" class="py-6 md:py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Qué recibe la empresa') }}</div><h2 class="{{ $h2 }}">{{ __('El resultado no es solamente una contabilidad “cargada”.') }}</h2></div>
                <p class="{{ $desc }} mb-4">{{ __('Los entregables dependen de la modalidad y del alcance, pero el modelo combina información contable, evidencia, cumplimiento y lectura periódica.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3.5">
                @foreach ([
                    [__('Plataforma'),   __('QuickBooks actualizado'),   __('Información procesada o revisada según QB Contable o QB Controller.')],
                    [__('Control'),      __('Conciliaciones'),           __('Bancos y otros saldos relevantes según el alcance acordado.')],
                    [__('Cierre'),       __('Estados financieros'),      __('Balance General y Estado de Resultados, además de auxiliares cuando correspondan.')],
                    ['Tax',              __('Cumplimiento tributario'),  __('Declaraciones y documentación comprendidas dentro del servicio contratado.')],
                    [__('Evidencia'),    'SharePoint',                   __('Respaldos, declaraciones, históricos y pendientes organizados cuando aplica.')],
                    [__('Lectura'),      __('Seguimiento OTIUM'),        __('Resumen estructurado o HTML con resultados, variaciones, observaciones y pendientes.')],
                    [__('Coordinación'), __('Reunión periódica'),        __('Lectura de resultados, aclaraciones y próximos pasos con gerencia o equipo financiero.')],
                    [__('Idioma'),       __('Español o inglés'),         __('Reuniones, consultas y explicación de información contable y financiera en ambos idiomas.')],
                ] as $i => [$label, $t, $d])
                <article class="p-5 rounded-[19px] border border-mid bg-white/94 {{ $soft }}" data-aos="fade-up" data-aos-delay="{{ ($i % 4) * 75 }}">
                    <div class="text-[10.5px] font-extrabold tracking-[.11em] uppercase text-primary">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }} | {{ $label }}</div>
                    <h3 class="mt-2 mb-2 text-[17px] font-bold tracking-[-0.025em]">{{ $t }}</h3>
                    <p class="text-[13.5px] text-muted">{{ $d }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Responsabilidades -->
    <section id="responsabilidades" class="py-6 md:py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Responsabilidades claras') }}</div><h2 class="{{ $h2 }}">{{ __('Trabajamos dentro de un proceso compartido sin confundir roles.') }}</h2></div>
                <p class="{{ $desc }} mb-4">{{ __('La calidad y oportunidad del cierre dependen también de que la empresa entregue información, accesos, aclaraciones y decisiones dentro del calendario acordado.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach ([
                    ['OTIUM', 'bg-accent', __('Ejecuta o revisa según la modalidad.'), [
                        __('Registrar o revisar, según QB Contable o QB Controller.'),
                        __('Conciliar y detectar observaciones.'),
                        __('Preparar o coordinar ajustes y cierre.'),
                        __('Preparar estados financieros.'),
                        __('Preparar y presentar declaraciones incluidas.'),
                        __('Documentar, reportar y dar seguimiento.'),
                    ]],
                    [__('Tu empresa'), 'bg-secondary', __('Entrega información y conserva sus decisiones.'), [
                        __('Facilitar accesos y documentación.'),
                        __('Informar operaciones relevantes y responder aclaraciones.'),
                        __('Aprobar ajustes o criterios cuando corresponda.'),
                        __('En QB Controller, mantener el registro operativo.'),
                        __('Realizar los pagos de impuestos.'),
                        __('Resolver decisiones y pendientes de gerencia o casa matriz.'),
                    ]],
                ] as $k => [$who, $dot, $title, $items])
                <article class="{{ $card }} p-5.25 md:p-5.75" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <div class="{{ $tag }}">{{ $who }}</div>
                    <h3 class="text-[22px] font-bold tracking-[-0.025em] mb-2">{{ $title }}</h3>
                    <div class="grid gap-2.5 mt-3.5">
                        @foreach ($items as $item)
                        <div class="grid grid-cols-[14px_1fr] gap-2.5 text-sm text-[#494344]"><b class="w-2 h-2 mt-1.75 rounded-full {{ $dot }}"></b><span>{{ $item }}</span></div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </div>
            <div class="mt-3.75 px-4 py-3.5 rounded-[14px] bg-primary/7 border-l-4 border-primary text-[#65433e] text-[13.5px]" data-aos="fade-up"><strong>{{ __('Acceso recomendado:') }}</strong> {{ __('preferentemente Accountant/Bookkeeper dentro de QuickBooks. También pueden utilizarse exportaciones cuando sea necesario.') }}</div>
        </div>
    </section>

    <!-- Alcance adicional -->
    <section id="alcance" class="py-6 md:py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $card }} px-5.25 py-5.25 md:px-6 md:py-5.5 bg-linear-to-b! from-white/96 to-[#F7F4F2]/98" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Cuando el caso requiere trabajo adicional') }}</div>
                <h3 class="text-[1.17em] font-bold tracking-[-0.025em] mb-2">{{ __('Lo dimensionamos antes de incorporarlo al alcance.') }}</h3>
                <p class="text-muted max-w-[850px] mb-4">{{ __('El servicio recurrente no supone automáticamente reconstrucciones históricas, proyectos complejos de inventario, integraciones o trabajos extraordinarios.') }}</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2.5 mt-4">
                    @foreach ([
                        __('Reconstrucciones históricas extensas'),
                        __('Regularizaciones o rectificaciones complejas'),
                        __('Inventarios y controles específicos'),
                        __('Integraciones o desarrollos de software'),
                        __('Ejecución o aprobación de pagos bancarios'),
                        __('Payroll y gestión laboral'),
                        __('Auditoría independiente'),
                        __('Reporting extraordinario para casa matriz'),
                    ] as $item)
                    <div class="px-3.5 py-3.25 rounded-[14px] border border-mid bg-white text-[13px] text-[#4c4647]">{{ $item }}</div>
                    @endforeach
                </div>
                <p class="mt-3.75 text-[13.5px] text-[#4f4849]"><strong>Payroll:</strong> {{ __('se atiende mediante el servicio de Outsourcing Laboral y puede coordinarse con la contabilidad cuando corresponda.') }}</p>
            </div>
        </div>
    </section>

    <!-- Qué cambia -->
    <section id="cambio" class="py-6 md:py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Qué cambia') }}</div><h2 class="{{ $h2 }}">{{ __('De depender del contador a compartir una base visible y revisada.') }}</h2></div>
                <p class="{{ $desc }} mb-4">{{ __('El objetivo no es prometer “tiempo real” ni eliminar todos los riesgos. Es mejorar orden, visibilidad, trazabilidad y coordinación.') }}</p>
            </div>
            <div class="overflow-x-auto rounded-[18px] border border-mid bg-white" data-aos="fade-up">
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="text-left px-3.75 py-3.5 text-[11px] tracking-[.11em] uppercase text-primary border-b border-mid">{{ __('Sin un proceso estructurado') }}</th>
                            <th class="text-left px-3.75 py-3.5 text-[11px] tracking-[.11em] uppercase text-primary border-b border-mid">{{ __('Con QuickBooks + OTIUM') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ([
                            [__('La información depende de archivos enviados por una persona.'), __('La empresa también tiene acceso directo a QuickBooks.')],
                            [__('Registros sin una revisión clara.'),                             __('Conciliaciones, revisión y un proceso de cierre definido.')],
                            [__('Contabilidad y tributación desconectadas.'),                     __('Información contable contrastada con obligaciones locales.')],
                            [__('Documentación dispersa.'),                                       __('Respaldos y declaraciones organizados en SharePoint cuando aplica.')],
                            [__('Resultados difíciles de interpretar.'),                          __('Seguimiento periódico con observaciones y pendientes visibles.')],
                            [__('Dirección fuera de Bolivia.'),                                   __('Comunicación directa con un equipo local en español o inglés.')],
                        ] as [$before, $after])
                        <tr>
                            <td class="align-top px-3.75 py-3.5 w-[48%] text-muted {{ $loop->first ? '' : 'border-t border-mid' }}">{{ $before }}</td>
                            <td class="align-top px-3.75 py-3.5 font-bold {{ $loop->first ? '' : 'border-t border-mid' }}">{{ $after }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- International support (texto en inglés, como en el one-pager) -->
    <section id="idioma" class="py-6 md:py-7.5 scroll-mt-24">
        <div class="container-2026">
            <article class="{{ $card }} grid grid-cols-1 lg:grid-cols-[1.1fr_.9fr] gap-4.5 items-center p-5.25 md:p-6.5" data-aos="fade-up">
                <div>
                    <div class="{{ $tag }}">International support</div>
                    <h3 class="text-[28px] font-bold tracking-[-0.025em] mb-2">Your local accounting team in Bolivia.</h3>
                    <p class="text-muted">OTIUM can coordinate directly with foreign owners, CFOs, controllers and regional teams. Meetings, questions and explanations of accounting and financial information can be handled in English or Spanish.</p>
                </div>
                <div class="grid gap-2.5">
                    @foreach ([
                        ['Owners & management', 'Direct visibility into the local accounting process.'],
                        ['CFO / regional teams', 'Coordination with a local team that understands Bolivian accounting and tax requirements.'],
                        ['Spanish / English', 'Meetings, queries and financial explanations in either language.'],
                    ] as [$t, $d])
                    <div class="px-3.75 py-3.25 rounded-[14px] {{ $box }} text-[13.5px] text-[#4a4445]"><strong>{{ $t }}</strong><br>{{ $d }}</div>
                    @endforeach
                </div>
            </article>
        </div>
    </section>

    <!-- Preguntas frecuentes -->
    <section id="faq" class="py-6 md:py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div><div class="{{ $tag }}">{{ __('Preguntas frecuentes') }}</div><h2 class="{{ $h2 }}">{{ __('Lo esencial antes de empezar.') }}</h2></div>
            </div>
            <div class="grid gap-2.5" data-aos="fade-up">
                @foreach ([
                    [__('¿Necesito tener QuickBooks antes de contratar OTIUM?'), __('No. Si todavía no lo utilizás, podemos evaluar la operación y apoyar su puesta en marcha. Si ya lo tenés, normalmente trabajamos con acceso Accountant/Bookkeeper o, cuando sea necesario, con exportaciones.')],
                    [__('¿OTIUM puede encargarse de toda mi contabilidad?'),    __('Sí. QB Contable está pensado para empresas que quieren delegar el proceso contable recurrente a OTIUM, dentro del alcance acordado.')],
                    [__('Ya tengo contador. ¿Puedo contratar solamente revisión?'), __('Sí. QB Controller mantiene el registro operativo en manos de tu equipo y agrega revisión, conciliación según alcance, ajustes, cierre y soporte contable/tributario.')],
                    [__('¿QuickBooks se conecta directamente con el SIN?'),     __('QuickBooks y los sistemas tributarios bolivianos cumplen funciones diferentes. OTIUM concilia la información y prepara/presenta las obligaciones tributarias incluidas en el servicio.')],
                    [__('¿OTIUM paga los impuestos por la empresa?'),           __('No como parte estándar del servicio. OTIUM prepara y presenta las declaraciones incluidas y comunica los importes y vencimientos. El pago lo realiza la empresa.')],
                    [__('¿Pueden trabajar en inglés?'),                         __('Sí. Las reuniones, consultas y explicaciones sobre información contable y financiera pueden realizarse en inglés o español.')],
                    [__('¿También manejan payroll?'),                           __('La gestión laboral y payroll corresponden al servicio de Outsourcing Laboral. Puede coordinarse con la contabilidad cuando el cliente lo requiera.')],
                    [__('¿Con qué frecuencia puede trabajar QB Controller?'),   __('Puede estructurarse de forma mensual, trimestral o semestral, dependiendo del volumen, riesgo y necesidades de control de la empresa.')],
                ] as [$q, $a])
                <details class="group px-4.5 bg-white border border-mid rounded-2xl">
                    <summary class="flex justify-between gap-3.5 py-4.25 font-extrabold cursor-pointer list-none [&::-webkit-details-marker]:hidden">
                        {{ $q }}
                        <span class="text-primary text-[22px] font-medium leading-none group-open:hidden" aria-hidden="true">+</span>
                        <span class="text-primary text-[22px] font-medium leading-none hidden group-open:inline" aria-hidden="true">–</span>
                    </summary>
                    <p class="pb-4.25 text-sm text-muted">{{ $a }}</p>
                </details>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Cómo empezamos -->
    <section id="como-empezamos" class="pt-9.5 pb-14 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $card }} relative overflow-hidden grid grid-cols-1 lg:grid-cols-[1.1fr_.9fr] gap-6 items-center p-5.25 md:p-8.5" data-aos="fade-up">
                <span class="absolute -right-20 -bottom-25 w-60 h-60 rounded-full bg-[radial-gradient(circle,rgba(88,184,198,.16),rgba(88,184,198,0))] pointer-events-none"></span>
                <div class="relative">
                    <div class="{{ $tag }}">{{ __('Cómo empezamos') }}</div>
                    <h2 class="text-[clamp(30px,3.7vw,46px)] font-bold leading-[1.07] tracking-[-0.025em] mb-2">{{ __('Primero entendemos cómo funciona hoy tu contabilidad.') }}</h2>
                    <p class="max-w-[680px] mb-4 text-[16.5px] text-[#4a4445]">{{ __('Revisamos la operación, quién registra, si ya utilizás QuickBooks, el volumen, bancos, CxC/CxP, obligaciones tributarias y necesidades de gerencia o casa matriz. A partir de eso definimos el modelo de trabajo adecuado.') }}</p>
                    <div class="flex flex-wrap gap-3 mt-6.5">
                        <a href="#modalidades" class="{{ $btn }} bg-black border-transparent text-white hover:bg-[#0f0a0b]">{{ __('Revisar modalidades') }}</a>
                        <a href="#inicio" class="{{ $btn }} bg-accent/11 border-accent/18 text-[#175864] hover:bg-accent/17">{{ __('Volver al inicio') }}</a>
                    </div>
                </div>
                <aside class="relative z-10 p-5.25 rounded-[19px] {{ $box }}">
                    <h3 class="text-[17px] font-bold tracking-[-0.025em] mb-2">{{ __('Para definir el alcance revisamos') }}</h3>
                    <ul class="list-disc mt-2.5 pl-4.5 text-sm text-[#494344] space-y-1.5">
                        @foreach ([
                            __('QuickBooks actual y accesos disponibles.'),
                            __('Quién lleva hoy el registro operativo.'),
                            __('Volumen y tipo de operaciones.'),
                            __('Bancos, CxC, CxP y principales auxiliares.'),
                            __('Obligaciones tributarias y periodicidad.'),
                            __('Requerimientos de gerencia o casa matriz.'),
                            __('Necesidad de trabajo en español o inglés.'),
                        ] as $item)<li>{{ $item }}</li>@endforeach
                    </ul>
                </aside>
            </div>
        </div>
    </section>

    </div>
</x-layout>
