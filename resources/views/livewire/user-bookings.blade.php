<div>
    {{-- Page Header --}}
    <div class="relative bg-gradient-to-br from-slate-900 to-primary-900 overflow-hidden pt-24 pb-20">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary-500/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-5">
                <div class="w-16 h-16 rounded-2xl bg-white/20 backdrop-blur flex items-center justify-center text-3xl font-black text-white border border-white/30 shadow-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-3xl font-extrabold text-white">Riwayat Booking</h1>
                    <p class="text-primary-300 text-sm">Pantau status pesanan dan test drive Anda</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Container --}}
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 pb-24 relative z-10">
        <div class="">
            {{-- Content Area --}}
            <div class="w-full">
                <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 p-8">
                    @if($bookings->count() === 0)
                        <div class="text-center py-16">
                            <div class="w-20 h-20 mx-auto rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-400 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-1.242-1.008-2.25-2.25-2.25H4.5c-1.242 0-2.25 1.008-2.25 2.25Z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-700 dark:text-slate-300 mb-2">Belum Ada Booking</h3>
                            <p class="text-slate-400 dark:text-slate-500 mb-6">Anda belum pernah melakukan booking. Temukan mobil impian Anda sekarang!</p>
                            <a href="/katalog" class="inline-flex items-center gap-2 px-6 py-3 bg-primary-600 hover:bg-primary-500 text-white font-bold rounded-2xl transition-all shadow-lg shadow-primary-600/20 cursor-pointer">
                                Jelajahi Katalog
                            </a>
                        </div>
                    @else
                        <div class="space-y-4">
                            @foreach($bookings as $booking)
                                @php
                                    $statusConfig = [
                                        'pending'   => ['bg' => 'bg-amber-100 dark:bg-amber-900/30', 'text' => 'text-amber-700 dark:text-amber-300', 'label' => 'Menunggu'],
                                        'Follow_Up' => ['bg' => 'bg-blue-100 dark:bg-blue-900/30', 'text' => 'text-blue-700 dark:text-blue-300', 'label' => 'Ditindaklanjuti'],
                                        'Succeeded' => ['bg' => 'bg-green-100 dark:bg-green-900/30', 'text' => 'text-green-700 dark:text-green-300', 'label' => 'Berhasil'],
                                        'Cancelled' => ['bg' => 'bg-red-100 dark:bg-red-900/30', 'text' => 'text-red-700 dark:text-red-300', 'label' => 'Dibatalkan']
                                    ];
                                    $s = $statusConfig[$booking->status] ?? ['bg' => 'bg-slate-100 dark:bg-slate-700', 'text' => 'text-slate-600 dark:text-slate-300', 'label' => $booking->status];
                                @endphp
                                <div class="flex flex-col sm:flex-row items-center gap-4 bg-slate-50 dark:bg-slate-900/50 p-4 rounded-2xl border border-slate-100 dark:border-slate-700 group/booking">
                                    <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-xl overflow-hidden bg-slate-200 dark:bg-slate-700 flex-shrink-0">
                                        <img src="{{ Storage::url($booking->car->images->first()->image_path ?? '') }}" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-grow">
                                        <h4 class="font-bold text-slate-900 dark:text-white text-lg leading-tight">{{ $booking->car->name }}</h4>
                                        <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">#{{ $booking->id }} · {{ $booking->created_at->format('d M Y') }}</p>
                                    </div>
                                    <div class="text-right shrink-0 flex flex-col items-end gap-2">
                                        <p class="font-black text-slate-900 dark:text-white text-lg">Rp {{ number_format($booking->car->price, 0, ',', '.') }}</p>
                                        <div class="flex items-center gap-2">
                                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-bold {{ $s['bg'] }} {{ $s['text'] }}">{{ $s['label'] }}</span>
                                            <button @click="window.dispatchEvent(new CustomEvent('swal:confirm', { 
                                                    detail: { 
                                                        title: 'Hapus Riwayat?', text: 'Apakah Anda yakin ingin menghapus data ini?',
                                                        method: 'deleteBooking', id: {{ $booking->id }}, componentId: $wire.__instance.id 
                                                    } 
                                                }))" class="cursor-pointer p-1.5 rounded-lg text-red-500 hover:bg-red-500 hover:text-white transition-all">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                            </button>
                                        </div>
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
