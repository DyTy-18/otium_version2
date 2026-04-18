<x-layout
    title="Diagnóstico Gratuito | Otium"
    description="Contacta a OTIUM Consultores para una consulta inicial gratuita. Estamos en La Paz y Santa Cruz, Bolivia. Respondemos en menos de 24 horas."
>
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

                        @if(session('success'))
                            <div class="bg-green-50 border border-green-200 text-green-800 rounded-lg p-4 mb-6 flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-sm font-medium">{{ session('success') }}</p>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label for="name" class="block text-gray-700 font-medium mb-2">Nombre Completo</label>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                                        @class(['w-full px-4 py-3 rounded-lg border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all', 'border-red-400 bg-red-50' => $errors->has('name'), 'border-gray-300' => !$errors->has('name')])
                                        placeholder="Juan Pérez">
                                    @error('name')
                                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="email" class="block text-gray-700 font-medium mb-2">Correo Electrónico</label>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                                        @class(['w-full px-4 py-3 rounded-lg border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all', 'border-red-400 bg-red-50' => $errors->has('email'), 'border-gray-300' => !$errors->has('email')])
                                        placeholder="juan@empresa.com">
                                    @error('email')
                                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="phone" class="block text-gray-700 font-medium mb-2">Teléfono <span class="text-gray-400 font-normal text-sm">(opcional)</span></label>
                                    <input id="phone" type="tel" name="phone" value="{{ old('phone') }}"
                                        @class(['w-full px-4 py-3 rounded-lg border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all', 'border-red-400 bg-red-50' => $errors->has('phone'), 'border-gray-300' => !$errors->has('phone')])
                                        placeholder="+591 7XXXXXXX">
                                    @error('phone')
                                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="subject" class="block text-gray-700 font-medium mb-2">Asunto</label>
                                <input id="subject" type="text" name="subject" value="{{ old('subject') }}"
                                    @class(['w-full px-4 py-3 rounded-lg border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all', 'border-red-400 bg-red-50' => $errors->has('subject'), 'border-gray-300' => !$errors->has('subject')])
                                    placeholder="Consulta sobre servicios...">
                                @error('subject')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="message" class="block text-gray-700 font-medium mb-2">Mensaje</label>
                                <textarea id="message" name="message" rows="5"
                                    @class(['w-full px-4 py-3 rounded-lg border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all', 'border-red-400 bg-red-50' => $errors->has('message'), 'border-gray-300' => !$errors->has('message')])
                                    placeholder="¿En qué podemos ayudarte?">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
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

                    <!-- WhatsApp CTA -->
                    @php $wa = env('WHATSAPP_NUMBER', '59172505583'); @endphp
                    <a href="https://wa.me/{{ $wa }}?text=Hola%2C%20me%20comunico%20desde%20el%20sitio%20web%20de%20OTIUM%20Consultores.%20Quisiera%20m%C3%A1s%20informaci%C3%B3n."
                        target="_blank" rel="noopener"
                        class="flex items-center gap-4 p-5 rounded-2xl text-white font-semibold shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all mb-10"
                        style="background:#25D366;">
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                                <path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.558 4.112 1.528 5.837L.057 23.215a.75.75 0 00.928.928l5.378-1.471A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.75a9.713 9.713 0 01-4.953-1.356l-.355-.211-3.676 1.005 1.005-3.676-.211-.355A9.713 9.713 0 012.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-white/80 font-normal">Respuesta inmediata</p>
                            <p class="text-lg">Chatear por WhatsApp</p>
                        </div>
                        <svg class="w-5 h-5 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>

                    <div class="space-y-10">
                        <!-- Email -->
                        <div class="flex items-start gap-5 group">
                            <div
                                class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center text-primary shrink-0 group-hover:scale-110 transition-transform">
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
                                class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center text-primary shrink-0 group-hover:scale-110 transition-transform">
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
                                class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center text-primary shrink-0 group-hover:scale-110 transition-transform">
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
