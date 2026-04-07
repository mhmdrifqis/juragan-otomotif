<nav x-data="{ mobileMenuOpen: false }" class="bg-white/80 dark:bg-slate-900/80 backdrop-blur-lg sticky top-0 z-40 border-b border-slate-200/50 dark:border-slate-800/50 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center gap-2 text-2xl font-bold tracking-tight text-slate-900 dark:text-white">
                    <img src="{{ asset('assets/images/logo.png') }}" 
                         alt="Logo" 
                         class="h-10 w-auto" 
                         onerror="this.style.display='none'">
                    <span>JURAGAN<span class="text-primary-600 dark:text-primary-500">OTOMOTIF</span></span>
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="/" class="text-slate-600 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium transition-colors">Beranda</a>
                <a href="/katalog" class="text-slate-600 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium transition-colors">Katalog Mobil</a>
                <a href="#" class="text-slate-600 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium transition-colors">Layanan Kami</a>
                <a href="#" class="text-slate-600 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium transition-colors">Tentang Kami</a>
            </div>
            
            <div class="hidden md:flex items-center space-x-4">
                <!-- Dark Mode Toggle -->
                <button @click="darkMode = !darkMode" class="cursor-pointer p-2 text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition-colors">
                    <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    <svg x-show="darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </button>

                <!-- Auth Section -->
                @auth
                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = !dropdownOpen" @click.away="dropdownOpen = false" class="flex items-center space-x-2 text-sm font-medium text-slate-700 dark:text-slate-200 border border-slate-200 dark:border-slate-700 px-4 py-2 rounded-full hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors cursor-pointer">
                            <div class="w-6 h-6 rounded-full bg-primary-600 text-white flex items-center justify-center text-xs">
                                {{ substr(auth()->user()->name, 0, 1) }}
                            </div>
                            <span>Halo, {{ explode(' ', auth()->user()->name)[0] }}</span>
                        </button>
                        <div x-show="dropdownOpen" class="absolute right-0 mt-2 w-52 bg-white dark:bg-slate-800 rounded-2xl shadow-xl border border-slate-100 dark:border-slate-700 py-2 overflow-hidden" style="display: none;">
                            <a href="/dashboard" class="flex items-center gap-2 px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 cursor-pointer">
                                <span>👤</span> Dasbor Saya
                            </a>
                            @if(auth()->user()->email === 'admin@juragan.com')
                                <a href="/admin" class="flex items-center gap-2 px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 cursor-pointer">
                                    <span>⚙️</span> Admin Panel
                                </a>
                            @endif
                            <div class="border-t border-slate-100 dark:border-slate-700 mt-1 pt-1">
                                <form method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" class="w-full text-left flex items-center gap-2 px-4 py-2.5 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-slate-700 cursor-pointer"><span>🚪</span> Keluar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <button @click="$dispatch('openAuthModal')" class="cursor-pointer px-5 py-2.5 rounded-full bg-primary-600 text-white font-medium hover:bg-primary-500 transition-all shadow-md shadow-primary-500/20 text-sm border border-primary-500">
                        Masuk / Daftar
                    </button>
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden space-x-2">
                <button @click="darkMode = !darkMode" class="cursor-pointer p-2 text-slate-500 dark:text-slate-400">
                    <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    <svg x-show="darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </button>
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="cursor-pointer text-slate-600 dark:text-slate-300 hover:text-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 p-2 rounded-md">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" style="display: none;"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" 
         x-transition
         class="md:hidden bg-white/95 dark:bg-slate-900/95 backdrop-blur-lg border-b border-slate-100 dark:border-slate-800 absolute w-full shadow-lg" style="display: none;">
        <div class="px-4 pt-2 pb-6 space-y-1">
            <a href="/" class="block px-3 py-3 rounded-md text-base font-medium text-primary-600 bg-primary-50 dark:bg-slate-800 dark:text-primary-400">Beranda</a>
            <a href="/katalog" class="block px-3 py-3 rounded-md text-base font-medium text-slate-700 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 dark:hover:bg-slate-800">Katalog Mobil</a>
            <a href="#" class="block px-3 py-3 rounded-md text-base font-medium text-slate-700 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 dark:hover:bg-slate-800">Layanan Kami</a>
            <a href="#" class="block px-3 py-3 rounded-md text-base font-medium text-slate-700 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 dark:hover:bg-slate-800">Tentang Kami</a>
            
            <div class="mt-4 pt-4 border-t border-slate-100 dark:border-slate-800">
                @auth
                    <div class="px-3 py-2 text-slate-600 dark:text-slate-400">Masuk sebagai {{ auth()->user()->name }}</div>
                    <a href="/dashboard" class="block px-3 py-3 rounded-md text-base font-medium text-slate-700 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 dark:hover:bg-slate-800">👤 Dasbor Saya</a>
                    @if(auth()->user()->email === 'admin@juragan.com')
                        <a href="/admin" class="block w-full text-center px-4 py-3 mt-2 rounded-md shadow-sm text-base font-medium text-white bg-slate-800 hover:bg-slate-700">Admin Panel</a>
                    @endif
                    <form method="POST" action="/logout" class="mt-2">
                        @csrf
                        <button type="submit" class="w-full text-center px-4 py-3 border border-red-200 dark:border-red-900 rounded-md text-base font-medium text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/30">Keluar</button>
                    </form>
                @else
                    <button @click="$dispatch('openAuthModal'); mobileMenuOpen = false" class="cursor-pointer block w-full text-center px-4 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-500">
                        Masuk / Daftar Akun
                    </button>
                @endauth
            </div>
        </div>
    </div>
</nav>
