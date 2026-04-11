<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserBookings extends Component
{
    public function deleteBooking($id)
    {
        \App\Models\Booking::where('user_id', Auth::id())
            ->where('id', $id)
            ->delete();

        $this->dispatch('swal:message', [
            'title' => 'Riwayat Dihapus!',
            'text' => 'Data booking telah dihapus dari riwayat Anda.',
            'icon' => 'success'
        ]);
    }

    public function render()
    {
        $bookings = Auth::user()->bookings()
            ->with(['car', 'car.brand', 'car.images'])
            ->latest()
            ->get();

        return view('livewire.user-bookings', [
            'bookings' => $bookings
        ])->layout('components.layouts.app', ['title' => 'Riwayat Booking Saya - Juragan Otomotif']);
    }
}
