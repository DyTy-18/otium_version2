<footer class="bg-accent text-ink border-t-4 border-primary">
    <div class="container-2026">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-[1.4fr_1fr_1fr_1fr] gap-7 pt-10 pb-6.5">

            <!-- Brand -->
            <div>
                <img src="/images/logo-otium.webp" alt="OTIUM" class="h-6.5 w-auto mb-3">
                <p class="text-[13px] max-w-[34ch] opacity-85">
                    {{ __('Expertos en outsourcing contable, auditoría y transformación digital. Impulsando el crecimiento de empresas en Bolivia y el mundo.') }}
                </p>
            </div>

            <!-- Servicios -->
            <div>
                <h5 class="text-[11.5px] font-bold uppercase tracking-[.08em] opacity-70 mb-3">{{ __('Servicios') }}</h5>
                <ul class="text-[13px] leading-normal opacity-85 space-y-2">
                    <li><a href="{{ route('services.index') }}" class="hover:underline">{{ __('Ver todos') }}</a></li>
                    {{-- Misma lista que el catálogo (config/services_catalog.php) --}}
                    @foreach (config('services_catalog') as $service)
                    <li>
                        <a href="{{ route($service['route']) }}" class="hover:underline">{{ __($service['name']) }}</a>
                        @if (! empty($service['new']))
                            <span class="ml-1.5 px-1.5 py-0.5 rounded-sm bg-primary text-white text-[10px] font-bold tracking-[.08em] uppercase">{{ __('Nuevo') }}</span>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Compañía -->
            <div>
                <h5 class="text-[11.5px] font-bold uppercase tracking-[.08em] opacity-70 mb-3">{{ __('Compañía') }}</h5>
                <ul class="text-[13px] leading-normal opacity-85 space-y-2">
                    <li><a href="{{ route('about') }}" class="hover:underline">{{ __('Nosotros') }}</a></li>
                    <li><a href="{{ route('blog.index') }}" class="hover:underline">{{ __('Blog') }}</a></li>
                    <li><a href="{{ route('international') }}" class="hover:underline">{{ __('International') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:underline">{{ __('Diagnóstico Gratuito') }}</a></li>
                </ul>
            </div>

            <!-- Contacto -->
            <div>
                <h5 class="text-[11.5px] font-bold uppercase tracking-[.08em] opacity-70 mb-3">{{ __('Contacto') }}</h5>
                <ul class="text-[13px] leading-normal opacity-85 space-y-2">
                    <li><a href="mailto:info@otium.com.bo" class="hover:underline">info@otium.com.bo</a></li>
                    <li>La Paz — San Miguel, Calle Ferrecio Nro. 1154 A, Bloque C 14, Edif. Munditoys Piso 4<br>+591 72505583 · +591 2 2792824</li>
                    <li>Santa Cruz — Equipetrol, Calle Los Lirios Nro. 100, Av. San Martín<br>+591 70654104 · +591 3 3419804</li>
                </ul>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row flex-wrap items-start sm:items-center justify-between gap-3.5 pt-4 pb-5 border-t border-ink/18 text-xs">
            <span class="opacity-85">&copy; {{ date('Y') }} OTIUM Consultores. {{ __('Todos los derechos reservados.') }}</span>
            <div class="flex items-center gap-4">
                <span class="opacity-85">Independent Member of GGI</span>
                <a href="https://www.linkedin.com/company/otiumbo/" target="_blank" rel="noopener" aria-label="LinkedIn"
                    class="opacity-85 hover:opacity-100 transition-opacity">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M20.447 20.452H16.89v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a1.977 1.977 0 01-1.972-1.977 1.977 1.977 0 011.972-1.977 1.977 1.977 0 011.977 1.977 1.977 1.977 0 01-1.977 1.977zm1.758 13.019H3.58V9h3.514v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
                <a href="{{ route('international') }}" aria-label="GGI Independent Member"
                    class="inline-flex bg-white rounded-lg px-3 py-2 shadow-[0_8px_20px_-10px_rgba(4,48,58,.45)]">
                    <img src="{{ asset('images/ggi-independent-member.png') }}" alt="GGI Independent Member" class="h-5.5 w-auto block">
                </a>
            </div>
        </div>
    </div>
</footer>
