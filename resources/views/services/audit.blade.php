<x-layout
    title="Auditoría y Revisión Financiera Bolivia | CAUB | Otium"
    description="Auditoría y revisión financiera con dictamen formal registrado ante el CAUB. Revisión independiente con criterio técnico para empresas en Bolivia."
>
    @php
        $wa = env('WHATSAPP_NUMBER', '59170654104');
        $waService = 'https://wa.me/' . $wa . '?text=' . rawurlencode(__('Hola, quiero información sobre Auditoría.'));

        // Estilos repetidos del diseño "Auditoría 2026" (tarjetas redondeadas sobre fondo cálido)
        $card = 'bg-white/93 border border-[#1F1617]/8 rounded-3xl shadow-[0_18px_40px_rgba(31,22,23,.08)]';
        $tag  = 'text-xs uppercase tracking-[.14em] text-primary font-bold mb-2';
        $h2   = 'text-[clamp(30px,3.5vw,44px)] font-bold leading-normal tracking-[-0.02em] mb-1';
        $desc = 'max-w-[720px] text-[#4E4849] text-[17px] mb-4';
        $head = 'flex flex-col md:flex-row md:items-end md:justify-between gap-3 md:gap-5 mb-5';
        $btn  = 'inline-flex items-center gap-2.5 px-4.5 py-3.5 rounded-[14px] font-bold text-[15px] transition-all hover:-translate-y-px';
    @endphp

    <div class="text-[#1F1617] leading-normal" style="background: radial-gradient(circle at top right, rgba(84,186,199,.11), transparent 24%), radial-gradient(circle at top left, rgba(180,46,37,.055), transparent 25%), linear-gradient(180deg, #fbf9f8 0%, #f7f4f2 100%);">

    <!-- Hero -->
    <section class="pt-32 pb-7.5 md:pt-36">
        <div class="container-2026 grid grid-cols-1 lg:grid-cols-[1.12fr_.88fr] gap-7 items-stretch">
            <article class="{{ $card }} relative overflow-hidden p-5.5 md:p-9.5" data-aos="fade-up">
                <span class="absolute -right-22 -bottom-29 w-60 h-60 rounded-full bg-[radial-gradient(circle,rgba(84,186,199,.18),rgba(84,186,199,0))] pointer-events-none"></span>
                <div class="inline-flex items-center gap-2 mb-4.5 px-3 py-2 rounded-full bg-primary/8 text-primary text-xs uppercase tracking-[.12em] font-bold">OTIUM | {{ __('Auditoría') }}</div>
                <h1 class="text-[clamp(38px,5vw,62px)] font-bold leading-[1.02] tracking-[-0.02em] mb-4.5 max-w-[830px]">
                    {{ __('Información revisada.') }} <span class="text-primary">{{ __('Riesgos visibles.') }}</span> {{ __('Decisiones mejor respaldadas.') }}
                </h1>
                <p class="text-lg md:text-xl leading-[1.45] text-[#443D3E] max-w-[790px] mb-4">{{ __('Revisamos información financiera, contable, documental y de control con un alcance definido. Aplicamos pruebas, contrastamos evidencia, identificamos hallazgos y presentamos resultados claros para gerencia, socios o directorio.') }}</p>
                <div class="relative z-10 flex flex-wrap gap-3.5 mt-6.5">
                    <a href="#proceso" class="{{ $btn }} bg-[#1F1617] text-white hover:bg-[#0d090a]">{{ __('Ver cómo trabajamos') }}</a>
                    <a href="#entregables" class="{{ $btn }} bg-accent/12 text-[#175864] hover:bg-accent/19">{{ __('Ver entregables') }}</a>
                </div>
                <div class="grid grid-cols-4 w-[min(390px,100%)] h-3.5 mt-6.5 rounded-full overflow-hidden" aria-hidden="true">
                    <span class="bg-primary"></span><span class="bg-secondary"></span><span class="bg-brand-light"></span><span class="bg-accent"></span>
                </div>
            </article>

            <aside class="{{ $card }} flex flex-col gap-4.5 p-5.5 md:p-6.5" data-aos="fade-left" data-aos-delay="100">
                <div>
                    <div class="text-[11px] uppercase tracking-[.12em] font-extrabold text-primary">{{ __('La lógica del trabajo') }}</div>
                    <h2 class="text-2xl font-bold leading-normal tracking-[-0.02em]">{{ __('De una preocupación a una conclusión sustentada') }}</h2>
                </div>
                <div class="grid gap-2.5">
                    @foreach ([
                        [__('Riesgo'),        __('Definimos qué necesita ser revisado y por qué.')],
                        [__('Procedimiento'), __('Seleccionamos las pruebas y revisiones aplicables al alcance.')],
                        [__('Evidencia'),     __('Contrastamos registros, reportes y documentación de respaldo.')],
                        [__('Hallazgo'),      __('Documentamos inconsistencias, riesgos o debilidades relevantes.')],
                        [__('Conclusión'),    __('Presentamos resultados y recomendaciones cuando corresponda.')],
                    ] as $i => [$t, $d])
                    <div class="grid grid-cols-[38px_1fr] gap-3 items-start py-3 {{ $loop->first ? '' : 'border-t border-[#E6E1DE]' }}">
                        <div class="w-9 h-9 grid place-items-center rounded-xl font-extrabold {{ in_array($i, [1, 4]) ? 'bg-accent/14 text-[#176675]' : 'bg-primary/9 text-primary' }}">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                        <div><strong class="block text-sm mb-0.5">{{ $t }}</strong><span class="text-[#5F5A5B] text-[13px]">{{ $d }}</span></div>
                    </div>
                    @endforeach
                </div>
                <div class="flex flex-wrap gap-2 mt-auto">
                    @foreach ([__('Estados financieros'), __('Fondos'), __('Inventarios'), __('Control interno')] as $pill)
                    <span class="px-2.75 py-2 rounded-full border border-[#E6E1DE] bg-[#F7F4F2] text-[#5F5A5B] text-xs font-bold">{{ $pill }}</span>
                    @endforeach
                </div>
            </aside>
        </div>
    </section>

    <!-- Qué resolvemos -->
    <section id="problema" class="py-9.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div>
                    <div class="{{ $tag }}">{{ __('Qué resolvemos') }}</div>
                    <h2 class="{{ $h2 }}">{{ __('Cuando la información existe, pero todavía no da suficiente certeza.') }}</h2>
                </div>
                <p class="{{ $desc }}">{{ __('La necesidad de auditoría suele aparecer cuando hay información que debe ser validada, explicada o presentada con mayor respaldo frente a gerencia, socios, directorio o terceros.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ([
                    ['bg-primary/10 text-primary',       __('Información que no concilia'),            __('Diferencias entre reportes, saldos contables, extractos, inventarios o respaldos dificultan entender qué está ocurriendo.')],
                    ['bg-secondary/18 text-[#8d5547]',    __('Respaldo disperso'),                      __('Documentos, evidencias y explicaciones están repartidos entre sistemas, carpetas, correos o personas.')],
                    ['bg-accent/16 text-[#176675]',       __('Controles poco visibles'),                __('La empresa no siempre tiene claro qué controles existen, dónde fallan o qué riesgos requieren mayor atención.')],
                    ['bg-brand-light/65 text-[#765b51]',  __('Decisiones sin revisión independiente'),  __('Gerencia o socios necesitan una lectura técnica antes de tomar decisiones relevantes o rendir cuentas.')],
                ] as $i => [$chip, $t, $d])
                <article class="p-5.5 bg-white/90 border border-[#1F1617]/8 rounded-[20px] shadow-[0_18px_40px_rgba(31,22,23,.08)]" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}">
                    <div class="w-11 h-11 grid place-items-center mb-3.5 rounded-[14px] font-extrabold text-[13px] {{ $chip }}">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3 class="text-xl font-bold leading-normal tracking-[-0.02em] mb-2">{{ $t }}</h3>
                    <p class="text-[#5F5A5B]">{{ $d }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Qué hacemos -->
    <section id="hacemos" class="py-9.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div>
                    <div class="{{ $tag }}">{{ __('Qué hacemos por usted') }}</div>
                    <h2 class="{{ $h2 }}">{{ __('Una revisión con alcance definido, evidencia y trazabilidad.') }}</h2>
                </div>
                <p class="{{ $desc }}">{{ __('El trabajo no comienza revisando todo. Primero definimos qué necesita ser evaluado, qué información existe y qué resultado espera el cliente.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4.5">
                @foreach ([
                    [__('Alcance'),     __('Definimos el encargo'),                          __('Acordamos objetivo, período, áreas, cuentas, procesos o información a revisar.')],
                    [__('Información'), __('Solicitamos y ordenamos documentación'),         __('Estructuramos el requerimiento y detectamos faltantes o inconsistencias que condicionan la revisión.')],
                    [__('Pruebas'),     __('Ejecutamos revisión técnica'),                   __('Aplicamos pruebas selectivas, cruces de información y revisión de respaldos según el alcance.')],
                    [__('Evidencia'),   __('Contrastamos lo registrado con lo respaldado'),  __('Relacionamos saldos, movimientos, reportes y documentos para evaluar consistencia y trazabilidad.')],
                    [__('Hallazgos'),   __('Organizamos observaciones y riesgos'),           __('Documentamos los puntos relevantes y, cuando corresponde, los validamos con responsables del cliente.')],
                    [__('Resultado'),   __('Presentamos conclusiones claras'),               __('Entregamos informe, matriz o reporte según el tipo de trabajo contratado.')],
                ] as $i => [$step, $t, $d])
                <article class="p-5.5 rounded-[20px] border border-[#1F1617]/8 bg-white/95 shadow-[0_18px_40px_rgba(31,22,23,.08)]" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 75 }}">
                    <div class="mb-2.5 text-[11px] font-extrabold tracking-[.12em] uppercase text-primary">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }} · {{ $step }}</div>
                    <h3 class="text-[19px] font-bold leading-normal tracking-[-0.02em] mb-2">{{ $t }}</h3>
                    <p class="text-[#5F5A5B]">{{ $d }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Proceso principal -->
    <section id="proceso" class="py-9.5 scroll-mt-24">
        <div class="container-2026">
            <article class="{{ $card }} p-5.5 md:p-7.5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Proceso principal') }}</div>
                <div class="{{ $head }} mb-5.5!">
                    <div><h2 class="{{ $h2 }}">{{ __('Riesgo → Procedimiento → Evidencia → Hallazgo → Conclusión') }}</h2></div>
                    <p class="{{ $desc }}">{{ __('Este flujo concentra la lógica de la auditoría: cada observación debe conectarse con una necesidad de revisión, un procedimiento ejecutado y evidencia que permita sustentar el resultado.') }}</p>
                </div>
                <div class="flex flex-wrap items-center gap-2.5 mb-5.5">
                    @foreach ([__('Alcance antes de ejecutar'), __('Pruebas selectivas'), __('Evidencia documentada'), __('Hallazgos trazables')] as $pill)
                    <span class="px-3.5 py-2 rounded-full text-[13px] font-bold bg-[#F7F4F2] text-[#4F4849] border border-[#E6E1DE]">{{ $pill }}</span>
                    @endforeach
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-3.5">
                    @foreach ([
                        ['bg-primary/10 text-primary',     __('Riesgo'),        __('Identificamos qué aspecto requiere revisión y qué podría afectar la confiabilidad, el control o la rendición de cuentas.')],
                        ['bg-accent/14 text-[#186272]',    __('Procedimiento'), __('Definimos qué prueba, cruce, revisión documental o análisis se realizará para responder al objetivo.')],
                        ['bg-secondary/17 text-[#8d5547]', __('Evidencia'),     __('Revisamos la información disponible y documentamos los elementos que respaldan el trabajo realizado.')],
                        ['bg-primary/10 text-primary',     __('Hallazgo'),      __('Señalamos diferencias, debilidades, inconsistencias o situaciones relevantes encontradas durante la revisión.')],
                        ['bg-accent/14 text-[#186272]',    __('Conclusión'),    __('Ordenamos los resultados y comunicamos qué se observó, por qué importa y qué próximos pasos pueden evaluarse.')],
                    ] as $i => [$num, $t, $d])
                    <article class="relative p-5.5 rounded-[22px] bg-white border border-[#E6E1DE] lg:min-h-52" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}">
                        @unless ($loop->last)
                        <span class="hidden lg:block absolute top-9 -right-3.5 w-3.5 h-0.5 bg-linear-to-r from-primary/45 to-accent/45"></span>
                        @endunless
                        <div class="w-10.5 h-10.5 grid place-items-center mb-4 rounded-[14px] font-extrabold {{ $num }}">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                        <h3 class="text-lg font-bold leading-normal tracking-[-0.02em] mb-2">{{ $t }}</h3>
                        <p class="text-[#5F5A5B] text-sm">{{ $d }}</p>
                    </article>
                    @endforeach
                </div>
                <div class="mt-4.5 px-4.5 py-4 rounded-2xl bg-accent/10 border-l-4 border-accent text-[#28525A]">
                    <strong>{{ __('La auditoría no sustituye la operación contable.') }}</strong> {{ __('Si el trabajo detecta registros incompletos, necesidad de correcciones, regularización tributaria o implementación de controles, esos trabajos se separan del encargo de auditoría.') }}
                </div>
            </article>
        </div>
    </section>

    <!-- Ámbitos de revisión -->
    <section class="py-9.5">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div>
                    <div class="{{ $tag }}">{{ __('Ámbitos de revisión') }}</div>
                    <h2 class="{{ $h2 }}">{{ __('El alcance se adapta al objetivo del encargo.') }}</h2>
                </div>
                <p class="{{ $desc }}">{{ __('No todas las auditorías buscan responder la misma pregunta. OTIUM puede estructurar trabajos específicos según la información y necesidad del cliente.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4.5">
                @foreach ([
                    [__('Estados financieros'),             __('Revisión de información financiera preparada por la empresa. La emisión de dictamen formal debe definirse expresamente en la propuesta.')],
                    [__('Revisión limitada'),               __('Evaluación técnica de información financiera específica con menor alcance que una auditoría completa.')],
                    [__('Auditorías especiales'),           __('Trabajos enfocados en cuentas, operaciones, movimientos, documentación o situaciones concretas.')],
                    [__('Fondos'),                          __('Revisión del origen, uso, administración y documentación de recursos específicos o proyectos.')],
                    [__('Inventarios'),                     __('Análisis de registros, movimientos, saldos, valorización, diferencias y controles asociados, según alcance.')],
                    [__('Revisión tributaria preventiva'),  __('Revisión de declaraciones, libros, respaldos y criterios para identificar contingencias antes de una fiscalización.')],
                    [__('Procesos y control interno'),      __('Evaluación de procesos administrativos, contables, financieros o documentales para identificar debilidades y riesgos.')],
                    [__('Procedimientos acordados'),        __('Ejecución de pruebas específicas previamente definidas con el cliente y reporte objetivo de resultados.')],
                    [__('Seguimiento posterior'),           __('Puede contratarse por separado para revisar avances o conectar hallazgos con servicios complementarios.')],
                ] as $i => [$t, $d])
                <article class="p-5.5 bg-white border border-[#E6E1DE] rounded-[18px]" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 75 }}">
                    <strong class="block text-lg mb-1.5">{{ $t }}</strong>
                    <span class="text-[#5F5A5B] text-sm">{{ $d }}</span>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modelo digital -->
    <section id="digital" class="py-9.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div>
                    <div class="{{ $tag }}">{{ __('Modelo digital') }}</div>
                    <h2 class="{{ $h2 }}">{{ __('La tecnología organiza la evidencia; el criterio profesional dirige la revisión.') }}</h2>
                </div>
                <p class="{{ $desc }}">{{ __('Las herramientas se utilizan para ordenar, comparar, documentar y presentar mejor la información. No son el servicio por sí mismas.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-[.9fr_1.1fr] gap-4.5">
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-right">
                    <h3 class="text-xl font-bold tracking-[-0.02em] mb-2">{{ __('Herramientas que pueden apoyar el trabajo') }}</h3>
                    <div class="grid gap-2.5 mt-4">
                        @foreach ([
                            ['Microsoft 365',          __('Coordinación y gestión de documentos durante el encargo.')],
                            ['SharePoint',             __('Repositorio estructurado para documentación y evidencia cuando el alcance lo requiere.')],
                            [__('Excel estructurado'), __('Matrices, cruces, conciliaciones, pruebas y seguimiento de observaciones.')],
                            ['Power Query / Power BI', __('Transformación, comparación o visualización de información cuando aporta claridad al análisis.')],
                            [__('IA como apoyo'),      __('Organización, clasificación o análisis preliminar bajo revisión profesional.')],
                        ] as [$b, $d])
                        <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full bg-accent"></span>
                            <div><b class="block mb-0.5 text-sm">{{ $b }}</b><span class="text-[#5F5A5B] text-sm">{{ $d }}</span></div>
                        </div>
                        @endforeach
                    </div>
                </article>
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-left" data-aos-delay="100">
                    <table class="w-full border-collapse text-sm" aria-label="{{ __('Modelo digital de auditoría') }}">
                        <thead>
                            <tr>
                                <th class="text-left px-2.75 py-3.25 text-[11px] uppercase tracking-[.12em] text-primary border-b border-[#E6E1DE]">{{ __('Elemento') }}</th>
                                <th class="text-left px-2.75 py-3.25 text-[11px] uppercase tracking-[.12em] text-primary border-b border-[#E6E1DE]">{{ __('Qué organiza') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ([
                                [__('Requerimiento'),      __('Qué información se solicitó, qué se recibió y qué sigue pendiente.')],
                                [__('Evidencia'),          __('Documentos, reportes y respaldos asociados a cada procedimiento.')],
                                [__('Matriz de hallazgos'),__('Observación, riesgo, sustento y estado de cada punto relevante.')],
                                [__('Anexos'),             __('Cuadros, conciliaciones o análisis utilizados para explicar resultados.')],
                                [__('Reporte'),            __('Conclusiones y recomendaciones según la naturaleza del encargo.')],
                            ] as [$el, $org])
                            <tr>
                                <td class="align-top px-2.75 py-3.25 font-bold w-1/3 {{ $loop->first ? '' : 'border-t border-[#E6E1DE]' }}">{{ $el }}</td>
                                <td class="align-top px-2.75 py-3.25 {{ $loop->first ? '' : 'border-t border-[#E6E1DE]' }}">{{ $org }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4.5 px-4.5 py-4 rounded-2xl bg-accent/10 border-l-4 border-accent text-[#28525A]">{{ __('El modelo digital busca que la revisión sea reconstruible: saber qué se pidió, qué se revisó, qué evidencia existe y cómo se llegó a cada hallazgo.') }}</div>
                </article>
            </div>
        </div>
    </section>

    <!-- Entregables -->
    <section id="entregables" class="py-9.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div>
                    <div class="{{ $tag }}">{{ __('Entregables') }}</div>
                    <h2 class="{{ $h2 }}">{{ __('El resultado debe poder leerse, discutirse y utilizarse.') }}</h2>
                </div>
                <p class="{{ $desc }}">{{ __('Los entregables exactos dependen del tipo de auditoría o revisión contratada y de la información disponible.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-[1.05fr_.95fr] gap-4.5">
                <article class="{{ $card }} p-5.5 md:p-6.5 bg-linear-to-b! from-white/96 to-[#F7F4F2]/98" data-aos="fade-right">
                    <div class="text-[11px] uppercase tracking-[.12em] font-extrabold text-primary">{{ __('Entregable principal') }}</div>
                    <h3 class="text-[25px] font-bold leading-normal tracking-[-0.02em] mb-2">{{ __('Informe o reporte de resultados') }}</h3>
                    <p class="text-[#5F5A5B]">{{ __('Documento que organiza el alcance realizado, los principales hallazgos, las conclusiones y las recomendaciones cuando corresponda.') }}</p>
                    <div class="flex flex-wrap gap-2.25 mt-4.5">
                        @foreach ([__('Informe de auditoría / revisión'), __('Informe especial'), __('Revisión tributaria preventiva'), __('Fondos / inventarios')] as $t)
                        <span class="px-3 py-2.25 rounded-full border border-[#E6E1DE] bg-white text-[13px] font-bold text-[#514A4B]">{{ $t }}</span>
                        @endforeach
                    </div>
                </article>
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-left" data-aos-delay="100">
                    <h3 class="text-xl font-bold tracking-[-0.02em] mb-2">{{ __('Otros entregables posibles') }}</h3>
                    <div class="grid gap-2.5 mt-4">
                        @foreach ([
                            [__('Matriz de hallazgos u observaciones'), __('Para ordenar puntos, evidencia y seguimiento.')],
                            [__('Matriz de riesgos'),                   __('Cuando el alcance requiere una lectura estructurada de exposición o control.')],
                            [__('Anexos y cuadros de soporte'),         __('Conciliaciones, cruces, análisis o respaldos preparados para el cliente.')],
                            [__('Presentación ejecutiva'),              __('Cuando se acuerda una devolución para gerencia, socios o directorio.')],
                            [__('Reunión de cierre'),                   __('Para explicar hallazgos, conclusiones y próximos pasos.')],
                        ] as [$b, $d])
                        <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full bg-accent"></span>
                            <div><b class="block mb-0.5 text-sm">{{ $b }}</b><span class="text-[#5F5A5B] text-sm">{{ $d }}</span></div>
                        </div>
                        @endforeach
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Responsabilidades -->
    <section class="py-9.5">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div>
                    <div class="{{ $tag }}">{{ __('Responsabilidades') }}</div>
                    <h2 class="{{ $h2 }}">{{ __('Una auditoría funciona mejor cuando el alcance y la información están claros.') }}</h2>
                </div>
                <p class="{{ $desc }}">{{ __('La revisión requiere coordinación. OTIUM ejecuta el trabajo técnico; la empresa facilita información, acceso y contexto para que la evidencia pueda ser evaluada.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                @foreach ([
                    ['OTIUM', 'border-t-primary', 'bg-primary/10 text-primary', [
                        __('Define y documenta el alcance acordado.'),
                        __('Prepara el requerimiento documental.'),
                        __('Ejecuta pruebas y revisiones según el encargo.'),
                        __('Documenta evidencia, hallazgos y conclusiones.'),
                        __('Comunica resultados de forma clara y ordenada.'),
                    ]],
                    [__('Su empresa'), 'border-t-accent', 'bg-accent/14 text-[#176675]', [
                        __('Entrega información y respaldos dentro del alcance.'),
                        __('Facilita acceso a responsables, sistemas o documentación necesaria.'),
                        __('Aclara operaciones, criterios o situaciones que requieren contexto.'),
                        __('Revisa observaciones preliminares cuando corresponda.'),
                        __('Decide e implementa acciones posteriores fuera del alcance de auditoría.'),
                    ]],
                ] as $i => [$who, $border, $check, $items])
                <article class="{{ $card }} p-5.5 md:p-6 border-t-[5px] {{ $border }}" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <h3 class="text-xl font-bold tracking-[-0.02em] mb-2">{{ $who }}</h3>
                    <div class="grid gap-2.5 mt-3.5">
                        @foreach ($items as $item)
                        <div class="grid grid-cols-[24px_1fr] gap-2.5 text-[#474142] text-sm">
                            <i class="w-5.5 h-5.5 grid place-items-center rounded-lg not-italic font-extrabold {{ $check }}">✓</i>
                            <span>{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Alcance adicional -->
    <section id="alcance" class="py-9.5 scroll-mt-24">
        <div class="container-2026">
            <article class="{{ $card }} p-5.5 md:p-6.5 bg-linear-to-b! from-white/95 to-[#F7F4F2]/98" data-aos="fade-up">
                <div class="inline-flex mb-4 px-3 py-2 rounded-full bg-primary/10 text-primary text-[11px] font-extrabold tracking-[.12em] uppercase">{{ __('Cuando el caso requiere un trabajo adicional') }}</div>
                <h2 class="text-2xl font-bold leading-normal tracking-[-0.02em] mb-2">{{ __('Auditoría no es contabilidad, implementación ni defensa tributaria.') }}</h2>
                <p>{{ __('Si durante la revisión aparecen necesidades operativas o trabajos especializados, se evalúan y cotizan separadamente según el caso.') }}</p>
                <ul class="list-disc pl-5 mt-3 text-[#4C4647] md:columns-2 gap-8.5">
                    @foreach ([
                        __('Registro o corrección de asientos contables.'),
                        __('Reconstrucción completa de contabilidad.'),
                        __('Elaboración de estados financieros desde cero.'),
                        __('Presentación o rectificación de declaraciones tributarias.'),
                        __('Descargos y defensa ante fiscalizaciones.'),
                        __('Implementación operativa de controles internos.'),
                        __('Diseño completo de procesos administrativos.'),
                        __('Valuación de empresas o due diligence integral.'),
                        __('Administración documental permanente.'),
                        __('Toma física completa de inventarios salvo contratación expresa.'),
                    ] as $item)
                    <li class="break-inside-avoid mb-2">{{ $item }}</li>
                    @endforeach
                </ul>
            </article>
        </div>
    </section>

    <!-- Qué cambia para el cliente -->
    <section class="py-9.5">
        <div class="container-2026">
            <div class="{{ $head }}" data-aos="fade-up">
                <div>
                    <div class="{{ $tag }}">{{ __('Qué cambia para el cliente') }}</div>
                    <h2 class="{{ $h2 }}">{{ __('De información difícil de validar a una revisión que deja trazabilidad.') }}</h2>
                </div>
                <p class="{{ $desc }}">{{ __('El objetivo no es prometer ausencia de riesgos, sino mejorar la visibilidad sobre la información revisada y dejar claro qué requiere atención.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4.5">
                @foreach ([
                    [
                        [__('Información dispersa'), __('Requerimiento y evidencia organizada')],
                        [__('Diferencias sin explicación clara'), __('Hallazgos documentados')],
                        [__('Dependencia de una persona'), __('Proceso de revisión trazable')],
                    ],
                    [
                        [__('Riesgos poco visibles'), __('Puntos relevantes identificados')],
                        [__('Reportes difíciles de discutir'), __('Conclusiones ordenadas para gerencia o socios')],
                        [__('Problemas mezclados con la operación'), __('Separación entre auditoría y trabajos complementarios')],
                    ],
                ] as $i => $rows)
                <article class="{{ $card }} overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    @foreach ($rows as [$before, $after])
                    <div class="grid grid-cols-1 md:grid-cols-[1fr_auto_1fr] gap-1.25 md:gap-3.5 md:items-center px-5.5 py-4.5 {{ $loop->first ? '' : 'border-t border-[#E6E1DE]' }}">
                        <div class="text-[#5F5A5B]">{{ $before }}</div>
                        <div class="text-accent font-black w-max rotate-90 md:rotate-0" aria-hidden="true">→</div>
                        <div class="font-bold">{{ $after }}</div>
                    </div>
                    @endforeach
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Cómo empezamos -->
    <section id="empezamos" class="pt-10.5 pb-14.5 scroll-mt-24">
        <div class="container-2026">
            <article class="{{ $card }} relative overflow-hidden p-5.5 md:p-9" data-aos="fade-up">
                <span class="absolute -right-10 -bottom-10 w-57.5 h-57.5 rounded-full bg-[radial-gradient(circle,rgba(84,186,199,.17),rgba(84,186,199,0))] pointer-events-none"></span>
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-[1.1fr_.9fr] gap-6 items-center">
                    <div>
                        <div class="{{ $tag }}">{{ __('Cómo empezamos') }}</div>
                        <h2 class="{{ $h2 }} text-[clamp(30px,3.5vw,46px)]! mb-2.5!">{{ __('Definamos qué necesita revisar su empresa y qué resultado espera obtener.') }}</h2>
                        <p class="text-[#494344] text-[17px] max-w-[720px] mb-4">{{ __('Primero entendemos la situación actual, la razón de la revisión y la información disponible. Luego definimos alcance, responsabilidades, pruebas y entregables antes de iniciar el trabajo.') }}</p>
                        <div class="flex flex-wrap gap-3.5 mt-6.5">
                            <a href="{{ $waService }}" target="_blank" rel="noopener" class="{{ $btn }} bg-[#1F1617] text-white hover:bg-[#0d090a]">{{ __('Conversemos sobre su caso') }}</a>
                        </div>
                    </div>
                    <aside class="p-5.5 rounded-[20px] bg-[#F7F4F2] border border-[#E6E1DE]">
                        <h3 class="text-lg font-bold tracking-[-0.02em] mb-2.5">{{ __('Variables que revisamos al inicio') }}</h3>
                        <div class="flex flex-wrap gap-2 mt-3">
                            @foreach ([__('Objetivo del encargo'), __('Período'), __('Información disponible'), __('Sistemas'), __('Áreas / cuentas'), __('Responsables internos'), __('Plazos'), __('Entregables requeridos')] as $var)
                            <span class="px-2.5 py-2 rounded-full bg-white border border-[#E6E1DE] text-[#5F5A5B] text-xs font-bold">{{ $var }}</span>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </article>
        </div>
    </section>

    </div>
</x-layout>
