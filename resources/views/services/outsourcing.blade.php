<x-layout
    title="Outsourcing Contable Digital Bolivia | Otium"
    description="Equipo contable externo con gestión tributaria incluida, SharePoint y reportes en la nube para empresas en Bolivia."
>
    @php
        $wa = env('WHATSAPP_NUMBER', '59170654104');
        $waService = 'https://wa.me/' . $wa . '?text=' . rawurlencode(__('Hola, quiero información sobre Outsourcing Contable Digital.'));
    @endphp

    <!-- Hero -->
    <section class="relative overflow-hidden pt-36 pb-16 md:pt-44 md:pb-20 bg-white">
        <div class="absolute -right-14 top-0 w-72 h-3 bg-secondary -skew-x-[28deg] pointer-events-none"></div>

        <div class="container-2026 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-[1.08fr_.92fr] gap-9 lg:gap-18 items-center">
                <div>
                    <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary" data-aos="fade-up">OTIUM | {{ __('Outsourcing Contable Digital') }}</span>
                    <h1 class="text-[clamp(46px,6vw,78px)] font-extrabold leading-[1.08] tracking-[-0.02em] text-black max-w-[800px]" data-aos="fade-up" data-aos-delay="50">
                        {{ __('Su contabilidad debería cerrar el mes con información') }} <span class="text-primary">{{ __('ordenada, conciliada y disponible.') }}</span>
                    </h1>
                    <p class="mt-6 text-muted text-[clamp(17px,1.45vw,20px)] max-w-[720px]" data-aos="fade-up" data-aos-delay="100">
                        {{ __('Asumimos el registro, revisión y seguimiento contable mensual de su empresa, integrando gestión tributaria y una estructura documental en SharePoint para que la información tenga respaldo, trazabilidad y continuidad.') }}
                    </p>
                    <div class="flex flex-wrap gap-3 mt-8" data-aos="fade-up" data-aos-delay="150">
                        <x-svc.btn href="#proceso">{{ __('Ver cómo trabajamos') }} ↓</x-svc.btn>
                        <x-svc.btn href="#entregables" variant="secondary">{{ __('Ver entregables') }}</x-svc.btn>
                    </div>
                    <div class="flex gap-2.5 items-start mt-6.5 max-w-[720px] text-sm text-muted" data-aos="fade-up" data-aos-delay="200">
                        <span class="text-accent text-base leading-tight">●</span>
                        <span><b class="text-black">{{ __('No se trata solo de registrar.') }}</b> {{ __('El servicio organiza el flujo mensual: qué información entra, dónde se documenta, qué se concilia, qué se observa y qué recibe la administración.') }}</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2.5 mt-7" aria-label="{{ __('Diferenciales principales') }}" data-aos="fade-up" data-aos-delay="250">
                        @foreach ([
                            [__('Gestión tributaria incluida'), __('Contabilidad e impuestos dentro del mismo proceso mensual.')],
                            [__('SharePoint documental'), __('Respaldos y reportes centralizados en la nube.')],
                            [__('Equipo contable externo'), __('Registro, revisión, cierre y seguimiento coordinados.')],
                        ] as [$t, $d])
                        <div class="px-3.5 py-3 bg-soft border border-line">
                            <strong class="block mb-0.5 text-xs text-black">{{ $t }}</strong>
                            <span class="text-[11.5px] text-muted">{{ $d }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <x-svc.hero-panel :title="__('El ciclo contable mensual')" :status="__('Proceso recurrente')" :label="__('Resumen del ciclo contable mensual')" :steps="[
                    ['title' => __('Información'),             'desc' => __('Facturas, bancos, comprobantes, planillas, contratos y reportes.')],
                    ['title' => __('Organización'),            'desc' => __('Documentación centralizada y estructurada en SharePoint.')],
                    ['title' => __('Registro'),                'desc' => __('Compras, ventas, gastos, ingresos, bancos, sueldos e impuestos.')],
                    ['title' => __('Conciliación + revisión'), 'desc' => __('Bancos, respaldos, cuentas y pendientes que requieren aclaración.')],
                    ['title' => __('Cierre + tributos'),       'desc' => __('Cierre contable y gestión tributaria vinculada al período.')],
                    ['title' => __('Reportes + seguimiento'),  'desc' => __('Estados financieros, observaciones y próximos pendientes.')],
                ]" />
            </div>
        </div>
    </section>

    <!-- Qué problema resolvemos -->
    <section id="problema" class="py-16 md:py-22 bg-soft scroll-mt-24">
        <div class="container-2026">
            <x-svc.section-head :eyebrow="__('Qué problema resolvemos')" :title="__('Tener contabilidad no siempre significa tener información contable bajo control.')">
                {{ __('El problema aparece cuando la información existe, pero está dispersa, llega tarde, no concilia o resulta difícil reconstruir cuando gerencia, un auditor, un banco o un socio la necesita.') }}
            </x-svc.section-head>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4.5">
                <x-svc.card :n="1" :title="__('Información dispersa')">{{ __('Facturas, comprobantes, extractos y contratos distribuidos entre correo, WhatsApp, carpetas y sistemas.') }}</x-svc.card>
                <x-svc.card :n="2" :title="__('Cierres tardíos')">{{ __('La información se acumula y el cierre mensual se convierte en un ejercicio de reconstrucción e improvisación.') }}</x-svc.card>
                <x-svc.card :n="3" :title="__('Poca conciliación')">{{ __('Diferencias entre bancos, comprobantes, facturas y registros quedan sin aclararse durante el período.') }}</x-svc.card>
                <x-svc.card :n="4" :title="__('Poca lectura gerencial')">{{ __('La empresa cumple, pero no siempre cuenta con información oportuna para revisar resultados, pendientes y decisiones.') }}</x-svc.card>
            </div>
        </div>
    </section>

    <!-- Qué hacemos -->
    <section id="que-hacemos" class="py-16 md:py-22 bg-white scroll-mt-24">
        <div class="container-2026">
            <x-svc.section-head :eyebrow="__('Qué hacemos por su empresa')" :title="__('Un equipo externo que registra, revisa, concilia y documenta cada período.')">
                {{ __('El alcance se adapta al movimiento y complejidad de la empresa, pero el objetivo es mantener un proceso mensual visible y ordenado.') }}
            </x-svc.section-head>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4.5">
                <x-svc.card :n="1" :title="__('Registro contable')">{{ __('Compras, ventas, ingresos, gastos, bancos, sueldos, cargas sociales, impuestos y asientos contables.') }}</x-svc.card>
                <x-svc.card :n="2" :title="__('Conciliaciones')">{{ __('Contrastamos movimientos bancarios con registros y respaldos disponibles del período.') }}</x-svc.card>
                <x-svc.card :n="3" :title="__('Revisión documental')">{{ __('Identificamos respaldos faltantes, inconsistencias y operaciones que requieren aclaración.') }}</x-svc.card>
                <x-svc.card :n="4" :title="__('Gestión tributaria')">{{ __('Integramos las obligaciones tributarias mensuales con la información contable de la empresa.') }}</x-svc.card>
                <x-svc.card :n="5" :title="__('Cierre contable')">{{ __('Preparamos cierres mensuales y anuales según la información entregada y el alcance definido.') }}</x-svc.card>
                <x-svc.card :n="6" :title="__('Reportes base')">{{ __('Balance General, Estado de Resultados, mayores, sumas y saldos y otros reportes acordados.') }}</x-svc.card>
                <x-svc.card :n="7" :title="__('Preparación para auditoría')">{{ __('Organizamos información contable y respaldos para facilitar revisiones externas cuando corresponda.') }}</x-svc.card>
                <x-svc.card :n="8" :title="__('Seguimiento')">{{ __('Mantenemos visibles observaciones, documentos pendientes y temas que deben resolverse con el cliente.') }}</x-svc.card>
            </div>
        </div>
    </section>

    <!-- Proceso principal -->
    <section id="proceso" class="py-16 md:py-22 bg-soft scroll-mt-24">
        <div class="container-2026">
            <x-svc.process
                :eyebrow="__('Proceso principal')"
                :title="__('Un ciclo mensual que convierte documentos en información contable utilizable.')"
                :intro="__('La periodicidad puede variar según el movimiento del cliente, pero el cierre mensual funciona mejor cuando la información se entrega durante el período y existe una contraparte administrativa definida.')"
                :steps="[
                    ['title' => __('Recibimos'),            'desc' => __('Facturas, extractos, comprobantes, planillas, contratos, inventarios y reportes del período.')],
                    ['title' => __('Organizamos'),          'desc' => __('Centralizamos la documentación en SharePoint y mantenemos una estructura trazable.')],
                    ['title' => __('Registramos'),          'desc' => __('Procesamos operaciones contables y actualizamos la información del período.')],
                    ['title' => __('Conciliamos'),          'desc' => __('Contrastamos bancos, comprobantes y registros; identificamos diferencias y pendientes.')],
                    ['title' => __('Revisamos + cerramos'), 'desc' => __('Analizamos cuentas, respaldos y obligaciones tributarias antes del cierre mensual.')],
                    ['title' => __('Reportamos'),           'desc' => __('Entregamos información contable, observaciones y seguimiento para el siguiente período.')],
                ]"
            >
                <div class="flex flex-wrap gap-2 mt-5.5 pt-5.5 border-t border-line" aria-label="{{ __('Información habitual del proceso') }}">
                    @foreach ([__('Compras'), __('Ventas'), __('Bancos'), __('Comprobantes'), __('Sueldos'), __('Impuestos'), __('Contratos'), __('Inventarios cuando aplica')] as $pill)
                    <span class="px-3 py-2 bg-white border border-mid text-muted text-xs">{{ $pill }}</span>
                    @endforeach
                </div>
                <div class="mt-5 px-4 py-3.5 border-l-4 border-accent bg-accent/8 text-muted text-[13px]">
                    <strong class="text-black">{{ __('Objetivo de cierre:') }}</strong> {{ __('cuando la empresa entrega extractos y documentación regularmente y existe una contraparte administrativa activa, OTIUM puede trabajar con el día 10 del mes siguiente como fecha objetivo de cierre. La fecha concreta depende de la operación y de la entrega oportuna de la información.') }}
                </div>
            </x-svc.process>
        </div>
    </section>

    <!-- Modelo digital / SharePoint -->
    <section id="digital" class="py-16 md:py-22 bg-white scroll-mt-24">
        <div class="container-2026">
            <x-svc.section-head :eyebrow="__('Modelo digital / SharePoint')" :title="__('La nube organiza la evidencia del proceso contable.')">
                {{ __('SharePoint forma parte del servicio para centralizar documentos, respaldos, reportes y archivos relevantes. La tecnología sirve para ordenar y reconstruir la información; no reemplaza el criterio contable.') }}
            </x-svc.section-head>
            <x-svc.digital
                :title="__('Un repositorio que acompaña el trabajo')"
                :copy="__('Microsoft 365, SharePoint, Excel estructurado, Power Query, software contable y herramientas del SIN forman parte del ecosistema de trabajo. Según el caso también podemos utilizar Power BI, Power Automate e IA aplicada a revisión, clasificación, análisis o redacción de observaciones.')"
                :label="__('Arquitectura digital del outsourcing contable')"
                :nodes="[
                    ['label' => __('Entrada'),       'title' => __('Documentos + sistemas'),                'desc' => __('Facturas, bancos, comprobantes, planillas, reportes y accesos.')],
                    ['label' => __('Trabajo OTIUM'), 'title' => __('SharePoint + contabilidad + revisión'), 'desc' => __('Organización, registro, conciliación, control y seguimiento.')],
                    ['label' => __('Salida'),        'title' => __('Cierre + reportes + respaldo'),         'desc' => __('Estados financieros, observaciones, pendientes y archivo trazable.')],
                ]" />
        </div>
    </section>

    <!-- Qué recibe el cliente -->
    <section id="entregables" class="py-16 md:py-22 bg-soft scroll-mt-24">
        <div class="container-2026">
            <x-svc.section-head :eyebrow="__('Qué recibe el cliente')" :title="__('Información que permite ver qué está registrado, qué está conciliado y qué sigue pendiente.')">
                {{ __('La combinación exacta depende del alcance acordado, la operación del cliente y la información disponible durante cada período.') }}
            </x-svc.section-head>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4.5">
                <x-svc.card :n="1" :title="__('Estados financieros')">{{ __('Balance General y Estado de Resultados cuando la información y el alcance permiten su preparación mensual.') }}</x-svc.card>
                <x-svc.card :n="2" :title="__('Mayores y saldos')">{{ __('Mayores contables, sumas y saldos y análisis de cuentas según necesidad.') }}</x-svc.card>
                <x-svc.card :n="3" :title="__('Conciliaciones')">{{ __('Conciliaciones bancarias y seguimiento de diferencias o partidas que requieren aclaración.') }}</x-svc.card>
                <x-svc.card :n="4" :title="__('Observaciones + pendientes')">{{ __('Documentación faltante, temas contables relevantes y asuntos que requieren respuesta del cliente.') }}</x-svc.card>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4.5 mt-5">
                <div class="p-6 bg-white border border-line border-t-[5px] border-t-primary" data-aos="fade-up">
                    <small class="block mb-2 text-primary text-xs font-extrabold uppercase tracking-[.08em]">{{ __('Base documental') }}</small>
                    <h3 class="text-[23px] font-bold leading-[1.08] tracking-[-0.02em] mb-2">{{ __('SharePoint contable actualizado') }}</h3>
                    <p class="text-muted text-sm">{{ __('Un espacio organizado para respaldos, reportes y documentación relevante del servicio.') }}</p>
                </div>
                <div class="p-6 bg-white border border-line border-t-[5px] border-t-accent" data-aos="fade-up" data-aos-delay="100">
                    <small class="block mb-2 text-[#2e8792] text-xs font-extrabold uppercase tracking-[.08em]">{{ __('Según alcance') }}</small>
                    <h3 class="text-[23px] font-bold leading-[1.08] tracking-[-0.02em] mb-2">{{ __('Reportes para gestión') }}</h3>
                    <p class="text-muted text-sm">{{ __('Cuentas por cobrar, cuentas por pagar, ingresos, gastos, indicadores o Power BI pueden incorporarse según la necesidad y madurez de la información.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Responsabilidades -->
    <section id="responsabilidades" class="py-16 md:py-22 bg-white scroll-mt-24">
        <div class="container-2026">
            <x-svc.section-head :eyebrow="__('Responsabilidades')" :title="__('Una contabilidad mensual ordenada necesita coordinación entre OTIUM y su empresa.')">
                {{ __('El mejor resultado se logra cuando existe una contraparte administrativa que entrega información regularmente y ayuda a resolver las aclaraciones del día a día.') }}
            </x-svc.section-head>
            <x-svc.responsibilities
                :otium="[
                    __('Registra y clasifica la información contable recibida.'),
                    __('Conciliamos movimientos bancarios y revisamos respaldos disponibles.'),
                    __('Gestionamos las obligaciones tributarias mensuales vinculadas a la contabilidad.'),
                    __('Preparamos cierres, reportes y observaciones según alcance.'),
                    __('Organizamos y documentamos el trabajo en SharePoint.'),
                ]"
                :client="[
                    __('Entrega facturas, extractos, comprobantes y demás respaldos requeridos.'),
                    __('Facilita accesos a sistemas contables, administrativos o tributarios cuando corresponda.'),
                    __('Responde aclaraciones sobre operaciones que requieren contexto del negocio.'),
                    __('Mantiene una contraparte administrativa para coordinar el flujo de información.'),
                    __('Aprueba o ejecuta decisiones y correcciones que correspondan a su operación interna.'),
                ]" />
        </div>
    </section>

    <!-- Alcance especial -->
    <section id="alcance-especial" class="py-12 md:py-15.5 bg-soft">
        <div class="container-2026">
            <x-svc.scope
                :eyebrow="__('Cuando la necesidad va más allá del mes')"
                :title="__('También desarrollamos trabajos contables y financieros específicos.')"
                :items="[__('Balances de apertura.'), __('Liquidación de empresas.'), __('Valuación de empresas.'), __('Análisis de CAPEX y OPEX.'), __('Evaluación de rentabilidad de negocios.')]"
                :note="__('Estos trabajos se evalúan y cotizan separadamente según el caso. Auditoría financiera, fiscalizaciones complejas, implementación completa de sistemas, administración de pagos y dashboards avanzados también requieren un alcance específico.')" />
        </div>
    </section>

    <!-- Qué cambia para el cliente -->
    <section id="cambio" class="py-16 md:py-22 bg-white">
        <div class="container-2026">
            <x-svc.section-head :eyebrow="__('Qué cambia para el cliente')" :title="__('El valor se ve en la forma de cerrar y reconstruir la información.')">
                {{ __('OTIUM no promete eliminar todo riesgo contable o tributario. El objetivo es que el proceso mensual sea más ordenado, trazable y visible para la administración.') }}
            </x-svc.section-head>
            <x-svc.change :pairs="[
                [__('Documentos repartidos entre personas, correos, chats y carpetas.'), __('Documentación contable centralizada y organizada en SharePoint.')],
                [__('El cierre empieza cuando el mes ya terminó y faltan datos por reconstruir.'), __('Información recibida y trabajada durante el período para facilitar el cierre.')],
                [__('Diferencias bancarias o respaldos incompletos quedan ocultos hasta una revisión.'), __('Conciliaciones, observaciones y pendientes visibles para seguimiento.')],
                [__('La contabilidad sirve principalmente para cumplir.'), __('La base contable puede evolucionar hacia reportes e información para gerencia.')],
            ]" />
        </div>
    </section>

    <!-- Cómo empezamos -->
    <x-svc.start
        :title="__('Revisemos primero cómo está cerrando hoy su contabilidad.')"
        :text="__('Entendemos el volumen de operaciones, la calidad de la información, los sistemas utilizados, los responsables internos y los reportes que necesita la empresa. A partir de eso definimos alcance, frecuencia, responsabilidades y forma de trabajo.')"
        :variables="[__('Volumen de documentos'), __('Número de bancos y cuentas'), __('Sistemas utilizados'), __('Contraparte administrativa'), __('Estado de la contabilidad actual'), __('Reportes requeridos'), __('Información histórica pendiente'), __('Necesidades tributarias')]"
        :card-title="__('El alcance correcto empieza entendiendo cómo funciona realmente la empresa.')"
        :card-text="__('El Outsourcing Contable Digital está pensado para empresas que buscan algo más que registrar y declarar: quieren un proceso mensual ordenado, documentado y acompañado por un equipo externo.')"
        :cta-href="$waService"
        :cta-label="__('Conversemos sobre su contabilidad')" />
</x-layout>
