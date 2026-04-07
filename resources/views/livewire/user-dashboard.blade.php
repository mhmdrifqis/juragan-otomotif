<div x-data="{ tab: @entangle('activeTab') }">

    {{-- Page Header --}}
    <div class="relative bg-gradient-to-br from-slate-900 to-primary-900 overflow-hidden pt-24 pb-20">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary-500/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-indigo-500/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-5">
                <div class="w-16 h-16 rounded-2xl bg-white/20 backdrop-blur flex items-center justify-center text-3xl font-black text-white border border-white/30 shadow-xl">
                    {{ substr(auth()->user()->name, 0, 1) }}
                </div>
                <div>
                    <p class="text-primary-200 text-sm font-medium">Selamat Datang Kembali,</p>
                    <h1 class="text-3xl font-extrabold text-white">{{ auth()->user()->name }}</h1>
                    <p class="text-primary-300 text-sm">{{ auth()->user()->email }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Container --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 pb-24 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            {{-- Sidebar Navigation --}}
            <div class="lg:col-span-1">
                <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 p-4 sticky top-24">
                    <nav class="space-y-1">
                        <button
                            @click="tab = 'profile'"
                            :class="tab === 'profile' ? 'bg-primary-50 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 font-semibold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700/50'"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm transition-all cursor-pointer text-left"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            Profil Saya
                        </button>
                        <button
                            @click="tab = 'password'"
                            :class="tab === 'password' ? 'bg-primary-50 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 font-semibold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700/50'"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm transition-all cursor-pointer text-left"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                            </svg>
                            Ganti Password
                        </button>
                        <button
                            @click="tab = 'bookings'"
                            :class="tab === 'bookings' ? 'bg-primary-50 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 font-semibold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700/50'"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm transition-all cursor-pointer text-left"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            Riwayat Booking
                            @if($bookings->count() > 0)
                                <span class="ml-auto bg-primary-600 text-white text-xs px-2 py-0.5 rounded-full">{{ $bookings->count() }}</span>
                            @endif
                        </button>
                        <button
                            @click="tab = 'wishlist'"
                            :class="tab === 'wishlist' ? 'bg-primary-50 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 font-semibold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700/50'"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm transition-all cursor-pointer text-left"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-rose-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                            Mobil Disukai
                            @if($wishlistedCars->count() > 0)
                                <span class="ml-auto bg-primary-600 text-white text-xs px-2 py-0.5 rounded-full">{{ $wishlistedCars->count() }}</span>
                            @endif
                        </button>
                    </nav>

                    <div class="mt-6 pt-4 border-t border-slate-100 dark:border-slate-700">
                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm text-red-500 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-all cursor-pointer text-left">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                                </svg>
                                Keluar
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Content Area --}}
            <div class="lg:col-span-3">

                {{-- Tab: Profil Saya --}}
                <div x-show="tab === 'profile'" x-cloak>
                    <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 p-8">
                         <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-3">

                        <form wire:submit="updateProfile" class="space-y-5">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Nama Lengkap</label>
                                <input wire:model="name" type="text" class="w-full px-4 py-3 rounded-2xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900/50 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition">
                                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Alamat Email</label>
                                <input wire:model="email" type="email" class="w-full px-4 py-3 rounded-2xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900/50 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition">
                                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Nomor WhatsApp</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-4 flex items-center text-slate-400 text-sm">+62</span>
                                    <input wire:model="whatsapp_number" type="text" placeholder="812xxxxxxxx" class="w-full pl-14 pr-4 py-3 rounded-2xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900/50 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition">
                                </div>
                                <p class="text-xs text-slate-400 mt-1">Nomor ini digunakan Admin untuk follow-up booking Anda.</p>
                                @error('whatsapp_number') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div class="pt-2">
                                <button type="submit" wire:loading.attr="disabled" class="cursor-pointer px-8 py-3 bg-primary-600 hover:bg-primary-500 text-white font-bold rounded-2xl transition-all shadow-lg shadow-primary-600/20 flex items-center gap-2 disabled:opacity-70">
                                    <span wire:loading.remove class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        Simpan Perubahan
                                    </span>
                                    <span wire:loading>Menyimpan...</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Tab: Ganti Password --}}
                <div x-show="tab === 'password'" x-cloak>
                    <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 p-8">
                         <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-3">

                        <form wire:submit="updatePassword" class="space-y-5">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Kata Sandi Saat Ini</label>
                                <input wire:model="current_password" type="password" class="w-full px-4 py-3 rounded-2xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900/50 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition">
                                @error('current_password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Kata Sandi Baru</label>
                                <input wire:model="new_password" type="password" class="w-full px-4 py-3 rounded-2xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900/50 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition">
                                @error('new_password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Konfirmasi Kata Sandi Baru</label>
                                <input wire:model="new_password_confirmation" type="password" class="w-full px-4 py-3 rounded-2xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900/50 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition">
                            </div>
                            <div class="pt-2">
                                <button type="submit" wire:loading.attr="disabled" class="cursor-pointer px-8 py-3 bg-amber-500 hover:bg-amber-400 text-white font-bold rounded-2xl transition-all shadow-lg shadow-amber-500/20 flex items-center gap-2 disabled:opacity-70">
                                    <span wire:loading.remove class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                        </svg>
                                        Perbarui Kata Sandi
                                    </span>
                                    <span wire:loading>Memproses...</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Tab: Riwayat Booking --}}
                <div x-show="tab === 'bookings'" x-cloak>
                    <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 p-8">
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-3">
                            <span class="w-9 h-9 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                            </span>
                            Riwayat Booking Saya
                        </h2>

                        @if($bookings->count() === 0)
                            <div class="text-center py-16">
                                <div class="w-20 h-20 mx-auto rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-400 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-1.242-1.008-2.25-2.25-2.25H4.5c-1.242 0-2.25 1.008-2.25 2.25Z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-700 dark:text-slate-300 mb-2">Belum Ada Booking</h3>
                                <p class="text-slate-400 dark:text-slate-500 mb-6">Anda belum pernah melakukan booking. Temukan mobil impian Anda sekarang!</p>
                                <a href="/katalog" class="inline-flex items-center gap-2 px-6 py-3 bg-primary-600 hover:bg-primary-500 text-white font-bold rounded-2xl transition-all shadow-lg shadow-primary-600/20 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                    </svg>
                                    Jelajahi Katalog
                                </a>
                            </div>
                        @else
                            <div class="space-y-4">
                                @foreach($bookings as $booking)
                                    @php
                                        $statusConfig = [
                                            'pending'   => [
                                                'bg' => 'bg-amber-100 dark:bg-amber-900/30', 
                                                'text' => 'text-amber-700 dark:text-amber-300', 
                                                'icon' => '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                                                'label' => 'Menunggu'
                                            ],
                                            'Pending'   => [
                                                'bg' => 'bg-amber-100 dark:bg-amber-900/30', 
                                                'text' => 'text-amber-700 dark:text-amber-300', 
                                                'icon' => '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                                                'label' => 'Menunggu'
                                            ],
                                            'Follow_Up' => [
                                                'bg' => 'bg-blue-100 dark:bg-blue-900/30',   
                                                'text' => 'text-blue-700 dark:text-blue-300',   
                                                'icon' => '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>',
                                                'label' => 'Ditindaklanjuti'
                                            ],
                                            'Succeeded' => [
                                                'bg' => 'bg-green-100 dark:bg-green-900/30', 
                                                'text' => 'text-green-700 dark:text-green-300', 
                                                'icon' => '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>',
                                                'label' => 'Berhasil'
                                            ],
                                            'Cancelled' => [
                                                'bg' => 'bg-red-100 dark:bg-red-900/30',     
                                                'text' => 'text-red-700 dark:text-red-300',     
                                                'icon' => '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>',
                                                'label' => 'Dibatalkan'
                                            ],
                                        ];
                                        $s = $statusConfig[$booking->status] ?? [
                                            'bg' => 'bg-slate-100 dark:bg-slate-700', 
                                            'text' => 'text-slate-600 dark:text-slate-300', 
                                            'icon' => '',
                                            'label' => $booking->status
                                        ];
                                    @endphp
                                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 bg-slate-50 dark:bg-slate-900/50 p-4 rounded-2xl border border-slate-100 dark:border-slate-700 relative group/booking">
                                        {{-- Car Image --}}
                                        <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-xl overflow-hidden bg-slate-200 dark:bg-slate-700 flex-shrink-0">
                                            @if($booking->car->images->count() > 0)
                                                <img src="{{ Storage::url($booking->car->images->first()->image_path) }}" alt="{{ $booking->car->name }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-slate-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                                    </svg>
                                                </div>
                                            @endif
                                        </div>
                                        {{-- Info --}}
                                        <div class="flex-grow">
                                            <div class="text-xs font-bold text-primary-500 uppercase tracking-wide mb-1">{{ $booking->car->brand->name ?? '' }}</div>
                                            <h4 class="font-bold text-slate-900 dark:text-white text-lg leading-tight">{{ $booking->car->name }}</h4>
                                            <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Booking #{{ $booking->id }} · {{ $booking->created_at->format('d M Y, H:i') }}</p>
                                        </div>
                                        {{-- Price & Status --}}
                                        <div class="text-right shrink-0 flex flex-col items-end gap-2">
                                            <p class="font-black text-slate-900 dark:text-white text-lg">Rp {{ number_format($booking->car->price, 0, ',', '.') }}</p>
                                            <div class="flex items-center gap-2">
                                                <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-bold {{ $s['bg'] }} {{ $s['text'] }}">
                                                    {!! $s['icon'] !!}
                                                    {{ $s['label'] }}
                                                </span>
                                                {{-- Delete Action --}}
                                                 <button 
                                                    @click="window.dispatchEvent(new CustomEvent('swal:confirm', { 
                                                        detail: { 
                                                            title: 'Hapus Riwayat?', 
                                                            text: 'Apakah Anda yakin ingin menghapus riwayat booking ini dari daftar?',
                                                            method: 'deleteBooking',
                                                            id: {{ $booking->id }},
                                                            componentId: $wire.__instance.id
                                                        } 
                                                    }))"
                                                    class="opacity-0 group-hover/booking:opacity-100 cursor-pointer p-1.5 rounded-lg bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 hover:bg-red-600 hover:text-white transition-all shadow-sm"
                                                    title="Hapus Riwayat"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Tab: Wishlist --}}
                <div x-show="tab === 'wishlist'" x-cloak>
                    <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 p-8">
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-3">
                            <span class="w-9 h-9 rounded-xl bg-rose-100 dark:bg-rose-900/30 text-rose-500 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                            </span>
                            Mobil yang Saya Sukai
                        </h2>

                        @if($wishlistedCars->count() === 0)
                            <div class="text-center py-16">
                                <div class="w-20 h-20 mx-auto rounded-full bg-rose-50 dark:bg-rose-900/20 flex items-center justify-center text-rose-400 mb-4 transition-transform group-hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-700 dark:text-slate-300 mb-2">Belum Ada Favorit</h3>
                                <p class="text-slate-400 dark:text-slate-500 mb-6 font-medium">Ketuk ikon hati pada katalog untuk menyimpan kendaraan favorit Anda di sini.</p>
                                <a href="/katalog" class="inline-flex items-center gap-2 px-6 py-3 bg-rose-500 hover:bg-rose-400 text-white font-bold rounded-2xl transition-all shadow-lg shadow-rose-500/20 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                    </svg>
                                    Jelajahi Katalog
                                </a>
                            </div>
                        @else
                            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">
                                @foreach($wishlistedCars as $car)
                                    <div class="group relative bg-slate-50 dark:bg-slate-900/50 rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-700 hover:shadow-lg transition-all">
                                        {{-- Remove button --}}
                                        <button wire:click="removeWishlist({{ $car->id }})" class="cursor-pointer absolute top-3 right-3 z-10 w-8 h-8 flex items-center justify-center bg-white/80 dark:bg-slate-800/80 backdrop-blur rounded-full text-rose-500 hover:bg-rose-500 hover:text-white transition-all shadow-sm">
                                            ✕
                                        </button>
                                        {{-- Image --}}
                                        <a href="{{ route('car.detail', $car->slug) }}" class="block aspect-video bg-slate-200 dark:bg-slate-700 overflow-hidden">
                                            @if($car->images->count() > 0)
                                                <img src="{{ Storage::url($car->images->first()->image_path) }}" alt="{{ $car->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-slate-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                                    </svg>
                                                </div>
                                            @endif
                                        </a>
                                        {{-- Info --}}
                                        <div class="p-4">
                                            <div class="text-xs font-bold text-primary-500 uppercase tracking-wide mb-1">{{ $car->brand->name ?? '' }}</div>
                                            <h4 class="font-bold text-slate-900 dark:text-white leading-tight line-clamp-1">{{ $car->name }}</h4>
                                            <p class="font-black text-primary-600 dark:text-primary-400 mt-1">Rp {{ number_format($car->price, 0, ',', '.') }}</p>
                                            <a href="{{ route('car.detail', $car->slug) }}" class="mt-3 flex w-full items-center justify-center gap-2 px-4 py-2 bg-primary-600 hover:bg-primary-500 text-white text-sm font-bold rounded-xl transition-all cursor-pointer group/link">
                                                Lihat Detail
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover/link:translate-x-1 transition-transform">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
