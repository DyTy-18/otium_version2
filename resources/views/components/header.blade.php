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
            <img src="/images/logo-otium.webp" alt="OTIUM" class="h-10 transition-all duration-300">
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex gap-8 items-center font-medium transition-colors duration-300"
            :class="{ 'text-gray-900': scrolled, 'text-gray-800 hover:text-primary': !scrolled }">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">{{ __('Inicio') }}</a>
            <a href="{{ route('services.index') }}" class="hover:text-primary transition-colors">{{ __('Servicios') }}</a>
            <a href="{{ route('about') }}" class="hover:text-primary transition-colors">{{ __('Nosotros') }}</a>
            <a href="{{ route('blog.index') }}" class="hover:text-primary transition-colors">{{ __('Blog') }}</a>
            <a href="{{ route('doing-business') }}"
                class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-sm font-semibold border border-accent text-accent hover:bg-accent hover:text-white hover:border-accent hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200 {{ request()->routeIs('doing-business') ? 'bg-accent text-white border-accent' : '' }}">
                <svg class="w-3 h-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Doing Business
            </a>
        </nav>

        <!-- Desktop Right: Language Switcher + CTA -->
        <div class="hidden md:flex items-center gap-4">

            <!-- Language Switcher -->
            <div x-data="{ open: false }" class="relative" @click.outside="open = false">
                <button @click="open = !open"
                    class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-sm font-semibold border transition-all duration-200"
                    :class="scrolled
                        ? 'border-gray-200 text-gray-700 hover:border-primary hover:text-primary bg-white/80'
                        : 'border-white/40 text-gray-800 hover:border-primary hover:text-primary bg-white/20 backdrop-blur-sm'">
                    @php
                        $currentLocale = app()->getLocale();
                        $flags = ['es' => '🇧🇴', 'en' => '🇬🇧', 'pt' => '🇧🇷'];
                        $labels = ['es' => 'ES', 'en' => 'EN', 'pt' => 'PT'];
                    @endphp
                    <span>{{ $flags[$currentLocale] }}</span>
                    <span>{{ $labels[$currentLocale] }}</span>
                    <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <!-- Dropdown -->
                <div x-show="open" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-1"
                    style="display:none;"
                    class="absolute right-0 mt-2 w-36 bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden z-50">
                    @foreach(['es' => ['flag' => '🇧🇴', 'label' => 'Español'], 'en' => ['flag' => '🇬🇧', 'label' => 'English'], 'pt' => ['flag' => '🇧🇷', 'label' => 'Português']] as $locale => $data)
                    <a href="{{ route('lang.switch', $locale) }}"
                        class="flex items-center gap-2.5 px-4 py-2.5 text-sm font-medium transition-colors duration-150 {{ $currentLocale === $locale ? 'bg-primary/5 text-primary' : 'text-gray-700 hover:bg-gray-50 hover:text-primary' }}">
                        <span class="text-base">{{ $data['flag'] }}</span>
                        <span>{{ $data['label'] }}</span>
                        @if($currentLocale === $locale)
                        <svg class="w-3.5 h-3.5 ml-auto text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        @endif
                    </a>
                    @endforeach
                </div>
            </div>

            @unless(request()->routeIs('contact'))
            <a href="{{ route('contact') }}"
                class="bg-primary text-white px-6 py-2.5 rounded-lg font-semibold shadow-lg hover:bg-white hover:text-primary transition-all transform hover:-translate-y-0.5">
                {{ __('Diagnóstico Gratuito') }}
            </a>
            @endunless
        </div>

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
            class="text-2xl font-bold text-gray-900 hover:text-primary transition-colors">{{ __('Inicio') }}</a>
        <a href="{{ route('services.index') }}" @click="mobileMenuOpen = false"
            class="text-2xl font-bold text-gray-900 hover:text-primary transition-colors">{{ __('Servicios') }}</a>
        <a href="{{ route('about') }}" @click="mobileMenuOpen = false"
            class="text-2xl font-bold text-gray-900 hover:text-primary transition-colors">{{ __('Nosotros') }}</a>
        <a href="{{ route('blog.index') }}" @click="mobileMenuOpen = false"
            class="text-2xl font-bold text-gray-900 hover:text-primary transition-colors">{{ __('Blog') }}</a>
        <a href="{{ route('doing-business') }}" @click="mobileMenuOpen = false"
            class="flex items-center gap-2 px-5 py-2.5 rounded-xl border-2 border-accent text-accent font-bold text-lg hover:bg-accent hover:text-white transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Doing Business
        </a>

        @unless(request()->routeIs('contact'))
        <a href="{{ route('contact') }}" @click="mobileMenuOpen = false"
            class="bg-primary text-white px-8 py-3 rounded-xl font-bold text-xl shadow-lg hover:bg-white hover:text-primary transition-all">
            {{ __('Diagnóstico Gratuito') }}
        </a>
        @endunless

        <!-- Mobile Language Switcher -->
        <div class="flex items-center gap-3 pt-2">
            @foreach(['es' => ['flag' => '🇧🇴', 'label' => 'ES'], 'en' => ['flag' => '🇬🇧', 'label' => 'EN'], 'pt' => ['flag' => '🇧🇷', 'label' => 'PT']] as $locale => $data)
            <a href="{{ route('lang.switch', $locale) }}"
                class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-sm font-semibold border transition-all {{ app()->getLocale() === $locale ? 'border-primary text-primary bg-primary/5' : 'border-gray-200 text-gray-500 hover:border-primary hover:text-primary' }}">
                <span>{{ $data['flag'] }}</span>
                <span>{{ $data['label'] }}</span>
            </a>
            @endforeach
        </div>
    </div>
</header>
