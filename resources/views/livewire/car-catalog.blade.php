<div>
    <!-- Catalog Header with Premium Design -->
    <div class="relative bg-gradient-to-br from-slate-900 to-primary-900 overflow-hidden pt-24 pb-20">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary-500/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-indigo-500/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
            <h1 class="text-4xl lg:text-5xl font-extrabold text-white mb-6 tracking-tight leading-tight">
                Katalog <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300">Mobil Elit</span>
            </h1>
            <p class="text-primary-100 max-w-2xl mx-auto text-lg leading-relaxed">
                Temukan kendaraan impian Anda dengan filter pencarian cerdas kami. Seluruh unit siap test drive.
            </p>
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
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </div>
                        <input wire:model.live.debounce.300ms="search" type="text" class="block w-full pl-10 pr-3 py-3 border border-slate-300 dark:border-slate-600 rounded-xl leading-5 bg-white dark:bg-slate-900/50 text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-shadow shadow-sm" placeholder="Cari Mobil Impian Anda...">
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
                            <div class="w-full h-full flex flex-col items-center justify-center text-slate-300 dark:text-slate-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mb-2 opacity-20">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.015h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                                <span class="text-xs font-medium uppercase tracking-wider">No Image</span>
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
                            <div class="flex items-center" title="Transmisi">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 1 1 15 0 7.5 7.5 0 0 1-15 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9" />
                                </svg> 
                                {{ $car->transmission }}
                            </div>
                            <div class="flex items-center" title="Jarak Tempuh">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-10.5V15m-10.5 6h15a2.25 2.25 0 0 0 2.25-2.25V5.25a2.25 2.25 0 0 0-2.25-2.25h-15a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 4.5 21Z" />
                                </svg> 
                                {{ number_format($car->mileage ?? 0) }} km
                            </div>
                        </div>

                        <!-- Spacer -->
                        <div class="mt-auto"></div>

                        <!-- Price & Action -->
                        <div class="flex justify-between items-end mt-4 pt-4 border-t border-slate-100 dark:border-slate-700">
                            <div>
                                <p class="text-xs text-slate-400">Harga</p>
                                <p class="text-xl font-black text-slate-900 dark:text-white">Rp {{ number_format($car->price, 0, ',', '.') }}</p>
                            </div>
                            <a href="{{ route('car.detail', $car->slug) }}" class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 flex items-center justify-center hover:bg-primary-600 hover:text-white dark:hover:bg-primary-500 transition-colors shadow-sm cursor-pointer group/arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 group-hover:translate-x-0.5 transition-transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-16">
                {{ $cars->links('vendor.pagination.premium') }}
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-24 bg-white/50 dark:bg-slate-800/50 rounded-3xl border border-slate-200 dark:border-slate-700 backdrop-blur-sm">
                <div class="text-slate-400 mb-4 flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 16.318A4.486 4.486 0 0 0 12.016 15a4.486 4.486 0 0 0-3.198 1.318M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75s.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Tidak ditemukan</h3>
                <p class="text-slate-500 dark:text-slate-400 max-w-md mx-auto">Kami tidak dapat menemukan mobil dengan filter yang Anda pilih. Coba sesuaikan ulang pencarian Anda.</p>
                <button wire:click="clearFilters" class="mt-6 px-6 py-2 bg-primary-600 hover:bg-primary-500 text-white font-medium rounded-full transition-colors shadow-lg shadow-primary-600/30 cursor-pointer">Reset Filter</button>
            </div>
        @endif
    </div>

</div>
