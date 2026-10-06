<x-layout
    title="Constitución y Formalización de Empresas en Bolivia | Otium"
    description="Constitución de empresas en Bolivia: SEPREC, NIT, facturación electrónica y documentación organizada desde el primer día. Acompañamiento legal, contable y tributario."
>
    @php
        $wa = env('WHATSAPP_NUMBER', '59170654104');
        $waService = 'https://wa.me/' . $wa . '?text=' . rawurlencode(__('Hola, quiero información sobre Constitución de Empresas.'));

        // Estilos repetidos del diseño "Constitución y Formalización 2026"
        $card   = 'bg-white/94 border border-[#1F1617]/8 rounded-3xl shadow-[0_18px_40px_rgba(31,22,23,.08)]';
        $tag    = 'text-xs uppercase tracking-[.14em] text-primary font-bold mb-2';
        $h2     = 'text-[clamp(28px,3.4vw,42px)] font-bold leading-[1.55] tracking-[-0.02em] mb-1.5';
        $desc   = 'max-w-[760px] text-[#4E4849] text-[17px] mb-4';
        $kicker = 'inline-flex items-center gap-2 mb-4.5 px-3 py-2 rounded-full text-xs uppercase tracking-[.12em] font-bold';
        $btn    = 'inline-flex items-center gap-2.5 px-4.5 py-3.5 rounded-[14px] font-bold text-[15px] transition-all hover:-translate-y-px';
        $note   = 'mt-4 px-4.5 py-4 rounded-2xl border-l-4';
    @endphp

    <div class="text-[#1F1617] leading-[1.55]" style="background: radial-gradient(circle at top right, rgba(84,186,199,.12), transparent 22%), radial-gradient(circle at top left, rgba(180,46,37,.06), transparent 24%), linear-gradient(180deg, #fbf9f8 0%, #f7f4f2 100%);">

    <!-- Hero -->
    <section class="pt-32 pb-7 md:pt-36">
        <div class="container-2026 grid grid-cols-1 lg:grid-cols-[1.18fr_.82fr] gap-7 items-stretch">
            <article class="{{ $card }} relative overflow-hidden p-5.5 md:p-9" data-aos="fade-up">
                <div class="{{ $kicker }} bg-primary/8 text-primary">OTIUM | {{ __('Constitución y Formalización') }}</div>
                <h1 class="text-[clamp(36px,5vw,60px)] font-bold leading-[1.02] tracking-[-0.02em] max-w-[940px] mb-4.5">{{ __('Constituir una empresa no debería ser solo abrir un NIT.') }}</h1>
                <p class="text-lg md:text-xl leading-[1.48] text-[#443D3E] max-w-[800px] mb-4">{{ __('Acompañamos el nacimiento formal de su empresa en Bolivia: coordinamos la parte legal con un estudio jurídico asociado y gestionamos registro comercial, NIT, configuración tributaria inicial, facturación y organización documental para empezar con una base clara.') }}</p>
                <div class="flex flex-wrap gap-3.5 mt-6.5">
                    <a href="#proceso" class="{{ $btn }} bg-[#1F1617] text-white hover:bg-[#0d090a]">{{ __('Ver cómo trabajamos') }}</a>
                    <a href="#entregables" class="{{ $btn }} bg-accent/12 text-[#175864] hover:bg-accent/18">{{ __('Ver qué recibe') }}</a>
                </div>
                <div class="grid grid-cols-4 w-[min(380px,100%)] h-3.5 mt-6 rounded-full overflow-hidden" aria-hidden="true">
                    <span class="bg-primary"></span><span class="bg-secondary"></span><span class="bg-brand-light"></span><span class="bg-accent"></span>
                </div>
            </article>

            <aside class="{{ $card }} flex flex-col gap-4.5 p-5.5 md:p-7" data-aos="fade-left" data-aos-delay="100">
                <div>
                    <div class="{{ $tag }}">{{ __('Punto de partida') }}</div>
                    <h2 class="text-[25px] font-bold leading-[1.55] tracking-[-0.02em] mb-2">{{ __('De proyecto a empresa lista para iniciar operaciones.') }}</h2>
                </div>
                @foreach ([
                    [true,  __('Base del servicio'),  __('Coordinación societaria + SEPREC + NIT + configuración tributaria + facturación inicial + repositorio documental.')],
                    [false, __('Plazo referencial'),  __('Alrededor de 20 días, sujeto al tipo de empresa, documentación, firmas, entidades y trámites aplicables.')],
                    [false, __('Casos especiales'),   __('Empresas extranjeras, permisos, banca, laboral, Aduana, RUEX y otras gestiones se evalúan y cotizan según el caso.')],
                ] as [$accent, $t, $d])
                <div class="px-4.5 py-4 rounded-[18px] border {{ $accent ? 'bg-accent/10 border-accent/26' : 'bg-[#F7F4F2] border-[#E6E1DE]' }}">
                    <strong class="block text-[15px] mb-1.25">{{ $t }}</strong>
                    <span class="block text-[#5F5A5B] text-sm">{{ $d }}</span>
                </div>
                @endforeach
                <p class="text-[#5F5A5B] text-[13px]">{{ __('El objetivo no es entregar una carpeta de trámites: es dejar una base formal, tributaria y documental para comenzar a operar.') }}</p>
            </aside>
        </div>
    </section>

    <!-- Qué problema resolvemos -->
    <section id="problema" class="py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué problema resolvemos') }}</div>
                <h2 class="{{ $h2 }}">{{ __('El desorden de origen se arrastra después.') }}</h2>
                <p class="{{ $desc }}">{{ __('Cuando cada trámite se gestiona por separado, la empresa puede quedar formalmente creada pero sin una lectura clara de sus obligaciones, documentos, permisos y próximos pasos.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ([
                    [__('Trámites aislados'),          __('Legal, registro, NIT y facturación avanzan sin una ruta única ni coordinación del conjunto.')],
                    [__('Obligaciones poco claras'),   __('Se abre el NIT, pero el cliente no siempre comprende qué obligaciones nacen a partir de ese momento.')],
                    [__('Documentos dispersos'),       __('Minutas, poderes, registros, certificados y accesos terminan repartidos entre correos, chats y carpetas personales.')],
                    [__('Permisos descubiertos tarde'),__('Licencias, registros laborales, Aduana, RUEX u otros requisitos aparecen cuando ya existe urgencia por operar.')],
                ] as $i => [$t, $d])
                <article class="p-5.5 bg-white border border-[#E6E1DE] rounded-[18px]" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}">
                    <div class="w-11 h-11 grid place-items-center mb-3.5 rounded-[14px] font-extrabold {{ $i % 2 === 0 ? 'bg-primary/10 text-primary' : 'bg-accent/14 text-[#17606d]' }}">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3 class="text-xl font-bold tracking-[-0.02em] mb-2">{{ $t }}</h3>
                    <p class="text-[#5F5A5B]">{{ $d }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Qué hacemos -->
    <section id="hacemos" class="py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué hacemos por usted') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Un solo proceso para ordenar el inicio de la empresa.') }}</h2>
                <p class="{{ $desc }}">{{ __('Integramos los componentes principales de la constitución y formalización, delimitando desde el inicio qué forma parte del servicio base y qué requiere tratamiento adicional.') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4.5">
                @foreach ([
                    [__('Relevamos el caso'),          __('Actividad económica, socios, estructura esperada, urgencias, documentación disponible y necesidades iniciales.')],
                    [__('Coordinamos lo societario'),  __('Trabajamos con un estudio jurídico asociado para minuta, escritura, poderes y demás documentos societarios aplicables.')],
                    [__('Gestionamos SEPREC'),         __('Realizamos la inscripción comercial correspondiente al tipo de estructura definida para el caso.')],
                    [__('Abrimos el NIT'),             __('Gestionamos el alta ante Impuestos Nacionales y la configuración tributaria inicial de la empresa.')],
                    [__('Preparamos facturación'),     __('Realizamos el set up inicial según el tipo de facturación asignado y los requerimientos aplicables.')],
                    [__('Organizamos documentos'),     __('Centralizamos la documentación principal en un repositorio digital básico para que pueda encontrarse y reconstruirse.')],
                ] as $i => [$t, $d])
                <article class="p-5.5 bg-white/94 border border-[#1F1617]/8 rounded-[20px] shadow-[0_18px_40px_rgba(31,22,23,.08)]" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 75 }}">
                    <div class="{{ $kicker }} bg-primary/8 text-primary">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3 class="text-xl font-bold tracking-[-0.02em] mb-2">{{ $t }}</h3>
                    <p class="text-[#5F5A5B]">{{ $d }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- El proceso de trabajo -->
    <section id="proceso" class="py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $card }} p-5.5 md:p-7.5" data-aos="fade-up">
                <div class="flex flex-col md:flex-row justify-between gap-5.5 items-start mb-5.5">
                    <div>
                        <div class="{{ $tag }}">{{ __('El proceso de trabajo') }}</div>
                        <h2 class="text-2xl font-bold leading-[1.55] tracking-[-0.02em] mb-2">{{ __('De la definición del caso a una base lista para operar.') }}</h2>
                    </div>
                    <p class="max-w-[760px] text-[#5F5A5B]">{{ __('Este flujo es el centro del servicio: muestra cómo conectamos la decisión societaria con registro, tributación, facturación y documentación, sin presentar cada paso como una gestión aislada.') }}</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-3.5">
                    @foreach ([
                        [__('Entender el proyecto'), __('Revisamos actividad, socios, ubicación, estructura prevista y fecha de inicio.')],
                        [__('Definir la ruta'),      __('Identificamos estructura, documentos principales y gestiones complementarias posibles.')],
                        [__('Constitución legal'),   __('Coordinamos con el estudio jurídico asociado la documentación societaria aplicable.')],
                        [__('Registro y NIT'),       __('Gestionamos SEPREC, apertura tributaria y configuración inicial.')],
                        [__('Facturación inicial'),  __('Configuramos el punto de partida según la modalidad de facturación asignada.')],
                        [__('Entrega organizada'),   __('Centralizamos documentos y dejamos visibles obligaciones y próximos pasos.')],
                    ] as $i => [$t, $d])
                    <article class="relative p-5 rounded-[20px] bg-white border border-[#E6E1DE] md:min-h-51.25" data-aos="fade-up" data-aos-delay="{{ $i * 60 }}">
                        @unless ($loop->last)
                        {{-- Conector: en tablet (3 por fila) se oculta en el 3.º de cada fila --}}
                        <span class="hidden {{ $i % 3 === 2 ? '' : 'md:block' }} lg:block absolute top-8.5 -right-3.5 w-3.5 h-0.5 bg-linear-to-r from-primary/50 to-accent/50"></span>
                        @endunless
                        <div class="w-10 h-10 grid place-items-center mb-3.75 rounded-[13px] font-extrabold {{ $i % 2 === 0 ? 'bg-primary/10 text-primary' : 'bg-accent/14 text-[#17606d]' }}">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                        <h3 class="text-[17px] font-bold tracking-[-0.02em] mb-2">{{ $t }}</h3>
                        <p class="text-[#5F5A5B] text-sm">{{ $d }}</p>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Estructuras -->
    <section class="py-7.5">
        <div class="container-2026">
            <div class="mb-5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Estructuras que podemos acompañar') }}</div>
                <h2 class="{{ $h2 }}">{{ __('El tipo de empresa se evalúa antes de iniciar el trámite.') }}</h2>
                <p class="{{ $desc }}">{{ __('El alcance puede aplicarse a distintas formas de organización empresarial. Cada caso se revisa según actividad, socios, documentación, requisitos y normativa aplicable.') }}</p>
            </div>
            <details class="group px-5 bg-white border border-[#E6E1DE] rounded-[18px]" data-aos="fade-up">
                <summary class="flex justify-between gap-3.5 py-4.5 font-bold cursor-pointer list-none [&::-webkit-details-marker]:hidden">
                    {{ __('Ver estructuras y tipos de empresa') }}
                    <span class="text-primary text-[22px] leading-none group-open:hidden" aria-hidden="true">+</span>
                    <span class="text-primary text-[22px] leading-none hidden group-open:inline" aria-hidden="true">–</span>
                </summary>
                <div class="pt-4 pb-5 border-t border-[#E6E1DE] text-[#5F5A5B]">
                    <div class="flex flex-wrap gap-2.25">
                        @foreach ([
                            __('Comerciante individual / Empresa unipersonal'),
                            __('Sociedad de Responsabilidad Limitada — S.R.L.'),
                            __('Sociedad Anónima — S.A.'),
                            __('Sociedad Colectiva'),
                            __('Sociedad en Comandita Simple'),
                            __('Sociedad en Comandita por Acciones'),
                            __('Sociedad de Economía Mixta — S.A.M.'),
                            __('Entidad Financiera de Vivienda, cuando corresponda'),
                            __('Empresa Estatal'),
                            __('Empresa Estatal Mixta'),
                            __('Empresa Mixta'),
                            __('Empresa Estatal Intergubernamental'),
                            __('Sociedad constituida en el extranjero'),
                        ] as $type)
                        <span class="px-2.75 py-2 rounded-full bg-[#F7F4F2] border border-[#E6E1DE] text-[13px] font-semibold text-[#514b4c]">{{ $type }}</span>
                        @endforeach
                    </div>
                    <p class="mt-4">{{ __('En estructuras reguladas, estatales o extranjeras, el alcance se define luego de revisar requisitos específicos y documentación disponible.') }}</p>
                </div>
            </details>
        </div>
    </section>

    <!-- Qué recibe el cliente -->
    <section id="entregables" class="py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué recibe el cliente') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Documentos y registros que sirven para operar, no solo para archivar.') }}</h2>
                <p class="{{ $desc }}">{{ __('Los entregables dependen del tipo de empresa y del alcance contratado, pero la lógica es siempre la misma: registro, base tributaria, facturación y evidencia organizada.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                @foreach ([
                    [__('Entregables principales'), 'bg-primary/8 text-primary', [
                        [__('Documentación societaria'),              __('Preparada o revisada mediante el estudio jurídico asociado, según corresponda.')],
                        [__('Inscripción en SEPREC'),                 __('Registro comercial de la empresa conforme a la estructura definida.')],
                        [__('NIT y configuración tributaria inicial'),__('Alta ante Impuestos Nacionales y base de cumplimiento inicial.')],
                        [__('Set up de facturación'),                 __('Configuración inicial sujeta al tipo de facturación asignado.')],
                    ]],
                    [__('Base para continuar'), 'bg-accent/12 text-[#17606d]', [
                        [__('Repositorio documental básico'),         __('Documentos principales centralizados desde el inicio.')],
                        [__('Obligaciones iniciales identificadas'),  __('Lectura práctica de lo que la empresa debe considerar al comenzar actividades.')],
                        [__('Próximos pasos visibles'),               __('Permisos, registros o gestiones adicionales que podrían aplicar.')],
                        [__('Continuidad posible con OTIUM'),         __('Contabilidad, gestión tributaria, laboral o gestión documental se contratan por separado.')],
                    ]],
                ] as $k => [$label, $kc, $items])
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <div class="{{ $kicker }} {{ $kc }}">{{ $label }}</div>
                    <div class="grid gap-3 mt-4">
                        @foreach ($items as $i => [$b, $d])
                        <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ ['bg-primary', 'bg-secondary', 'bg-accent', 'bg-[#1F1617]'][$i] }}"></span>
                            <div><b class="block mb-0.5 text-sm">{{ $b }}</b><span class="text-[#5F5A5B] text-sm">{{ $d }}</span></div>
                        </div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modelo documental básico -->
    <section class="py-7.5">
        <div class="container-2026">
            <div class="{{ $card }} p-5.5 md:p-7" data-aos="fade-up">
                <div class="grid grid-cols-1 lg:grid-cols-[.86fr_1.14fr] gap-6 items-start">
                    <div>
                        <div class="{{ $tag }}">{{ __('Modelo documental básico') }}</div>
                        <h2 class="text-2xl font-bold leading-[1.55] tracking-[-0.02em] mb-2">{{ __('La empresa empieza con sus documentos en un solo lugar.') }}</h2>
                        <p class="text-[#5F5A5B] mb-4">{{ __('El repositorio no reemplaza una implementación documental avanzada. Su función es evitar que la empresa nazca con documentos societarios, tributarios y accesos repartidos en múltiples lugares.') }}</p>
                        <div class="{{ $note }} bg-accent/10 border-accent text-[#28525A]"><strong>{{ __('Enfoque digital:') }}</strong> {{ __('cuando el entorno del cliente lo permite, podemos utilizar Microsoft 365 / SharePoint como soporte del repositorio básico.') }}</div>
                    </div>
                    <div class="grid gap-2.5" aria-label="{{ __('Contenido del repositorio básico') }}">
                        @foreach ([
                            ['bg-accent',                                 __('Documentos legales y societarios')],
                            ['bg-primary',                                __('NIT y documentos tributarios')],
                            ['bg-secondary',                              __('SEPREC y registros principales')],
                            ['bg-brand-light border border-[#cfae9c]',    __('Poderes, certificados y documentación de facturación')],
                            ['bg-[#1F1617]',                              __('Credenciales y comunicaciones relevantes')],
                        ] as [$color, $folder])
                        <div class="grid grid-cols-[14px_1fr] gap-3 items-center px-3.5 py-3.25 rounded-[14px] bg-[#F7F4F2] border border-[#E6E1DE] text-sm font-semibold">
                            <i class="block w-3 h-3 rounded {{ $color }}"></i><span>{{ $folder }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Responsabilidades -->
    <section id="responsabilidades" class="py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="mb-5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Responsabilidades claras') }}</div>
                <h2 class="{{ $h2 }}">{{ __('Coordinamos el proceso; el cliente aporta decisiones, documentos y firmas.') }}</h2>
                <p class="{{ $desc }}">{{ __('La claridad sobre los roles evita retrabajos y permite que cada etapa avance con la información que realmente necesita.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                @foreach ([
                    ['OTIUM', 'bg-primary/8 text-primary', [
                        [__('Coordina'), __('Articula el proceso societario con el estudio jurídico asociado y los registros principales.')],
                        [__('Gestiona'), __('SEPREC, NIT, configuración tributaria y set up inicial de facturación dentro del alcance.')],
                        [__('Organiza'), __('Centraliza los documentos principales y deja visibles los próximos pasos.')],
                    ]],
                    [__('Su empresa'), 'bg-accent/12 text-[#17606d]', [
                        [__('Entrega información y documentos'), __('Datos de socios, actividad, domicilio, representantes y demás antecedentes necesarios.')],
                        [__('Define y valida decisiones'),       __('Estructura, socios, representantes, actividad y otros aspectos que corresponden al cliente.')],
                        [__('Firma y atiende requerimientos'),   __('Proporciona firmas, poderes o información adicional cuando la entidad o el caso lo requieran.')],
                    ]],
                ] as $k => [$who, $kc, $items])
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <div class="{{ $kicker }} {{ $kc }}">{{ $who }}</div>
                    <div class="grid gap-3 mt-4">
                        @foreach ($items as $i => [$b, $d])
                        <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ ['bg-primary', 'bg-secondary', 'bg-accent'][$i] }}"></span>
                            <div><b class="block mb-0.5 text-sm">{{ $b }}</b><span class="text-[#5F5A5B] text-sm">{{ $d }}</span></div>
                        </div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Tratamiento especial -->
    <section id="alcance" class="py-7.5 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $card }} p-5.5 md:p-6.5 bg-linear-to-b! from-white/96 to-[#F7F4F2]/99" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 mb-4 px-3 py-2 rounded-full bg-primary/10 text-primary text-xs font-extrabold tracking-[.12em] uppercase">{{ __('Cuando el caso requiere un tratamiento especial') }}</div>
                <h3 class="text-2xl font-bold tracking-[-0.02em] mb-2">{{ __('Algunas gestiones se evalúan y cotizan separadamente.') }}</h3>
                <p class="text-[#5F5A5B] max-w-[930px] mb-4">{{ __('Licencia de funcionamiento, apertura de cuenta bancaria empresarial, inscripción laboral, Caja de Salud, Gestora, Ministerio de Trabajo, permisos de Alcaldía o Gobernación, trámites ante Aduana, RUEX, permisos sectoriales, importación o exportación y otros registros no forman parte automática del servicio base.') }}</p>
                <div class="{{ $note }} bg-primary/6 border-primary text-[#6B2E2A]"><strong>{{ __('Empresas extranjeras:') }}</strong> {{ __('se evalúan caso por caso, especialmente cuando requieren apoderados, apostillas, legalizaciones, documentos emitidos en el exterior, apertura bancaria u otras condiciones particulares.') }}</div>
            </div>
        </div>
    </section>

    <!-- Qué cambia -->
    <section class="py-7.5">
        <div class="container-2026">
            <div class="mb-5" data-aos="fade-up">
                <div class="{{ $tag }}">{{ __('Qué cambia') }}</div>
                <h2 class="{{ $h2 }}">{{ __('De trámites dispersos a un inicio estructurado.') }}</h2>
                <p class="{{ $desc }}">{{ __('El resultado esperado no es “cero problemas”; es una empresa que comienza con mayor orden, trazabilidad documental y claridad sobre lo que debe hacer después.') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                @foreach ([
                    [__('Sin un proceso estructurado'), 'bg-[#5F5A5B]/10 text-[#5F5A5B]', ['bg-[#b6b6b7]', 'bg-[#b6b6b7]', 'bg-[#b6b6b7]', 'bg-[#b6b6b7]'], [
                        [__('Gestiones por separado'),          __('Cada trámite se resuelve sin una visión común del arranque.')],
                        [__('Documentación dispersa'),          __('Encontrar poderes, registros o accesos depende de personas y carpetas sueltas.')],
                        [__('Obligaciones descubiertas tarde'), __('Permisos o registros aparecen cuando la operación ya los necesita.')],
                        [__('Inicio reactivo'),                 __('La empresa responde a urgencias en lugar de seguir una ruta definida.')],
                    ]],
                    [__('Con OTIUM'), 'bg-accent/12 text-[#17606d]', ['bg-primary', 'bg-secondary', 'bg-accent', 'bg-[#1F1617]'], [
                        [__('Ruta coordinada'),         __('Societario, registro, tributación, facturación y documentos se conectan dentro del mismo proceso.')],
                        [__('Base documental'),         __('Los documentos principales quedan centralizados desde el inicio.')],
                        [__('Próximos pasos visibles'), __('Se identifican gestiones complementarias antes de convertirlas en una urgencia.')],
                        [__('Mejor continuidad'),       __('La empresa queda preparada para avanzar hacia contabilidad, impuestos, laboral, banca o permisos adicionales.')],
                    ]],
                ] as $k => [$label, $kc, $colors, $items])
                <article class="{{ $card }} p-5.5 md:p-6" data-aos="fade-up" data-aos-delay="{{ $k * 100 }}">
                    <div class="{{ $kicker }} {{ $kc }}">{{ $label }}</div>
                    <div class="grid gap-3 mt-4">
                        @foreach ($items as $i => [$b, $d])
                        <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                            <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ $colors[$i] }}"></span>
                            <div><b class="block mb-0.5 text-sm">{{ $b }}</b><span class="text-[#5F5A5B] text-sm">{{ $d }}</span></div>
                        </div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Cómo empezamos -->
    <section id="inicio" class="pt-10 pb-14 scroll-mt-24">
        <div class="container-2026">
            <div class="{{ $card }} relative overflow-hidden p-5.5 md:p-8.5" data-aos="fade-up">
                <span class="absolute -right-10 -bottom-10 w-55 h-55 rounded-full bg-[radial-gradient(circle,rgba(84,186,199,.16),rgba(84,186,199,0))] pointer-events-none"></span>
                <div class="relative grid grid-cols-1 lg:grid-cols-[1.1fr_.9fr] gap-6 items-center">
                    <div>
                        <div class="{{ $tag }}">{{ __('Cómo empezamos') }}</div>
                        <h2 class="text-[clamp(28px,3.5vw,44px)] font-bold leading-[1.55] tracking-[-0.02em] mb-2.5">{{ __('Definamos la ruta correcta antes de iniciar los trámites.') }}</h2>
                        <p class="text-[#494344] text-[17px] max-w-[700px] mb-4">{{ __('Primero entendemos qué quiere hacer la empresa, quiénes participan, dónde operará y qué necesita para comenzar. Con esa información definimos el alcance base, los documentos requeridos y las gestiones complementarias que podrían aplicar.') }}</p>
                        <div class="flex flex-wrap gap-3.5 mt-5">
                            <a href="{{ $waService }}" target="_blank" rel="noopener" class="{{ $btn }} bg-[#1F1617] text-white hover:bg-[#0d090a]">{{ __('Conversemos sobre su empresa') }}</a>
                        </div>
                    </div>
                    <aside class="p-5.5 rounded-[20px] bg-[#F7F4F2] border border-[#E6E1DE]">
                        <h3 class="text-lg font-bold tracking-[-0.02em] mb-2.5">{{ __('Para definir el alcance revisamos') }}</h3>
                        <div class="grid gap-3 mt-4">
                            @foreach ([
                                ['bg-primary',                              __('Actividad económica y forma en que operará el negocio.')],
                                ['bg-secondary',                            __('Socios, representantes y estructura prevista.')],
                                ['bg-brand-light border border-[#cfae9c]',  __('Documentación disponible y firmas necesarias.')],
                                ['bg-accent',                               __('Necesidad de facturación, banca, personal, importación o exportación.')],
                                ['bg-[#1F1617]',                            __('Fecha esperada de inicio y posibles permisos especiales.')],
                            ] as [$color, $item])
                            <div class="grid grid-cols-[10px_1fr] gap-3 items-start">
                                <span class="w-2.5 h-2.5 mt-1.75 rounded-full {{ $color }}"></span>
                                <div>{{ $item }}</div>
                            </div>
                            @endforeach
                        </div>
                        <p class="mt-4.5 text-[#5F5A5B] text-sm"><strong>{{ __('A partir de esta revisión') }}</strong> {{ __('definimos un alcance claro y una ruta de trabajo acorde con el caso.') }}</p>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    </div>
</x-layout>
