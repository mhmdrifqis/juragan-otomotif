<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthModal extends Component
{
    public $isOpen = false;
    public $isLogin = true;

    public $name = '';
    public $email = '';
    public $whatsapp_number = '';
    public $password = '';
    public $password_confirmation = '';

    #[On('openAuthModal')] 
    public function open()
    {
        $this->isOpen = true;
    }

    public function close()
    {
        $this->isOpen = false;
        $this->reset(['name', 'email', 'whatsapp_number', 'password', 'password_confirmation']);
        $this->resetValidation();
    }

    public function toggleMode()
    {
        $this->isLogin = !$this->isLogin;
        $this->resetValidation();
    }

    public function submit()
    {
        if ($this->isLogin) {
            $this->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
                $this->close();
                $this->redirect(request()->header('Referer') ?? '/');
                return;
            }

            throw ValidationException::withMessages([
                'email' => 'Email atau Password salah.',
            ]);
        } else {
            $this->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'whatsapp_number' => 'required|string|max:20',
                'password' => 'required|string|min:8|confirmed',
            ]);

            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'whatsapp_number' => $this->whatsapp_number,
                'password' => Hash::make($this->password),
            ]);

            Auth::login($user);
            $this->close();
            $this->redirect(request()->header('Referer') ?? '/');
        }
    }

    public function render()
    {
        return view('livewire.auth-modal');
    }
}
