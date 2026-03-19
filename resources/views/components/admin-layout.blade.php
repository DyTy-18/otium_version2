@props(['title' => 'Admin'])

<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} — OTIUM Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased h-full bg-gray-100">

<div class="flex h-screen" x-data="{ sidebarOpen: false }">

    {{-- Sidebar --}}
    <x-admin-sidebar />

    {{-- Contenido principal --}}
    <div class="flex-1 flex flex-col overflow-hidden">

        {{-- Topbar --}}
        <header class="bg-white shadow-sm z-10">
            <div class="flex items-center justify-between px-6 py-4">
                {{-- Botón hamburger móvil --}}
                <button @click="sidebarOpen = true" class="lg:hidden text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <h1 class="text-lg font-semibold text-gray-900 lg:ml-0 ml-4">{{ $title }}</h1>

                <div class="flex items-center gap-3">
                    <a href="{{ route('home') }}" target="_blank"
                       class="text-sm text-gray-500 hover:text-primary transition-colors flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                        Ver sitio
                    </a>
                    <span class="text-gray-300">|</span>
                    <span class="text-sm text-gray-600 font-medium">{{ auth()->user()->name }}</span>
                    @php
                        $roleLabels = ['super_admin' => 'Super Admin', 'admin' => 'Admin', 'editor' => 'Editor'];
                        $roleColors = ['super_admin' => 'bg-red-100 text-red-700', 'admin' => 'bg-teal-100 text-teal-700', 'editor' => 'bg-orange-100 text-orange-700'];
                    @endphp
                    <span class="text-xs font-semibold px-2 py-1 rounded-full {{ $roleColors[auth()->user()->role] ?? 'bg-gray-100 text-gray-600' }}">
                        {{ $roleLabels[auth()->user()->role] ?? auth()->user()->role }}
                    </span>
                </div>
            </div>
        </header>

        {{-- Área de contenido --}}
        <main class="flex-1 overflow-y-auto p-6">
            @if(session('success'))
                <x-flash-message type="success" :message="session('success')" />
            @endif
            @if(session('error'))
                <x-flash-message type="error" :message="session('error')" />
            @endif
            @if(session('warning'))
                <x-flash-message type="warning" :message="session('warning')" />
            @endif

            {{ $slot }}
        </main>
    </div>
</div>

</body>
</html>
