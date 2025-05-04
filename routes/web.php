<?php

use App\Http\Controllers\JadwalPosyanduController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrangtuaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth');

Route::middleware('auth')->group(function () {
    // Dashboard    
    Route::prefix('dashboard/admin')->group(function () {
        Route::get('/', [LoginController::class, 'dashboard'])->name('dashboard.index');

        // Insert data orangtua dan anak
        Route::get('/pendaftaran', [OrangtuaController::class, 'create'])->name('pendaftaran.create');
        Route::post('/pendaftaran', [OrangtuaController::class, 'store'])->name('pendaftaran.store');

        // Jadwal
         Route::get('/jadwal', [JadwalPosyanduController::class, 'index'])->name('jadwal.index');
    });
    //  logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});