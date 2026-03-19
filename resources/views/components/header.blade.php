<header x-data="{ scrolled: false, mobileMenuOpen: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{
        'bg-white/90 shadow-md py-4 backdrop-blur-md': scrolled && !mobileMenuOpen,
        'bg-transparent py-6': !scrolled && !mobileMenuOpen,
        'bg-transparent': mobileMenuOpen
    }"
    class="fixed top-0 w-full z-50 transition-all duration-300">
    <div class="container mx-auto px-6 flex justify-between items-center relative z-50">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-2 relative z-50">
            <img src="https://otium.com.bo/images/logo-otium.webp" alt="OTIUM" class="h-10 transition-all duration-300">
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex gap-8 items-center font-medium transition-colors duration-300"
            :class="{ 'text-gray-900': scrolled, 'text-gray-800 hover:text-primary': !scrolled }">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Inicio</a>
            <a href="{{ route('services.index') }}" class="hover:text-primary transition-colors">Servicios</a>
            <a href="{{ route('about') }}" class="hover:text-primary transition-colors">Nosotros</a>
            <a href="{{ route('blog.index') }}" class="hover:text-primary transition-colors">Blog</a>
        </nav>

        <!-- Desktop CTA -->
        <a href="{{ route('contact') }}"
            class="hidden md:inline-block bg-primary text-white px-6 py-2.5 rounded-lg font-semibold shadow-lg hover:bg-white hover:text-primary transition-all transform hover:-translate-y-0.5">
            Contacto
        </a>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen"
            class="md:hidden text-gray-900 focus:outline-none relative z-50 p-2 rounded-lg bg-white/50 backdrop-blur-sm"
            aria-label="Toggle menu">
            <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="mobileMenuOpen" style="display: none;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu Overlay -->
    <div x-show="mobileMenuOpen" style="display: none;"
        class="fixed inset-0 w-full h-screen bg-white/95 backdrop-blur-xl flex flex-col items-center justify-center space-y-8 md:hidden z-40"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-full"
        x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-full">

        <a href="{{ route('home') }}" @click="mobileMenuOpen = false"
            class="text-2xl font-bold text-gray-900 hover:text-primary transition-colors">Inicio</a>
        <a href="{{ route('services.index') }}" @click="mobileMenuOpen = false"
            class="text-2xl font-bold text-gray-900 hover:text-primary transition-colors">Servicios</a>
        <a href="{{ route('about') }}" @click="mobileMenuOpen = false"
            class="text-2xl font-bold text-gray-900 hover:text-primary transition-colors">Nosotros</a>
        <a href="{{ route('blog.index') }}" @click="mobileMenuOpen = false"
            class="text-2xl font-bold text-gray-900 hover:text-primary transition-colors">Blog</a>

        <a href="{{ route('contact') }}" @click="mobileMenuOpen = false"
            class="bg-primary text-white px-8 py-3 rounded-xl font-bold text-xl shadow-lg hover:bg-white hover:text-primary transition-all">
            Contacto
        </a>
    </div>
</header>
