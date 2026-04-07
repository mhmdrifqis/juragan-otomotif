<x-layouts.app :title="'Syarat & Ketentuan - Juragan Otomotif'">
    <!-- Header with Premium Design -->
    <div class="relative bg-gradient-to-br from-slate-900 to-primary-900 overflow-hidden pt-36 pb-24">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary-500/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-indigo-500/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
            <h1 class="text-4xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight leading-tight">
                Syarat & <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300">Ketentuan</span>
            </h1>
            <p class="text-primary-100 max-w-2xl mx-auto text-lg leading-relaxed opacity-80">
                Informasi detail mengenai aturan main dan komitmen layanan kami untuk kepuasan Anda.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 relative z-20 pb-32">
        <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-2xl border border-slate-100 dark:border-slate-700/50 p-8 lg:p-12 backdrop-blur-xl">
            
            <!-- Intro Card -->
            <div class="prose prose-slate dark:prose-invert max-w-none">
                <p class="text-lg text-slate-600 dark:text-slate-300 leading-relaxed mb-10 pb-6 border-b border-slate-100 dark:border-slate-700">
                    Selamat datang di <strong>Juragan Otomotif</strong>. Dengan mengakses dan menggunakan layanan kami, Anda menyetujui untuk terikat oleh syarat dan ketentuan berikut. Mohon baca dengan seksama sebelum melanjutkan penggunaan platform kami.
                </p>

                <div class="space-y-12">
                    <!-- Section 1 -->
                    <section>
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-3">
                            <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 text-sm">01</span>
                            Ketentuan Umum
                        </h2>
                        <p class="text-slate-600 dark:text-slate-400">
                            Juragan Otomotif adalah platform penyedia informasi dan transaksi kendaraan bermotor premium. Semua informasi yang tercantum di situs ini ditujukan untuk memberikan gambaran umum mengenai kondisi dan spesifikasi unit yang kami tawarkan.
                        </p>
                    </section>

                    <!-- Section 2 -->
                    <section>
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-3">
                            <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 text-sm">02</span>
                            Proses Booking & Transaksi
                        </h2>
                        <ul class="list-disc pl-5 space-y-2 text-slate-600 dark:text-slate-400">
                            <li>Booking dilakukan secara online melalui platform ini.</li>
                            <li>Data yang diberikan saat pendaftaran harus akurat dan sesuai dengan identitas resmi (KTP/SIM).</li>
                            <li>Konfirmasi booking akan dikirimkan melalui dashboard user dan notifikasi resmi.</li>
                            <li>Segala bentuk pembayaran hanya dilakukan melalui saluran yang telah ditunjuk secara resmi oleh Juragan Otomotif.</li>
                        </ul>
                    </section>

                    <!-- Section 3 -->
                    <section>
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-3">
                            <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 text-sm">03</span>
                            Tanggung Jawab Pengguna
                        </h2>
                        <p class="text-slate-600 dark:text-slate-400 mb-4">
                            Pengguna bertanggung jawab penuh atas keamanan akun dan kata sandi masing-masing. Juragan Otomotif tidak bertanggung jawab atas kerugian yang timbul akibat kelalaian pengguna dalam menjaga kerahasiaan akun.
                        </p>
                    </section>

                    <!-- Section 4 -->
                    <section>
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-3">
                            <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 text-sm">04</span>
                            Pembatalan & Pengembalian
                        </h2>
                        <p class="text-slate-600 dark:text-slate-400">
                            Kebijakan pembatalan booking mengikuti aturan yang berlaku pada setiap unit kendaraan. Mohon konsultasikan dengan tim representatif kami sebelum melakukan pembatalan.
                        </p>
                    </section>
                </div>

                <!-- Footer Note -->
                <div class="mt-16 pt-8 border-t border-slate-100 dark:border-slate-700">
                    <p class="text-sm text-slate-500 dark:text-slate-500 italic">
                        Terakhir diperbarui: {{ date('d F Y') }}. Juragan Otomotif berhak untuk mengubah syarat dan ketentuan ini kapan saja tanpa pemberitahuan sebelumnya.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
