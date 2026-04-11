<div>
    <div x-data="{ show: @entangle('isOpen') }" 
         x-show="show" 
         x-cloak
         class="fixed inset-0 z-[100] flex items-center justify-center overflow-y-auto overflow-x-hidden bg-slate-900/60 backdrop-blur-sm p-4 w-full h-full"
         style="display: none;">
         
        <div x-show="show" 
             x-transition:enter="ease-out duration-300" 
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
             x-transition:leave="ease-in duration-200" 
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
             @click.away="$wire.close()"
             class="relative w-full max-w-md bg-white dark:bg-slate-900 rounded-2xl shadow-2xl border border-slate-200 dark:border-slate-800 overflow-hidden transform transition-all">
            
            <!-- Close Button -->
            <button @click="$wire.close()" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors z-10 cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <!-- Decorative Blur -->
            <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-br from-primary-500/20 to-blue-600/20 blur-xl"></div>

            <div class="relative p-8">
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Juragan Otomotif" class="h-12 w-auto drop-shadow-xl">
                </div>
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">
                        {{ $isLogin ? 'Selamat Datang Kembali' : 'Bergabung Bersama Kami' }}
                    </h2>
                    <p class="text-slate-500 dark:text-slate-400 text-sm">
                        {{ $isLogin ? 'Masuk untuk mengakses layanan premium Juragan Otomotif.' : 'Mulai perjalanan otomotif Anda di sini.' }}
                    </p>
                </div>

                <form wire:submit.prevent="submit" class="space-y-4">
                    
                    @if(!$isLogin)
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Nama Lengkap</label>
                        <input wire:model="name" type="text" class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary-500 focus:ring-primary-500 transition-colors px-4 py-3" placeholder="Masukkan nama Anda">
                        @error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>
                    @endif

                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Email</label>
                        <input wire:model="email" type="email" class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary-500 focus:ring-primary-500 transition-colors px-4 py-3" placeholder="email@contoh.com">
                        @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    @if(!$isLogin)
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Nomor WhatsApp</label>
                        <input wire:model="whatsapp_number" type="text" class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary-500 focus:ring-primary-500 transition-colors px-4 py-3" placeholder="08123456789">
                        @error('whatsapp_number') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>
                    @endif

                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Password</label>
                        <input wire:model="password" type="password" class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary-500 focus:ring-primary-500 transition-colors px-4 py-3" placeholder="••••••••">
                        @error('password') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    @if(!$isLogin)
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Konfirmasi Password</label>
                        <input wire:model="password_confirmation" type="password" class="w-full rounded-xl border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary-500 focus:ring-primary-500 transition-colors px-4 py-3" placeholder="••••••••">
                    </div>
                    @endif

                    <div class="pt-4">
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-lg shadow-primary-500/20 text-sm font-bold text-white bg-primary-600 hover:bg-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600 transition-all cursor-pointer">
                            <span wire:loading.remove wire:target="submit">
                                {{ $isLogin ? 'Masuk Sekarang' : 'Daftar Sekarang' }}
                            </span>
                            <span wire:loading wire:target="submit">
                                Memproses...
                            </span>
                        </button>
                    </div>
                </form>

                {{-- OR Divider --}}
                <div class="mt-6 relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-slate-200 dark:border-slate-800"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white dark:bg-slate-900 text-slate-500 font-medium">Atau lanjutkan dengan</span>
                    </div>
                </div>

                {{-- Social Login --}}
                <div class="mt-6">
                    <a href="{{ route('google.redirect') }}" class="w-full flex justify-center items-center gap-3 py-3 px-4 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm font-semibold text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all shadow-sm cursor-pointer">
                        <svg class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                        Google
                    </a>
                </div>

                <div class="mt-6 text-center">
                    <p class="text-sm text-slate-500 dark:text-slate-400">
                        {{ $isLogin ? 'Belum punya akun?' : 'Sudah punya akun?' }}
                        <button wire:click="toggleMode" type="button" class="font-medium text-primary-600 hover:text-primary-500 transition-colors cursor-pointer">
                            {{ $isLogin ? 'Daftar di sini' : 'Masuk di sini' }}
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
