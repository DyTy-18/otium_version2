<x-admin-layout title="Editar Usuario">

    <div class="max-w-2xl">
        {{-- Breadcrumb --}}
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">
            <a href="{{ route('admin.users.index') }}" class="hover:text-primary transition-colors">Usuarios</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="text-gray-900 font-medium">Editar: {{ $user->name }}</span>
        </div>

        <div class="bg-white rounded-xl shadow-sm">
            <div class="px-8 py-6 border-b border-gray-100">
                <h2 class="text-lg font-semibold text-gray-900">Editar Usuario</h2>
                <p class="text-sm text-gray-500 mt-1">Deje la contraseña en blanco para no cambiarla.</p>
            </div>

            <form method="POST" action="{{ route('admin.users.update', $user) }}" class="px-8 py-6 space-y-5">
                @csrf @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nombre Completo</label>
                        <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}"
                               @class(['w-full px-4 py-2.5 rounded-lg border text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors', 'border-red-400 bg-red-50' => $errors->has('name'), 'border-gray-300' => !$errors->has('name')])>
                        @error('name')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Correo Electrónico</label>
                        <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}"
                               @class(['w-full px-4 py-2.5 rounded-lg border text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors', 'border-red-400 bg-red-50' => $errors->has('email'), 'border-gray-300' => !$errors->has('email')])>
                        @error('email')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700 mb-2">Rol</label>
                    <select id="role" name="role"
                            @class(['w-full px-4 py-2.5 rounded-lg border text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors', 'border-red-400 bg-red-50' => $errors->has('role'), 'border-gray-300' => !$errors->has('role')])>
                        <option value="editor" @selected(old('role', $user->role) === 'editor')>Editor — Ver y marcar mensajes</option>
                        <option value="admin" @selected(old('role', $user->role) === 'admin')>Admin — Gestionar mensajes y ver usuarios</option>
                        <option value="super_admin" @selected(old('role', $user->role) === 'super_admin')>Super Admin — Acceso completo</option>
                    </select>
                    @error('role')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Nueva Contraseña
                            <span class="text-gray-400 font-normal">(opcional)</span>
                        </label>
                        <input id="password" type="password" name="password"
                               @class(['w-full px-4 py-2.5 rounded-lg border text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors', 'border-red-400 bg-red-50' => $errors->has('password'), 'border-gray-300' => !$errors->has('password')])
                               placeholder="Dejar en blanco para no cambiar">
                        @error('password')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirmar Contraseña</label>
                        <input id="password_confirmation" type="password" name="password_confirmation"
                               class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors"
                               placeholder="Repetir nueva contraseña">
                    </div>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <a href="{{ route('admin.users.index') }}"
                       class="text-sm text-gray-600 hover:text-gray-900 font-medium transition-colors">
                        Cancelar
                    </a>
                    <button type="submit"
                            class="px-6 py-2.5 bg-primary text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/50">
                        Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>

</x-admin-layout>
