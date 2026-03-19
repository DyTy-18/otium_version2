<x-admin-layout title="Usuarios">

    @php
        $roleLabels = ['super_admin' => 'Super Admin', 'admin' => 'Admin', 'editor' => 'Editor'];
        $roleColors = [
            'super_admin' => 'bg-red-100 text-red-700',
            'admin'       => 'bg-teal-100 text-teal-700',
            'editor'      => 'bg-orange-100 text-orange-700',
        ];
    @endphp

    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-xl font-semibold text-gray-900">Usuarios del Sistema</h2>
            <p class="text-sm text-gray-500 mt-1">Gestione los usuarios que tienen acceso al panel admin.</p>
        </div>
        <a href="{{ route('admin.users.create') }}"
           class="inline-flex items-center gap-2 px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Crear Usuario
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        @if($users->isEmpty())
            <div class="px-6 py-16 text-center">
                <p class="text-gray-400 font-medium">No hay usuarios registrados.</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider hidden md:table-cell">Correo</th>
                            <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Rol</th>
                            <th class="text-left px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider hidden lg:table-cell">Creado</th>
                            <th class="text-right px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @foreach($users as $user)
                            <tr class="{{ $user->id === auth()->id() ? 'bg-primary/5' : 'bg-white' }} hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-sm font-bold text-gray-600 shrink-0">
                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-900">
                                                {{ $user->name }}
                                                @if($user->id === auth()->id())
                                                    <span class="text-xs text-gray-400 ml-1">(yo)</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 hidden md:table-cell">
                                    <p class="text-sm text-gray-600">{{ $user->email }}</p>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold {{ $roleColors[$user->role] ?? 'bg-gray-100 text-gray-600' }}">
                                        {{ $roleLabels[$user->role] ?? $user->role }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 hidden lg:table-cell">
                                    <p class="text-sm text-gray-500">{{ $user->created_at->format('d/m/Y') }}</p>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center justify-end gap-3">
                                        <a href="{{ route('admin.users.edit', $user) }}"
                                           class="text-sm text-primary hover:text-red-700 font-medium transition-colors">
                                            Editar
                                        </a>

                                        @if($user->id !== auth()->id())
                                            <div x-data>
                                                <button
                                                    @click="if(confirm('¿Eliminar al usuario {{ addslashes($user->name) }}?')) $refs.delUser{{ $user->id }}.submit()"
                                                    class="text-sm text-red-500 hover:text-red-700 transition-colors">
                                                    Eliminar
                                                </button>
                                                <form x-ref="delUser{{ $user->id }}" method="POST"
                                                      action="{{ route('admin.users.destroy', $user) }}" class="hidden">
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

            @if($users->hasPages())
                <div class="px-6 py-4 border-t border-gray-100">
                    {{ $users->links() }}
                </div>
            @endif
        @endif
    </div>

</x-admin-layout>
