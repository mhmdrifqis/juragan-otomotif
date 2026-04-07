<div>
    <!-- Catalog Header with Glassmorphism -->
    <div class="bg-primary-900 overflow-hidden relative pb-16 pt-24 lg:pt-32">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-800 to-indigo-900"></div>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
            <h1 class="text-4xl lg:text-5xl font-extrabold text-white mb-6 tracking-tight">Katalog <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Mobil Elit</span></h1>
            <p class="text-primary-100 max-w-2xl mx-auto text-lg">Temukan kendaraan impian Anda dengan filter pencarian cerdas kami. Seluruh unit siap test drive.</p>
        </div>
    </div>

    <!-- Main Content Container Wrapper -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 relative z-20 pb-24">
        
        <!-- Filter Bar (Floating Glassmorphism) -->
        <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-xl border border-slate-200 dark:border-slate-700/50 shadow-2xl rounded-3xl p-6 lg:p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4 items-end">
                <!-- Search -->
                <div class="lg:col-span-2">
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Pencarian Bebas</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-slate-400">🔍</span>
                        </div>
                        <input wire:model.live.debounce.300ms="search" type="text" class="block w-full pl-10 pr-3 py-3 border border-slate-300 dark:border-slate-600 rounded-xl leading-5 bg-white dark:bg-slate-900/50 text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-shadow shadow-sm" placeholder="Contoh: Porsche 911...">
                    </div>
                </div>

                <!-- Brand -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Merek</label>
                    <select wire:model.live="brand_id" class="block w-full pl-3 pr-10 py-3 border border-slate-300 dark:border-slate-600 rounded-xl leading-5 bg-white dark:bg-slate-900/50 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 shadow-sm appearance-none cursor-pointer">
                        <option value="">Semua Merek</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Category -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Kategori</label>
                    <select wire:model.live="category_id" class="block w-full pl-3 pr-10 py-3 border border-slate-300 dark:border-slate-600 rounded-xl leading-5 bg-white dark:bg-slate-900/50 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 shadow-sm appearance-none cursor-pointer">
                        <option value="">Semua Tipe</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Transmission -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Transmisi</label>
                    <select wire:model.live="transmission" class="block w-full pl-3 pr-10 py-3 border border-slate-300 dark:border-slate-600 rounded-xl leading-5 bg-white dark:bg-slate-900/50 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 shadow-sm appearance-none cursor-pointer">
                        <option value="">Semua Transmisi</option>
                        <option value="Automatic">Automatic</option>
                        <option value="Manual">Manual</option>
                        <option value="CVT">CVT</option>
                        <option value="DCT">DCT</option>
                    </select>
                </div>
                
                <!-- Clear Button -->
                <div class="lg:col-span-5 flex justify-end mt-2">
                    <div wire:loading class="text-primary-500 rounded-full animate-spin w-5 h-5 border-2 border-current border-t-transparent mr-4"></div>
                    @if($search || $brand_id || $category_id || $transmission)
                    <button wire:click="clearFilters" class="text-sm font-medium text-red-500 dark:text-red-400 hover:text-red-700 transition-colors bg-red-50 dark:bg-red-500/10 px-3 py-1 rounded-full cursor-pointer">
                        &times; Hapus Filter
                    </button>
                    @endif
                </div>
            </div>
        </div>

        <!-- Catalog Grid -->
        @if($cars->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($cars as $car)
                <div class="group bg-white dark:bg-slate-800 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-slate-100 dark:border-slate-700 flex flex-col h-full transform hover:-translate-y-1">
                    
                    <!-- Image container -->
                    <div class="relative w-full aspect-[4/3] bg-slate-100 dark:bg-slate-900 overflow-hidden">
                        @if($car->images->count() > 0)
                            <img src="{{ Storage::url($car->images->first()->image_path) }}" alt="{{ $car->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-300 dark:text-slate-600">
                                🏙️ No Image
                            </div>
                        @endif
                        
                        <!-- Badges -->
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="px-3 py-1 bg-white/90 dark:bg-slate-900/90 backdrop-blur text-slate-800 dark:text-white text-xs font-bold rounded-full shadow-sm">{{ $car->year }}</span>
                        </div>
                        @if($car->is_featured)
                        <div class="absolute top-4 right-12 flex gap-2">
                            <span class="px-3 py-1 bg-amber-400 text-slate-900 text-xs font-bold rounded-full shadow-md shadow-amber-400/20">Unggulan</span>
                        </div>
                        @endif

                        <!-- Wishlist Heart Button -->
                        <button
                            wire:click="toggleWishlist({{ $car->id }})"
                            title="{{ in_array($car->id, $wishlistedCarIds) ? 'Hapus dari Wishlist' : 'Tambah ke Wishlist' }}"
                            class="absolute top-4 right-4 z-20 w-9 h-9 flex items-center justify-center rounded-full backdrop-blur shadow-md transition-all cursor-pointer
                                {{ in_array($car->id, $wishlistedCarIds) ? 'bg-rose-500 text-white' : 'bg-white/80 dark:bg-slate-800/80 text-slate-400 hover:text-rose-500' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- View detail overlay -->
                        <div class="absolute inset-0 bg-primary-600/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-sm z-10 w-full h-full cursor-pointer" onclick="window.location.href='{{ route('car.detail', $car->slug) }}'">
                            <span class="px-6 py-2 bg-white text-primary-600 font-bold rounded-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 shadow-xl">Lihat Detail</span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6 flex flex-col flex-grow relative">
                        <div class="text-xs font-bold text-primary-600 dark:text-primary-400 mb-2 uppercase tracking-wide">{{ $car->brand->name ?? 'Mobil' }}</div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 leading-tight line-clamp-1"><a href="{{ route('car.detail', $car->slug) }}" class="hover:text-primary-600 dark:hover:text-primary-400 transition-colors">{{ $car->name }}</a></h3>
                        
                        <!-- Specs small -->
                        <div class="flex items-center text-sm text-slate-500 dark:text-slate-400 mb-4 gap-3 bg-slate-50 dark:bg-slate-900/50 p-2 rounded-xl">
                            <div class="flex items-center" title="Transmisi"><span class="mr-1">⚙️</span> {{ $car->transmission }}</div>
                            <div class="flex items-center" title="Jarak Tempuh"><span class="mr-1">🛣️</span> {{ number_format($car->mileage ?? 0) }} km</div>
                        </div>

                        <!-- Spacer -->
                        <div class="mt-auto"></div>

                        <!-- Price & Action -->
                        <div class="flex justify-between items-end mt-4 pt-4 border-t border-slate-100 dark:border-slate-700">
                            <div>
                                <p class="text-xs text-slate-400">Harga</p>
                                <p class="text-xl font-black text-slate-900 dark:text-white">Rp {{ number_format($car->price, 0, ',', '.') }}</p>
                            </div>
                            <a href="{{ route('car.detail', $car->slug) }}" class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 flex items-center justify-center hover:bg-primary-600 hover:text-white dark:hover:bg-primary-500 transition-colors shadow-sm cursor-pointer">
                                ➔
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-16 custom-pagination">
                {{ $cars->links() }}
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-24 bg-white/50 dark:bg-slate-800/50 rounded-3xl border border-slate-200 dark:border-slate-700 backdrop-blur-sm">
                <div class="text-6xl mb-4">🕵️‍♂️</div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Tidak ditemukan</h3>
                <p class="text-slate-500 dark:text-slate-400 max-w-md mx-auto">Kami tidak dapat menemukan mobil dengan filter yang Anda pilih. Coba sesuaikan ulang pencarian Anda.</p>
                <button wire:click="clearFilters" class="mt-6 px-6 py-2 bg-primary-600 hover:bg-primary-500 text-white font-medium rounded-full transition-colors shadow-lg shadow-primary-600/30">Reset Filter</button>
            </div>
        @endif
    </div>

    <style>
        .custom-pagination nav > div:first-child { display: none !important; }
        @media (min-width: 640px) { .custom-pagination nav > div:first-child { display: flex !important; } }
        .custom-pagination nav span, .custom-pagination nav a { border-radius: 12px !important; margin: 0 2px !important; transition: all 0.2s !important; }
        .custom-pagination nav a:hover { background-color: #4f46e5 !important; color: white !important; }
        .custom-pagination nav span[aria-current="page"] > span { background-color: #4f46e5 !important; color: white !important; border-color: #4f46e5 !important; }
        .dark .custom-pagination nav p, .dark .custom-pagination nav span, .dark .custom-pagination nav a, .dark .custom-pagination nav svg { color: #cbd5e1 !important; }
        .dark .custom-pagination nav .bg-white { background-color: #1e293b !important; border-color: #334155 !important; }
        .dark .custom-pagination nav a:hover { background-color: #6366f1 !important; color: white !important; }
        .custom-pagination nav a, .custom-pagination nav button, .custom-pagination nav svg { cursor: pointer !important; }
    </style>
</div>
