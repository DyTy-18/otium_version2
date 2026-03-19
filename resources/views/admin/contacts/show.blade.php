<x-admin-layout title="Ver Mensaje">

    <div class="max-w-3xl">
        {{-- Breadcrumb --}}
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">
            <a href="{{ route('admin.contacts.index') }}" class="hover:text-primary transition-colors">Mensajes</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="text-gray-900 font-medium truncate">{{ $contact->name }}</span>
        </div>

        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            {{-- Cabecera del mensaje --}}
            <div class="px-8 py-6 border-b border-gray-100">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900 mb-1">{{ $contact->subject }}</h2>
                        <div class="flex items-center gap-4 text-sm text-gray-500 flex-wrap">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <strong class="text-gray-700">{{ $contact->name }}</strong>
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <a href="mailto:{{ $contact->email }}" class="text-primary hover:underline">{{ $contact->email }}</a>
                            </span>
                            @if($contact->phone)
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                {{ $contact->phone }}
                            </span>
                            @endif
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $contact->created_at->format('d/m/Y \a \l\a\s H:i') }}
                            </span>
                        </div>
                    </div>

                    @if($contact->read_at)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 shrink-0">
                            Leído {{ $contact->read_at->diffForHumans() }}
                        </span>
                    @endif
                </div>
            </div>

            {{-- Cuerpo del mensaje --}}
            <div class="px-8 py-6">
                <div class="bg-gray-50 rounded-lg p-6">
                    <p class="text-gray-700 whitespace-pre-wrap leading-relaxed">{{ $contact->message }}</p>
                </div>
            </div>

            {{-- Acciones --}}
            <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex items-center justify-between gap-4 flex-wrap">
                <a href="{{ route('admin.contacts.index') }}"
                   class="inline-flex items-center gap-2 text-sm text-gray-600 hover:text-gray-900 font-medium transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Volver a la lista
                </a>

                <div class="flex items-center gap-3 flex-wrap">
                    <a href="mailto:{{ $contact->email }}"
                       class="inline-flex items-center gap-2 px-4 py-2 bg-accent text-white text-sm font-medium rounded-lg hover:opacity-90 transition-opacity">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Responder por email
                    </a>

                    @if($contact->phone)
                    @php
                        $waPhone = preg_replace('/\D/', '', $contact->phone);
                        $waText  = urlencode("Hola {$contact->name}, soy del equipo de OTIUM Consultores. Me comunico con usted en respuesta a su mensaje sobre: {$contact->subject}");
                    @endphp
                    <a href="https://wa.me/{{ $waPhone }}?text={{ $waText }}"
                       target="_blank" rel="noopener"
                       class="inline-flex items-center gap-2 px-4 py-2 text-white text-sm font-medium rounded-lg hover:opacity-90 transition-opacity"
                       style="background:#25D366;">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.558 4.112 1.528 5.837L.057 23.215a.75.75 0 00.928.928l5.378-1.471A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.75a9.713 9.713 0 01-4.953-1.356l-.355-.211-3.676 1.005 1.005-3.676-.211-.355A9.713 9.713 0 012.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
                        </svg>
                        Responder por WhatsApp
                    </a>
                    @endif

                    @if(auth()->user()->isAdmin())
                        <div x-data>
                            <button
                                @click="if(confirm('¿Eliminar este mensaje permanentemente?')) $refs.deleteFormShow.submit()"
                                class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 text-red-600 text-sm font-medium rounded-lg hover:bg-red-100 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                Eliminar
                            </button>
                            <form x-ref="deleteFormShow" method="POST"
                                  action="{{ route('admin.contacts.destroy', $contact) }}" class="hidden">
                                @csrf @method('DELETE')
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
