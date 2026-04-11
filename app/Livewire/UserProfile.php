<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserProfile extends Component
{
    public $name;
    public $email;
    public $whatsapp_number;
    public $address;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->whatsapp_number = $user->whatsapp_number;
        $this->address = $user->address;
    }

    public function updateProfile()
    {
        $user = Auth::user();

        $this->validate([
            'name' => ['required', 'string', 'min:2', 'max:100'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],
            'whatsapp_number' => ['nullable', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:500'],
        ]);

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'whatsapp_number' => $this->whatsapp_number,
            'address' => $this->address,
        ]);

        $this->dispatch('swal:message', [
            'title' => 'Profil Diperbarui!',
            'text' => 'Informasi profil Anda telah berhasil disimpan.',
            'icon' => 'success'
        ]);
    }

    public function render()
    {
        return view('livewire.user-profile')
            ->layout('components.layouts.app', ['title' => 'Profil Saya - Juragan Otomotif']);
    }
}
