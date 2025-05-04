<?php

use App\Http\Controllers\JadwalPosyanduController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrangtuaController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth');

Route::middleware('auth')->group(function () {
    // Dashboard admin
    Route::prefix('dashboard/admin')->group(function () {
        Route::get('/home', [LoginController::class, 'dashboard'])->name('dashboard.admin.home');

        // Insert data orangtua dan anak
        Route::get('/pendaftaran', [OrangtuaController::class, 'create'])->name('pendaftaran.create');
        Route::post('/pendaftaran', [OrangtuaController::class, 'store'])->name('pendaftaran.store');

        // Jadwal
         Route::get('/jadwal', [JadwalPosyanduController::class, 'index'])->name('jadwal.index');
         Route::post('/jadwal', [JadwalPosyanduController::class, 'store'])->name('jadwal.store');

        //  Manage data petugas
        Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index');
    });
    //  logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});