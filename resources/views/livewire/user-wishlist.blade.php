<div>
    {{-- Page Header --}}
    <div class="relative bg-gradient-to-br from-slate-900 to-primary-900 overflow-hidden pt-24 pb-20">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary-500/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-5">
                <div class="w-16 h-16 rounded-2xl bg-white/20 backdrop-blur flex items-center justify-center text-3xl font-black text-white border border-white/30 shadow-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-rose-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-3xl font-extrabold text-white">Mobil Disukai</h1>
                    <p class="text-primary-300 text-sm">Daftar kendaraan impian yang telah Anda simpan</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Container --}}
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 pb-24 relative z-10">
        <div class="">
            {{-- Content Area --}}
            <div class="w-full">
                <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 p-8">
                    @if($wishlistedCars->count() === 0)
                        <div class="text-center py-16">
                            <div class="w-20 h-20 mx-auto rounded-full bg-rose-50 dark:bg-rose-900/20 flex items-center justify-center text-rose-400 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-700 dark:text-slate-300 mb-2">Belum Ada Favorit</h3>
                            <p class="text-slate-400 dark:text-slate-500 mb-6">Simpan mobil impian Anda dari katalog untuk melihatnya di sini.</p>
                            <a href="/katalog" class="inline-flex items-center gap-2 px-6 py-3 bg-rose-500 hover:bg-rose-400 text-white font-bold rounded-2xl transition-all shadow-lg shadow-rose-500/20 cursor-pointer">
                                Jelajahi Katalog
                            </a>
                        </div>
                    @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                            @foreach($wishlistedCars as $car)
                                <div class="group relative bg-slate-50 dark:bg-slate-900/50 rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-700 hover:shadow-lg transition-all flex flex-col">
                                    <button wire:click="removeWishlist({{ $car->id }})" class="absolute top-3 right-3 z-10 w-8 h-8 flex items-center justify-center bg-white/80 dark:bg-slate-800/80 backdrop-blur rounded-full text-rose-500 hover:bg-rose-500 hover:text-white transition-all shadow-sm cursor-pointer">✕</button>
                                    <a href="{{ route('car.detail', $car->slug) }}" class="block aspect-video bg-slate-200 dark:bg-slate-700 overflow-hidden">
                                        <img src="{{ Storage::url($car->images->first()->image_path ?? '') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    </a>
                                    <div class="p-4 flex-grow flex flex-col">
                                        <div class="text-xs font-bold text-primary-500 uppercase tracking-wide mb-1">{{ $car->brand->name ?? '' }}</div>
                                        <h4 class="font-bold text-slate-900 dark:text-white leading-tight line-clamp-1">{{ $car->name }}</h4>
                                        <p class="font-black text-primary-600 dark:text-primary-400 mt-1 mb-4">Rp {{ number_format($car->price, 0, ',', '.') }}</p>
                                        <a href="{{ route('car.detail', $car->slug) }}" class="mt-auto flex w-full items-center justify-center gap-2 px-4 py-2 bg-primary-600 hover:bg-primary-500 text-white text-sm font-bold rounded-xl transition-all cursor-pointer">Lihat Detail</a>
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
