<footer class="bg-accent text-white py-12 lg:py-16">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row justify-between items-start gap-10">

            <!-- Brand -->
            <div class="w-full lg:w-1/3 text-center lg:text-left">
                <div class="inline-block p-2 bg-white/10 rounded-lg mb-4">
                    <img src="/images/logo-otium-white.png" alt="OTIUM" class="h-12 mx-auto lg:mx-0">
                </div>
                <p class="text-white/80 leading-relaxed max-w-sm mx-auto lg:mx-0 text-sm">
                    Expertos en outsourcing contable, auditoría y transformación digital.
                    Impulsando el crecimiento de empresas en Bolivia y el mundo.
                </p>
            </div>

            <!-- Links -->
            <div class="w-full lg:w-2/3 grid grid-cols-2 md:grid-cols-3 gap-8">

                <div>
                    <h4 class="text-sm font-bold mb-4 text-white uppercase tracking-wider">Servicios</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('services.index') }}" class="text-white/80 hover:text-white transition-colors font-semibold">Ver Todos</a></li>
                        <li><a href="{{ route('services.outsourcing') }}" class="text-white/80 hover:text-white transition-colors">Outsourcing Contable</a></li>
                        <li><a href="{{ route('services.gestion-tributaria') }}" class="text-white/80 hover:text-white transition-colors">Gestión Tributaria</a></li>
                        <li><a href="{{ route('services.audit') }}" class="text-white/80 hover:text-white transition-colors">Auditoría Financiera</a></li>
                        <li><a href="{{ route('services.reportes-power-bi') }}" class="text-white/80 hover:text-white transition-colors">Power BI</a></li>
                        <li><a href="{{ route('services.sharepoint-documental') }}" class="text-white/80 hover:text-white transition-colors">SharePoint</a></li>
                        <li><a href="{{ route('services.outsourcing-laboral') }}" class="text-white/80 hover:text-white transition-colors">Outsourcing Laboral</a></li>
                        <li><a href="{{ route('services.consultoria') }}" class="text-white/80 hover:text-white transition-colors">Consultoría</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-sm font-bold mb-4 text-white uppercase tracking-wider">Compañía</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('about') }}" class="text-white/80 hover:text-white transition-colors">Nosotros</a></li>
                        <li><a href="{{ route('blog.index') }}" class="text-white/80 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="{{ route('contact') }}" class="text-white/80 hover:text-white transition-colors">Diagnóstico Gratuito</a></li>
                    </ul>
                </div>

                <div class="col-span-2 md:col-span-1">
                    <h4 class="text-sm font-bold mb-4 text-white uppercase tracking-wider">Contacto</h4>
                    <ul class="space-y-3 text-sm text-white/80">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>contacto@otium.bo</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>+591 2 2123456</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            <span>Av. Ballivián Esq. C. 21, La Paz</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="border-t border-white/20 mt-10 pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-white/50 text-xs">
            <p>&copy; {{ date('Y') }} OTIUM Consultores. Todos los derechos reservados.</p>
            <div class="flex items-center gap-4">
                <a href="https://www.linkedin.com/company/otiumbo/" target="_blank" rel="noopener" aria-label="LinkedIn"
                    class="hover:text-white transition-colors">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M20.447 20.452H16.89v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a1.977 1.977 0 01-1.972-1.977 1.977 1.977 0 011.972-1.977 1.977 1.977 0 011.977 1.977 1.977 1.977 0 01-1.977 1.977zm1.758 13.019H3.58V9h3.514v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
                <a href="#" aria-label="Instagram" class="hover:text-white transition-colors">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </a>
                <a href="#" aria-label="Facebook" class="hover:text-white transition-colors">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
            </div>
        </div>
    </div>
</footer>
