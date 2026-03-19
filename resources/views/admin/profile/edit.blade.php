<x-admin-layout title="Mi Perfil">

    <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">
        <span class="text-gray-900 font-medium">Mi Perfil</span>
    </div>

    <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- Avatar --}}
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm p-6" x-data="avatarPreview('{{ $user->avatar ? Storage::url($user->avatar) : '' }}')">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">Foto de perfil</h3>

                    <div class="flex flex-col items-center gap-4">
                        <div class="relative">
                            <template x-if="preview">
                                <img :src="preview" class="w-28 h-28 rounded-full object-cover border-4 border-gray-100 shadow">
                            </template>
                            <template x-if="!preview">
                                <div class="w-28 h-28 rounded-full bg-primary/10 flex items-center justify-center text-4xl font-bold text-primary border-4 border-gray-100 shadow">
                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                </div>
                            </template>
                        </div>

                        <div class="w-full border-2 border-dashed border-gray-300 rounded-lg p-4 text-center hover:border-primary transition-colors cursor-pointer"
                             @click="$refs.avatarFile.click()">
                            <svg class="w-6 h-6 text-gray-400 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <p class="text-xs text-gray-500">Click para cambiar</p>
                            <p class="text-xs text-gray-400">JPG, PNG · máx 2MB</p>
                        </div>
                        <input x-ref="avatarFile" type="file" name="avatar" accept="image/*" class="hidden"
                               @change="preview = URL.createObjectURL($event.target.files[0])">

                        @error('avatar')
                            <p class="text-red-600 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Datos --}}
            <div class="lg:col-span-2 space-y-6">

                <div class="bg-white rounded-xl shadow-sm p-6 space-y-5">
                    <h3 class="text-sm font-semibold text-gray-900">Información personal</h3>

                    {{-- Nombre --}}
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre completo *</label>
                        <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}"
                               class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors">
                        @error('name')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Cargo --}}
                    <div>
                        <label for="job_title" class="block text-sm font-medium text-gray-700 mb-1">Cargo / Título profesional</label>
                        <input id="job_title" type="text" name="job_title" value="{{ old('job_title', $user->job_title) }}"
                               placeholder="Ej: Consultor Financiero Senior"
                               class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors">
                        @error('job_title')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Bio --}}
                    <div>
                        <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">
                            Biografía
                            <span class="text-gray-400 font-normal">(máx. 1000 caracteres)</span>
                        </label>
                        <textarea id="bio" name="bio" rows="4"
                                  placeholder="Cuéntale a los lectores quién eres y tu experiencia profesional..."
                                  class="w-full px-4 py-2.5 rounded-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors resize-none">{{ old('bio', $user->bio) }}</textarea>
                        @error('bio')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 space-y-5">
                    <h3 class="text-sm font-semibold text-gray-900">Redes sociales</h3>

                    {{-- LinkedIn --}}
                    <div>
                        <label for="linkedin" class="block text-sm font-medium text-gray-700 mb-1">LinkedIn</label>
                        <div class="flex items-center">
                            <span class="inline-flex items-center px-3 py-2.5 rounded-l-lg border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </span>
                            <input id="linkedin" type="url" name="linkedin" value="{{ old('linkedin', $user->linkedin) }}"
                                   placeholder="https://linkedin.com/in/tu-perfil"
                                   class="flex-1 px-4 py-2.5 rounded-r-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors">
                        </div>
                        @error('linkedin')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Twitter --}}
                    <div>
                        <label for="twitter" class="block text-sm font-medium text-gray-700 mb-1">Twitter / X</label>
                        <div class="flex items-center">
                            <span class="inline-flex items-center px-3 py-2.5 rounded-l-lg border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </span>
                            <input id="twitter" type="url" name="twitter" value="{{ old('twitter', $user->twitter) }}"
                                   placeholder="https://x.com/tu-usuario"
                                   class="flex-1 px-4 py-2.5 rounded-r-lg border border-gray-300 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors">
                        </div>
                        @error('twitter')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                            class="px-6 py-2.5 bg-primary text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
                        Guardar cambios
                    </button>
                </div>

            </div>
        </div>
    </form>

    <script>
        function avatarPreview(initial) {
            return { preview: initial || null };
        }
    </script>

</x-admin-layout>
