@extends('layouts.app')

@section('title', 'Layanan Kami - Juragan Otomotif')

@section('content')
    {{-- Hero Section --}}
    <div class="relative bg-gradient-to-br from-slate-900 to-primary-900 overflow-hidden pt-24 pb-20">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary-500/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-indigo-500/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 text-white/80 text-sm font-medium mb-6 border border-white/20 backdrop-blur-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-primary-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.456-2.455L18 2.25l.259 1.036a3.375 3.375 0 0 0 2.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 0 0-2.456 2.455ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                </svg>
                Layanan Kami
            </span>
            <h1 class="text-4xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight leading-tight">
                Solusi Otomotif <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300">Terlengkap</span>
            </h1>
            <p class="text-primary-200 max-w-2xl mx-auto text-lg leading-relaxed">
                Kami hadir untuk memastikan setiap perjalanan Anda dimulai dengan kendaraan terbaik. Dari pemilihan hingga serah terima, kami siap mendampingi Anda.
            </p>
        </div>
    </div>

    {{-- Main Services --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">

        {{-- Section Title --}}
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white">Apa yang Kami Tawarkan</h2>
            <div class="mt-3 mx-auto w-16 h-1 bg-primary-500 rounded-full"></div>
            <p class="mt-4 text-slate-500 dark:text-slate-400 max-w-xl mx-auto">Setiap layanan kami dirancang dengan standar premium untuk kepuasan Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Service Card 1 --}}
            <div class="group relative bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-sm hover:shadow-xl border border-slate-100 dark:border-slate-700 transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                <div class="w-14 h-14 rounded-2xl bg-primary-100 dark:bg-primary-900/50 flex items-center justify-center text-primary-600 dark:text-primary-400 mb-6 group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177V3.945c0-.621-.504-1.125-1.125-1.125H6.375c-.621 0-1.125.504-1.125 1.125v13.177" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Jual Beli Kendaraan</h3>
                <p class="text-slate-500 dark:text-slate-400 leading-relaxed text-sm">
                    Koleksi kendaraan premium pilihan dengan inspeksi menyeluruh 150 titik. Setiap unit terjamin kualitas dan keasliannya.
                </p>
                <div class="mt-6 pt-6 border-t border-slate-100 dark:border-slate-700">
                    <a href="/katalog" class="text-primary-600 dark:text-primary-400 font-semibold text-sm hover:underline flex items-center gap-1 group/link">
                        Lihat Katalog 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5 group-hover/link:translate-x-1 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Service Card 2 --}}
            <div class="group relative bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-sm hover:shadow-xl border border-slate-100 dark:border-slate-700 transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                <div class="w-14 h-14 rounded-2xl bg-amber-100 dark:bg-amber-900/50 flex items-center justify-center text-amber-600 dark:text-amber-400 mb-6 group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Inspeksi Kendaraan</h3>
                <p class="text-slate-500 dark:text-slate-400 leading-relaxed text-sm">
                    Tim teknisi bersertifikat kami melakukan pemeriksaan mendetail pada setiap kendaraan sebelum ditawarkan kepada Anda.
                </p>
                <div class="mt-6 pt-6 border-t border-slate-100 dark:border-slate-700">
                    <span class="text-amber-600 dark:text-amber-400 font-semibold text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                        </svg>
                        Garansi Kualitas
                    </span>
                </div>
            </div>

            {{-- Service Card 3 --}}
            <div class="group relative bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-sm hover:shadow-xl border border-slate-100 dark:border-slate-700 transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                <div class="w-14 h-14 rounded-2xl bg-green-100 dark:bg-green-900/50 flex items-center justify-center text-green-600 dark:text-green-400 mb-6 group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75-6.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-.75.75H3.75a.75.75 0 0 1-.75-.75v-3ZM19.5 21a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Kemudahan Booking</h3>
                <p class="text-slate-500 dark:text-slate-400 leading-relaxed text-sm">
                    Proses pemesanan yang mudah dan transparan. Booking online, konfirmasi cepat, dan unit siap dalam hitungan jam.
                </p>
                <div class="mt-6 pt-6 border-t border-slate-100 dark:border-slate-700">
                    <span class="text-green-600 dark:text-green-400 font-semibold text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                        </svg>
                        Proses Cepat & Aman
                    </span>
                </div>
            </div>

            {{-- Service Card 4 --}}
            <div class="group relative bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-sm hover:shadow-xl border border-slate-100 dark:border-slate-700 transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                <div class="w-14 h-14 rounded-2xl bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center text-blue-600 dark:text-blue-400 mb-6 group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Pengurusan Dokumen</h3>
                <p class="text-slate-500 dark:text-slate-400 leading-relaxed text-sm">
                    Kami bantu proses balik nama, STNK, dan semua dokumen kendaraan agar Anda tidak perlu repot mengurus sendiri.
                </p>
                <div class="mt-6 pt-6 border-t border-slate-100 dark:border-slate-700">
                    <span class="text-blue-600 dark:text-blue-400 font-semibold text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                        Dokumen Resmi & Legal
                    </span>
                </div>
            </div>

            {{-- Service Card 5 --}}
            <div class="group relative bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-sm hover:shadow-xl border border-slate-100 dark:border-slate-700 transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                <div class="w-14 h-14 rounded-2xl bg-rose-100 dark:bg-rose-900/50 flex items-center justify-center text-rose-600 dark:text-rose-400 mb-6 group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Garansi Purna Jual</h3>
                <p class="text-slate-500 dark:text-slate-400 leading-relaxed text-sm">
                    Setiap kendaraan yang Anda beli dilindungi garansi purna jual. Kami pastikan kepuasan Anda jangka panjang.
                </p>
                <div class="mt-6 pt-6 border-t border-slate-100 dark:border-slate-700">
                    <span class="text-rose-600 dark:text-rose-400 font-semibold text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>
                        Terjamin & Terpercaya
                    </span>
                </div>
            </div>

            {{-- Service Card 6 --}}
            <div class="group relative bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-sm hover:shadow-xl border border-slate-100 dark:border-slate-700 transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                <div class="w-14 h-14 rounded-2xl bg-purple-100 dark:bg-purple-900/50 flex items-center justify-center text-purple-600 dark:text-purple-400 mb-6 group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.33.105.66.213.99.324a3.375 3.375 0 1 1-2.188 6.012l-2.078-1.571a.75.75 0 0 0-.91-.122l-.123.061l-2.583 1.292a.75.75 0 0 1-.958-1.077l.216-.251l2.582-1.291a13.504 13.504 0 0 0-4.945-4.944L2.25 12" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Konsultasi Gratis</h3>
                <p class="text-slate-500 dark:text-slate-400 leading-relaxed text-sm">
                    Tim ahli kami siap membantu Anda memilih kendaraan yang paling sesuai dengan kebutuhan dan anggaran Anda.
                </p>
                <div class="mt-6 pt-6 border-t border-slate-100 dark:border-slate-700">
                    <span class="text-purple-600 dark:text-purple-400 font-semibold text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                        Hubungi Kami
                    </span>
                </div>
            </div>

        </div>
    </div>

    {{-- CTA Banner --}}
    <div class="relative bg-gradient-to-br from-slate-900 to-primary-900 overflow-hidden py-24">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Siap Menemukan Kendaraan Impian Anda?</h2>
            <p class="text-primary-100 mb-10 text-lg opacity-90">Jelajahi ribuan pilihan kendaraan premium kami sekarang.</p>
            <a href="/katalog" class="inline-block px-10 py-4 bg-white text-primary-700 font-bold rounded-full hover:bg-slate-50 transition-all shadow-2xl hover:scale-105 transform cursor-pointer">
                Lihat Katalog Mobil
            </a>
        </div>
    </div>
@endsection
