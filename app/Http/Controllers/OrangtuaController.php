<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Imunisasi;
use App\Models\Orangtua;
use App\Models\PerkembanganAnak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrangtuaController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.orangtua.index', [
            'orangtua_data' => Orangtua::with('anak')->get(),
        ]);
    }

    // Daftar Anak
    public function daftar_anak()
    {
        return view('dashboard.orangtua.daftar_anak', [
            'orangtua_data' => Orangtua::with('anak')->get(),
        ]);
    }

    // perkembangan
    public function perkembangan()
    {
        return view('dashboard.orangtua.perkembangan');
    }

    public function perkembangan_detail($id)
    {

        $perkembanganAnak = PerkembanganAnak::with('anak')->where('id_anak', $id)->get();
        return view('dashboard.orangtua.perkembangan-detail', compact('perkembanganAnak'));
    }

    public function imunisasi()
    {
        return view('dashboard.orangtua.imunisasi');
    }

    public function imunisasi_detail($id)
    {
        $immunisasi_data = Imunisasi::with('anak')->where('id_anak', $id)->get();
        return view('dashboard.orangtua.imunisasi-detail', compact('immunisasi_data'));
    }

    public function create()
    {
        return view('dashboard.admin.orangtua.pendaftaran_baru');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama_ibu' => 'required',
            'no_telp_ibu' => 'required',
            'alamat' => 'required',
            'nama_anak' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        // Simpan data orangtua
        $orangtua = Orangtua::create([
            'nik' => $request->nik,
            'nama_ibu' => $request->nama_ibu,
            'no_telp' => $request->no_telp_ibu,
            'alamat' => $request->alamat,
        ]);

        // Generate ID anak unik
        do {
            $uniqueId = 'A' . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
        } while (Anak::where('id', $uniqueId)->exists());

        // Simpan data anak
        Anak::create([
            'id' => $uniqueId,
            'nama' => $request->nama_anak,
            'id_orangtua' => $orangtua->id,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('orangtua.index')->with('success', 'Data berhasil disimpan!');
    }

    public function show($id)
    {
        // Show a specific record
    }

    public function edit($id)
    {
        $orangtua_data = Orangtua::findOrFail($id);
        return view('dashboard.admin.orangtua.edit', compact('orangtua_data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required',
            'nama_ibu' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        // Update data orangtua
        Orangtua::where('id', $id)->update([
            'nik' => $request->nik,
            'nama_ibu' => $request->nama_ibu,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);
        
        return redirect()->route('orangtua.index')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {
        Orangtua::destroy($id);
        return redirect()->route('orangtua.index')->with('success', 'Data berhasil dihapus!');
    }
    
}
