<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CarCatalog;
use App\Livewire\CarDetail;
// App imports eliminated UserDashboard as it is being split
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::view('/syarat-ketentuan', 'pages.terms')->name('terms');
Route::view('/kebijakan-privasi', 'pages.privacy')->name('privacy');

Route::get('/katalog', CarCatalog::class)->name('katalog');
Route::get('/katalog/{slug}', CarDetail::class)->name('car.detail');

// User Section (requires login)
Route::middleware(['auth'])->group(function () {
    Route::get('/profil', \App\Livewire\UserProfile::class)->name('user.profile');
    Route::get('/ganti-password', \App\Livewire\UserPassword::class)->name('user.password');
    Route::get('/riwayat-booking', \App\Livewire\UserBookings::class)->name('user.bookings');
    Route::get('/mobil-disukai', \App\Livewire\UserWishlist::class)->name('user.wishlist');
});

// Logout with redirect to Home
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Auth Socialite
Route::get('/auth/google', [App\Http\Controllers\Auth\SocialiteController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [App\Http\Controllers\Auth\SocialiteController::class, 'callback'])->name('google.callback');

// FAQ / Help Center
Route::get('/pusat-bantuan', function () {
    return view('pages.faq');
})->name('faq');

// Route Auth untuk redirect jika diperlukan (Laravel requirement untuk middleware auth)
Route::get('/login', function () {
    return redirect('/');
})->name('login');
