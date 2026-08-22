<x-layout
    title="{{ __('International | Otium es Independent Member of GGI') }}"
    description="{{ __('Otium acompaña a empresas locales e internacionales desde Bolivia, con el respaldo de GGI — una alianza global de firmas profesionales independientes presentes en más de 120 países.') }}"
    ogImage="/images/otium/hero/hero.png"
>
    <!-- Hero -->
    <section class="relative pt-32 pb-20 md:pt-44 md:pb-28 overflow-hidden text-white bg-accent">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full mix-blend-multiply blur-3xl opacity-10 -translate-y-1/2 translate-x-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-primary rounded-full mix-blend-multiply blur-3xl opacity-15 translate-y-1/2 -translate-x-1/4 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl">
                <span class="text-sm font-semibold uppercase tracking-wider text-white/70" data-aos="fade-up">{{ __('Red internacional') }}</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mt-3 mb-6 leading-tight" data-aos="fade-up" data-aos-delay="50">
                    {{ __('International expertise. Local understanding.') }}
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 leading-relaxed font-light" data-aos="fade-up" data-aos-delay="100">
                    {{ __('Otium acompaña a empresas locales e internacionales desde sus oficinas en La Paz y Santa Cruz, con el respaldo de GGI — una alianza global de firmas profesionales independientes presentes en más de 120 países.') }}
                </p>
                <a href="{{ route('contact') }}"
                    class="inline-block px-8 py-4 bg-primary text-white font-bold rounded-lg shadow-lg hover:bg-white hover:text-primary transition-all transform hover:-translate-y-1 text-center"
                    data-aos="fade-up" data-aos-delay="150">
                    {{ __('Explorar nuestras capacidades internacionales') }}
                </a>
            </div>
        </div>
    </section>

    <!-- Dos formas de acompañarte -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-sm font-semibold uppercase tracking-wider text-accent">{{ __('Dos formas de acompañarte') }}</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">{{ __('Dónde encaja tu operación') }}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <a href="{{ route('doing-business') }}"
                    class="group bg-gray-50 rounded-xl p-8 border border-gray-100 hover:border-accent/40 hover:shadow-lg transition-all duration-300" data-aos="fade-up">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-5 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18M6 21V7l6-4 6 4v14M9 9h1M9 13h1M14 9h1M14 13h1M10 21v-4h4v4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('Doing Business in Bolivia') }}</h3>
                    <p class="text-gray-600 mb-4">{{ __('Tu empresa quiere operar en Bolivia. Te acompañamos en la constitución legal, el NIT y el cumplimiento tributario desde el primer día.') }}</p>
                    <span class="inline-flex items-center gap-1 text-accent font-semibold text-sm group-hover:gap-2 transition-all">
                        {{ __('Ver guía completa') }}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </a>

                <a href="{{ route('international-support') }}"
                    class="group bg-gray-50 rounded-xl p-8 border border-gray-100 hover:border-accent/40 hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-5 text-accent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.6 3.8 5.8 3.8 9s-1.3 6.4-3.8 9c-2.5-2.6-3.8-5.8-3.8-9S9.5 5.6 12 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ __('International Support') }}</h3>
                    <p class="text-gray-600 mb-4">{{ __('Tu empresa boliviana necesita presencia o soporte fuera de Bolivia. Coordinamos con firmas miembro de GGI en tu destino.') }}</p>
                    <span class="inline-flex items-center gap-1 text-accent font-semibold text-sm group-hover:gap-2 transition-all">
                        {{ __('Coordinar con nuestro equipo') }}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- Global Reach through GGI -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-[55%_45%] items-center gap-10 md:gap-12">
                <div class="text-center md:text-left" data-aos="fade-right">
                    <span class="text-sm font-semibold uppercase tracking-wider text-accent">{{ __('Credencial institucional') }}</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">{{ __('Global Reach through GGI') }}</h2>
                    <p class="text-gray-600 leading-relaxed max-w-xl mx-auto md:mx-0">
                        {{ __('Formamos parte de GGI, una alianza global de firmas profesionales independientes con presencia en más de 120 países. Nuestra membresía nos da acceso a expertos locales en prácticamente cualquier centro financiero y comercial del mundo.') }}
                    </p>
                </div>
                <div class="w-full flex items-center justify-center" data-aos="fade-left" data-aos-delay="100">
                    <x-ggi-slot size="xl" class="w-full max-w-sm" />
                </div>
            </div>
        </div>
    </section>

    <!-- Client Benefits -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-sm font-semibold uppercase tracking-wider text-primary">{{ __('Client Benefits') }}</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">{{ __('Lo que gana tu empresa') }}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                $benefits = [
                    ['num' => '01', 'title' => __('Local expertise'), 'desc' => __('15+ años entendiendo el entorno legal, tributario y operativo boliviano.')],
                    ['num' => '02', 'title' => __('International access'), 'desc' => __('Conexión directa con firmas miembro de GGI en más de 120 países.')],
                    ['num' => '03', 'title' => __('Cross-border coordination'), 'desc' => __('Un solo punto de contacto para coordinar equipos entre jurisdicciones.')],
                    ['num' => '04', 'title' => __('Independent advice'), 'desc' => __('Cada firma miembro opera de forma independiente, con el mismo criterio riguroso.')],
                ];
                @endphp
                @foreach ($benefits as $i => $b)
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-100" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <span class="text-2xl font-bold text-primary/30 leading-none">{{ $b['num'] }}</span>
                    <h4 class="text-lg font-bold text-gray-900 mt-3 mb-2">{{ $b['title'] }}</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $b['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
         About GGI — texto oficial obligatorio (GGI Corporate Design Manual v4.0 §4.3).
         No traducir/alterar el bloque en inglés sin validación previa de GGI.
    ═══════════════════════════════════════════════════════════ --}}
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <span class="text-sm font-semibold uppercase tracking-wider text-accent block text-center mb-3">About GGI</span>
            <div class="bg-white border border-gray-200 rounded-2xl p-8 md:p-12 max-w-4xl mx-auto" data-aos="fade-up">

                <h3 class="text-lg font-bold text-gray-900 mb-3">GGI – your gateway to the global marketplace</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">As an independent member of GGI, one of the top ten international accounting, consulting and law firm alliances, our firm is able to deliver the best possible advice on a global scale. Through GGI we have access to experts around the world who are able to give advice on local regulations, compliance and go-to-market strategies.</p>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">GGI's broad international presence opens up a gateway to the global marketplace for both us and our clients. Through our GGI membership we have access to high quality firms in nearly every major financial and commercial centre worldwide. This remarkable facility applies whether you are looking for business opportunities beyond national boundaries, or need international support in addition to services in your home market.</p>
                <p class="text-gray-600 text-sm leading-relaxed mb-8">We are here to help and support your success wherever your business takes you. For more information, visit GGI (<a href="https://www.ggi.com" target="_blank" rel="noopener" class="text-accent font-semibold hover:underline">www.ggi.com</a>) online.</p>

                {{-- Wordmark exclusivo de esta página, junto al texto oficial — nunca en tarjetas, cartas ni publicidad (manual §4.4) --}}
                <a href="https://www.ggi.com" target="_blank" rel="noopener"
                    class="inline-flex items-center gap-3 bg-white border border-gray-200 rounded-xl px-4 py-3 mb-8 hover:border-accent/40 transition-colors">
                    <span class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center shrink-0" style="color:#636466;">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.6 3.8 5.8 3.8 9s-1.3 6.4-3.8 9c-2.5-2.6-3.8-5.8-3.8-9S9.5 5.6 12 3z"/>
                        </svg>
                    </span>
                    <span class="flex flex-col leading-tight">
                        <strong class="text-sm font-bold text-gray-900">GGI | GLOBAL ALLIANCE</strong>
                        <span class="text-[11px] uppercase tracking-wide text-gray-400">ggi.com ↗</span>
                    </span>
                </a>

                <h3 class="text-lg font-bold text-gray-900 mb-3">About GGI – Disclaimer</h3>
                <p class="text-gray-500 text-xs leading-relaxed">GGI is a global Alliance of independent professional firms. GGI Global Alliance AG, a company incorporated in accordance with the laws of Switzerland, operates solely as an administrative resource of the Alliance and therefore provides no legal, audit or other professional services of any type to third parties. Such services are provided solely by GGI member firms in their respective geographic areas. GGI and its member firms are legally distinct and separate entities. These entities are not and shall not be construed to be in the relationship of a parent firm, subsidiary, partner, joint venture, agent or a network. No member firm of GGI has any authority (actual, apparent, implied or otherwise) to obligate or bind GGI or any other GGI member firm in any manner whatsoever, equally, nor does GGI have any such authority to obligate or bind any member firm. All GGI members are independent firms, as such they all render their services entirely on their own account (including benefit and risk), without any involvement of GGI and/or other GGI member firms.</p>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="py-24 bg-secondary relative overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary opacity-20 rounded-full translate-x-1/3 translate-y-1/3"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6" data-aos="fade-up">{{ __('¿Necesitás una firma de confianza fuera de Bolivia?') }}</h2>
            <p class="text-xl text-white/90 mb-10 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                {{ __('Conversemos sobre tu operación local o internacional.') }}
            </p>
            <a href="{{ route('contact') }}"
                class="inline-block px-10 py-4 bg-primary text-white rounded-lg font-bold shadow-xl hover:bg-white hover:text-primary transition-all duration-300"
                data-aos="fade-up" data-aos-delay="200">
                {{ __('Hablar con Otium') }}
            </a>
        </div>
    </section>
</x-layout>
