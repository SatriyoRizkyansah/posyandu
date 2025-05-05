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

        if ($petugas) {
            $inputPassword = $credentials['password'];
            $storedPassword = $petugas->password;

            // Cek apakah password tersimpan dalam bentuk hash (bcrypt)
            if (
                (Hash::needsRehash($storedPassword) || Hash::check($inputPassword, $storedPassword)) ||
                $inputPassword === $storedPassword // plain text match
            ) {
                Auth::login($petugas);
                $request->session()->regenerate();

                return redirect()->intended(route('dashboard.admin.home'))->with('success', 'Login Berhasil.');
            }
        }

        return back()->with('loginError', 'Login gagal, username / password salah!');
    }


    public function logout(Request $request)
    {
        Auth::logout(); 

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
        $anak = Anak::all();
        
        $dataCount = [
            'perkembanganAnakCount' => $perkembanganAnakCount,
            'imunisasiCount' => $imunisasiCount,
            'orangTuaCount' => $orangTuaCount,
            'anakCount' => $anakCount,
            'anak' => $anak
        ];

        return view('dashboard.admin.index', compact('dataCount'));
        // return view('dashboard.admin.index');
    }

}
