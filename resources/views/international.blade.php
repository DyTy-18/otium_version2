<x-layout
    title="{{ __('International | Otium es Independent Member of GGI') }}"
    description="{{ __('Otium acompaña a empresas locales e internacionales desde Bolivia, con el respaldo de GGI — una alianza global de firmas profesionales independientes presentes en más de 120 países.') }}"
    ogImage="/images/otium/hero/hero.png"
>
    @php
        $wa = env('WHATSAPP_NUMBER', '59170654104');
        $waTalk = 'https://wa.me/' . $wa . '?text=' . rawurlencode(__('Hola, quiero hablar sobre mi operación internacional con Otium.'));
    @endphp

    <!-- Hero -->
    <section class="relative overflow-hidden pt-36 pb-16 md:pt-44 md:pb-20 bg-linear-to-b from-brand-light from-0% to-white to-78%">
        <div class="absolute -right-14 top-0 w-72 h-3 bg-secondary -skew-x-[28deg] pointer-events-none"></div>

        <div class="container-2026 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-[1.08fr_.92fr] gap-9 lg:gap-18 items-center">
                <div>
                    <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary" data-aos="fade-up">{{ __('Red internacional') }}</span>
                    <h1 class="text-[clamp(40px,5.4vw,64px)] font-extrabold leading-[1.08] tracking-[-0.02em] text-black max-w-3xl" data-aos="fade-up" data-aos-delay="50">
                        {{ __('International expertise.') }} <span class="text-primary">{{ __('Local understanding.') }}</span>
                    </h1>
                    <p class="mt-6 text-muted text-base md:text-lg max-w-2xl" data-aos="fade-up" data-aos-delay="100">
                        {{ __('Otium acompaña a empresas locales e internacionales desde sus oficinas en La Paz y Santa Cruz, con el respaldo de GGI — una alianza global de firmas profesionales independientes presentes en más de 120 países.') }}
                    </p>
                    <div class="flex flex-wrap gap-3 mt-8" data-aos="fade-up" data-aos-delay="150">
                        <a href="#capacidades"
                            class="inline-flex items-center justify-center gap-2 min-h-12 px-5.5 bg-primary border border-primary text-white text-sm font-bold hover:bg-[#98261f] hover:border-[#98261f] transition-colors">
                            {{ __('Explore our international capabilities') }} ↓
                        </a>
                    </div>
                </div>

                <aside class="p-5.5 md:p-7.5 bg-white border border-line border-t-[5px] border-t-primary shadow-[0_10px_26px_rgba(0,0,0,.055)]"
                    aria-label="{{ __('Dos formas de trabajar con Otium') }}" data-aos="fade-left" data-aos-delay="150">
                    <div class="pb-4.5 mb-2 border-b-2 border-accent">
                        <strong class="text-[19px]">{{ __('Dos formas de acompañarte') }}</strong>
                    </div>
                    <div class="grid">
                        <a href="{{ route('doing-business') }}" class="group relative grid grid-cols-[42px_1fr] gap-3 items-start py-4">
                            <span class="absolute left-4 top-12 -bottom-0.5 w-px bg-mid"></span>
                            <span class="w-8.5 h-8.5 grid place-items-center bg-white border border-primary text-primary text-[11px] font-extrabold">01</span>
                            <span>
                                <strong class="block mb-0.5 text-sm group-hover:text-primary transition-colors">{{ __('Doing Business in Bolivia') }}</strong>
                                <small class="block text-muted text-[12.5px]">{{ __('Para empresas extranjeras que ingresan u operan en Bolivia.') }}</small>
                            </span>
                        </a>
                        <a href="{{ route('international-support') }}" class="group relative grid grid-cols-[42px_1fr] gap-3 items-start py-4">
                            <span class="w-8.5 h-8.5 grid place-items-center bg-white border border-accent text-[#2e8792] text-[11px] font-extrabold">02</span>
                            <span>
                                <strong class="block mb-0.5 text-sm group-hover:text-primary transition-colors">{{ __('International Support') }}</strong>
                                <small class="block text-muted text-[12.5px]">{{ __('Para empresas que necesitan servicios o especialistas fuera de Bolivia.') }}</small>
                            </span>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- Dónde encaja tu operación -->
    <section id="capacidades" class="py-16 md:py-22 bg-white scroll-mt-24">
        <div class="container-2026">
            <div class="grid grid-cols-1 lg:grid-cols-[1.12fr_.88fr] gap-4 lg:gap-13.5 items-end mb-10 pb-4.5 border-b-2 border-accent" data-aos="fade-up">
                <div>
                    <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary">{{ __('Dos formas de acompañarte') }}</span>
                    <h2 class="text-[clamp(33px,4vw,54px)] font-extrabold leading-[1.08] tracking-[-0.02em] text-black">{{ __('Dónde encaja tu operación') }}</h2>
                </div>
                <p class="text-muted max-w-xl lg:justify-self-end">{{ __('Ya sea que una empresa extranjera esté entrando a Bolivia, o una empresa boliviana necesite soporte fuera del país, Otium tiene un camino claro para ambos casos.') }}</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4.5">
                <article class="relative p-7 bg-white border border-line" data-aos="fade-up">
                    <span class="absolute left-0 top-0 w-1 h-full bg-primary"></span>
                    <h3 class="text-[21px] font-bold leading-tight mb-2.5">{{ __('Doing Business in Bolivia') }}</h3>
                    <p class="text-muted text-sm">{{ __('Para empresas extranjeras que ingresan u operan en Bolivia: constitución legal, cumplimiento tributario, contabilidad y nómina bajo normativa boliviana, en tu idioma.') }}</p>
                    <a href="{{ route('doing-business') }}" class="inline-flex items-center gap-1.5 mt-4 text-[13px] font-bold text-primary hover:underline">{{ __('Ver guía completa') }} →</a>
                </article>
                <article class="relative p-7 bg-white border border-line" data-aos="fade-up" data-aos-delay="100">
                    <span class="absolute left-0 top-0 w-1 h-full bg-accent"></span>
                    <h3 class="text-[21px] font-bold leading-tight mb-2.5">{{ __('International Support') }}</h3>
                    <p class="text-muted text-sm">{{ __('Para empresas que necesitan servicios, coordinación o especialistas fuera de Bolivia: acceso a la red GGI en América, Europa, Asia y Oceanía.') }}</p>
                    <a href="{{ route('international-support') }}" class="inline-flex items-center gap-1.5 mt-4 text-[13px] font-bold text-primary hover:underline">{{ __('Conocer el servicio') }} →</a>
                </article>
            </div>
        </div>
    </section>

    <!-- Global Reach through GGI -->
    <section id="ggi" class="py-16 md:py-22 bg-soft scroll-mt-24">
        <div class="container-2026">
            <div class="grid grid-cols-1 lg:grid-cols-[1.4fr_1fr] gap-10 items-center">
                <div data-aos="fade-right">
                    <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary">{{ __('Credencial institucional') }}</span>
                    <h2 class="text-[clamp(33px,4vw,54px)] font-extrabold leading-[1.08] tracking-[-0.02em] text-black">{{ __('Global Reach through GGI') }}</h2>
                    <p class="mt-3.5 text-muted text-[15px] max-w-[56ch]">{{ __('Otium is an Independent Member of GGI, an international alliance of independent accounting, audit, tax, legal and financial advisory firms present in more than 120 countries. Membership gives our clients trusted local expertise anywhere they operate — without changing who they work with in Bolivia.') }}</p>
                </div>
                <div class="flex flex-col items-center gap-3.5 p-7.5 bg-soft border border-line text-center" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{ asset('images/ggi-independent-member.png') }}" alt="GGI Independent Member" class="max-w-[190px] h-auto">
                    <span class="text-xs text-muted">{{ __('otium.com.bo es Independent Member de GGI') }}</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Benefits -->
    <section class="py-16 md:py-22 bg-white">
        <div class="container-2026">
            <div class="grid grid-cols-1 lg:grid-cols-[1.12fr_.88fr] gap-4 lg:gap-13.5 items-end mb-10 pb-4.5 border-b-2 border-accent" data-aos="fade-up">
                <div>
                    <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary">{{ __('Client Benefits') }}</span>
                    <h2 class="text-[clamp(33px,4vw,54px)] font-extrabold leading-[1.08] tracking-[-0.02em] text-black">{{ __('Lo que gana tu empresa') }}</h2>
                </div>
                <p class="text-muted max-w-xl lg:justify-self-end">{{ __('Cuatro beneficios concretos de trabajar con una firma boliviana que forma parte de una red internacional.') }}</p>
            </div>

            @php
                $benefits = [
                    ['num' => '01', 'title' => __('Local expertise'), 'desc' => __('15+ años entendiendo el entorno legal, tributario y operativo boliviano.')],
                    ['num' => '02', 'title' => __('International access'), 'desc' => __('Conexión directa con firmas miembro de GGI en más de 120 países.')],
                    ['num' => '03', 'title' => __('Cross-border coordination'), 'desc' => __('Un solo punto de contacto para coordinar equipos y firmas en distintas jurisdicciones.')],
                    ['num' => '04', 'title' => __('Independent advice'), 'desc' => __('Cada firma miembro opera de forma independiente — el mismo criterio riguroso, sin importar el país.')],
                ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4.5">
                @foreach ($benefits as $i => $b)
                <div class="p-6 bg-white border border-line" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <span class="block mb-3 text-[11px] font-extrabold tracking-[.08em] text-primary">{{ $b['num'] }}</span>
                    <h4 class="text-base font-bold leading-tight tracking-[-0.02em] mb-1.5">{{ $b['title'] }}</h4>
                    <p class="text-muted text-[13px]">{{ $b['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
         About GGI — texto oficial obligatorio (GGI Corporate Design Manual v4.0 §4.3).
         No traducir/alterar el bloque en inglés sin validación previa de GGI.
    ═══════════════════════════════════════════════════════════ --}}
    <section id="about-ggi" class="py-16 md:py-22 bg-soft">
        <div class="container-2026">
            <span class="inline-block mb-3 text-xs font-bold uppercase tracking-[.105em] text-primary">About GGI</span>
            <div class="p-6 md:p-8.5 bg-white border border-line" data-aos="fade-up">
                <h3 class="text-lg font-bold leading-tight">GGI – your gateway to the global marketplace</h3>
                <p class="mt-3 text-sm leading-[1.7] text-muted max-w-[74ch]">As an independent member of GGI, one of the top ten international accounting, consulting and law firm alliances, our firm is able to deliver the best possible advice on a global scale. Through GGI we have access to experts around the world who are able to give advice on local regulations, compliance and go-to-market strategies.</p>
                <p class="mt-3 text-sm leading-[1.7] text-muted max-w-[74ch]">GGI's broad international presence opens up a gateway to the global marketplace for both us and our clients. Through our GGI membership we have access to high quality firms in nearly every major financial and commercial centre worldwide. This remarkable facility applies whether you are looking for business opportunities beyond national boundaries, or need international support in addition to services in your home market.</p>
                <p class="mt-3 text-sm leading-[1.7] text-muted max-w-[74ch]">We are here to help and support your success wherever your business takes you. For more information, visit GGI (<a href="https://www.ggi.com" target="_blank" rel="noopener" class="text-primary font-semibold hover:underline">www.ggi.com</a>) online.</p>

                {{-- Wordmark exclusivo de esta página, junto al texto oficial — nunca en tarjetas, cartas ni publicidad (manual §4.4) --}}
                <img src="{{ asset('images/ggi-wordmark.png') }}" alt="GGI — A Global Alliance of Independent Professional Firms"
                    class="block my-6.5 max-w-[280px] w-full h-auto">

                <h3 class="text-lg font-bold leading-tight">About GGI – Disclaimer</h3>
                <p class="mt-3 text-sm leading-[1.7] text-muted max-w-[74ch]">GGI is a global Alliance of independent professional firms. GGI Global Alliance AG, a company incorporated in accordance with the laws of Switzerland, operates solely as an administrative resource of the Alliance and therefore provides no legal, audit or other professional services of any type to third parties. Such services are provided solely by GGI member firms in their respective geographic areas. GGI and its member firms are legally distinct and separate entities. These entities are not and shall not be construed to be in the relationship of a parent firm, subsidiary, partner, joint venture, agent or a network. No member firm of GGI has any authority (actual, apparent, implied or otherwise) to obligate or bind GGI or any other GGI member firm in any manner whatsoever, equally, nor does GGI have any such authority to obligate or bind any member firm. All GGI members are independent firms, as such they all render their services entirely on their own account (including benefit and risk), without any involvement of GGI and/or other GGI member firms.</p>
                <span class="block mt-4 text-xs italic text-mid">{{ __('Publicado en inglés, según lo exige GGI para este texto.') }}</span>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="py-14 bg-primary text-white text-center">
        <div class="container-2026">
            <h2 class="text-[clamp(28px,4vw,42px)] font-bold leading-[1.08] tracking-[-0.02em] text-white" data-aos="fade-up">{{ __('Doing business in Bolivia or abroad?') }}</h2>
            <p class="mt-2.5 text-[15px] text-[#FFD9D0]" data-aos="fade-up" data-aos-delay="100">{{ __('Conversemos sobre tu operación local o internacional.') }}</p>
            <a href="{{ $waTalk }}" target="_blank" rel="noopener"
                class="inline-flex items-center justify-center gap-2 min-h-12 px-5.5 mt-6.5 bg-white border border-white text-primary text-sm font-bold hover:bg-brand-light transition-colors"
                data-aos="fade-up" data-aos-delay="200">
                {{ __('Talk to Otium') }}
            </a>
        </div>
    </section>
</x-layout>
