<x-layout>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden text-white">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="/images/meeting.png" alt="Contáctenos" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 to-secondary/80"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight" data-aos="fade-up">
                Contáctenos
            </h1>
            <p class="text-xl md:text-2xl text-white/90 mb-8 font-light max-w-3xl mx-auto" data-aos="fade-up"
                data-aos-delay="100">
                Póngase en contacto con nuestro equipo para discutir cómo podemos ayudar a su negocio.
            </p>
        </div>
    </section>

    <!-- Content Section: Form & Info -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-16">

                <!-- Contact Form -->
                <div class="w-full lg:w-3/5" data-aos="fade-right">
                    <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8">Envíenos un mensaje</h2>
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Nombre Completo</label>
                                    <input type="text"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all"
                                        placeholder="Juan Pérez">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Correo Electrónico</label>
                                    <input type="email"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all"
                                        placeholder="juan@empresa.com">
                                </div>
                            </div>

                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Asunto</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all"
                                    placeholder="Consulta sobre servicios...">
                            </div>

                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Mensaje</label>
                                <textarea rows="5"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all"
                                    placeholder="¿En qué podemos ayudarte?"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-primary text-white font-bold py-4 rounded-lg shadow-lg hover:bg-red-700 transition-colors transform hover:-translate-y-1">
                                Enviar Mensaje
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="w-full lg:w-2/5" data-aos="fade-left">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Información de Contacto</h2>

                    <div class="space-y-10">
                        <!-- Email -->
                        <div class="flex items-start gap-5 group">
                            <div
                                class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center text-primary flex-shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 mb-1">Correo Electrónico Central</h3>
                                <p class="text-gray-600 hover:text-primary transition-colors cursor-pointer">
                                    info@otium.com.bo</p>
                            </div>
                        </div>

                        <!-- La Paz -->
                        <div class="flex items-start gap-5 group">
                            <div
                                class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center text-primary flex-shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 mb-2">📍 La Paz</h3>
                                <p class="text-gray-600 mb-3">San Miguel, Calle Ferrecio Nro. 1154 A<br>Bloque C 14 ·
                                    Edif. Munditoys Piso 4</p>
                                <div class="space-y-1">
                                    <p class="text-gray-600 flex items-center gap-2"><span
                                            class="text-primary text-sm">Tel:</span> +591 72505583</p>
                                    <p class="text-gray-600 flex items-center gap-2"><span
                                            class="text-primary text-sm">Tel:</span> +591 2 2792824</p>
                                </div>
                                <div class="mt-4 rounded-lg overflow-hidden shadow-sm h-48 border border-gray-200">
                                    <iframe width="100%" height="100%" frameborder="0" scrolling="no"
                                        marginheight="0" marginwidth="0"
                                        src="https://maps.google.com/maps?q=San+Miguel,+Calle+Ferrecio+Nro.+1154+A,+La+Paz&t=&z=15&ie=UTF8&iwloc=&output=embed"></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- Santa Cruz -->
                        <div class="flex items-start gap-5 group">
                            <div
                                class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center text-primary flex-shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 mb-2">📍 Santa Cruz</h3>
                                <p class="text-gray-600 mb-3">Equipetrol, Calle Los Lirios Nro. 1000<br>Av. San Martin
                                </p>
                                <div class="space-y-1">
                                    <p class="text-gray-600 flex items-center gap-2"><span
                                            class="text-primary text-sm">Tel:</span> +591 70654104</p>
                                    <p class="text-gray-600 flex items-center gap-2"><span
                                            class="text-primary text-sm">Tel:</span> +591 3 3419804</p>
                                </div>
                                <div class="mt-4 rounded-lg overflow-hidden shadow-sm h-48 border border-gray-200">
                                    <iframe width="100%" height="100%" frameborder="0" scrolling="no"
                                        marginheight="0" marginwidth="0"
                                        src="https://maps.google.com/maps?q=Equipetrol,+Calle+Los+Lirios+Nro.+1000,+Santa+Cruz&t=&z=15&ie=UTF8&iwloc=&output=embed"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



</x-layout>
