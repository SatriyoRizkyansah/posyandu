<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Orangtua;
use Illuminate\Http\Request;

class OrangtuaController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.orangtua.index', [
            'orangtua_data' => Orangtua::with('anak')->get(),
        ]);
    }

    public function create()
    {
        return view('dashboard.admin.orangtua.pendaftaran_baru');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nik' => 'required|unique:orangtua,nik',
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
        $uniqueId = 'A' . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);


        // Simpan data anak
        Anak::create([
            'id' => $uniqueId,
            'nama' => $request->nama_anak,
            'id_orangtua' => $orangtua->id,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
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

    public function destroy($id)
    {
        // Delete the record
    }
    
}
