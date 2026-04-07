# Implementation Guide: Juragan Otomotif

## 1. Project Identity & Vision
- **Project Name:** Juragan Otomotif
- **Tagline:** Solusi Jual Beli Mobil Terpercaya.
- **Core Philosophy:** Menghadirkan pengalaman belanja mobil yang mewah secara visual namun sangat sederhana secara fungsional. Desain harus mengikuti tren *clean modern design* dengan fokus pada estetika *flat UI* dan tipografi yang kuat.

## 2. Structural Pillars (E-Commerce Standard)
Aplikasi dibangun di atas tiga pilar utama untuk memastikan operasional bisnis berjalan lancar:

### A. Customer Facing (Frontend)
- **High-Conversion Homepage:** Menampilkan unit mobil unggulan dengan visual yang dominan.
- **Advanced Automotive Search:** Filter pencarian harus spesifik (Merek, Model, Tahun, Rentang Harga, Jenis Transmisi, Bahan Bakar).
- **Product Detail Page (PDP):** Fokus pada galeri foto resolusi tinggi, spesifikasi teknis yang rapi, dan tombol *Call-to-Action* (WhatsApp/Booking) yang tidak mengganggu namun mudah ditemukan.
- **User Dashboard:** Tempat pelanggan memantau unit yang mereka sukai (Wishlist) dan status booking mereka.

### B. Management Suite (Backend/Admin)
- **Inventory Control:** Menggunakan **Filament PHP** untuk manajemen stok unit secara real-time.
- **Lead & Booking Management:** Panel terpusat untuk memproses setiap permintaan booking atau pertanyaan yang masuk dari calon pembeli.
- **Media Library:** Sistem manajemen aset untuk menangani banyak foto unit mobil dengan optimasi otomatis.

### C. Core Engine & Integration
- **SEO-Friendly Architecture:** Penggunaan *slug* yang deskriptif untuk setiap unit mobil guna meningkatkan keterlihatan di mesin pencari.
- **Automated Notification:** Sistem pengiriman email/notifikasi saat ada aktivitas booking atau perubahan status transaksi.

## 3. Technology Stack
- **Framework:** Laravel 11.x
- **Admin Panel:** Filament PHP (Wajib untuk efisiensi manajemen data).
- **Frontend Styling:** Tailwind CSS (Modern, utility-first).
- **Interactivity:** Alpine.js & Laravel Livewire (Untuk fitur pencarian real-time dan filter tanpa reload).
- **Database:** MySQL / PostgreSQL.

## 4. UI/UX Design Guidelines
- **Modern Flat Aesthetic:** Hindari penggunaan gradasi atau bayangan yang terlalu berat. Gunakan palet warna yang mencerminkan kepercayaan (misal: Biru Navy, Putih Bersih, atau Hitam Elegan).
- **Mobile-First Approach:** Struktur navigasi harus dioptimalkan untuk penggunaan satu tangan di smartphone.
- **Visual Consistency:** Semua foto mobil harus ditampilkan dengan rasio aspek yang seragam (misal 4:3 atau 16:9) untuk menjaga kerapian grid.
- **Accessibility:** Kontras teks tinggi, ukuran tombol minimal 44x44 pixel, dan font yang sangat mudah dibaca (San Serif).

## 5. Core Features Detail

### 1. Manajemen Inventaris Mobil
- Mendukung multi-upload gambar.
- Fitur "Mark as Sold" atau "Reserved" yang secara otomatis memperbarui tampilan di sisi pengunjung.
- Labeling otomatis (Misal: "Terbaru", "Promo", "DP Rendah").

### 2. Sistem Booking & Reservasi
- Alur transaksi tidak menggunakan keranjang belanja (Cart) konvensional.
- Proses: **Lihat Mobil -> Isi Form Booking / Klik WhatsApp -> Konfirmasi Admin.**
- Fitur "Simulasi Kredit" sederhana di halaman detail mobil.

### 3. Search & Discovery
- Pencarian cerdas yang memprediksi merek atau model saat user mengetik.
- Filter yang bersifat dinamis (hanya menampilkan kategori yang memiliki stok tersedia).

## 6. Database Schema (Key Entities)
- `users`: Data pelanggan dan admin.
- `brands`: Master data merek mobil (Toyota, Honda, dll).
- `categories`: Kategori mobil (SUV, Sedan, Electric, dll).
- `cars`: Data teknis mobil, harga, deskripsi, status, dan metadata SEO.
- `car_images`: Galeri foto per unit mobil.
- `bookings`: Rekam jejak reservasi pelanggan.

## 7. Implementation Constraints for AI Agent
1. **Clean Code:** Gunakan *Service Classes* untuk logika bisnis; jangan menumpuk kode di Controller.
2. **Modular UI:** Gunakan komponen Blade (`<x-components>`) untuk elemen yang berulang.
3. **Data Integrity:** Selalu gunakan *Validation Request* untuk setiap input form.
4. **Optimized Images:** Implementasikan otomatisasi *resize* dan *webp conversion* pada gambar yang diunggah untuk performa maksimal.