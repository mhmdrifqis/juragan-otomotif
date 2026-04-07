@extends('layouts.app')

@section('title', 'Juragan Otomotif - Premium Hub - Home')

@section('content')
    <div class="relative w-full overflow-hidden bg-white dark:bg-slate-900 pb-20">
        
        <!-- Ambient Background Lights (Optional, keeping slightly from previous for dark mode vibe) -->
        <div class="absolute top-[-20%] left-[-10%] w-[70%] h-[70%] bg-primary-600/10 blur-[120px] rounded-full hidden dark:block pointer-events-none"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[60%] h-[60%] bg-blue-500/10 blur-[100px] rounded-full hidden dark:block pointer-events-none"></div>

        <!-- 1. HERO SECTION (Massive Rounded Container) -->
        <!-- We use a prominent background block (blue/primary) to mimic the red block in the design, with huge top-left and top-right radius -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8">
            <div class="relative bg-gradient-to-br from-primary-600 to-indigo-700 dark:from-primary-900 dark:to-slate-800 rounded-[3rem] lg:rounded-[5rem] overflow-hidden shadow-2xl">
                
                <!-- Decorative background circles inside the hero -->
                <div class="absolute -right-20 -top-20 w-[400px] h-[400px] bg-white/10 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute -left-20 -bottom-20 w-[300px] h-[300px] bg-black/10 rounded-full blur-2xl pointer-events-none"></div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center relative z-10 px-6 py-12 md:py-20 lg:p-24">
                    
                    <!-- Left: Text Content -->
                    <div class="order-2 lg:order-1 text-center lg:text-left text-white">
                        <div class="inline-flex items-center text-primary-100 font-medium text-sm mb-4">
                            <span class="mr-2">Penawaran Eksklusif Minggu Ini</span>
                        </div>
                        
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-4 tracking-tight">
                            Eksplorasi<br />Kendaraan Elit.
                        </h1>
                        
                        <p class="text-lg text-primary-100 mb-8 max-w-md mx-auto lg:mx-0 leading-relaxed font-light">
                            Rasakan impresi mewah sejak pandangan pertama hingga di balik kemudi. Lolos inspeksi 150 titik.
                        </p>
                        
                        <!-- Search / Shop Now Bar -->
                        <div class="flex items-center bg-white/20 dark:bg-black/20 backdrop-blur-md border border-white/30 rounded-full p-2 max-w-sm mx-auto lg:mx-0 shadow-lg mb-10 focus-within:ring-2 focus-within:ring-white">
                            <input type="text" placeholder="Cari Mobil Impian Anda..." class="bg-transparent border-none focus:ring-0 text-white placeholder-primary-200 px-4 w-full outline-none" />
                            <a href="/katalog" class="bg-white text-primary-700 hover:bg-slate-100 px-6 py-2 rounded-full font-bold transition-transform transform hover:scale-105 shadow-md shrink-0">
                                Cari
                            </a>
                        </div>

                        <!-- "Our Happy Customer" Floating Card -->
                        <div class="inline-flex flex-col items-center lg:items-start bg-white/10 backdrop-blur-md border border-white/20 rounded-3xl p-4 shadow-xl">
                            <div class="flex -space-x-3 mb-2">
                                <img class="w-10 h-10 rounded-full border-2 border-primary-500" src="https://i.pravatar.cc/100?img=1" alt="Customer 1">
                                <img class="w-10 h-10 rounded-full border-2 border-primary-500" src="https://i.pravatar.cc/100?img=2" alt="Customer 2">
                                <img class="w-10 h-10 rounded-full border-2 border-primary-500" src="https://i.pravatar.cc/100?img=3" alt="Customer 3">
                            </div>
                            <div class="text-left">
                                <p class="font-semibold text-sm line-clamp-1">Review Pelanggan</p>
                                <div class="flex items-center text-xs text-yellow-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-1">
                                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                                    </svg>
                                    4.9 (2k+ Ulasan)
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Large Car Visual -->
                    <div class="order-1 lg:order-2 relative flex justify-center items-center h-[300px] lg:h-[500px]">
                        <!-- Decorative circle behind car -->
                        <div class="absolute w-[250px] h-[250px] lg:w-[400px] lg:h-[400px] bg-primary-400/50 dark:bg-slate-700/50 rounded-full mix-blend-overlay"></div>
                        <!-- High-Quality Car Image (Using an Unsplash image fitted elegantly) -->
                        <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?w=800&q=80&fit=crop" 
                             alt="Luxury Car" 
                             class="relative z-10 w-[90%] max-w-lg rounded-2xl shadow-2xl transform rotate-[-5deg] hover:rotate-0 transition-transform duration-700 object-cover aspect-[4/3] border-4 border-white/20">
                        
                        <!-- Mini floating price tag -->
                        <div class="absolute bottom-10 right-4 lg:-right-4 bg-white dark:bg-slate-800 text-slate-900 dark:text-white px-4 py-2 rounded-xl shadow-xl font-bold flex items-center z-20 transform rotate-3">
                            <span class="mr-2 text-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-orange-500">
                                    <path fill-rule="evenodd" d="M12.96 1.854a.75.75 0 0 1 .184.812C12.71 3.665 12 5.056 12 6.5s.71 2.835 1.144 3.834C13.578 11.332 14 12.38 14 13.5c0 2.209-1.791 4-4 4s-4-1.791-4-4c0-1.12.422-2.168 1.114-2.966a.75.75 0 0 1 1.258.82A2.49 2.49 0 0 0 8 13.5c0 1.381 1.119 2.5 2.5 2.5s2.5-1.119 2.5-2.5c0-.73-.314-1.387-.813-1.846A.75.75 0 0 1 12 11c0-1.312.483-2.502 1.296-3.411.313-.35.632-.676.953-.974a.75.75 0 0 1 1.272.548 4.484 4.484 0 0 1-.84 3.32.75.75 0 0 1-1.226-.867c.361-.51.545-1.126.545-1.761 0-.472-.1-.922-.284-1.328a.75.75 0 0 1 .284-1.328Z" clip-rule="evenodd" />
                                </svg>
                            </span> Premium Ready
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. "PREMIUM SHADES" -> "Kategori Premium" (Pill-shaped Showcases) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-24">
            <div class="text-center mb-12 relative">
                <h2 class="text-3xl font-extrabold text-slate-800 dark:text-white relative inline-block">
                    Kategori Premium
                    <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-primary-500 rounded-full"></div>
                </h2>
            </div>
            
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 lg:gap-12 mt-16 px-4">
                
                <!-- Pill 1 -->
                <div class="relative w-full max-w-[360px] h-32 bg-slate-100 dark:bg-slate-800 rounded-full flex items-center shadow-sm hover:shadow-md transition-shadow group">
                    <div class="pl-8 w-[55%] relative z-20">
                        <h3 class="font-bold text-slate-900 dark:text-slate-100 text-lg leading-tight">Mobil<br>Sport</h3>
                        <a href="#" class="inline-block mt-2 px-4 py-1 bg-white text-xs font-bold text-slate-700 rounded-full shadow-sm border border-slate-200 group-hover:bg-slate-700 group-hover:text-white transition-colors">Lihat</a>
                    </div>
                    <div class="absolute right-4 w-24 h-24 md:w-28 md:h-28 rounded-2xl overflow-hidden shadow-md z-10 bg-white dark:bg-slate-700 border-2 border-slate-50 dark:border-slate-600">
                        <img src="https://images.unsplash.com/photo-1544829099-b9a0c07fad1a?w=400&q=80" alt="Sport Car" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>

                <!-- Pill 2 -->
                <div class="relative w-full max-w-[360px] h-32 bg-primary-50 dark:bg-primary-900/20 rounded-full flex items-center shadow-sm hover:shadow-md transition-shadow group mt-12 md:mt-0">
                    <div class="pl-8 w-[55%] relative z-20">
                        <h3 class="font-bold text-primary-900 dark:text-primary-100 text-lg leading-tight">SUV<br>Tangguh</h3>
                        <a href="#" class="inline-block mt-2 px-4 py-1 bg-white text-xs font-bold text-primary-600 rounded-full shadow-sm border border-slate-200 group-hover:bg-primary-600 group-hover:text-white transition-colors">Lihat</a>
                    </div>
                    <div class="absolute right-4 w-24 h-24 md:w-28 md:h-28 rounded-2xl overflow-hidden shadow-md z-10 bg-white dark:bg-slate-700 border-2 border-slate-50 dark:border-slate-600">
                        <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=400&q=80" alt="SUV" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>

                <!-- Pill 3 -->
                <div class="relative w-full max-w-[360px] h-32 bg-slate-100 dark:bg-slate-800 rounded-full flex items-center shadow-sm hover:shadow-md transition-shadow group mt-12 md:mt-0">
                    <div class="pl-8 w-[55%] relative z-20">
                        <h3 class="font-bold text-slate-800 dark:text-slate-200 text-lg leading-tight">Sedan<br>Elegan</h3>
                        <a href="#" class="inline-block mt-2 px-4 py-1 bg-white text-xs font-bold text-slate-700 rounded-full shadow-sm border border-slate-200 group-hover:bg-slate-700 group-hover:text-white transition-colors">Lihat</a>
                    </div>
                    <div class="absolute right-4 w-24 h-24 md:w-28 md:h-28 rounded-2xl overflow-hidden shadow-md z-10 bg-white dark:bg-slate-700 border-2 border-slate-50 dark:border-slate-600">
                        <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?w=400&q=80" alt="Sedan" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>

            </div>
        </div>

        <!-- 3. CATEGORY TABS -->
        <div class="max-w-4xl mx-auto px-4 mt-28">
            <div class="text-center mb-8 relative">
                <h2 class="text-2xl font-bold text-slate-800 dark:text-white relative inline-block">
                    Pilih Tipe
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-8 h-1 bg-primary-500 rounded-full"></div>
                </h2>
            </div>
            
            <div class="flex overflow-x-auto pb-4 justify-start md:justify-center gap-6 sm:gap-10 hide-scrollbar">
                
                <!-- Tab Item (Active) -->
                <button class="flex flex-col items-center min-w-[70px] group cursor-pointer">
                    <div class="w-16 h-16 rounded-full border-2 border-primary-500 flex items-center justify-center bg-primary-50 dark:bg-primary-900/20 text-primary-600 dark:text-primary-400 mb-2 transition-all">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 002 15v1c0 .6.4 1 1 1h2m14 0a2 2 0 11-4 0m4 0a2 2 0 10-4 0m-10 0a2 2 0 11-4 0m4 0a2 2 0 10-4 0"></path></svg>
                    </div>
                    <span class="text-sm font-bold text-slate-900 dark:text-white border-b-2 border-slate-900 dark:border-white pb-1">Semua</span>
                </button>

                <!-- Tab Item -->
                <button class="flex flex-col items-center min-w-[70px] group cursor-pointer">
                    <div class="w-16 h-16 rounded-full border border-slate-200 dark:border-slate-700 flex items-center justify-center bg-white dark:bg-slate-800 text-slate-400 group-hover:border-primary-400 group-hover:text-primary-500 mb-2 transition-all shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-slate-500 group-hover:text-slate-800 dark:group-hover:text-white transition-colors">Sport</span>
                </button>

                <!-- Tab Item -->
                <button class="flex flex-col items-center min-w-[70px] group cursor-pointer">
                    <div class="w-16 h-16 rounded-full border border-slate-200 dark:border-slate-700 flex items-center justify-center bg-white dark:bg-slate-800 text-slate-400 group-hover:border-primary-400 group-hover:text-primary-500 mb-2 transition-all shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177V3.945c0-.621-.504-1.125-1.125-1.125H6.375c-.621 0-1.125.504-1.125 1.125v13.177" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-slate-500 group-hover:text-slate-800 dark:group-hover:text-white transition-colors">SUV</span>
                </button>

                <!-- Tab Item -->
                <button class="flex flex-col items-center min-w-[70px] group cursor-pointer">
                    <div class="w-16 h-16 rounded-full border border-slate-200 dark:border-slate-700 flex items-center justify-center bg-white dark:bg-slate-800 text-slate-400 group-hover:border-primary-400 group-hover:text-primary-500 mb-2 transition-all shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.307a11.95 11.95 0 0 1 5.814-5.519l2.74-1.22" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18h19.5" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-slate-500 group-hover:text-slate-800 dark:group-hover:text-white transition-colors">Sedan</span>
                </button>

                <!-- Tab Item -->
                <button class="flex flex-col items-center min-w-[70px] group cursor-pointer">
                    <div class="w-16 h-16 rounded-full border border-slate-200 dark:border-slate-700 flex items-center justify-center bg-white dark:bg-slate-800 text-slate-400 group-hover:border-primary-400 group-hover:text-primary-500 mb-2 transition-all shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177V3.945c0-.621-.504-1.125-1.125-1.125H6.375c-.621 0-1.125.504-1.125 1.125v13.177" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-slate-500 group-hover:text-slate-800 dark:group-hover:text-white transition-colors">MPV</span>
                </button>

            </div>
        </div>

        <!-- 4. PRODUCT GRID (Car Listings with Red/Soft Color backgrounds per design) -->
        <!-- In the design, cards have a uniform soft background, large image taking 70% space, details below -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1 -->
                <div class="bg-white border-2 border-slate-100 dark:border-slate-700 dark:bg-slate-800 rounded-3xl p-4 flex flex-col h-[350px] relative group overflow-hidden shadow-lg hover:shadow-xl transition-shadow cursor-pointer">
                    <!-- Top Badge -->
                    <div class="absolute top-4 right-4 bg-white/90 text-red-600 text-[10px] font-bold px-2 py-1 rounded-full capitalize z-20">20% Off</div>
                    
                    <!-- Large Image Area -->
                    <div class="flex-grow flex items-center justify-center relative z-10 w-full rounded-2xl overflow-hidden mt-6 mb-2">
                        <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?w=400&q=80" alt="Car" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    
                    <!-- Bottom Text (Hidden by default or minimalist like design) -->
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent text-white transform translate-y-2 group-hover:translate-y-0 transition-transform flex flex-col z-20 opacity-90 group-hover:opacity-100">
                        <div class="flex justify-between items-end mb-2">
                            <div>
                                <h4 class="font-bold text-lg leading-tight">Civic Type R</h4>
                                <p class="text-xs text-slate-200">2.0L Turbocharged</p>
                            </div>
                            <span class="font-black text-rose-300">Rp 1.1M</span>
                        </div>
                        <button class="w-full bg-white text-slate-900 py-2 rounded-full text-sm font-bold shadow-sm hover:bg-slate-100 mb-1">Cek Detail</button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white border-2 border-slate-100 dark:border-slate-700 dark:bg-slate-800 rounded-3xl p-4 flex flex-col h-[350px] relative group overflow-hidden shadow-lg hover:shadow-xl transition-shadow cursor-pointer">
                    <!-- Large Image Area -->
                    <div class="flex-grow flex items-center justify-center relative z-10 w-full rounded-2xl overflow-hidden mb-2 h-full">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=400&q=80" alt="Car" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    
                    <!-- Content inside overlay like the 3rd card in design -->
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/90 via-black/40 to-transparent text-white flex flex-col z-20">
                        <div class="inline-flex items-center gap-1 max-w-max bg-red-600 text-white text-[10px] font-bold px-2 py-0.5 rounded mb-1 shadow-sm uppercase tracking-wide">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3">
                                <path fill-rule="evenodd" d="M12.96 1.854a.75.75 0 0 1 .184.812C12.71 3.665 12 5.056 12 6.5s.71 2.835 1.144 3.834C13.578 11.332 14 12.38 14 13.5c0 2.209-1.791 4-4 4s-4-1.791-4-4c0-1.12.422-2.168 1.114-2.966a.75.75 0 0 1 1.258.82A2.49 2.49 0 0 0 8 13.5c0 1.381 1.119 2.5 2.5 2.5s2.5-1.119 2.5-2.5c0-.73-.314-1.387-.813-1.846A.75.75 0 0 1 12 11c0-1.312.483-2.502 1.296-3.411.313-.35.632-.676.953-.974a.75.75 0 0 1 1.272.548 4.484 4.484 0 0 1-.84 3.32.75.75 0 0 1-1.226-.867c.361-.51.545-1.126.545-1.761 0-.472-.1-.922-.284-1.328a.75.75 0 0 1 .284-1.328Z" clip-rule="evenodd" />
                            </svg>
                            Hot
                        </div>
                        <h4 class="font-bold text-lg leading-tight mb-1">Porsche 911</h4>
                        <p class="text-xs text-slate-300 leading-tight mb-2">3.0L Twin-Turbo Flat-6</p>
                        <span class="font-black text-xl mb-3">Rp 3.5M</span>
                        <button class="w-full bg-white text-slate-900 py-2 rounded-full text-sm font-bold shadow-sm hover:bg-slate-100 mb-1 flex items-center justify-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                            Booking Now
                        </button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white border-2 border-slate-100 dark:border-slate-700 dark:bg-slate-800 rounded-3xl p-4 flex flex-col h-[350px] relative group overflow-hidden shadow-lg hover:shadow-xl transition-shadow cursor-pointer">
                     <!-- Top Badge -->
                     <div class="absolute top-4 right-4 bg-amber-400 text-slate-900 text-[10px] font-bold px-2 py-1 rounded-full capitalize z-20">Baru</div>
                    
                    <div class="flex-grow flex items-center justify-center relative z-10 w-full rounded-2xl overflow-hidden mt-6 mb-2h-full">
                        <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?w=400&q=80" alt="Car" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    
                    <!-- Bottom Text hidden -->
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent text-white transform translate-y-2 group-hover:translate-y-0 transition-transform flex flex-col z-20 opacity-0 group-hover:opacity-100">
                        <div class="flex justify-between items-end mb-2">
                            <div>
                                <h4 class="font-bold text-lg leading-tight">Merc C-Class</h4>
                            </div>
                            <span class="font-black text-rose-300">Rp 1.05M</span>
                        </div>
                        <button class="w-full bg-white text-slate-900 py-2 rounded-full text-sm font-bold shadow-sm hover:bg-slate-100 mb-1">Cek Detail</button>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white border-2 border-slate-100 dark:border-slate-700 dark:bg-slate-800 rounded-3xl p-4 flex flex-col h-[350px] relative group overflow-hidden shadow-lg hover:shadow-xl transition-shadow cursor-pointer">
                    <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-sm text-white text-[10px] font-bold px-2 py-1 rounded-full capitalize z-20 shadow-sm border border-white/20">Sale</div>
                    <div class="flex-grow flex items-center justify-center relative z-10 w-full rounded-2xl overflow-hidden mt-6 mb-2 h-full">
                        <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?w=400&q=80" alt="Car" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent text-white transform translate-y-2 group-hover:translate-y-0 transition-transform flex flex-col z-20 opacity-0 group-hover:opacity-100">
                        <div class="flex justify-between items-end mb-2">
                            <div>
                                <h4 class="font-bold text-lg leading-tight">BMW M3</h4>
                            </div>
                            <span class="font-black text-rose-300">Rp 1.9M</span>
                        </div>
                        <button class="w-full bg-white text-slate-900 py-2 rounded-full text-sm font-bold shadow-sm hover:bg-slate-100 mb-1">Cek Detail</button>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12 mb-8">
                <a href="/katalog" class="inline-block px-8 py-3 rounded-full border-2 border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 font-bold hover:border-primary-500 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                    Lihat Semua Koleksi
                </a>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <style>
        /* Hide scrollbar for category tabs */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
@endpush

