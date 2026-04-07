<div x-data="{ tab: @entangle('activeTab') }">

    {{-- Page Header --}}
    <div class="bg-gradient-to-br from-primary-900 to-indigo-900 pt-24 pb-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5"></div>
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
                            <span class="text-xl">👤</span> Profil Saya
                        </button>
                        <button
                            @click="tab = 'password'"
                            :class="tab === 'password' ? 'bg-primary-50 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 font-semibold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700/50'"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm transition-all cursor-pointer text-left"
                        >
                            <span class="text-xl">🔐</span> Ganti Password
                        </button>
                        <button
                            @click="tab = 'bookings'"
                            :class="tab === 'bookings' ? 'bg-primary-50 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 font-semibold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700/50'"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm transition-all cursor-pointer text-left"
                        >
                            <span class="text-xl">📋</span> Riwayat Pesanan
                            @if($bookings->count() > 0)
                                <span class="ml-auto bg-primary-600 text-white text-xs px-2 py-0.5 rounded-full">{{ $bookings->count() }}</span>
                            @endif
                        </button>
                        <button
                            @click="tab = 'wishlist'"
                            :class="tab === 'wishlist' ? 'bg-primary-50 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 font-semibold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700/50'"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm transition-all cursor-pointer text-left"
                        >
                            <span class="text-xl">❤️</span> Mobil Disukai
                            @if($wishlistedCars->count() > 0)
                                <span class="ml-auto bg-rose-500 text-white text-xs px-2 py-0.5 rounded-full">{{ $wishlistedCars->count() }}</span>
                            @endif
                        </button>
                    </nav>

                    <div class="mt-6 pt-4 border-t border-slate-100 dark:border-slate-700">
                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm text-red-500 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-all cursor-pointer text-left">
                                <span class="text-xl">🚪</span> Keluar
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
                            <span class="w-9 h-9 rounded-xl bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 flex items-center justify-center text-lg">👤</span>
                            Informasi Profil
                        </h2>

                        @if($profileSuccess)
                            <div class="mb-6 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 text-green-700 dark:text-green-300 px-4 py-3 rounded-2xl flex items-center gap-2">
                                ✅ Profil berhasil diperbarui!
                            </div>
                        @endif

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
                                    <span wire:loading.remove>💾 Simpan Perubahan</span>
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
                            <span class="w-9 h-9 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600 dark:text-amber-400 flex items-center justify-center text-lg">🔐</span>
                            Ganti Kata Sandi
                        </h2>

                        @if($passwordSuccess)
                            <div class="mb-6 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 text-green-700 dark:text-green-300 px-4 py-3 rounded-2xl flex items-center gap-2">
                                ✅ Kata sandi berhasil diubah!
                            </div>
                        @endif

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
                                    <span wire:loading.remove>🔒 Perbarui Kata Sandi</span>
                                    <span wire:loading>Memproses...</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Tab: Riwayat Pesanan --}}
                <div x-show="tab === 'bookings'" x-cloak>
                    <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 p-8">
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-3">
                            <span class="w-9 h-9 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 flex items-center justify-center text-lg">📋</span>
                            Riwayat Pesanan Saya
                        </h2>

                        @if($bookings->count() === 0)
                            <div class="text-center py-16">
                                <div class="text-6xl mb-4">📭</div>
                                <h3 class="text-xl font-bold text-slate-700 dark:text-slate-300 mb-2">Belum Ada Pesanan</h3>
                                <p class="text-slate-400 dark:text-slate-500 mb-6">Anda belum pernah melakukan booking. Temukan mobil impian Anda sekarang!</p>
                                <a href="/katalog" class="inline-block px-6 py-3 bg-primary-600 hover:bg-primary-500 text-white font-bold rounded-2xl transition-all shadow-lg shadow-primary-600/20 cursor-pointer">
                                    🔍 Jelajahi Katalog
                                </a>
                            </div>
                        @else
                            <div class="space-y-4">
                                @foreach($bookings as $booking)
                                    @php
                                        $statusConfig = [
                                            'pending'   => ['bg' => 'bg-amber-100 dark:bg-amber-900/30', 'text' => 'text-amber-700 dark:text-amber-300', 'label' => '⏳ Menunggu'],
                                            'Pending'   => ['bg' => 'bg-amber-100 dark:bg-amber-900/30', 'text' => 'text-amber-700 dark:text-amber-300', 'label' => '⏳ Menunggu'],
                                            'Follow_Up' => ['bg' => 'bg-blue-100 dark:bg-blue-900/30',   'text' => 'text-blue-700 dark:text-blue-300',   'label' => '📞 Ditindaklanjuti'],
                                            'Succeeded' => ['bg' => 'bg-green-100 dark:bg-green-900/30', 'text' => 'text-green-700 dark:text-green-300', 'label' => '✅ Berhasil'],
                                            'Cancelled' => ['bg' => 'bg-red-100 dark:bg-red-900/30',     'text' => 'text-red-700 dark:text-red-300',     'label' => '❌ Dibatalkan'],
                                        ];
                                        $s = $statusConfig[$booking->status] ?? ['bg' => 'bg-slate-100 dark:bg-slate-700', 'text' => 'text-slate-600 dark:text-slate-300', 'label' => $booking->status];
                                    @endphp
                                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 bg-slate-50 dark:bg-slate-900/50 p-4 rounded-2xl border border-slate-100 dark:border-slate-700 relative group/booking">
                                        {{-- Car Image --}}
                                        <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-xl overflow-hidden bg-slate-200 dark:bg-slate-700 flex-shrink-0">
                                            @if($booking->car->images->count() > 0)
                                                <img src="{{ Storage::url($booking->car->images->first()->image_path) }}" alt="{{ $booking->car->name }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-2xl">🚗</div>
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
                                                <span class="inline-block px-3 py-1 rounded-full text-xs font-bold {{ $s['bg'] }} {{ $s['text'] }}">
                                                    {{ $s['label'] }}
                                                </span>
                                                {{-- Delete Action --}}
                                                <button 
                                                    wire:click="deleteBooking({{ $booking->id }})" 
                                                    wire:confirm="Apakah Anda yakin ingin menghapus riwayat booking ini dari daftar?"
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
                            <span class="w-9 h-9 rounded-xl bg-rose-100 dark:bg-rose-900/30 text-rose-500 flex items-center justify-center text-lg">❤️</span>
                            Mobil yang Saya Sukai
                        </h2>

                        @if($wishlistedCars->count() === 0)
                            <div class="text-center py-16">
                                <div class="text-6xl mb-4">🤍</div>
                                <h3 class="text-xl font-bold text-slate-700 dark:text-slate-300 mb-2">Belum Ada Favorit</h3>
                                <p class="text-slate-400 dark:text-slate-500 mb-6">Tap ikon hati ❤️ di kartu mobil di Katalog untuk menyimpannya ke sini.</p>
                                <a href="/katalog" class="inline-block px-6 py-3 bg-rose-500 hover:bg-rose-400 text-white font-bold rounded-2xl transition-all shadow-lg shadow-rose-500/20 cursor-pointer">
                                    💛 Jelajahi Katalog
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
                                                <div class="w-full h-full flex items-center justify-center text-4xl">🚗</div>
                                            @endif
                                        </a>
                                        {{-- Info --}}
                                        <div class="p-4">
                                            <div class="text-xs font-bold text-primary-500 uppercase tracking-wide mb-1">{{ $car->brand->name ?? '' }}</div>
                                            <h4 class="font-bold text-slate-900 dark:text-white leading-tight line-clamp-1">{{ $car->name }}</h4>
                                            <p class="font-black text-primary-600 dark:text-primary-400 mt-1">Rp {{ number_format($car->price, 0, ',', '.') }}</p>
                                            <a href="{{ route('car.detail', $car->slug) }}" class="mt-3 flex w-full items-center justify-center gap-1 px-4 py-2 bg-primary-600 hover:bg-primary-500 text-white text-sm font-bold rounded-xl transition-all cursor-pointer">
                                                Lihat Detail ➔
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
