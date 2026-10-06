<x-layout
    title="Consultoría Empresarial Bolivia | Diagnóstico Financiero | Otium"
    description="Diagnóstico financiero, modelos de decisión y acompañamiento gerencial para empresas en Bolivia. Análisis sobre números reales, no recomendaciones genéricas."
>
    @php
        $wa = env('WHATSAPP_NUMBER', '59170654104');
        $waService = 'https://wa.me/' . $wa . '?text=' . rawurlencode(__('Hola, quiero información sobre Consultoría Empresarial.'));

        // Estilos repetidos del diseño "Consultoría Empresarial 2026"
        $card    = 'bg-white/94 border border-[#1F1617]/8 rounded-3xl shadow-[0_18px_40px_rgba(31,22,23,.08)]';
        $soft    = 'shadow-[0_10px_24px_rgba(31,22,23,.055)]';
        $tag     = 'text-[11px] uppercase tracking-[.14em] text-primary font-extrabold mb-2';
        $h2      = 'text-[clamp(29px,3.4vw,43px)] font-bold leading-[1.55] tracking-[-0.025em] mb-1.25';
        $h3      = 'text-[1.17em] font-bold leading-[1.55] tracking-[-0.025em] mb-2.25';
        $desc    = 'max-w-[800px] text-[#4E4849] text-[17px] mb-4';
        $btn     = 'inline-flex items-center justify-center gap-2.25 px-4.5 py-3.5 rounded-[14px] font-bold text-[15px] transition-all hover:-translate-y-px';
        $dots    = ['bg-primary', 'bg-secondary', 'bg-brand-light', 'bg-accent'];
        $chips   = ['bg-primary/10 text-primary', 'bg-secondary/17 text-[#8A5146]', 'bg-brand-light/45 text-[#76564E]', 'bg-accent/15 text-[#17616E]'];
    @endphp

    <div class="text-[#1F1617] leading-[1.55]" style="background: radial-gradient(circle at top right, rgba(84,186,199,.11), transparent 24%), radial-gradient(circle at 8% 8%, rgba(180,46,37,.055), transparent 20%), linear-gradient(180deg, #fbf9f8 0%, #f7f4f2 100%);">

    <!-- Hero -->
    <section class="pt-32 pb-7.5 md:pt-36">
        <div class="container-2026 grid grid-cols-1 lg:grid-cols-[1.24fr_.76fr] gap-6 items-stretch">
            <article class="{{ $card }} relative overflow-hidden p-5.5 md:p-9.5" data-aos="fade-up">
                <span class="absolute -right-30 -bottom-35 w-65 h-65 rounded-full bg-[radial-gradient(circle,rgba(84,186,199,.14),rgba(84,186,199,0))] pointer-events-none"></span>
                <div class="inline-flex items-center gap-2 mb-4.5 px-3 py-2 rounded-full bg-primary/8 text-primary text-[11px] uppercase tracking-[.13em] font-extrabold">OTIUM | {{ __('Consultoría Empresarial') }}</div>
                <h1 class="text-[clamp(38px,5vw,62px)] font-bold leading-[1.02] tracking-[-0.025em] max-w-[860px] mb-4.5">{{ __('Decidir mejor empieza por entender mejor su empresa.') }}</h1>
                <p class="text-lg md:text-xl leading-[1.48] text-[#443D3E] max-w-[790px] mb-4">{{ __('Revisamos información financiera, administrativa, documental y operativa para identificar problemas, ordenar prioridades y convertir datos dispersos en criterios claros de gestión.') }}</p>
                <div class="mt-5.25 px-4.25 py-3.75 border-l-4 border-accent rounded-r-[14px] bg-accent/9 text-[#28545D] font-bold max-w-[760px]">{{ __('De la información dispersa a decisiones empresariales claras.') }}</div>
                <div class="relative z-10 flex flex-wrap gap-3 mt-6.5">
                    <a href="#proceso" class="{{ $btn }} bg-[#1F1617] text-white hover:bg-[#0e0a0b]">{{ __('Ver cómo trabajamos') }}</a>
                    <a href="#entregables" class="{{ $btn }} bg-accent/13 text-[#175D69] hover:bg-accent/19">{{ __('Ver entregables') }}</a>
                </div>
                <div class="grid grid-cols-4 w-[min(370px,100%)] h-3 mt-6 rounded-full overflow-hidden" aria-hidden="true">
                    <span class="bg-primary"></span><span class="bg-secondary"></span><span class="bg-brand-light"></span><span class="bg-accent"></span>
                </div>
            </article>

            <aside class="{{ $card }} flex flex-col justify-between gap-5.5 p-5.5 md:p-7" aria-label="{{ __('Qué conectamos en la consultoría') }}" data-aos="fade-left" data-aos-delay="100">
                <div>
                    <div class="{{ $tag }}">{{ __('Una mirada conectada') }}</div>
                    <h2 class="text-[23px] font-bold leading-[1.55] tracking-[-0.025em] mb-2.25">{{ __('No analizamos una empresa desde una sola hoja.') }}</h2>
                    <p class="text-[#5F5A5B] text-sm mb-4">{{ __('La consultoría conecta la información disponible con las preguntas que la gerencia necesita responder.') }}</p>
                </div>
                <div class="grid gap-2.75">
                    @foreach ([
                        [__('Números'),     __('Costos, márgenes, rentabilidad, caja y capacidad financiera.')],
                        [__('Procesos'),    __('Responsables, controles, flujos y puntos de dependencia.')],
                        [__('Información'), __('Reportes, documentos, bases y estructuras de seguimiento.')],
                        [__('Decisiones'),  __('Prioridades, inversiones, escenarios y próximos pasos.')],
                    ] as $i => [$t, $d])
                    <div class="grid grid-cols-[44px_1fr] gap-3.25 items-start p-3.5 rounded-[17px] bg-[#F7F4F2] border border-[#E6E1DE]">
                        <div class="w-11 h-11 grid place-items-center rounded-[14px] font-extrabold {{ ['bg-primary/10 text-primary', 'bg-secondary/16 text-[#8D5145]', 'bg-brand-light/45 text-[#7A5D53]', 'bg-accent/14 text-[#16616E]'][$i] }}">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                        <div><strong class="block text-sm mb-0.5">{{ $t }}</strong><span class="block text-[#5F5A5B] text-[13px]">{{ $d }}</span></div>
                    </div>
                    @endforeach
                </div>
            </aside>
        </div>
    </section>

    <!-- Qué problema resolvemos -->
    <section id="problemas" class="py-7.75 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-4.75" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué problema resolvemos') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Cuando la empresa crece, la información también debe ordenarse.') }}</h2>
                <p class="{{ $desc }}">{{ __('El problema no suele ser la falta absoluta de datos. Es tener información que existe, pero que llega tarde, está dispersa o no permite responder con claridad qué está pasando y qué conviene hacer.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ([
                    [__('Poca lectura gerencial'),                __('Hay datos y estados, pero cuesta traducirlos en una lectura útil para decidir.')],
                    [__('Números sin contexto'),                  __('Existen dudas sobre costos, márgenes, flujo de caja, rentabilidad o capacidad de inversión.')],
                    [__('Procesos poco claros'),                  __('La operación depende de personas específicas, controles manuales o información difícil de reconstruir.')],
                    [__('Decisiones con información incompleta'), __('Comprar, invertir, expandirse o ajustar precios requiere comparar escenarios y consecuencias.')],
                ] as $i => [$t, $d])
                <article class="p-5.5 bg-white/93 border border-[#1F1617]/8 rounded-[20px] {{ $soft }}" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}">
                    <div class="w-11 h-11 grid place-items-center mb-3.5 rounded-[14px] text-lg font-extrabold {{ $chips[$i] }}">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3 class="text-[19px] font-bold tracking-[-0.025em] mb-2">{{ $t }}</h3>
                    <p class="text-[#5F5A5B] text-sm">{{ $d }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Qué hacemos -->
    <section id="servicio" class="py-7.75 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-4.75" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué hacemos por usted') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Seis frentes para entender, ordenar y mejorar la gestión.') }}</h2>
                <p class="{{ $desc }}">{{ __('El alcance se define según el problema real de la empresa. No todos los proyectos requieren todos los componentes.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4.25">
                @foreach ([
                    [__('Diagnóstico'),  __('Diagnóstico empresarial y plan de mejora'),      __('Revisamos la situación financiera, administrativa, documental y operativa para identificar problemas, riesgos, oportunidades y prioridades.')],
                    [__('Rentabilidad'), __('Análisis financiero, costos y márgenes'),        __('Analizamos ingresos, gastos, costos, rentabilidad, cuentas por cobrar o pagar y otras variables relevantes según el objetivo.')],
                    [__('Proyección'),   __('Flujo de caja y modelos financieros'),           __('Construimos modelos y escenarios para anticipar necesidades de caja, capacidad de pago y posibles impactos financieros.')],
                    [__('Inversión'),    __('CAPEX, OPEX y decisiones de inversión'),         __('Evaluamos inversiones y gastos relevantes para entender su impacto en caja, presupuesto, rentabilidad y capacidad financiera.')],
                    [__('Control'),      __('Procesos, control interno y riesgos'),           __('Revisamos flujos, responsabilidades, controles y puntos críticos para proponer mejoras concretas de gestión y trazabilidad.')],
                    [__('Información'),  __('Reportes gerenciales, datos y acompañamiento'),  __('Estructuramos indicadores, matrices y reportes para que la gerencia pueda revisar mejor el desempeño y los pendientes.')],
                ] as $i => [$step, $t, $d])
                @php $featured = $i === 3; @endphp
                <article class="relative overflow-hidden p-5.75 rounded-[20px] border {{ $featured ? 'bg-linear-to-b from-white to-accent/6 border-accent/35' : 'bg-white border-[#E6E1DE]' }} {{ $soft }}" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 75 }}">
                    <span class="absolute top-0 left-0 w-full h-1 bg-linear-to-r from-primary via-secondary to-accent opacity-72"></span>
                    <div class="mb-2.5 text-[11px] font-extrabold tracking-[.14em] uppercase {{ $featured ? 'text-[#17616E]' : 'text-primary' }}">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }} · {{ $step }}</div>
                    <h3 class="text-xl font-bold tracking-[-0.025em] mb-2">{{ $t }}</h3>
                    <p class="text-[#5F5A5B] text-sm">{{ $d }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Proceso de trabajo -->
    <section id="proceso" class="py-7.75 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-4.75" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Proceso de trabajo') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Primero entendemos el problema. Después construimos la respuesta.') }}</h2>
                <p class="{{ $desc }}">{{ __('La consultoría no parte de una solución prefabricada. Parte de una pregunta empresarial concreta y de la información disponible para responderla con método.') }}</p>
            </div>
            <div class="{{ $card }} p-5.5 md:p-7.25" data-aos="fade-up">
                <div class="flex flex-wrap gap-2.5 mb-5.25">
                    @foreach ([__('Diagnóstico'), __('Información real'), __('Análisis'), __('Entregables concretos'), __('Validación')] as $pill)
                    <span class="px-3.25 py-2 border border-[#E6E1DE] rounded-full bg-[#F7F4F2] text-[#50494A] text-xs font-bold">{{ $pill }}</span>
                    @endforeach
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4.25">
                    @foreach ([
                        [__('Entendemos la decisión'),  __('Definimos con la gerencia qué problema necesita resolver, qué decisión está pendiente y qué alcance tiene sentido revisar.')],
                        [__('Reunimos la información'), __('Revisamos estados, reportes, bases, documentos, controles y procesos que permitan reconstruir la situación actual.')],
                        [__('Diagnosticamos'),          __('Identificamos hallazgos, brechas, riesgos, oportunidades y puntos donde falta información o control.')],
                        [__('Analizamos y modelamos'),  __('Aplicamos análisis financiero, costos, márgenes, flujo de caja, CAPEX/OPEX, procesos o indicadores según el objetivo.')],
                        [__('Construimos entregables'), __('Preparamos matrices, modelos, reportes, mapas de procesos, recomendaciones o planes de acción que hagan visible la conclusión.')],
                        [__('Validamos y priorizamos'), __('Revisamos los resultados con la empresa, ajustamos criterios y ordenamos los siguientes pasos según importancia y alcance.')],
                    ] as $i => [$t, $d])
                    <article class="p-5.5 rounded-[20px] bg-white border border-[#E6E1DE] md:min-h-52.5" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 75 }}">
                        <div class="w-10.5 h-10.5 grid place-items-center mb-4 rounded-[14px] font-extrabold {{ $i % 2 === 0 ? 'bg-primary/10 text-primary' : 'bg-accent/14 text-[#17616E]' }}">{{ $i + 1 }}</div>
                        <h3 class="text-lg font-bold tracking-[-0.025em] mb-2">{{ $t }}</h3>
                        <p class="text-[#5F5A5B] text-sm">{{ $d }}</p>
                    </article>
                    @endforeach
                </div>
                <div class="mt-4.5 px-4.5 py-4 rounded-2xl bg-secondary/10 border-l-4 border-secondary text-[#6D4C45] text-sm"><strong>{{ __('Importante:') }}</strong> {{ __('el proceso puede terminar en un diagnóstico puntual, un proyecto específico o continuar con seguimiento si ese acompañamiento forma parte del alcance acordado.') }}</div>
            </div>
        </div>
    </section>

    <!-- Decisiones de inversión -->
    <section class="py-7.75">
        <div class="container-2026">
            <div class="mb-4.75" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Decisiones de inversión') }}</div>
                <h2 class="{{ $h2 }}">{{ __('CAPEX y OPEX: no basta con saber cuánto cuesta.') }}</h2>
                <p class="{{ $desc }}">{{ __('Una decisión relevante también debe entenderse por su efecto en caja, presupuesto, rentabilidad y capacidad de operación.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-[.9fr_1.1fr] gap-4.5 items-stretch">
                <article class="{{ $card }} p-5.5 md:p-6.75" data-aos="fade-right">
                    <h3 class="text-[27px] font-bold leading-[1.55] tracking-[-0.025em] mb-2.25">{{ __('Preguntas que ponemos sobre la mesa') }}</h3>
                    <div class="grid gap-2.75 mt-3.5">
                        @foreach ([
                            [__('¿Es inversión o gasto operativo?'), __('Ordenamos la naturaleza económica de la decisión para analizarla correctamente.')],
                            [__('¿Qué pasa con la caja?'),           __('Proyectamos el impacto financiero y las necesidades de liquidez.')],
                            [__('¿Qué alternativas existen?'),       __('Podemos comparar compra, alquiler, tercerización u otros escenarios cuando corresponde.')],
                            [__('¿Qué debería priorizarse?'),        __('Organizamos inversiones y gastos relevantes según urgencia, liquidez y capacidad financiera.')],
                        ] as $i => [$b, $d])
                        <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ $dots[$i] }}"></span>
                            <div><b class="block mb-0.5 text-sm">{{ $b }}</b><span class="text-[#5F5A5B] text-[13px]">{{ $d }}</span></div>
                        </div>
                        @endforeach
                    </div>
                </article>
                <article class="{{ $card }} p-5.5 md:p-6.75" data-aos="fade-left" data-aos-delay="100">
                    <table class="w-full border-collapse text-[13px] md:text-sm" aria-label="{{ __('Mapa de análisis CAPEX OPEX') }}">
                        <thead>
                            <tr>
                                <th class="text-left px-2.25 py-3 md:px-3 md:py-3.5 text-[11px] uppercase tracking-[.12em] text-primary border-b border-[#E6E1DE]">{{ __('Decisión') }}</th>
                                <th class="text-left px-2.25 py-3 md:px-3 md:py-3.5 text-[11px] uppercase tracking-[.12em] text-primary border-b border-[#E6E1DE]">{{ __('Qué revisamos') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ([
                                [__('Comprar un activo'),     __('Inversión, caja, presupuesto, alternativas y capacidad financiera.')],
                                [__('Alquilar o tercerizar'), __('Impacto operativo, costo recurrente y comparación con otras opciones.')],
                                [__('Abrir o ampliar'),       __('Inversión inicial, gastos operativos, capital de trabajo y escenarios.')],
                                [__('Priorizar CAPEX'),       __('Necesidad, urgencia, disponibilidad de caja y efecto esperado.')],
                            ] as [$dec, $rev])
                            <tr>
                                <td class="align-top px-2.25 py-3 md:px-3 md:py-3.5 font-bold w-1/3 {{ $loop->first ? '' : 'border-t border-[#E6E1DE]' }}">{{ $dec }}</td>
                                <td class="align-top px-2.25 py-3 md:px-3 md:py-3.5 {{ $loop->first ? '' : 'border-t border-[#E6E1DE]' }}">{{ $rev }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4.25 px-4.25 py-3.75 rounded-[15px] bg-accent/10 border-l-4 border-accent text-[#28555D]">{{ __('El resultado puede tomar forma de matriz CAPEX/OPEX, presupuesto, flujo de caja, análisis de escenarios o recomendación ejecutiva, según el alcance.') }}</div>
                </article>
            </div>
        </div>
    </section>

    <!-- Soporte digital -->
    <section id="digital" class="py-7.75 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-4.75" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Soporte digital') }}</div>
                <h2 class="{{ $h2 }}">{{ __('La herramienta acompaña al análisis; no lo reemplaza.') }}</h2>
                <p class="{{ $desc }}">{{ __('Cuando el proyecto lo requiere, estructuramos la información para que pueda revisarse, actualizarse y reconstruirse con mayor facilidad.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-[1.05fr_.95fr] gap-4.5">
                <article class="{{ $card }} p-5.5 md:p-6.25" data-aos="fade-right">
                    <h3 class="{{ $h3 }}">{{ __('Herramientas que pueden formar parte del trabajo') }}</h3>
                    <div class="grid gap-2.75 mt-3.75">
                        @foreach ([
                            [__('Excel estructurado'), __('Modelos financieros, flujos de caja, matrices de costos, presupuestos y controles.')],
                            ['Microsoft 365',          __('Colaboración, organización y gestión de información del proyecto.')],
                            ['SharePoint',             __('Repositorios, listas o estructuras documentales cuando la trazabilidad lo justifica.')],
                            ['Power BI',               __('Indicadores y visualización gerencial cuando existen datos y alcance para ello.')],
                            [__('IA como apoyo'),      __('Organización, clasificación, revisión o síntesis de información bajo revisión profesional.')],
                        ] as [$b, $d])
                        <div class="grid grid-cols-[10px_1fr] gap-2.75 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full bg-accent"></span>
                            <div><b class="block mb-0.5 text-sm">{{ $b }}</b><span class="text-[#5F5A5B] text-[13px]">{{ $d }}</span></div>
                        </div>
                        @endforeach
                    </div>
                </article>
                <article class="{{ $card }} p-5.5 md:p-6.25" data-aos="fade-left" data-aos-delay="100">
                    <h3 class="{{ $h3 }}">{{ __('De la fuente a la decisión') }}</h3>
                    <div class="grid gap-2.75 mt-2.5" aria-label="{{ __('Arquitectura de información') }}">
                        @foreach ([__('Información del cliente'), __('Revisión y estructuración'), __('Análisis / modelo / matriz'), __('Reporte o entregable'), __('Lectura gerencial y próximos pasos')] as $node)
                        <div class="relative px-4 py-3.5 rounded-[15px] border border-[#E6E1DE] bg-[#F7F4F2] font-bold {{ $loop->last ? '' : 'mb-2' }}">
                            {{ $node }}
                            @unless ($loop->last)
                            <span class="absolute left-1/2 -translate-x-1/2 -bottom-4.75 z-10 text-primary font-extrabold" aria-hidden="true">↓</span>
                            @endunless
                        </div>
                        @endforeach
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Qué recibe el cliente -->
    <section id="entregables" class="py-7.75 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-4.75" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué recibe el cliente') }}</div>
                <h2 class="{{ $h2 }}">{{ __('La consultoría debe terminar en algo que pueda usarse.') }}</h2>
                <p class="{{ $desc }}">{{ __('Los entregables finales dependen del objetivo, la información disponible y el alcance contratado. Estos son formatos posibles ya definidos para el servicio.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-[1.05fr_.95fr] gap-4.5">
                @foreach ([
                    [__('Entregables de análisis y decisión'), [
                        [__('Informe de diagnóstico empresarial'),   __('Hallazgos, brechas, riesgos, oportunidades y prioridades.')],
                        [__('Matriz de hallazgos y recomendaciones'), __('Una lectura estructurada de qué se detectó y qué debería revisarse.')],
                        [__('Modelo financiero o flujo proyectado'),  __('Escenarios, capacidad de pago, caja o capital de trabajo según el caso.')],
                        [__('Matriz CAPEX/OPEX'),                     __('Presupuesto de inversión, operación y análisis de alternativas.')],
                    ]],
                    [__('Entregables de gestión y seguimiento'), [
                        [__('Mapa de procesos y responsabilidades'), __('Flujos, responsables, controles y puntos de mejora.')],
                        [__('Matriz de riesgos y controles'),        __('Puntos críticos y recomendaciones de control interno.')],
                        [__('Reporte gerencial e indicadores'),      __('Información resumida para revisar desempeño y pendientes.')],
                        [__('Plan de acción priorizado'),            __('Próximos pasos ordenados para facilitar la ejecución y el seguimiento.')],
                    ]],
                ] as $k => [$title, $items])
                <article class="{{ $card }} p-5.5 md:p-6.25" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <h3 class="{{ $h3 }}">{{ $title }}</h3>
                    <div class="grid gap-2.75 mt-3.5">
                        @foreach ($items as $i => [$b, $d])
                        <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ $dots[$i] }}"></span>
                            <div><b class="block mb-0.5 text-sm">{{ $b }}</b><span class="text-[#5F5A5B] text-[13px]">{{ $d }}</span></div>
                        </div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Responsabilidades -->
    <section class="py-7.75">
        <div class="container-2026">
            <div class="mb-4.75" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Responsabilidades') }}</div>
                <h2 class="{{ $h2 }}">{{ __('La consultoría funciona mejor cuando cada parte sabe qué debe aportar.') }}</h2>
                <p class="{{ $desc }}">{{ __('OTIUM analiza y estructura; la empresa aporta la información, valida los hechos y conserva la decisión final sobre su gestión.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                @foreach ([
                    ['OTIUM', '✓', 'text-accent', [
                        __('Releva el problema y define el marco de análisis del proyecto.'),
                        __('Revisa, ordena y analiza la información incluida en el alcance.'),
                        __('Prepara modelos, matrices, reportes y recomendaciones acordados.'),
                        __('Expone hallazgos, criterios y próximos pasos de forma ejecutiva.'),
                    ]],
                    [__('Su empresa'), '•', 'text-primary', [
                        __('Facilita la información y documentación necesaria para el análisis.'),
                        __('Designa responsables internos para aclarar información y procesos.'),
                        __('Valida hechos, supuestos y criterios que dependen de su operación.'),
                        __('Toma las decisiones y aprueba las acciones que corresponden a su gestión.'),
                    ]],
                ] as $k => [$who, $mark, $color, $items])
                <article class="{{ $card }} p-5.5 md:p-6.25" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <h3 class="{{ $h3 }}">{{ $who }}</h3>
                    <div class="grid gap-2.5 mt-3.5">
                        @foreach ($items as $item)
                        <div class="grid grid-cols-[22px_1fr] gap-2.5 text-sm text-[#474142]"><i class="not-italic font-extrabold {{ $color }}">{{ $mark }}</i><span>{{ $item }}</span></div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Cuando el caso requiere algo más -->
    <section class="py-7.75">
        <div class="container-2026">
            <div class="mb-4.75" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Cuando el caso requiere algo más') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Algunas necesidades se articulan con otros servicios.') }}</h2>
                <p class="{{ $desc }}">{{ __('La consultoría identifica y analiza problemas, pero no convierte automáticamente otros trabajos especializados en parte del alcance.') }}</p>
            </div>
            <div class="{{ $card }} p-5.5 md:p-6.25 bg-linear-to-b! from-white/96 to-[#F7F4F2]/98" data-aos="fade-up">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4.5 gap-y-3 mt-4">
                    @foreach ([
                        [__('Contabilidad mensual'),                    __('Corresponde a Outsourcing Contable Digital cuando se requiere registro y mantenimiento continuo.')],
                        [__('Gestión tributaria'),                      __('Declaraciones, cumplimiento fiscal y obligaciones tributarias se cotizan en su línea específica.')],
                        [__('Auditoría'),                               __('Una opinión independiente o trabajo de auditoría requiere un alcance separado.')],
                        [__('Implementaciones tecnológicas completas'), __('SharePoint, Power BI o automatizaciones pueden requerir un proyecto adicional.')],
                        [__('Asesoría legal especializada'),            __('Cuando el caso lo exige, se coordina o cotiza con el soporte profesional correspondiente.')],
                        [__('Ejecución operativa permanente'),          __('No forma parte automática de un diagnóstico o proyecto puntual de consultoría.')],
                    ] as [$t, $d])
                    <div class="px-3.75 py-3.5 rounded-[15px] border border-[#E6E1DE] bg-white text-sm text-[#4E4849]"><strong>{{ $t }}</strong><br>{{ $d }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Qué cambia para el cliente -->
    <section class="py-7.75">
        <div class="container-2026">
            <div class="mb-4.75" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué cambia para el cliente') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Más que un informe: una estructura para ver y decidir.') }}</h2>
            </div>
            <div class="{{ $card }} overflow-hidden p-2" data-aos="fade-up">
                <table class="w-full border-collapse text-[13px] md:text-sm" aria-label="{{ __('Antes y con OTIUM') }}">
                    <thead>
                        <tr>
                            <th class="text-left px-2.25 py-3 md:px-3.5 md:py-3.75 text-[11px] uppercase tracking-[.12em] border-b border-[#E6E1DE] text-[#81584F]">{{ __('Sin un proceso estructurado') }}</th>
                            <th class="text-left px-2.25 py-3 md:px-3.5 md:py-3.75 text-[11px] uppercase tracking-[.12em] border-b border-[#E6E1DE] text-[#17616E]">{{ __('Con OTIUM') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ([
                            [__('Información dispersa entre archivos, reportes y personas.'),           __('Información relevante organizada alrededor de una pregunta de gestión.')],
                            [__('Números disponibles, pero con poca lectura gerencial.'),               __('Análisis que conecta costos, caja, rentabilidad, procesos o riesgos con decisiones.')],
                            [__('Inversiones o gastos importantes sin comparación suficiente.'),        __('Escenarios, CAPEX/OPEX y consecuencias financieras visibles antes de decidir.')],
                            [__('Hallazgos que quedan en conversaciones o archivos aislados.'),         __('Matrices, modelos, reportes y planes de acción que pueden revisarse y dar seguimiento.')],
                        ] as [$before, $after])
                        <tr>
                            <td class="align-top px-2.25 py-3 md:px-3.5 md:py-3.75 bg-secondary/5.5 {{ $loop->first ? '' : 'border-t border-[#E6E1DE]' }}">{{ $before }}</td>
                            <td class="align-top px-2.25 py-3 md:px-3.5 md:py-3.75 bg-accent/5.5 {{ $loop->first ? '' : 'border-t border-[#E6E1DE]' }}">{{ $after }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Cómo empezamos -->
    <section id="inicio" class="pt-10.5 pb-14 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $card }} relative overflow-hidden p-5.5 md:p-8.75" data-aos="fade-up">
                <span class="absolute -right-22.5 -bottom-32.5 w-60 h-60 rounded-full bg-[radial-gradient(circle,rgba(84,186,199,.17),rgba(84,186,199,0))] pointer-events-none"></span>
                <div class="relative grid grid-cols-1 lg:grid-cols-[1.1fr_.9fr] gap-6.25 items-center">
                    <div>
                        <div class="{{ $tag }}">{{ __('Cómo empezamos') }}</div>
                        <h2 class="text-[clamp(29px,3.5vw,45px)] font-bold leading-[1.55] tracking-[-0.025em] mb-2.25">{{ __('Conversemos sobre la decisión que necesita tomar su empresa.') }}</h2>
                        <p class="text-[#4B4445] text-[17px] max-w-[720px] mb-4">{{ __('Primero entendemos la situación actual y la pregunta que necesita respuesta. Después definimos qué información debemos revisar, qué alcance tiene sentido y qué entregables pueden ayudar realmente a la gerencia.') }}</p>
                        <div class="flex flex-wrap gap-3 mt-6.5">
                            <a href="{{ $waService }}" target="_blank" rel="noopener" class="{{ $btn }} bg-[#1F1617] text-white hover:bg-[#0e0a0b]">{{ __('Solicitar una evaluación inicial') }}</a>
                            <a href="#proceso" class="{{ $btn }} bg-accent/13 text-[#175D69] hover:bg-accent/19">{{ __('Revisar el proceso') }}</a>
                        </div>
                    </div>
                    <aside class="p-5.25 rounded-[19px] border border-[#E6E1DE] bg-[#F7F4F2]">
                        <h3 class="text-lg font-bold tracking-[-0.025em] mb-2.25">{{ __('Para definir el alcance revisamos:') }}</h3>
                        <div class="grid gap-2 text-sm text-[#4E4849]">
                            @foreach ([
                                __('Problema o decisión principal.'),
                                __('Información disponible y nivel de orden actual.'),
                                __('Sistemas, archivos y responsables internos.'),
                                __('Horizonte del análisis o de la decisión.'),
                                __('Entregables que necesita la gerencia.'),
                            ] as $item)
                            <span><span class="text-primary font-black mr-2" aria-hidden="true">•</span>{{ $item }}</span>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    </div>
</x-layout>
