@extends('layouts.app')

@section('title', 'Tentang Kami - Juragan Otomotif')

@section('content')
    {{-- Hero Section --}}
    <div class="relative bg-gradient-to-br from-slate-900 to-primary-900 overflow-hidden pt-24 pb-20">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary-500/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-indigo-500/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 text-white/80 text-sm font-medium mb-6 border border-white/20 backdrop-blur-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-primary-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-3h.75m-.75 3h.75m3-3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h18" />
                </svg>
                Tentang Kami
            </span>
            <h1 class="text-4xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight leading-tight">
                Lebih dari Sekedar <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300">Dealer Mobil</span>
            </h1>
            <p class="text-slate-300 max-w-2xl mx-auto text-lg leading-relaxed">
                Juragan Otomotif adalah platform jual beli kendaraan premium terpercaya yang mengutamakan kualitas, transparansi, dan kepuasan pelanggan di atas segalanya.
            </p>
        </div>
    </div>

    {{-- Stats Section --}}
    <div class="bg-white dark:bg-slate-900 border-b border-slate-100 dark:border-slate-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-4xl font-extrabold text-primary-600 dark:text-primary-400">500+</p>
                    <p class="mt-2 text-sm text-slate-500 dark:text-slate-400 font-medium">Kendaraan Terjual</p>
                </div>
                <div>
                    <p class="text-4xl font-extrabold text-primary-600 dark:text-primary-400">2k+</p>
                    <p class="mt-2 text-sm text-slate-500 dark:text-slate-400 font-medium">Pelanggan Puas</p>
                </div>
                <div>
                    <p class="text-4xl font-extrabold text-primary-600 dark:text-primary-400">150</p>
                    <p class="mt-2 text-sm text-slate-500 dark:text-slate-400 font-medium">Titik Inspeksi</p>
                </div>
                <div>
                    <p class="text-4xl font-extrabold text-primary-600 dark:text-primary-400 flex items-center justify-center gap-1">
                        4.9
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-amber-400">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                    </p>
                    <p class="mt-2 text-sm text-slate-500 dark:text-slate-400 font-medium">Rating Kepuasan</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Story Section --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div>
                <span class="text-primary-600 dark:text-primary-400 font-bold text-sm uppercase tracking-widest">Kisah Kami</span>
                <h2 class="mt-3 text-3xl font-extrabold text-slate-900 dark:text-white leading-tight">
                    Berawal dari Passion, <br>Tumbuh Bersama Kepercayaan
                </h2>
                <div class="mt-4 w-12 h-1 bg-primary-500 rounded-full"></div>
                <p class="mt-6 text-slate-600 dark:text-slate-400 leading-relaxed">
                    Juragan Otomotif lahir dari kecintaan mendalam terhadap dunia otomotif dan keinginan untuk menciptakan pengalaman membeli kendaraan yang lebih transparan, mudah, dan menyenangkan.
                </p>
                <p class="mt-4 text-slate-600 dark:text-slate-400 leading-relaxed">
                    Kami percaya bahwa setiap orang berhak mendapatkan kendaraan berkualitas dengan proses yang jujur dan harga yang adil. Itulah mengapa kami membangun platform ini — sebagai jembatan kepercayaan antara penjual dan pembeli.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <div class="flex items-center gap-3 bg-slate-50 dark:bg-slate-800 rounded-2xl px-5 py-4 cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors">
                        <span class="text-primary-600 dark:text-primary-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.906 59.906 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75c1.173 0 2.22-.338 3.102-.916m.107 4.195a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Zm0 0V15.5c0-.188.018-.37.05-.546M12 21a5.981 5.981 0 0 0 1.707-4.25c0-.188-.018-.37-.05-.546M12 21a5.981 5.981 0 0 1-1.707-4.25c0-.188.018-.37.05-.546M12 21V15.5m0-6.442a55.378 55.378 0 0 1 5.257 2.882M12 15.5V9.058m7.007 10.935a5.981 5.981 0 0 1-1.757-4.243c0-1.173.338-2.22.916-3.102m-4.195-.107a.75.75 0 1 0 1.5 0 .75.75 0 0 0-1.5 0Zm0 0h3.546c.188 0 .37-.018.546-.05m-3.546 0a60.474 60.474 0 0 1-2.882-5.257" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-bold text-slate-900 dark:text-white text-sm">Terpercaya</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Ribuan transaksi aman</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 bg-slate-50 dark:bg-slate-800 rounded-2xl px-5 py-4 cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors">
                        <span class="text-amber-500 dark:text-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.456-2.455L18 2.25l.259 1.036a3.375 3.375 0 0 0 2.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 0 0-2.456 2.455ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-bold text-slate-900 dark:text-white text-sm">Premium</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Kualitas tanpa kompromi</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1560179707-f14e90ef3623?w=800&q=80&fit=crop"
                         alt="Juragan Otomotif Showroom"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                </div>
                {{-- Floating badge --}}
                <div class="absolute -bottom-6 -left-6 bg-white dark:bg-slate-800 rounded-2xl shadow-xl px-6 py-4 border border-slate-100 dark:border-slate-700">
                    <p class="text-xs text-slate-500 dark:text-slate-400">Didirikan sejak</p>
                    <p class="text-2xl font-extrabold text-primary-600 dark:text-primary-400">2020</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Values Section --}}
    <div class="bg-slate-50 dark:bg-slate-800/50 py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white">Nilai-Nilai Kami</h2>
                <div class="mt-3 mx-auto w-16 h-1 bg-primary-500 rounded-full"></div>
                <p class="mt-4 text-slate-500 dark:text-slate-400 max-w-xl mx-auto">Prinsip-prinsip yang menjadi landasan kami dalam melayani setiap pelanggan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-8">
                    <div class="w-16 h-16 rounded-full bg-primary-100 dark:bg-primary-900/50 flex items-center justify-center text-primary-600 dark:text-primary-400 mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0a5.995 5.995 0 0 0-4.058-3.042m0 0a4.992 4.992 0 0 0-1.538-2.923" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Integritas</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">
                        Kami berkomitmen pada kejujuran dan transparansi di setiap transaksi. Tidak ada biaya tersembunyi, tidak ada rekayasa kondisi kendaraan.
                    </p>
                </div>
                <div class="text-center p-8">
                    <div class="w-16 h-16 rounded-full bg-amber-100 dark:bg-amber-900/50 flex items-center justify-center text-amber-600 mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Kualitas</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">
                        Setiap kendaraan melewati inspeksi ketat 150 titik oleh teknisi bersertifikat. Standar kami tidak pernah berkompromi.
                    </p>
                </div>
                <div class="text-center p-8">
                    <div class="w-16 h-16 rounded-full bg-green-100 dark:bg-green-900/50 flex items-center justify-center text-green-600 dark:text-green-400 mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Kepuasan Pelanggan</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">
                        Pelanggan adalah prioritas utama kami. Kepuasan Anda adalah ukuran keberhasilan kami dalam setiap layanan yang diberikan.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- CTA Section --}}
    <div class="relative bg-gradient-to-br from-slate-900 to-primary-900 overflow-hidden py-24">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4 tracking-tight">Siap Bergabung Bersama Kami?</h2>
            <p class="text-primary-100 mb-10 text-lg opacity-90">Temukan kendaraan impian Anda hari ini.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/katalog" class="inline-block px-10 py-4 bg-white text-primary-700 font-bold rounded-full hover:bg-slate-50 transition-all shadow-2xl hover:scale-105 transform cursor-pointer">
                    Lihat Katalog
                </a>
                <a href="/layanan" class="inline-block px-10 py-4 bg-white/10 border border-white/30 text-white font-bold rounded-full hover:bg-white/20 transition-all backdrop-blur-md cursor-pointer">
                    Lihat Layanan
                </a>
            </div>
        </div>
    </div>
@endsection
