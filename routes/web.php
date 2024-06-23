<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserPegawaiController;
use App\Http\Controllers\Pegawai1Controller;
use Illuminate\Support\Facades\Route;


//landing page, kalau mau balik ke awal ganti jadi welcome
Route::get('/', function () {
    return view('landing');
});

// route ke pages.dashboard
Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// jika ingin mengakses harus ada auth/login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/pegawai', [Pegawai1Controller::class, 'indexpgw'])->name('pegawai.index');
    // Route::get('/dashboard', [UserPegawaiController::class, 'indexdash'])->name('dashboard');
    Route::get('/user', [UserPegawaiController::class, 'index'])->name('pegawai.userpgw');
});

require __DIR__.'/auth.php';
