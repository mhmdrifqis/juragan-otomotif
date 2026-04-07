<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\Wishlist;

class UserDashboard extends Component
{
    public $activeTab = 'profile';

    // Profile fields
    public $name;
    public $email;
    public $whatsapp_number;

    // Password fields
    public $current_password;
    public $new_password;
    public $new_password_confirmation;

    public $profileSuccess = false;
    public $passwordSuccess = false;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->whatsapp_number = $user->whatsapp_number;
    }

    public function updateProfile()
    {
        $user = Auth::user();

        $this->validate([
            'name' => ['required', 'string', 'min:2', 'max:100'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],
            'whatsapp_number' => ['nullable', 'string', 'max:20'],
        ]);

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'whatsapp_number' => $this->whatsapp_number,
        ]);

        $this->dispatch('swal:message', [
            'title' => 'Profil Diperbarui!',
            'text' => 'Informasi profil Anda telah berhasil disimpan.',
            'icon' => 'success'
        ]);
        $this->dispatch('profileUpdated');
    }

    public function updatePassword()
    {
        $this->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();

        if (!Hash::check($this->current_password, $user->password)) {
            $this->addError('current_password', 'Kata sandi saat ini tidak cocok.');
            return;
        }

        $user->update([
            'password' => Hash::make($this->new_password),
        ]);

        $this->current_password = '';
        $this->new_password = '';
        $this->new_password_confirmation = '';
        
        $this->dispatch('swal:message', [
            'title' => 'Password Diganti!',
            'text' => 'Kata sandi Anda telah berhasil diubah.',
            'icon' => 'success'
        ]);
    }

    public function removeWishlist($carId)
    {
        Wishlist::where('user_id', Auth::id())
                ->where('car_id', $carId)
                ->delete();
    }

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
        $bookings = Auth::user()->bookings()->with(['car', 'car.brand', 'car.images'])->latest()->get();
        $wishlistedCars = Auth::user()->wishlistedCars()->with(['brand', 'images'])->get();

        return view('livewire.user-dashboard', [
            'bookings' => $bookings,
            'wishlistedCars' => $wishlistedCars,
        ])->layout('components.layouts.app', ['title' => 'Dasbor Saya - Juragan Otomotif']);
    }
}
