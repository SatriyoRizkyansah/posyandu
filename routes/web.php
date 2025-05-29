<?php

use App\Http\Controllers\AnakController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\JadwalPosyanduController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrangtuaController;
use App\Http\Controllers\PerkembanganAnakController;
use App\Http\Controllers\PetugasController;
use App\Models\Orangtua;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {
    return redirect('/login');
    // return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth');

Route::get('/login-orangtua', [LoginController::class, 'formOrangtua'])->middleware('guest')->name('login.orangtua');
Route::post('/login-orangtua', [LoginController::class, 'authOrangtua'])->name('auth.orangtua');

Route::middleware('auth:web')->group(function () {
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
        // Route::get('/petugas/print', [PetugasController::class, 'print'])->name('petugas.cetak');
        Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
        Route::post('/petugas/create', [PetugasController::class, 'store'])->name('petugas.store');
        Route::delete('/petugas/delete/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy');

        // Manage data perkembangan anak
        Route::get('/perkembangan', [PerkembanganAnakController::class, 'index'])->name('perkembangan.index');
        Route::get('/perkembangan/detail/{id}', [PerkembanganAnakController::class, 'detail'])->name('perkembangan.detail');
        Route::get('/perkembangan/create', [PerkembanganAnakController::class, 'create'])->name('perkembangan.create');
        Route::post('/perkembangan/create', [PerkembanganAnakController::class, 'store'])->name('perkembangan.store');
        Route::get('/perkembangan/edit/{id}', [PerkembanganAnakController::class, 'edit'])->name('perkembangan.edit');
        Route::post('/perkembangan/edit/{id}', [PerkembanganAnakController::class, 'update'])->name('perkembangan.edit');
        Route::delete('/perkembangan/delete/{id}', [PerkembanganAnakController::class, 'delete'])->name('perkembangan.destroy');

        // Manage data Imunisasi
        Route::get('/imunisasi', [ImunisasiController::class, 'index'])->name('imunisasi.index');
        Route::get('/imunisasi/create', [ImunisasiController::class, 'create'])->name('imunisasi.create');
        Route::post('/imunisasi/create', [ImunisasiController::class, 'store'])->name('imunisasi.store');
        Route::get('/imunisasi/edit/{id}', [ImunisasiController::class, 'edit'])->name('imunisasi.edit');
        Route::post('/imunisasi/edit/{id}', [ImunisasiController::class, 'update'])->name('imunisasi.edit');
        Route::delete('/imunisasi/delete/{id}', [ImunisasiController::class, 'delete'])->name('imunisasi.destroy');

        // Managa data orang tua
        Route::get('/orangtua', [OrangtuaController::class, 'index'])->name('orangtua.index');

        // /dashboard/admin/orangtua

        Route::get('/orangtua/create', [OrangtuaController::class, 'create'])->name('orangtua.create');
        Route::post('/orangtua/create', [OrangtuaController::class, 'store'])->name('orangtua.store');
        Route::get('/orangtua/edit/{id}', [OrangtuaController::class, 'edit'])->name('orangtua.edit');
        Route::post('/orangtua/edit/{id}', [OrangtuaController::class, 'update'])->name('orangtua.edit');
        Route::delete('/orangtua/delete/{id}', [OrangtuaController::class, 'delete'])->name('orangtua.destroy');

        // Anak
        Route::get('/anak', [AnakController::class, 'index'])->name('anak.index');
        Route::get('/anak/{id}', [AnakController::class, 'show'])->name('anak.show');
        Route::get('/anak/create/{id}', [AnakController::class, 'create'])->name('anak.create');
        Route::post('/anak/create', [AnakController::class, 'store'])->name('anak.store');
        Route::get('/anak/edit/{id}', [AnakController::class, 'edit'])->name('anak.edit');
        Route::post('/anak/edit/{id}', [AnakController::class, 'update'])->name('anak.edit');
        Route::delete('/anak/delete/{id}', [AnakController::class, 'delete'])->name('anak.destroy');

        // detail perkembangan & imunisasi anak
        Route::get('/anak/tumbuh/{id}', [AnakController::class, 'showTumbuhAnak'])->name('anak.tumbuh');
        
    });
    //  logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware('auth:orangtua')->group(function () {
    Route::get('/dashboard/orangtua/home', [LoginController::class, 'dashboard_orangtua'])->name('dashboard.orangtua.home');

    // Perkembangan anak
    Route::get('/dashboard/orangtua/daftar_anak', [OrangtuaController::class, 'daftar_anak'])->name('dashboard.orangtua.anak');

    // Perkembangan anak
    Route::get('/dashboard/orangtua/perkembangan', [OrangtuaController::class, 'perkembangan'])->name('dashboard.orangtua.perkembangan');

    // Imunisasi anak
    Route::get('/dashboard/orangtua/imunisasi', [OrangtuaController::class, 'imunisasi'])->name('dashboard.orangtua.imunisasi');

    // Jadwal
    Route::get('/dashboard/orangtua/jadwal', [JadwalPosyanduController::class, 'indexOrangtua'])->name('dashboard.orangtua.jadwal');

    // Logout orangtua
    Route::post('/logout-orangtua', [LoginController::class, 'logoutOrangtua'])->name('logout.orangtua');
});

