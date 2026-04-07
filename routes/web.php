<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CarCatalog;
use App\Livewire\CarDetail;
use App\Livewire\UserDashboard;
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

// Dashboard (requires login)
Route::get('/dashboard', UserDashboard::class)->name('dashboard')->middleware('auth');

// Logout with redirect to Home
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Route Auth untuk redirect jika diperlukan (Laravel requirement untuk middleware auth)
Route::get('/login', function () {
    return redirect('/');
})->name('login');
