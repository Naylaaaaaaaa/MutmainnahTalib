<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

// Halaman awal
Route::get('/', function () {
    return view('welcome');
});

// Auth default dari Laravel Breeze
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        // Fallback dashboard umum (bisa diganti jika tidak digunakan)
        return redirect()->route('redirect-role');
    })->name('dashboard');

    // Group role-based
    Route::get('/admin/dashboard', function () {
        return 'Selamat datang di Dashboard Admin';
    })->middleware(['auth', 'verified'])->name('admin.dashboard');

    Route::get('/customer/home', function () {
        return 'Selamat datang di Halaman Customer';
    })->middleware(['auth', 'verified'])->name('customer.home');

    Route::get('/kurir/home', function () {
        return 'Selamat datang di Halaman Kurir';
    })->middleware(['auth', 'verified'])->name('kurir.home');
});

// Route fallback setelah login berdasarkan role
Route::get('/redirect-role', function () {
    $user = Auth::user();

    return match($user->role) {
        'admin' => redirect()->route('admin.dashboard'),
        'customer' => redirect()->route('customer.home'),
        'kurir' => redirect()->route('kurir.home'),
        default => abort(403, 'Role tidak dikenali')
    };
})->middleware(['auth'])->name('redirect-role');

// Route logout sederhana (bisa diakses via GET)
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Auth routes bawaan Breeze (login, register, dll)
require __DIR__.'/auth.php';
