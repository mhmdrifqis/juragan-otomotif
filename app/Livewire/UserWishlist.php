<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;

class UserWishlist extends Component
{
    public function removeWishlist($carId)
    {
        Wishlist::where('user_id', Auth::id())
                ->where('car_id', $carId)
                ->delete();

        $this->dispatch('swal:message', [
            'title' => 'Dihapus dari Favorit!',
            'text' => 'Mobil telah dihapus dari daftar kesukaan Anda.',
            'icon' => 'success'
        ]);
    }

    public function render()
    {
        $wishlistedCars = Auth::user()->wishlistedCars()
            ->with(['brand', 'images'])
            ->latest()
            ->get();

        return view('livewire.user-wishlist', [
            'wishlistedCars' => $wishlistedCars
        ])->layout('components.layouts.app', ['title' => 'Mobil yang Saya Sukai - Juragan Otomotif']);
    }
}
