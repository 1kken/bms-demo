<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect()->route('login');
});

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Test route to check authentication
Route::get('/test-auth', function () {
    if (Auth::check()) {
        return response()->json([
            'authenticated' => true,
            'user' => Auth::user()->email,
            'session_id' => session()->getId()
        ]);
    } else {
        return response()->json([
            'authenticated' => false,
            'session_id' => session()->getId()
        ]);
    }
});

// Protected routes (after login)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/residents', function () {
        return view('residents');
    })->name('residents');

    Route::get('/assets', function () {
        return view('assets');
    })->name('assets');

    Route::get('/certificates', function () {
        return view('certificates');
    })->name('certificates');

    Route::get('/households', function () {
        return view('households');
    })->name('households');

    Route::get('/programs', function () {
        return view('programs');
    })->name('programs');

    Route::get('/news', function () {
        return view('news');
    })->name('news');

    Route::get('/workforce', function () {
        return view('workforce');
    })->name('workforce');

    Route::get('/finance', function () {
        return view('finance');
    })->name('finance');

    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');
});
