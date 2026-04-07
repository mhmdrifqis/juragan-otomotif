<div x-data="{ 
    activeImage: '{{ $car->images->count() > 0 ? Storage::url($car->images->first()->image_path) : 'https://placehold.co/800x600?text=No+Image' }}',
    waRedirectUrl: null 
}" 
@redirect-to-whats-app.window="
    waRedirectUrl = $event.detail.url;
    setTimeout(() => { window.location.href = waRedirectUrl; }, 1500);
">

    <!-- Header section with Title and Badges -->
    <div class="bg-white dark:bg-[#0B1120] pt-24 pb-8 border-b border-slate-100 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-start md:items-end">
            <div>
                <nav class="flex text-sm text-slate-500 mb-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/" class="hover:text-primary-600 dark:hover:text-primary-400">Beranda</a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <span class="mx-2">/</span>
                                <a href="/katalog" class="hover:text-primary-600 dark:hover:text-primary-400">Katalog</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <span class="mx-2">/</span>
                                <span class="text-slate-800 dark:text-slate-300">{{ $car->name }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <div class="text-xs font-bold text-primary-600 dark:text-primary-400 uppercase tracking-wider mb-1">{{ $car->brand->name ?? 'Mobil' }}</div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white">{{ $car->name }}</h1>
            </div>
            <div class="mt-4 md:mt-0 text-left md:text-right flex flex-col items-start md:items-end gap-3">
                <p class="text-sm text-slate-500 dark:text-slate-400 mb-1">Harga Tunai</p>
                <p class="text-3xl md:text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-blue-500 dark:from-primary-400 dark:to-cyan-300">
                    Rp {{ number_format($car->price, 0, ',', '.') }}
                </p>
                {{-- Wishlist Button --}}
                <button
                    wire:click="toggleWishlist"
                    class="cursor-pointer flex items-center gap-2 px-5 py-2 rounded-full border-2 text-sm font-semibold transition-all
                        {{ $isWishlisted ? 'bg-rose-500 border-rose-500 text-white shadow-lg shadow-rose-500/20' : 'border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 hover:border-rose-400 hover:text-rose-500' }}"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                    </svg>
                    {{ $isWishlisted ? 'Tersimpan di Wishlist' : 'Simpan ke Wishlist' }}
                </button>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <div class="bg-green-100 dark:bg-green-900/30 border-l-4 border-green-500 text-green-700 dark:text-green-300 p-4 max-w-7xl mx-auto mt-6 rounded-r">
            <p class="font-bold">Sukses!</p>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Left Column: Gallery & Description -->
            <div class="lg:col-span-2">
                
                <!-- Main Image -->
                <div class="relative w-full aspect-[4/3] sm:aspect-video rounded-3xl overflow-hidden shadow-2xl mb-6 bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 group">
                    <img :src="activeImage" alt="{{ $car->name }}" class="w-full h-full object-cover transition-all duration-300" id="main-car-image">
                    
                    @if($car->images->count() == 0)
                    <div class="absolute inset-0 flex items-center justify-center text-slate-400">
                        <span class="text-xl">Tidak ada foto tersedia</span>
                    </div>
                    @endif
                </div>

                <!-- Thumbnails (Alpine js click to update activeImage) -->
                @if($car->images->count() > 1)
                <div class="flex gap-4 overflow-x-auto pb-4 hide-scrollbar">
                    @foreach($car->images as $img)
                        <button 
                            @click="activeImage = '{{ Storage::url($img->image_path) }}'" 
                            class="flex-shrink-0 w-24 h-24 sm:w-32 sm:h-32 rounded-2xl overflow-hidden border-2 transition-all cursor-pointer"
                            :class="activeImage === '{{ Storage::url($img->image_path) }}' ? 'border-primary-500 shadow-lg shadow-primary-500/20' : 'border-transparent hover:border-slate-300 dark:hover:border-slate-600'"
                        >
                            <img src="{{ Storage::url($img->image_path) }}" alt="Thumbnail" class="w-full h-full object-cover">
                        </button>
                    @endforeach
                </div>
                @endif

                <!-- Description Card -->
                <div class="mt-8 bg-white dark:bg-slate-800 rounded-3xl p-8 border border-slate-200 dark:border-slate-700 shadow-sm">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center">
                        <span class="w-10 h-10 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 flex items-center justify-center mr-4 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </span>
                        Deskripsi Kendaraan
                    </h3>
                    <div class="prose dark:prose-invert max-w-none text-slate-600 dark:text-slate-300 leading-relaxed">
                        @if($car->description)
                            {!! nl2br(e($car->description)) !!}
                        @else
                            <p class="italic text-slate-400">Belum ada deskripsi untuk unit ini.</p>
                        @endif
                    </div>
                </div>

            </div>

            <!-- Right Column: System/Specs & Booking Action -->
            <div class="lg:col-span-1">
                <!-- Floating Glassmorphism Panel for Action -->
                <div class="sticky top-24 bg-white/80 dark:bg-slate-800/80 backdrop-blur-xl rounded-3xl p-6 border border-slate-200 dark:border-slate-700 shadow-xl">
                    
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white border-b border-slate-100 dark:border-slate-700 pb-4 mb-6">Informasi Teknis</h3>
                    
                    <!-- Specs List -->
                    <ul class="space-y-4 mb-8">
                        <li class="flex justify-between items-center bg-slate-50 dark:bg-slate-900/50 p-3 rounded-xl">
                            <span class="text-slate-500 dark:text-slate-400 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3 text-primary-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                </svg>
                                Tahun
                            </span>
                            <span class="font-bold text-slate-900 dark:text-white">{{ $car->year }}</span>
                        </li>
                        <li class="flex justify-between items-center bg-slate-50 dark:bg-slate-900/50 p-3 rounded-xl">
                            <span class="text-slate-500 dark:text-slate-400 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3 text-primary-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 1 1 15 0 7.5 7.5 0 0 1-15 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9" />
                                </svg>
                                Transmisi
                            </span>
                            <span class="font-bold text-slate-900 dark:text-white">{{ $car->transmission }}</span>
                        </li>
                        <li class="flex justify-between items-center bg-slate-50 dark:bg-slate-900/50 p-3 rounded-xl">
                            <span class="text-slate-500 dark:text-slate-400 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3 text-primary-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                                </svg>
                                Tipe Bahan Bakar
                            </span>
                            <span class="font-bold text-slate-900 dark:text-white">{{ $car->fuel_type ?? '-' }}</span>
                        </li>
                        <li class="flex justify-between items-center bg-slate-50 dark:bg-slate-900/50 p-3 rounded-xl">
                            <span class="text-slate-500 dark:text-slate-400 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3 text-primary-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                                </svg>
                                Kapasitas Mesin
                            </span>
                            <span class="font-bold text-slate-900 dark:text-white">{{ $car->engine_capacity ?? '-' }} CC</span>
                        </li>
                        <li class="flex justify-between items-center bg-slate-50 dark:bg-slate-900/50 p-3 rounded-xl">
                            <span class="text-slate-500 dark:text-slate-400 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3 text-primary-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-10.5V15m-10.5 6h15a2.25 2.25 0 0 0 2.25-2.25V5.25a2.25 2.25 0 0 0-2.25-2.25h-15a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 4.5 21Z" />
                                </svg>
                                Odometer
                            </span>
                            <span class="font-bold text-slate-900 dark:text-white">{{ number_format($car->mileage ?? 0) }} KM</span>
                        </li>
                        <li class="flex justify-between items-center bg-slate-50 dark:bg-slate-900/50 p-3 rounded-xl">
                            <span class="text-slate-500 dark:text-slate-400 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-4 text-primary-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 3.405-1.622m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 3.405-1.622m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m0 0a15.998 15.998 0 0 0-3.388-1.62m5.043.025a15.994 15.994 0 0 1-1.622 3.395m-3.42-3.42a15.995 15.995 0 0 0-3.405 1.622m5.043.025a15.994 15.994 0 0 1-1.622 3.395m0 0a15.998 15.998 0 0 0 3.388 1.62m-5.043-.025a15.994 15.994 0 0 1-1.622-3.395" />
                                </svg>
                                Warna
                            </span>
                            <span class="font-bold text-slate-900 dark:text-white">{{ $car->color ?? '-' }}</span>
                        </li>
                    </ul>

                    <!-- Action Button -->
                    <div class="mt-8">
                        <button 
                            wire:click="bookCar" 
                            wire:loading.attr="disabled"
                            class="w-full bg-primary-600 hover:bg-primary-500 text-white font-bold py-4 rounded-2xl shadow-lg shadow-primary-600/30 transform hover:-translate-y-1 transition-all duration-300 flex justify-center items-center cursor-pointer disabled:cursor-not-allowed disabled:opacity-75">
                            <span wire:loading.remove>Booking Sekarang via WhatsApp</span>
                            <span wire:loading class="flex items-center">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                                Memproses...
                            </span>
                        </button>
                        <p class="text-xs text-center text-slate-500 dark:text-slate-400 mt-4">
                            Dengan klik Booking, Anda setuju dengan Syarat & Ketentuan kami. @guest Anda akan diminta login terlebih dahulu. @endguest
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <style>
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</div>
