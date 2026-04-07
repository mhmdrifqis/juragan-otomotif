<footer class="bg-slate-900 dark:bg-[#050B14] text-slate-300 py-16 mt-auto transition-colors duration-300 relative overflow-hidden">
    <!-- Decorative Glow in Dark Mode -->
    <div class="absolute inset-0 bg-gradient-to-t from-primary-900/10 to-transparent opacity-0 dark:opacity-100 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 border-b border-white/10 pb-12">
            <div class="col-span-1">
                <a href="/" class="text-2xl font-bold tracking-tight text-white mb-6 block">
                    JURAGAN<span class="text-primary-500">OTOMOTIF</span>
                </a>
                <p class="text-sm text-slate-400 leading-relaxed">
                    Menembus batas ekspektasi. Juragan Otomotif hadir memberikan pengalaman premium memiliki kendaraan impian Anda dengan jaminan kualitas tak tertandingi.
                </p>
            </div>
            
            <div>
                <h3 class="text-white font-semibold mb-6 uppercase tracking-wider text-sm">Eksplorasi</h3>
                <ul class="space-y-4 text-sm text-slate-400">
                    <li><a href="/" class="hover:text-primary-400 transition-colors">Beranda</a></li>
                    <li><a href="{{ route('katalog') }}" class="hover:text-primary-400 transition-colors">Katalog Koleksi</a></li>
                    <li><a href="{{ route('tentang') }}" class="hover:text-primary-400 transition-colors">Tentang Kami</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-white font-semibold mb-6 uppercase tracking-wider text-sm">Hubungi Kami</h3>
                <ul class="space-y-4 text-sm text-slate-400">
                    <li class="flex items-start">
                        <span class="mr-3 text-primary-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                        </span>
                        <span>Jl. Otomotif Raya No. 99<br>Gedung Kaca, Jakarta Selatan</span>
                    </li>
                    <li class="flex items-center">
                        <span class="mr-3 text-primary-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>
                        </span>
                        <span>+62 812-3456-7890</span>
                    </li>
                    <li class="flex items-center">
                        <span class="mr-3 text-primary-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                        </span>
                        <span>info@juraganotomotif.com</span>
                    </li>
                </ul>
            </div>

            {{-- Kolom 4: Social Media --}}
            <div>
                <h3 class="text-white font-semibold uppercase tracking-wider text-sm mb-6 pb-1">Media Sosial</h3>
                <p class="text-xs text-slate-400 mb-6 leading-relaxed">
                    Ikuti perkembangan koleksi terbaru dan promo eksklusif kami melalui kanal resmi.
                </p>
                <div class="flex space-x-5">
                    <a href="https://www.instagram.com/juraganotomotif_/" target="_blank" class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-gradient-to-tr from-yellow-400 via-red-500 to-purple-600 hover:border-transparent transition-all shadow-lg group transform hover:-translate-y-1" title="Instagram Juragan Otomotif">
                        <svg class="w-6 h-6 text-slate-300 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.332 3.608 1.308.975.975 1.247 2.242 1.308 3.607.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.332 2.633-1.308 3.608-.975.975-2.242 1.247-3.607 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.332-3.608-1.308-.975-.975-1.247-2.242-1.308-3.607-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.332-2.633 1.308-3.608.975-.975 2.242-1.247 3.607-1.308 1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="https://www.tiktok.com/@juraganotomotif_" target="_blank" class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-black hover:border-transparent transition-all shadow-lg group transform hover:-translate-y-1" title="TikTok Juragan Otomotif">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="pt-8 text-sm text-center text-slate-500 flex flex-col md:flex-row justify-between items-center">
            <p>&copy; {{ date('Y') }} Juragan Otomotif. Seluruh Hak Cipta Dilindungi.</p>
            <div class="space-x-4 mt-4 md:mt-0">
                <a href="{{ route('terms') }}" class="hover:text-white transition-colors">Syarat & Ketentuan</a>
                <a href="{{ route('privacy') }}" class="hover:text-white transition-colors">Privasi</a>
            </div>
        </div>
    </div>
</footer>
