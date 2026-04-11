<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserPassword extends Component
{
    public $current_password;
    public $new_password;
    public $new_password_confirmation;

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

    public function render()
    {
        return view('livewire.user-password')
            ->layout('components.layouts.app', ['title' => 'Ganti Password - Juragan Otomotif']);
    }
}
