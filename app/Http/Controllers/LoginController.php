<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Anak;
use App\Models\Imunisasi;
use App\Models\Orangtua;
use App\Models\PerkembanganAnak;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $petugas = Petugas::where('username', $credentials['username'])->first();

        // if ($petugas) {
        //     $inputPassword = $credentials['password'];
        //     $storedPassword = $petugas->password;

        //     // Cek apakah password tersimpan dalam bentuk hash (bcrypt)
        //     if (
        //         (Hash::needsRehash($storedPassword) || Hash::check($inputPassword, $storedPassword)) ||
        //         $inputPassword === $storedPassword // plain text match
        //     ) {
        //         Auth::guard('web')->login($petugas);
        //         $request->session()->regenerate();

        //         return redirect()->intended(route('dashboard.admin.home'))->with('success', 'Login Berhasil.');
        //     }
        // }

        if ($petugas && $petugas->password === $credentials['password']) {
            // Login menggunakan guard orangtua
            Auth::guard('web')->login($petugas);
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard.admin.home'))->with('success', 'Login Berhasil.');
        }

        return back()->with('loginError', 'Login gagal, username / password salah!');
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect('/login')->with('success', 'Logout Berhasil.');
    }

    public function dashboard()
    {
        $perkembanganAnakCount = PerkembanganAnak::count();
        $imunisasiCount = Imunisasi::count();
        $orangTuaCount = Orangtua::count();
        $anakCount = Anak::count();
        
        // Ambil semua data anak dari database
        $anak = Anak::all();

        // Mengelompokkan anak berdasarkan umur (per triwulan)
        $dataTriwulan = [
            '0-3' => 0,
            '4-6' => 0,
            '7-9' => 0,
            '10-12' => 0,
        ];

        

        // Menghitung jumlah anak per triwulan
        
        foreach ($anak as $item) {
            $umurTahun = \Carbon\Carbon::parse($item->tanggal_lahir)->diffInYears(now());

            $umurBulan = \Carbon\Carbon::parse($item->tanggal_lahir)->diffInMonths(now());

            if ($umurBulan >= 0 && $umurBulan <= 3) {
                $dataTriwulan['0-3']++;
            } elseif ($umurBulan >= 4 && $umurBulan <= 6) {
                $dataTriwulan['4-6']++;
            } elseif ($umurBulan >= 7 && $umurBulan <= 9) {
                $dataTriwulan['7-9']++;
            } elseif ($umurBulan >= 10 && $umurBulan <= 12) {
                $dataTriwulan['10-12']++;
            }
        }
        
        $dataCount = [
            'perkembanganAnakCount' => $perkembanganAnakCount,
            'imunisasiCount' => $imunisasiCount,
            'orangTuaCount' => $orangTuaCount,
            'anakCount' => $anakCount,
            // 'anak' => $anak
        ];

        // Tambahkan sebelum return view()
        $dataTahunan = [
            '1' => 0,
            '2' => 0,
            '3' => 0,
            '4' => 0,
        ];

        $now = Carbon::now();
        
        $dataTahunan = Anak::selectRaw('TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) as usia')
        ->whereRaw('TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) BETWEEN 1 AND 4')
        ->get()
        ->groupBy('usia')
        ->map(fn ($group) => $group->count())
        ->toArray();

        // Pastikan semua key 1–4 tersedia
        foreach (range(1, 4) as $tahun) {
        if (!isset($dataTahunan[$tahun])) {
            $dataTahunan[$tahun] = 0;
        }
        }
        ksort($dataTahunan);

        return view('dashboard.admin.index', compact(
            'dataCount',
            'dataTriwulan',
            'dataTahunan'
        ));
    }

        public function formOrangtua()
    {
        return view('login-orangtua'); 
    }

    public function authOrangtua(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nik' => 'required',
            'no_telp' => 'required',
        ]);

        // Mencari orangtua berdasarkan NIK
        $orangtua = Orangtua::where('nik', $validated['nik'])->first();

        // Cek apakah no_telp cocok
        if ($orangtua && $orangtua->no_telp === $validated['no_telp']) {
            // Login menggunakan guard orangtua
            Auth::guard('orangtua')->login($orangtua);
            $request->session()->regenerate();

            return redirect()->route('dashboard.orangtua.home');
        }

        return back()->with('loginError', 'Login gagal, NIK atau No. Telp salah!');
    }

        public function logoutOrangtua(Request $request)
    {
        Auth::guard('orangtua')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login-orangtua')->with('success', 'Logout Berhasil.');
    }
    
    public function dashboard_orangtua(){
        return view('dashboard.orangtua.index');
    }


}
