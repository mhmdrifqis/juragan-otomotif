<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;
use App\Models\Booking;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class CarDetail extends Component
{
    public $car;
    public $isWishlisted = false;

    public function mount($slug)
    {
        $this->car = Car::with(['brand', 'category', 'images'])
                        ->where('slug', $slug)
                        ->firstOrFail();

        if (Auth::check()) {
            $this->isWishlisted = Wishlist::where('user_id', Auth::id())
                ->where('car_id', $this->car->id)->exists();
        }
    }

    public function toggleWishlist()
    {
        if (!Auth::check()) {
            $this->dispatch('openAuthModal');
            return;
        }

        $existing = Wishlist::where('user_id', Auth::id())->where('car_id', $this->car->id)->first();

        if ($existing) {
            $existing->delete();
            $this->isWishlisted = false;
        } else {
            Wishlist::create(['user_id' => Auth::id(), 'car_id' => $this->car->id]);
            $this->isWishlisted = true;
        }
    }

    public function bookCar()
    {
        if (!Auth::check()) {
            // Need login, dispatch event to open auth modal
            $this->dispatch('openAuthModal');
            return;
        }

        // Create booking
        $booking = Booking::create([
            'user_id' => Auth::id(),
            'car_id' => $this->car->id,
            'customer_name' => Auth::user()->name,
            'customer_phone' => Auth::user()->whatsapp_number ?? '-',
            'customer_email' => Auth::user()->email,
            'status' => 'pending',
            'message' => 'Booking via Website',
        ]);

        // Redirect to WhatsApp Admin with pre-filled message
        $adminPhone = '6281234567890'; // Placeholder Admin WhatsApp
        $userName = Auth::user()->name;
        $carName = $this->car->brand->name . ' ' . $this->car->name;
        
        $message = "Halo Admin Juragan Otomotif,\n\nSaya tertarik dan telah melakukan booking untuk unit:\n*Mobil:* {$carName}\n*Harga:* Rp " . number_format($this->car->price, 0, ',', '.') . "\n*ID Booking:* #{$booking->id}\n\nMohon info proses selanjutnya. Terima kasih.\n- {$userName}";

        $waUrl = "https://wa.me/{$adminPhone}?text=" . urlencode($message);

        // Flash message and redirect via JS
        $this->js("setTimeout(() => { window.location.href = '{$waUrl}'; }, 1500);");
        
        session()->flash('success', 'Booking berhasil disubmit! Anda akan dialihkan ke WhatsApp Admin.');
    }

    public function render()
    {
        return view('livewire.car-detail')
                ->layout('components.layouts.app', ['title' => $this->car->name . ' - Juragan Otomotif']);
    }
}
