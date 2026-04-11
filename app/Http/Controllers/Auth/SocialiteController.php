<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            
            // Cari user berdasarkan google_id atau email
            $user = User::where('google_id', $googleUser->id)
                        ->orWhere('email', $googleUser->email)
                        ->first();

            if ($user) {
                // Jika user ada, update google_id dan avatar
                $user->update([
                    'google_id' => $googleUser->id,
                    'avatar' => $googleUser->avatar,
                ]);
            } else {
                // Jika belum ada, buat user baru
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'avatar' => $googleUser->avatar,
                    'password' => bcrypt(Str::random(16)), 
                ]);
            }

            // Assign customer role if not already assigned
            if (!$user->hasAnyRole(['super_admin', 'sales', 'owner', 'customer'])) {
                $user->assignRole('customer');
            }

            Auth::login($user);

            return redirect()->intended('/');
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Socialite Login Error: ' . $e->getMessage());
            return redirect('/')->with('error', 'Gagal login dengan Google: ' . $e->getMessage());
        }
    }
}
