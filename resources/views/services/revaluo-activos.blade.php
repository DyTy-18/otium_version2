<x-layout
    title="Revalúo Técnico y Gestión Digital de Activos Fijos Bolivia | Otium"
    description="Inventario físico, etiquetado QR, análisis contable y base patrimonial digital para empresas en Bolivia. Control de activos fijos con respaldo técnico."
>
    @php
        $wa = env('WHATSAPP_NUMBER', '59170654104');
        $waService = 'https://wa.me/' . $wa . '?text=' . rawurlencode(__('Hola, quiero información sobre Revalúo Técnico de Activos Fijos.'));

        // Estilos repetidos del diseño "Activos Fijos 2026"
        $card   = 'bg-white/92 border border-[#1F1617]/8 rounded-3xl shadow-[0_18px_40px_rgba(31,22,23,.08)]';
        $tag    = 'text-xs uppercase tracking-[.14em] text-primary font-bold mb-2';
        $h2     = 'text-[clamp(28px,3.4vw,42px)] font-bold leading-normal tracking-[-0.02em] mb-1';
        $h3     = 'text-[1.17em] font-bold leading-normal tracking-[-0.02em] mb-2';
        $desc   = 'max-w-[720px] text-[#4E4849] text-[17px] mb-4';
        $kicker = 'inline-flex items-center gap-2 mb-3.5 px-3 py-2 rounded-full text-xs uppercase tracking-[.12em] font-bold';
        $btn    = 'inline-flex items-center gap-2.5 px-4.5 py-3.5 rounded-[14px] font-bold text-[15px] transition-all hover:-translate-y-px';
        $dots   = ['bg-primary', 'bg-secondary', 'bg-accent', 'bg-[#1F1617]'];
        $grey   = ['bg-[#b6b6b7]', 'bg-[#b6b6b7]', 'bg-[#b6b6b7]', 'bg-[#b6b6b7]'];
    @endphp

    <div class="text-[#1F1617] leading-normal" style="background: radial-gradient(circle at top right, rgba(84,186,199,.12), transparent 22%), radial-gradient(circle at top left, rgba(180,46,37,.06), transparent 24%), linear-gradient(180deg, #fbf9f8 0%, #f7f4f2 100%);">

    <!-- Hero -->
    <section class="pt-32 pb-7 md:pt-36">
        <div class="container-2026 grid grid-cols-1 lg:grid-cols-[1.2fr_.8fr] gap-7 items-stretch">
            <article class="{{ $card }} relative overflow-hidden p-5.5 md:p-8.5" data-aos="fade-up">
                <div class="{{ $kicker }} mb-4.5 bg-primary/8 text-primary">OTIUM | {{ __('ACTIVOS FIJOS') }}</div>
                <h1 class="text-[clamp(34px,5vw,58px)] font-bold leading-[1.02] tracking-[-0.02em] mb-4.5">{{ __('Sepa qué activos tiene, dónde están y qué información los respalda.') }}</h1>
                <p class="text-lg md:text-xl leading-[1.45] text-[#443D3E] max-w-[780px] mb-4">{{ __('Ordenamos los activos fijos de su empresa desde una mirada física, documental, contable y técnica: inventario, etiquetado QR, conciliación de registros, revalúo cuando corresponde y una base digital para control posterior.') }}</p>
                <div class="flex flex-wrap gap-3.5 mt-6.5">
                    <a href="#proceso" class="{{ $btn }} bg-[#1F1617] text-white hover:bg-[#0d090a]">{{ __('Ver cómo trabajamos') }}</a>
                    <a href="#entregables" class="{{ $btn }} bg-accent/12 text-[#175864] hover:bg-accent/18">{{ __('Ver entregables') }}</a>
                </div>
                <div class="grid grid-cols-4 w-[min(380px,100%)] h-3.5 mt-6 rounded-full overflow-hidden" aria-hidden="true">
                    <span class="bg-primary"></span><span class="bg-secondary"></span><span class="bg-brand-light"></span><span class="bg-accent"></span>
                </div>
            </article>

            <aside class="{{ $card }} flex flex-col gap-4.5 p-5.5 md:p-6.5" data-aos="fade-left" data-aos-delay="100">
                <div>
                    <div class="text-xs uppercase tracking-[.12em] text-primary font-bold">{{ __('Una sola base patrimonial') }}</div>
                    <h3 class="text-2xl font-bold leading-normal tracking-[-0.02em] mt-1.5 mb-2">{{ __('Cuatro miradas que deben coincidir') }}</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5">
                    @foreach ([
                        [__('Físico'),     __('Existencia, ubicación y estado visible.')],
                        [__('Documental'), __('Facturas y respaldos disponibles.')],
                        [__('Contable'),   __('Registros, valores y diferencias.')],
                        [__('Digital'),    __('Base maestra para control y actualización.')],
                    ] as [$v, $l])
                    <div class="p-4 rounded-[18px] bg-[#F7F4F2] border border-[#E6E1DE]">
                        <div class="text-[22px] font-bold leading-none mb-2">{{ $v }}</div>
                        <div class="text-[13px] text-[#5F5A5B] font-semibold">{{ $l }}</div>
                    </div>
                    @endforeach
                </div>
                <div class="grid gap-3 mt-1">
                    @foreach ([
                        ['QR',  __('Identificación patrimonial'),         __('Etiquetas físicas para vincular cada bien con su registro.')],
                        ['T',   __('Criterio técnico cuando hace falta'), __('Coordinamos peritos o especialistas externos según el tipo de activo.')],
                        ['365', __('SharePoint opcional'),                __('Puede incorporarse como soporte documental y de control si la empresa utiliza Microsoft 365.')],
                    ] as [$dot, $t, $d])
                    <div class="grid grid-cols-[30px_1fr] gap-3 items-start">
                        <div class="w-7.5 h-7.5 grid place-items-center rounded-[10px] bg-primary/10 text-primary font-extrabold text-xs">{{ $dot }}</div>
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
                <h2 class="{{ $h2 }}">{{ __('El activo existe. El problema es cuando la información no coincide.') }}</h2>
                <p class="{{ $desc }}">{{ __('Con el tiempo, inventarios, documentos y registros contables pueden separarse de la realidad física. El proyecto vuelve a conectar esas piezas para construir una base patrimonial utilizable.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ([
                    ['bg-primary/10',   __('Inventario desactualizado'),    __('No existe certeza sobre qué bienes siguen en uso, dónde están o quién los tiene asignados.')],
                    ['bg-secondary/18', __('Diferencias con contabilidad'), __('Hay activos físicos no registrados o registros contables de bienes que no se logran ubicar.')],
                    ['bg-accent/16',    __('Respaldo disperso'),            __('Facturas, fotografías y antecedentes están en carpetas distintas o son difíciles de reconstruir.')],
                    ['',                __('Sin trazabilidad'),             __('Altas, bajas, traslados, responsables y cambios de estado no se siguen bajo una base común.')],
                ] as $i => [$chip, $t, $d])
                <article class="p-5.5 bg-white/90 border border-[#1F1617]/8 rounded-[20px] shadow-[0_18px_40px_rgba(31,22,23,.08)]" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}">
                    <div class="w-11 h-11 grid place-items-center mb-3.5 rounded-[14px] text-[22px] {{ $chip }}">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
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
                <h2 class="{{ $h2 }}">{{ __('Del levantamiento físico a una base patrimonial ordenada.') }}</h2>
                <p class="{{ $desc }}">{{ __('El alcance se define según la situación de la empresa y el objetivo del proyecto. Estos son los componentes centrales confirmados del servicio.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4.5">
                @foreach ([
                    [__('Relevamiento'),   __('Inventario físico'),                    __('Identificamos los bienes, su ubicación, área o responsable, condición visible y evidencia fotográfica relevante.')],
                    [__('Identificación'), __('Etiquetado patrimonial con QR'),        __('Asignamos códigos y etiquetas físicas que facilitan la identificación del activo y su vínculo con la información digital.')],
                    [__('Respaldo'),       __('Revisión documental'),                  __('Revisamos y organizamos la documentación disponible vinculada con los activos incluidos en el alcance.')],
                    [__('Conciliación'),   __('Análisis contable y patrimonial'),      __('Contrastamos el relevamiento físico con los registros contables para identificar diferencias, faltantes e inconsistencias.')],
                    [__('Valoración'),     __('Revalúo técnico cuando corresponde'),   __('Analizamos la necesidad de actualizar valores y coordinamos especialistas o peritos externos en activos que exigen criterio técnico específico.')],
                    [__('Control'),        __('Base maestra y propuesta de ajuste'),   __('Consolidamos la información en una base de activos y, cuando forma parte del alcance, preparamos la propuesta de ajuste contable correspondiente.')],
                ] as $i => [$step, $t, $d])
                <article class="p-5.5 rounded-[20px] border border-[#1F1617]/8 bg-white/95 shadow-[0_18px_40px_rgba(31,22,23,.08)]" data-aos="fade-up" data-aos-delay="{{ ($i % 2) * 75 }}">
                    <div class="mb-2.5 text-xs font-extrabold tracking-[.12em] uppercase text-primary">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }} · {{ $step }}</div>
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
                <h2 class="{{ $h2 }}">{{ __('Un proyecto que conecta campo, documentos, contabilidad y valoración.') }}</h2>
                <p class="{{ $desc }}">{{ __('La secuencia permite pasar de información dispersa a una base validada que la empresa pueda seguir utilizando después del proyecto.') }}</p>
            </div>
            <div class="{{ $card }} p-5.5 md:p-7" data-aos="fade-up">
                <div class="flex flex-wrap items-center gap-4.5 mb-5">
                    @foreach ([__('Diagnóstico'), __('Campo'), __('Conciliación'), __('Valoración'), __('Digitalización'), __('Entrega')] as $pill)
                    <span class="px-3.5 py-2 rounded-full text-[13px] font-bold bg-[#F7F4F2] text-[#4F4849] border border-[#E6E1DE]">{{ $pill }}</span>
                    @endforeach
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4.5">
                    @foreach ([
                        [__('Relevamiento inicial'),  __('Entendemos tipos de activos, ubicaciones, registros existentes, documentación y objetivo del trabajo.')],
                        [__('Definición de alcance'), __('Delimitamos bienes, información a levantar, documentación a revisar y necesidad de especialistas.')],
                        [__('Inventario físico'),     __('Levantamos los activos en campo y registramos la información necesaria para construir la base.')],
                        [__('Etiquetado QR'),         __('Codificamos e identificamos físicamente los bienes para facilitar su consulta y control posterior.')],
                        [__('Revisión y cruce'),      __('Contrastamos documentos y registros contables con lo encontrado físicamente.')],
                        [__('Revalúo, si aplica'),    __('Realizamos el análisis correspondiente y coordinamos especialistas externos cuando el activo lo requiere.')],
                        [__('Base digital'),          __('Consolidamos códigos, ubicación, evidencia, información documental y resultados del análisis.')],
                        [__('Validación y entrega'),  __('Revisamos hallazgos con el cliente y entregamos la base, informes y recomendaciones acordadas.')],
                    ] as $i => [$t, $d])
                    <article class="relative p-5.5 rounded-[22px] bg-white border border-[#E6E1DE] md:min-h-47.5" data-aos="fade-up" data-aos-delay="{{ ($i % 4) * 75 }}">
                        {{-- Conector hacia la siguiente tarjeta de la fila (4 por fila en desktop, 2 en tablet) --}}
                        <span class="hidden {{ $i % 2 === 0 ? 'md:block' : '' }} {{ $i % 4 === 3 ? 'lg:hidden' : 'lg:block' }} absolute top-8.5 -right-4.5 w-4.5 h-0.5 bg-linear-to-r from-primary/45 to-accent/45"></span>
                        <div class="w-10.5 h-10.5 grid place-items-center mb-4 rounded-[14px] font-extrabold {{ $i % 2 === 0 ? 'bg-primary/10 text-primary' : 'bg-accent/14 text-[#186272]' }}">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                        <h3 class="text-lg font-bold tracking-[-0.02em] mb-2">{{ $t }}</h3>
                        <p class="text-[#5F5A5B] text-sm">{{ $d }}</p>
                    </article>
                    @endforeach
                </div>
                <div class="mt-5 px-4.5 py-4 rounded-2xl bg-primary/6 border-l-4 border-primary text-[#62312d]"><strong>{{ __('El objetivo del proceso:') }}</strong> {{ __('que el proyecto no termine en una fotografía del día del inventario, sino en una base que pueda mantenerse y actualizarse.') }}</div>
            </div>
        </div>
    </section>

    <!-- Alcance adaptable -->
    <section class="py-7">
        <div class="container-2026">
            <div class="mb-4.5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Alcance adaptable') }}</div>
                <h2 class="{{ $h2 }}">{{ __('No todas las empresas necesitan lo mismo.') }}</h2>
                <p class="{{ $desc }}">{{ __('El diagnóstico inicial define qué componentes son necesarios y cuáles dependen del tipo de activo, del objetivo del proyecto o del sistema de control que la empresa quiera mantener.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                @foreach ([
                    [__('Base del proyecto'), 'bg-primary/8 text-primary', __('Orden físico, documental y contable'), [
                        __('Inventario físico y registro de información.'),
                        __('Etiquetado patrimonial con códigos QR.'),
                        __('Revisión de respaldo disponible.'),
                        __('Comparación con registros contables.'),
                        __('Base maestra e informe de hallazgos.'),
                    ]],
                    [__('Cuando corresponde'), 'bg-accent/12 text-[#17606d]', __('Valoración, digitalización y seguimiento'), [
                        __('Revalúo técnico con apoyo de especialistas según el activo.'),
                        __('Propuesta de ajuste contable dentro del alcance acordado.'),
                        __('Implementación opcional en SharePoint.'),
                        __('Mantenimiento posterior si el cliente lo requiere.'),
                        __('Revisión anual sugerida para mantener la base vigente.'),
                    ]],
                ] as $k => [$label, $kc, $title, $items])
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <div class="{{ $kicker }} {{ $kc }}">{{ $label }}</div>
                    <h3 class="{{ $h3 }}">{{ $title }}</h3>
                    <div class="grid gap-2.5 mt-3">
                        @foreach ($items as $item)
                        <div class="grid grid-cols-[22px_1fr] gap-2.5 text-sm text-[#474142]"><i class="not-italic text-accent font-extrabold">✓</i><div>{{ $item }}</div></div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modelo digital -->
    <section id="digital" class="py-7 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-4.5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Modelo digital') }}</div>
                <h2 class="{{ $h2 }}">{{ __('La herramienta debe ayudar a encontrar, controlar y reconstruir la información.') }}</h2>
                <p class="{{ $desc }}">{{ __('La base digital organiza el activo y su evidencia. SharePoint puede incorporarse como complemento opcional, especialmente cuando la empresa ya trabaja con Microsoft 365.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-[1.05fr_.95fr] gap-4.5">
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-right">
                    <h3 class="text-[22px] font-bold leading-normal tracking-[-0.02em] mb-2">{{ __('Qué organiza la base de activos') }}</h3>
                    <table class="w-full border-collapse text-sm">
                        <thead>
                            <tr>
                                <th class="text-left px-3 py-3.5 text-xs uppercase tracking-[.12em] text-primary border-b border-[#E6E1DE]">{{ __('Componente') }}</th>
                                <th class="text-left px-3 py-3.5 text-xs uppercase tracking-[.12em] text-primary border-b border-[#E6E1DE]">{{ __('Uso práctico') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ([
                                [__('Código / QR'),             __('Identifica de forma consistente cada bien relevado.')],
                                [__('Ubicación y responsable'), __('Permite saber dónde está el activo y quién lo utiliza o custodia.')],
                                [__('Estado y evidencia'),      __('Conserva fotografías y observaciones del relevamiento.')],
                                [__('Documentación'),           __('Relaciona los respaldos disponibles con el activo correspondiente.')],
                                [__('Información contable'),    __('Facilita el cruce con registros y la identificación de diferencias.')],
                                [__('Valoración, si aplica'),   __('Incorpora los resultados del análisis técnico definido en el alcance.')],
                            ] as [$c, $u])
                            <tr>
                                <td class="align-top px-3 py-3.5 font-bold w-[30%] {{ $loop->first ? '' : 'border-t border-[#E6E1DE]' }}">{{ $c }}</td>
                                <td class="align-top px-3 py-3.5 {{ $loop->first ? '' : 'border-t border-[#E6E1DE]' }}">{{ $u }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4.5 px-4.5 py-4 rounded-2xl bg-accent/10 border-l-4 border-accent text-[#28525A]"><strong>{{ __('SharePoint no es obligatorio.') }}</strong> {{ __('Es una opción para empresas que quieren centralizar la base, documentos y evidencias dentro de Microsoft 365.') }}</div>
                </article>
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="{{ $kicker }} bg-accent/12 text-[#17606d]">{{ __('Control posterior') }}</div>
                    <h3 class="{{ $h3 }}">{{ __('La base debe poder seguir viva.') }}</h3>
                    <p class="text-[#5F5A5B] mb-4">{{ __('Si la empresa lo requiere, el control puede continuar después del proyecto inicial mediante actualizaciones de altas, bajas, traslados, responsables, documentación o fotografías.') }}</p>
                    <div class="grid gap-2.5 mt-4">
                        @foreach ([
                            [__('Altas y bajas'),             __('Incorporar cambios en el universo de activos.')],
                            [__('Traslados y responsables'),  __('Mantener visible dónde está cada bien y a qué área pertenece.')],
                            [__('Nuevos respaldos'),          __('Actualizar documentación y evidencia vinculada.')],
                            [__('Revisión periódica'),        __('Se sugiere una revisión anual, ajustable al movimiento de activos de la empresa.')],
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

    <!-- Qué recibe el cliente -->
    <section id="entregables" class="py-7 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-4.5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué recibe el cliente') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Entregables que dejan evidencia y una base para seguir gestionando.') }}</h2>
                <p class="{{ $desc }}">{{ __('Los entregables finales dependen del alcance contratado, de la información disponible y del tipo de activos incluidos.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-[1.1fr_.9fr] gap-4.5">
                @foreach ([
                    [__('Base principal del proyecto'), [
                        [__('Inventario y base maestra'),      __('Relación estructurada de los activos incluidos en el alcance.')],
                        [__('Etiquetas patrimoniales / QR'),   __('Identificación física de los bienes relevados.')],
                        [__('Registro fotográfico'),           __('Evidencia visual vinculada al levantamiento físico.')],
                        [__('Informe de hallazgos'),           __('Diferencias, observaciones y puntos que requieren decisión o regularización.')],
                    ]],
                    [__('Según el alcance acordado'), [
                        [__('Revalúo técnico'),                 __('Resultados y respaldo técnico cuando el proyecto incorpora valoración.')],
                        [__('Propuesta de ajuste contable'),    __('Preparada con base en la información relevada y el análisis realizado.')],
                        [__('Base digital / SharePoint'),       __('Estructura de control y repositorio documental cuando se contrata este complemento.')],
                        [__('Recomendaciones de mantenimiento'),__('Lineamientos para conservar la información vigente después del proyecto.')],
                    ]],
                ] as $k => [$title, $items])
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <h3 class="{{ $h3 }}">{{ $title }}</h3>
                    <div class="grid gap-2.5 mt-4">
                        @foreach ($items as $i => [$b, $d])
                        <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ $dots[$i] }}"></span>
                            <div><b class="block mb-0.5 text-sm">{{ $b }}</b><span>{{ $d }}</span></div>
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
                <h2 class="{{ $h2 }}">{{ __('El proyecto funciona mejor cuando campo, documentos y decisiones tienen responsables.') }}</h2>
                <p class="{{ $desc }}">{{ __('OTIUM ejecuta y documenta el trabajo acordado; la empresa facilita accesos, registros e interlocutores para validar la información.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                @foreach ([
                    ['OTIUM', 'bg-primary/8 text-primary', __('Ejecutamos el proceso definido'), [
                        [__('Relevamos e identificamos'),     __('Ejecutamos inventario, registro y etiquetado de los activos incluidos.')],
                        [__('Revisamos y conciliamos'),       __('Cruzamos documentos y registros contables con la evidencia física.')],
                        [__('Coordinamos criterio técnico'),  __('Incorporamos especialistas externos cuando la naturaleza del activo lo exige.')],
                        [__('Documentamos y entregamos'),     __('Consolidamos la base, hallazgos y entregables previstos.')],
                    ]],
                    [__('Su empresa'), 'bg-accent/12 text-[#17606d]', __('Facilita la información y validaciones necesarias'), [
                        [__('Facilita acceso a los activos'),  __('Coordina instalaciones, horarios, áreas y responsables internos.')],
                        [__('Entrega registros y documentos'), __('Proporciona la información disponible para realizar los cruces y análisis.')],
                        [__('Designa interlocutores'),         __('Personas que puedan aclarar ubicación, uso, antecedentes o movimientos de los bienes.')],
                        [__('Valida decisiones'),              __('Revisa hallazgos y define las acciones internas que correspondan.')],
                    ]],
                ] as $k => [$who, $kc, $title, $items])
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <div class="{{ $kicker }} {{ $kc }}">{{ $who }}</div>
                    <h3 class="{{ $h3 }}">{{ $title }}</h3>
                    <div class="grid gap-2.5 mt-4">
                        @foreach ($items as $i => [$b, $d])
                        <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ $dots[$i] }}"></span>
                            <div><b class="block mb-0.5 text-sm">{{ $b }}</b><span>{{ $d }}</span></div>
                        </div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Tratamiento especial -->
    <section id="alcance" class="py-7 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $card }} p-5.5 md:p-6 bg-linear-to-b! from-white/95 to-[#F7F4F2]/98" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 mb-4 px-3 py-2 rounded-full bg-primary/10 text-primary text-xs font-extrabold tracking-[.12em] uppercase">{{ __('Cuando el caso requiere un tratamiento especial') }}</div>
                <h3 class="{{ $h3 }}">{{ __('Algunos trabajos necesitan especialistas o un alcance separado.') }}</h3>
                <p class="text-[#5F5A5B] max-w-[960px] mb-4">{{ __('Peritajes judiciales, tasaciones con efectos legales o regulatorios específicos, certificaciones técnicas especializadas, regularización legal de propiedad, trámites ante entidades públicas, reparaciones, mantenimiento físico o desarrollo de sistemas a medida no forman parte automática de este servicio.') }}</p>
                <div class="mt-4 px-4.5 py-4 rounded-2xl bg-primary/6 border-l-4 border-primary text-[#6B2E2A]"><strong>{{ __('Valoración especializada:') }}</strong> {{ __('cuando el tipo de activo lo requiere —por ejemplo maquinaria industrial, surtidores, inmuebles, vehículos, instalaciones o equipos especializados— OTIUM coordina la participación de peritos o técnicos del área. Su alcance y costo se definen según el caso.') }}</div>
            </div>
        </div>
    </section>

    <!-- Qué cambia -->
    <section class="py-7">
        <div class="container-2026">
            <div class="mb-4.5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué cambia') }}</div>
                <h2 class="{{ $h2 }}">{{ __('De un inventario disperso a una base patrimonial verificable.') }}</h2>
                <p class="{{ $desc }}">{{ __('El valor no está solo en contar activos. Está en poder relacionar el bien físico con su evidencia, su registro y la información necesaria para administrarlo.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                @foreach ([
                    [__('Sin una base estructurada'), 'bg-[#5F5A5B]/10 text-[#5F5A5B]', $grey, [
                        [__('Inventario difícil de validar'), __('La información física y contable puede no coincidir.')],
                        [__('Respaldo disperso'),             __('Encontrar documentos o antecedentes toma tiempo.')],
                        [__('Responsabilidad poco visible'),  __('No siempre está claro dónde está el activo o quién lo utiliza.')],
                        [__('Control reactivo'),              __('Las diferencias aparecen cuando ya se necesita la información.')],
                    ]],
                    [__('Con OTIUM'), 'bg-accent/12 text-[#17606d]', $dots, [
                        [__('Bienes identificados'),   __('Cada activo incluido cuenta con un registro y código de referencia.')],
                        [__('Información conciliada'), __('Las diferencias entre campo, documentos y contabilidad quedan visibles.')],
                        [__('Evidencia organizada'),   __('Fotografías y respaldos quedan relacionados con una base común.')],
                        [__('Base para decidir'),      __('La empresa cuenta con información más clara para altas, bajas, ajustes, mantenimiento o reposición.')],
                    ]],
                ] as $k => [$label, $kc, $colors, $items])
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <div class="{{ $kicker }} {{ $kc }}">{{ $label }}</div>
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
    <section class="pt-10 pb-14">
        <div class="container-2026">
            <div class="{{ $card }} relative overflow-hidden p-5.5 md:p-8.5" data-aos="fade-up">
                <span class="absolute -right-10 -bottom-10 w-55 h-55 rounded-full bg-[radial-gradient(circle,rgba(84,186,199,.16),rgba(84,186,199,0))] pointer-events-none"></span>
                <div class="relative grid grid-cols-1 lg:grid-cols-[1.1fr_.9fr] gap-6 items-center">
                    <div>
                        <div class="{{ $tag }}">{{ __('Cómo empezamos') }}</div>
                        <h2 class="text-[clamp(28px,3.5vw,44px)] font-bold leading-normal tracking-[-0.02em] mb-2.5">{{ __('Entendamos primero cómo están hoy sus activos fijos.') }}</h2>
                        <p class="text-[#494344] text-[17px] max-w-[700px] mb-4">{{ __('Antes de cotizar el proyecto, revisamos el universo de activos, sus ubicaciones, el nivel de información disponible y el objetivo que la empresa quiere alcanzar. Con esa base definimos un alcance técnico y operativo claro.') }}</p>
                        <div class="flex flex-wrap gap-3.5 mt-5">
                            <a href="{{ $waService }}" target="_blank" rel="noopener" class="{{ $btn }} bg-[#1F1617] text-white hover:bg-[#0d090a]">{{ __('Solicitar una evaluación inicial') }}</a>
                        </div>
                    </div>
                    <div class="p-5.5 rounded-[20px] bg-[#F7F4F2] border border-[#E6E1DE]">
                        <h3 class="text-lg font-bold tracking-[-0.02em] mb-2.5">{{ __('Para definir el alcance revisamos') }}</h3>
                        <div class="grid gap-2.5 mt-2">
                            @foreach ([
                                ['bg-primary',      __('Tipo, cantidad aproximada y ubicación de los activos.')],
                                ['bg-secondary',    __('Inventarios, registros contables y documentación disponible.')],
                                ['bg-brand-light',  __('Objetivo: ordenamiento, control, revalúo o combinación de necesidades.')],
                                ['bg-accent',       __('Necesidad de peritos o especialistas para activos específicos.')],
                                ['bg-[#1F1617]',    __('Modelo digital esperado y si SharePoint resulta conveniente.')],
                            ] as [$color, $item])
                            <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                                <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ $color }}"></span>
                                <div>{{ $item }}</div>
                            </div>
                            @endforeach
                        </div>
                        <p class="mt-4.5 text-[#5F5A5B] text-sm"><strong>{{ __('A partir de esta revisión') }}</strong> {{ __('definimos la metodología, los responsables, los entregables y la forma de trabajo del proyecto.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
</x-layout>
