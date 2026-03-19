<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión — OTIUM Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased h-full">

<div class="min-h-screen flex">

    {{-- Panel izquierdo — branding --}}
    <div class="hidden lg:flex lg:w-1/2 bg-primary flex-col items-center justify-center p-12 relative overflow-hidden">
        {{-- Decoración de fondo --}}
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-20 w-64 h-64 rounded-full bg-white"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 rounded-full bg-white"></div>
        </div>

        <div class="relative z-10 text-center text-white">
            <img src="https://otium.com.bo/images/logo-otium.webp" alt="OTIUM" class="h-16 mx-auto mb-10 brightness-0 invert">
            <h2 class="text-3xl font-bold mb-4">Panel Administrativo</h2>
            <p class="text-white/80 text-lg max-w-sm mx-auto leading-relaxed">
                Gestione los mensajes de contacto, usuarios y el contenido de OTIUM desde un solo lugar.
            </p>

            <div class="mt-12 grid grid-cols-3 gap-6 text-center">
                <div class="bg-white/10 rounded-xl p-4">
                    <div class="text-2xl font-bold">3</div>
                    <div class="text-white/70 text-sm mt-1">Roles</div>
                </div>
                <div class="bg-white/10 rounded-xl p-4">
                    <div class="text-2xl font-bold">100%</div>
                    <div class="text-white/70 text-sm mt-1">Seguro</div>
                </div>
                <div class="bg-white/10 rounded-xl p-4">
                    <div class="text-2xl font-bold">24/7</div>
                    <div class="text-white/70 text-sm mt-1">Acceso</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel derecho — formulario --}}
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white">
        <div class="w-full max-w-md">

            {{-- Logo móvil --}}
            <div class="lg:hidden text-center mb-8">
                <img src="https://otium.com.bo/images/logo-otium.webp" alt="OTIUM" class="h-12 mx-auto">
            </div>

            <div class="mb-8">
                <h1 class="text-2xl font-bold text-gray-900">Bienvenido de vuelta</h1>
                <p class="text-gray-500 mt-2">Ingrese sus credenciales para acceder al panel.</p>
            </div>

            {{-- Errores generales --}}
            @if (session('error'))
                <div class="bg-red-50 border border-red-200 text-red-700 rounded-lg p-4 mb-6 text-sm">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.store') }}" x-data="{ showPassword: false }">
                @csrf

                {{-- Email --}}
                <div class="mb-5">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Correo electrónico
                    </label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        autocomplete="email"
                        autofocus
                        class="w-full px-4 py-3 rounded-lg border @error('email') border-red-400 bg-red-50 @else border-gray-300 @enderror focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors text-gray-900"
                        placeholder="admin@otium.com.bo"
                    >
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Contraseña --}}
                <div class="mb-5">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        Contraseña
                    </label>
                    <div class="relative">
                        <input
                            id="password"
                            :type="showPassword ? 'text' : 'password'"
                            name="password"
                            autocomplete="current-password"
                            class="w-full px-4 py-3 pr-12 rounded-lg border @error('password') border-red-400 bg-red-50 @else border-gray-300 @enderror focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-colors text-gray-900"
                            placeholder="••••••••"
                        >
                        <button
                            type="button"
                            @click="showPassword = !showPassword"
                            class="absolute inset-y-0 right-0 px-4 flex items-center text-gray-400 hover:text-gray-600"
                        >
                            <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <svg x-show="showPassword" style="display:none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Recordarme --}}
                <div class="flex items-center mb-6">
                    <input
                        id="remember"
                        type="checkbox"
                        name="remember"
                        class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary/30"
                    >
                    <label for="remember" class="ml-2 text-sm text-gray-600">Recordarme</label>
                </div>

                <button
                    type="submit"
                    class="w-full bg-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-red-700 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/50 focus:ring-offset-2"
                >
                    Iniciar Sesión
                </button>
            </form>

            <p class="text-center text-sm text-gray-400 mt-8">
                &copy; {{ date('Y') }} OTIUM. Todos los derechos reservados.
            </p>
        </div>
    </div>

</div>

</body>
</html>
