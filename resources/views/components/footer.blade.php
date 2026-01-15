<footer class="bg-[#479BAA] text-white py-16">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start gap-12">
            <!-- Brand -->
            <div class="w-full lg:w-1/3 text-center lg:text-left">
                <div class="inline-block p-2 bg-white/10 rounded-lg mb-6">
                    <img src="/images/logo-otium-white.png" alt="OTIUM" class="h-12 mx-auto lg:mx-0">
                </div>
                <p class="text-white/80 leading-relaxed max-w-sm mx-auto lg:mx-0">
                    Expertos en outsourcing contable, auditoría y transformación digital.
                    Impulsando el crecimiento de empresas en Bolivia y el mundo.
                </p>
            </div>

            <!-- Links -->
            <div class="w-full lg:w-2/3 flex flex-col md:flex-row justify-between gap-8 text-center md:text-left">
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white border-b border-white/20 pb-2 inline-block md:block">
                        Servicios</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('services.index') }}"
                                class="text-800 hover:text-white transition-colors font-bold">Ver Todos los
                                Servicios</a></li>
                        <li><a href="{{ route('services.outsourcing') }}"
                                class="text-800 hover:text-white transition-colors">Outsourcing
                                Contable</a></li>
                        <li><a href="{{ route('services.audit') }}"
                                class="text-800 hover:text-white transition-colors">Auditoría
                                Financiera</a></li>
                        <li><a href="{{ route('services.digital') }}"
                                class="text-800 hover:text-white transition-colors">Transformación
                                Digital</a></li>
                        <li><a href="{{ route('services.legal') }}"
                                class="text-800 hover:text-white transition-colors">Constitución de
                                Empresas</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6 text-white border-b border-white/20 pb-2 inline-block md:block">
                        Compañía</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('about') }}"
                                class="text-white/80 hover:text-white transition-colors">Nosotros</a></li>
                        <li><a href="#blog" class="text-white/80 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="text-white/80 hover:text-white transition-colors">Carreras</a></li>
                        <li><a href="{{ route('contact') }}"
                                class="text-white/80 hover:text-white transition-colors">Contacto</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6 text-white border-b border-white/20 pb-2 inline-block md:block">
                        Contacto</h4>
                    <ul class="space-y-3 text-white/80">
                        <li class="flex items-center justify-center md:justify-start gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span>contacto@otium.bo</span>
                        </li>
                        <li class="flex items-center justify-center md:justify-start gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <span>+591 2 2123456</span>
                        </li>
                        <li class="flex items-center justify-center md:justify-start gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                            </svg>
                            <span>Av. Ballivián Esq. C. 21, La Paz</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="border-t border-white/20 mt-12 pt-8 text-center text-white/60 text-sm">
            <p>&copy; 2024 OTIUM Consultores. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
