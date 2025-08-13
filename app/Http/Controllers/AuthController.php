<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        \Log::info('Login attempt for email: ' . $request->email);
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // For demo purposes, we'll create a user if they don't exist
        // In production, you'd want proper user registration and password verification
        $user = User::firstOrCreate(
            ['email' => $request->email],
            [
                'name' => 'Demo User',
                'password' => Hash::make($request->password),
            ]
        );

        \Log::info('User found/created: ' . $user->id . ' - ' . $user->email);

        // Log the user in
        Auth::login($user);
        
        \Log::info('Auth::login() called. Auth::check() = ' . (Auth::check() ? 'true' : 'false'));
        \Log::info('Session ID: ' . session()->getId());
        
        // Simple redirect for now
        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login');
    }
}
