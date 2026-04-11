@extends('layouts.app')

@section('title', 'Pusat Bantuan - Juragan Otomotif')

@section('content')
<div class="py-16 bg-slate-50 dark:bg-[#020617] min-h-screen">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white sm:text-4xl">
                Pusat Bantuan & FAQ
            </h1>
            <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
                Temukan jawaban untuk pertanyaan umum atau hubungi admin kami secara langsung.
            </p>
        </div>

        <div class="space-y-6">
            <!-- FAQ Items -->
            <div x-data="{ open: false }" class="bg-white dark:bg-slate-900 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 overflow-hidden">
                <button @click="open = !open" class="flex justify-between items-center w-full px-6 py-5 text-left font-semibold text-slate-900 dark:text-white">
                    <span>Bagaimana cara melakukan booking mobil?</span>
                    <svg class="w-5 h-5 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-5 text-slate-600 dark:text-slate-400">
                    Anda dapat mencari mobil di katalog, pilih unit yang Anda suka, dan klik tombol "Booking Sekarang" di halaman detail mobil. Pastikan Anda sudah login untuk melanjutkan.
                </div>
            </div>

            <div x-data="{ open: false }" class="bg-white dark:bg-slate-900 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 overflow-hidden">
                <button @click="open = !open" class="flex justify-between items-center w-full px-6 py-5 text-left font-semibold text-slate-900 dark:text-white">
                    <span>Apakah saya bisa melakukan test drive?</span>
                    <svg class="w-5 h-5 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-5 text-slate-600 dark:text-slate-400">
                    Tentu saja! Setelah Anda melakukan booking, admin kami akan menghubungi Anda untuk mengatur jadwal test drive sesuai ketersediaan unit.
                </div>
            </div>

            <div x-data="{ open: false }" class="bg-white dark:bg-slate-900 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 overflow-hidden">
                <button @click="open = !open" class="flex justify-between items-center w-full px-6 py-5 text-left font-semibold text-slate-900 dark:text-white">
                    <span>Metode pembayaran apa saja yang tersedia?</span>
                    <svg class="w-5 h-5 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-5 text-slate-600 dark:text-slate-400">
                    Kami mendukung berbagai metode pembayaran mulai dari transfer bank, cicilan leasing, hingga tukar tambah (trade-in).
                </div>
            </div>
        </div>

        <!-- WhatsApp Call to Action -->
        <div class="mt-16 bg-primary-600 rounded-3xl p-8 text-center text-white shadow-xl shadow-primary-500/20">
            <h2 class="text-2xl font-bold mb-4">Masih punya pertanyaan lain?</h2>
            <p class="mb-8 text-primary-100">Tim admin kami siap membantu Anda secara langsung via WhatsApp.</p>
            <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center gap-2 bg-white text-primary-600 px-8 py-4 rounded-2xl font-bold hover:bg-slate-100 transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Chat Admin Sekarang
            </a>
        </div>
    </div>
</div>
@endsection
