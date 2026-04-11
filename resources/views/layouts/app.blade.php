<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth"
      x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) }" 
      x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" 
      :class="{ 'dark': darkMode }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title', 'Juragan Otomotif - Solusi Jual Beli Mobil Terpercaya')</title>
        
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/png">
        <link rel="apple-touch-icon" href="{{ asset('assets/images/logo.png') }}">
        
        <!-- Vite Tailwind CSS Setup -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        @livewireStyles
    </head>
    <body class="flex flex-col min-h-screen bg-slate-50 dark:bg-[#0B1120] text-slate-900 dark:text-slate-100 transition-colors duration-300">
        
        <!-- Navbar Component -->
        <x-navbar />

        <!-- Main Content -->
        <main class="flex-grow">
            @yield('content')
        </main>

        <!-- Footer Component -->
        <x-footer />
        
        <!-- Livewire Auth Modal -->
        <livewire:auth-modal />
        
        @livewireScripts
        @stack('scripts')
        
        {{-- Custom Global SweetAlert Handler --}}
        <script>
            window.addEventListener('swal:confirm', event => {
                const isDark = document.documentElement.classList.contains('dark');
                
                Swal.fire({
                    title: event.detail.title,
                    text: event.detail.text,
                    icon: event.detail.icon || 'warning',
                    showCancelButton: true,
                    confirmButtonColor: isDark ? '#6366f1' : '#4f46e5', // INDIGO-500/600
                    cancelButtonColor: isDark ? '#475569' : '#94a3b8', // SLATE-600/400
                    confirmButtonText: event.detail.confirmText || 'Ya, Lanjutkan!',
                    cancelButtonText: event.detail.cancelText || 'Batal',
                    background: isDark ? '#1e293b' : '#ffffff', // SLATE-800
                    color: isDark ? '#f8fafc' : '#1e293b', // SLATE-50/800
                    customClass: {
                        popup: 'rounded-3xl border border-slate-200 dark:border-slate-700 shadow-2xl',
                        title: 'font-bold',
                        confirmButton: 'rounded-xl px-5 py-2.5 font-bold',
                        cancelButton: 'rounded-xl px-5 py-2.5 font-bold'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.livewire.find(event.detail.componentId).call(event.detail.method, event.detail.id);
                    }
                });
            });

            window.addEventListener('swal:message', event => {
                const isDark = document.documentElement.classList.contains('dark');
                Swal.fire({
                    title: event.detail.title,
                    text: event.detail.text,
                    icon: event.detail.icon || 'success',
                    timer: 3000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    background: isDark ? '#1e293b' : '#ffffff',
                    color: isDark ? '#f8fafc' : '#1e293b',
                    customClass: {
                        popup: 'rounded-3xl border border-slate-200 dark:border-slate-700 shadow-2xl'
                    }
                });
            });

            // Trigger session messages
            @if(session('success'))
                window.dispatchEvent(new CustomEvent('swal:message', {
                    detail: { title: 'Berhasil!', text: "{{ session('success') }}", icon: 'success' }
                }));
            @endif

            @if(session('error'))
                window.dispatchEvent(new CustomEvent('swal:message', {
                    detail: { title: 'Ups!', text: "{{ session('error') }}", icon: 'error' }
                }));
            @endif
        </script>
    </body>
</html>