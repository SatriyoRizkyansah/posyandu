<?php

use App\Http\Controllers\JadwalPosyanduController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrangtuaController;
use App\Http\Controllers\PerkembanganAnakController;
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
        Route::get('/petugas/print', [PetugasController::class, 'print'])->name('petugas.cetak');
        Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
        Route::post('/petugas/create', [PetugasController::class, 'store'])->name('petugas.store');
        Route::delete('/petugas/delete/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy');

        // Manage data perkembangan anak
        Route::get('/perkembangan', [PerkembanganAnakController::class, 'index'])->name('perkembangan.index');
        Route::get('/perkembangan/create', [PerkembanganAnakController::class, 'create'])->name('perkembangan.create');
        Route::post('/perkembangan/create', [PerkembanganAnakController::class, 'store'])->name('perkembangan.store');
        Route::delete('/perkembangan/delete/{id}', [PerkembanganAnakController::class, 'delete'])->name('perkembangan.destroy');
    });
    //  logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});