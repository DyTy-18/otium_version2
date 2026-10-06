<x-layout
    title="Gestión Tributaria Bolivia | IVA, IT, IUE | Otium"
    description="Gestión tributaria con revisión, criterio técnico y soporte continuo para empresas en Bolivia. IVA, IT, IUE, RCV y más."
>
    @php
        $wa = env('WHATSAPP_NUMBER', '59170654104');
        $waService = 'https://wa.me/' . $wa . '?text=' . rawurlencode(__('Hola, quiero información sobre Gestión Tributaria.'));
    @endphp

    <!-- Hero -->
    <section class="relative overflow-hidden pt-36 pb-16 md:pt-44 md:pb-20 bg-white">
        <div class="absolute -right-14 top-0 w-72 h-3 bg-secondary -skew-x-[28deg] pointer-events-none"></div>

        <div class="container-2026 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-[1.08fr_.92fr] gap-9 lg:gap-18 items-center">
                <div>
                    <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary" data-aos="fade-up">OTIUM | {{ __('Gestión Tributaria') }}</span>
                    <h1 class="text-[clamp(46px,6vw,78px)] font-extrabold leading-[1.08] tracking-[-0.02em] text-black max-w-[800px]" data-aos="fade-up" data-aos-delay="50">
                        {{ __('Declarar es una parte.') }} <span class="text-primary">{{ __('Gestionar bien') }}</span> {{ __('es revisar antes.') }}
                    </h1>
                    <p class="mt-6 text-muted text-[clamp(17px,1.45vw,20px)] max-w-[720px]" data-aos="fade-up" data-aos-delay="100">
                        {{ __('Acompañamos el cumplimiento tributario periódico con revisión de información, control de RCV, bancarización y sustento documental, atención de consultas puntuales y documentación del trabajo para que el proceso sea más claro, trazable y sostenible.') }}
                    </p>
                    <div class="flex flex-wrap gap-3 mt-8" data-aos="fade-up" data-aos-delay="150">
                        <x-svc.btn href="#proceso">{{ __('Ver cómo trabajamos') }} ↓</x-svc.btn>
                        <x-svc.btn href="#entregables" variant="secondary">{{ __('Ver entregables') }}</x-svc.btn>
                    </div>
                    <div class="flex gap-2.5 items-start mt-6.5 max-w-[720px] text-sm text-muted" data-aos="fade-up" data-aos-delay="200">
                        <span class="text-accent text-base leading-tight">●</span>
                        <span><b class="text-black">{{ __('Puede contratarse de forma independiente') }}</b> {{ __('o integrarse con Outsourcing Contable cuando el cliente necesita una estructura más completa entre registros, respaldo y cumplimiento.') }}</span>
                    </div>
                </div>

                <x-svc.hero-panel :title="__('El ciclo tributario, visible')" :status="__('Proceso recurrente')" :label="__('Resumen del ciclo tributario')" :steps="[
                    ['title' => __('Información'),   'desc' => __('Recibimos la base necesaria para el período.')],
                    ['title' => __('Revisión'),      'desc' => __('Revisamos RCV, soporte y puntos tributarios relevantes.')],
                    ['title' => __('Observaciones'), 'desc' => __('Hacemos visibles pendientes y temas que requieren atención.')],
                    ['title' => __('Declaración'),   'desc' => __('Preparamos y/o revisamos las obligaciones del período.')],
                    ['title' => __('Documentación'), 'desc' => __('Respaldamos y organizamos el trabajo realizado.')],
                    ['title' => __('Seguimiento'),   'desc' => __('Damos continuidad a consultas, pendientes y próximos vencimientos.')],
                ]" />
            </div>
        </div>
    </section>

    <!-- Qué problema resolvemos -->
    <section id="problema" class="py-16 md:py-22 bg-soft scroll-mt-24">
        <div class="container-2026">
            <x-svc.section-head :eyebrow="__('Qué problema resolvemos')" :title="__('Cumplir no debería significar trabajar siempre contra el reloj.')">
                {{ __('Muchas empresas presentan sus obligaciones, pero lo hacen con poco tiempo para revisar, documentación dispersa y escasa trazabilidad sobre lo observado o pendiente.') }}
            </x-svc.section-head>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4.5">
                <x-svc.card :n="1" :title="__('Revisión insuficiente')">{{ __('La información llega al cierre sin suficiente tiempo para validar RCV, respaldo o temas que pueden requerir corrección.') }}</x-svc.card>
                <x-svc.card :n="2" :title="__('Soporte disperso')">{{ __('Compras, ventas y documentos relacionados existen, pero no siempre están organizados de forma que sostengan el cumplimiento con claridad.') }}</x-svc.card>
                <x-svc.card :n="3" :title="__('Pendientes invisibles')">{{ __('Las observaciones aparecen, se resuelven sobre la marcha y luego vuelven a repetirse porque no existe seguimiento suficiente.') }}</x-svc.card>
                <x-svc.card :n="4" :title="__('Dependencia operativa')">{{ __('Cuando el proceso depende demasiado de una persona o de archivos sueltos, la continuidad y la reconstrucción de información se vuelven frágiles.') }}</x-svc.card>
            </div>
        </div>
    </section>

    <!-- Qué hacemos -->
    <section id="que-hacemos" class="py-16 md:py-22 bg-white scroll-mt-24">
        <div class="container-2026">
            <x-svc.section-head :eyebrow="__('Qué hacemos por su empresa')" :title="__('El servicio se construye alrededor de acciones concretas.')">
                {{ __('No vendemos “tecnología tributaria” ni frases abstractas. El valor está en revisar, cumplir, documentar y mantener visibles los temas que requieren atención.') }}
            </x-svc.section-head>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4.5">
                <x-svc.card :n="1" :title="__('Revisamos')">{{ __('Analizamos la información tributaria disponible antes del cumplimiento periódico.') }}</x-svc.card>
                <x-svc.card :n="2" :title="__('Controlamos')">{{ __('Revisamos RCV, operaciones bancarizables y sustento documental relacionado con lo que se va a declarar.') }}</x-svc.card>
                <x-svc.card :n="3" :title="__('Observamos')">{{ __('Identificamos pendientes, inconsistencias o temas que requieren aclaración, corrección o decisión del cliente.') }}</x-svc.card>
                <x-svc.card :n="4" :title="__('Preparamos')">{{ __('Preparamos y/o revisamos declaraciones periódicas según las obligaciones y alcance acordado.') }}</x-svc.card>
                <x-svc.card :n="5" :title="__('Respondemos')">{{ __('Atendemos consultas tributarias puntuales vinculadas a la operación normal del negocio.') }}</x-svc.card>
                <x-svc.card :n="6" :title="__('Reportamos')">{{ __('Comunicamos observaciones y resultados con la periodicidad definida para cada cliente.') }}</x-svc.card>
                <x-svc.card :n="7" :title="__('Documentamos')">{{ __('Respaldamos el trabajo y la información del servicio para mejorar trazabilidad y continuidad.') }}</x-svc.card>
                <x-svc.card :n="8" :title="__('Damos seguimiento')">{{ __('Mantenemos visibles vencimientos, temas abiertos y asuntos que requieren atención posterior.') }}</x-svc.card>
            </div>
        </div>
    </section>

    <!-- El proceso de trabajo -->
    <section id="proceso" class="py-16 md:py-22 bg-soft scroll-mt-24">
        <div class="container-2026">
            <x-svc.process
                :eyebrow="__('El proceso de trabajo')"
                :title="__('Un ciclo recurrente, no una tarea aislada.')"
                :intro="__('Cada período se recorre una secuencia de revisión y cumplimiento que permite detectar antes, documentar mejor y dar continuidad a lo que queda pendiente.')"
                :steps="[
                    ['title' => __('Información'),   'desc' => __('Recibimos registros y documentación relevante del período.')],
                    ['title' => __('Revisión'),      'desc' => __('Analizamos RCV, sustento documental y puntos tributarios clave.')],
                    ['title' => __('Observaciones'), 'desc' => __('Señalamos pendientes, dudas o temas que deben aclararse antes de continuar.')],
                    ['title' => __('Cumplimiento'),  'desc' => __('Preparamos y/o revisamos las declaraciones que correspondan al alcance.')],
                    ['title' => __('Evidencia'),     'desc' => __('Documentamos el trabajo realizado y organizamos su respaldo.')],
                    ['title' => __('Seguimiento'),   'desc' => __('Damos continuidad a observaciones, consultas y próximos vencimientos.')],
                ]"
            >
                <div class="flex flex-wrap gap-2 mt-5.5 pt-5.5 border-t border-line" aria-label="{{ __('Obligaciones habituales') }}">
                    @foreach ([__('Formulario 200 · IVA'), __('Formulario 210 · IVA Exportadores'), __('Formulario 400 · IT'), __('Formulario 500 · IUE'), __('Otras obligaciones según actividad y rubro')] as $pill)
                    <span class="px-3 py-2 bg-white border border-mid text-muted text-xs">{{ $pill }}</span>
                    @endforeach
                </div>
            </x-svc.process>
        </div>
    </section>

    <!-- Modelo digital / SharePoint -->
    <section id="digital" class="py-16 md:py-22 bg-white scroll-mt-24">
        <div class="container-2026">
            <x-svc.section-head :eyebrow="__('Modelo digital / SharePoint')" :title="__('La tecnología organiza el proceso; no reemplaza el criterio.')">
                {{ __('Utilizamos herramientas digitales para que la información sea más fácil de encontrar, revisar, documentar y reconstruir cuando sea necesario.') }}
            </x-svc.section-head>
            <x-svc.digital
                :title="__('Orden digital con propósito')"
                :copy="__('Microsoft 365, SharePoint, Excel estructurado y revisión asistida por IA pueden formar parte del servicio cuando aportan orden, trazabilidad y continuidad. La herramienta es soporte; el criterio tributario sigue siendo el centro.')"
                :label="__('Modelo digital de la gestión tributaria')"
                :nodes="[
                    ['label' => __('Entrada'),       'title' => __('Información'),                 'desc' => __('Registros, RCV, documentos y consultas del período.')],
                    ['label' => __('Trabajo OTIUM'), 'title' => __('Revisión + control'),          'desc' => __('Validaciones, observaciones, seguimiento y evidencia.')],
                    ['label' => __('Salida'),        'title' => __('Cumplimiento + trazabilidad'), 'desc' => __('Declaraciones, reportes, pendientes y respaldo organizado.')],
                ]" />
        </div>
    </section>

    <!-- Qué recibe el cliente -->
    <section id="entregables" class="py-16 md:py-22 bg-soft scroll-mt-24">
        <div class="container-2026">
            <x-svc.section-head :eyebrow="__('Qué recibe el cliente')" :title="__('Entregables que permiten ver qué se hizo y qué sigue pendiente.')">
                {{ __('La combinación exacta depende del alcance acordado y de la naturaleza de la operación del cliente.') }}
            </x-svc.section-head>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4.5">
                <x-svc.card :n="1" :title="__('Declaraciones')">{{ __('Obligaciones tributarias preparadas y/o revisadas según el alcance contratado.') }}</x-svc.card>
                <x-svc.card :n="2" :title="__('Observaciones')">{{ __('Hallazgos sobre RCV, bancarización, sustento documental y otros puntos relevantes.') }}</x-svc.card>
                <x-svc.card :n="3" :title="__('Reportes')">{{ __('Seguimiento mensual, trimestral, semestral o anual según la necesidad definida con el cliente.') }}</x-svc.card>
                <x-svc.card :n="4" :title="__('Respaldo digital')">{{ __('Documentación del trabajo y soporte organizado en la nube cuando corresponde al esquema acordado.') }}</x-svc.card>
            </div>
        </div>
    </section>

    <!-- Responsabilidades -->
    <section id="responsabilidades" class="py-16 md:py-22 bg-white scroll-mt-24">
        <div class="container-2026">
            <x-svc.section-head :eyebrow="__('Responsabilidades')" :title="__('El proceso funciona mejor cuando cada parte sabe qué debe aportar.')">
                {{ __('Esta lectura evita que el servicio se confunda con una simple entrega de formularios y mantiene clara la coordinación con el cliente.') }}
            </x-svc.section-head>
            <x-svc.responsibilities
                :otium="[
                    __('Revisa la información tributaria relevante.'),
                    __('Identifica observaciones y temas que requieren atención.'),
                    __('Prepara y/o revisa las obligaciones dentro del alcance acordado.'),
                    __('Documenta y reporta el trabajo realizado.'),
                    __('Responde consultas tributarias puntuales dentro del servicio.'),
                ]"
                :client="[
                    __('Entrega la información y documentación necesaria para el período.'),
                    __('Responde consultas u observaciones que requieren contexto de la operación.'),
                    __('Confirma o ejecuta las correcciones que correspondan a sus procesos internos.'),
                    __('Facilita la coordinación con administración, contabilidad o gerencia cuando sea necesario.'),
                ]" />
        </div>
    </section>

    <!-- Alcance especial -->
    <section id="alcance-especial" class="py-12 md:py-15.5 bg-soft">
        <div class="container-2026">
            <x-svc.scope
                :eyebrow="__('Cuando el caso requiere un tratamiento especial')"
                :title="__('Algunos trabajos necesitan un alcance distinto.')"
                :items="[__('Atención integral de fiscalizaciones.'), __('Preparación extensa de documentación para fiscalizaciones o descargos complejos.'), __('Consultoría tributaria profunda o análisis que requiera una carga de horas distinta al acompañamiento normal.')]"
                :note="__('Estos trabajos se evalúan y cotizan separadamente según el caso.')" />
        </div>
    </section>

    <!-- Qué cambia para el cliente -->
    <section id="cambio" class="py-16 md:py-22 bg-white">
        <div class="container-2026">
            <x-svc.section-head :eyebrow="__('Qué cambia para el cliente')" :title="__('El valor se ve en la forma de trabajar.')">
                {{ __('OTIUM no promete eliminar todo riesgo tributario. Busca que el proceso sea más ordenado, visible y documentado para reducir errores operativos evitables.') }}
            </x-svc.section-head>
            <x-svc.change :pairs="[
                [__('Información llega al cierre con poco tiempo para revisar.'), __('Revisión previa y observaciones visibles antes de declarar.')],
                [__('Documentos y soporte distribuidos entre archivos y personas.'), __('Mayor orden y trazabilidad del respaldo utilizado.')],
                [__('Hallazgos se corrigen, pero vuelven a aparecer.'), __('Pendientes y observaciones con seguimiento continuo.')],
                [__('Gerencia sabe que se declaró, pero no siempre qué quedó pendiente.'), __('Mayor visibilidad sobre lo realizado, observado y por atender.')],
            ]" />
        </div>
    </section>

    <!-- Cómo empezamos -->
    <x-svc.start
        :title="__('Entendamos primero cómo está funcionando hoy su proceso tributario.')"
        :text="__('Revisamos la operación actual y, a partir de eso, definimos alcance, periodicidad, responsabilidades y forma de trabajo. No todas las empresas necesitan el mismo nivel de acompañamiento.')"
        :variables="[__('Volumen y tipo de operaciones'), __('Obligaciones recurrentes'), __('Información disponible'), __('Sistemas y herramientas'), __('Frecuencia de reportes'), __('Nivel de acompañamiento requerido')]"
        :card-title="__('Una conversación inicial permite dimensionar bien el servicio.')"
        :card-text="__('La Gestión Tributaria puede funcionar de manera independiente o integrarse con Outsourcing Contable cuando la empresa necesita una estructura más completa.')"
        :cta-href="$waService"
        :cta-label="__('Conversemos sobre su proceso')" />
</x-layout>
