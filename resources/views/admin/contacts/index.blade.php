<x-admin-layout title="Mensajes de Contacto">

    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-xl font-semibold text-gray-900">Mensajes de Contacto</h2>
            <p class="text-sm text-gray-500 mt-1">Mensajes enviados desde el formulario del sitio web.</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        @if($contacts->isEmpty())
            <div class="px-6 py-16 text-center">
                <svg class="w-14 h-14 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                </svg>
                <p class="text-gray-400 font-medium">No hay mensajes todavía.</p>
                <p class="text-gray-300 text-sm mt-1">Los mensajes del formulario de contacto aparecerán aquí.</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Remitente</th>
                            <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider hidden md:table-cell">Asunto</th>
                            <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider hidden lg:table-cell">Fecha</th>
                            <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Estado</th>
                            <th class="text-right px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @foreach($contacts as $contact)
                            <tr class="{{ $contact->isUnread() ? 'bg-primary/5' : 'bg-white' }} hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        @if($contact->isUnread())
                                            <span class="w-2 h-2 rounded-full bg-primary shrink-0"></span>
                                        @else
                                            <span class="w-2 h-2 rounded-full bg-gray-200 shrink-0"></span>
                                        @endif
                                        <div>
                                            <p class="text-sm font-{{ $contact->isUnread() ? 'semibold' : 'medium' }} text-gray-900">
                                                {{ $contact->name }}
                                            </p>
                                            <p class="text-xs text-gray-500">{{ $contact->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 hidden md:table-cell">
                                    <p class="text-sm text-gray-700 truncate max-w-xs">{{ $contact->subject }}</p>
                                </td>
                                <td class="px-6 py-4 hidden lg:table-cell">
                                    <p class="text-sm text-gray-500">{{ $contact->created_at->format('d/m/Y H:i') }}</p>
                                    <p class="text-xs text-gray-400">{{ $contact->created_at->diffForHumans() }}</p>
                                </td>
                                <td class="px-6 py-4">
                                    @if($contact->isUnread())
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            Sin leer
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Leído
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center justify-end gap-3">
                                        <a href="{{ route('admin.contacts.show', $contact) }}"
                                           class="text-sm text-primary hover:text-red-700 font-medium transition-colors">
                                            Ver
                                        </a>

                                        @if($contact->isUnread())
                                            <form method="POST" action="{{ route('admin.contacts.mark-read', $contact) }}">
                                                @csrf @method('PATCH')
                                                <button type="submit" class="text-sm text-gray-500 hover:text-gray-700 transition-colors">
                                                    Marcar leído
                                                </button>
                                            </form>
                                        @endif

                                        @if(auth()->user()->isAdmin())
                                            <div x-data>
                                                <button
                                                    @click="if(confirm('¿Eliminar este mensaje de {{ addslashes($contact->name) }}?')) $refs.deleteForm{{ $contact->id }}.submit()"
                                                    class="text-sm text-red-500 hover:text-red-700 transition-colors">
                                                    Eliminar
                                                </button>
                                                <form x-ref="deleteForm{{ $contact->id }}" method="POST"
                                                      action="{{ route('admin.contacts.destroy', $contact) }}" class="hidden">
                                                    @csrf @method('DELETE')
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($contacts->hasPages())
                <div class="px-6 py-4 border-t border-gray-100">
                    {{ $contacts->links() }}
                </div>
            @endif
        @endif
    </div>

</x-admin-layout>
