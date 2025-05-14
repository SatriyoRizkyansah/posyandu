<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Orangtua;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.anak.index', [
            'anak_data' => Anak::with('orangtua')->get(),
        ]);
    }

    public function show($id)
    {
        $anak_data = Anak::with('orangtua') 
                    ->findOrFail($id);

        return view('dashboard.admin.anak.detail', compact('anak_data'));
    }


    public function create($id)
    {
        $orangtua_data = Orangtua::findOrFail($id);
        $anak = Anak::where('id_orangtua', $id)->get();
        return view('dashboard.admin.anak.create', compact('orangtua_data', 'anak'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            // 'id_anak' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'nik_ibu' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:225',
            'jenis_kelamin' => 'required|string|max:255',
        ]);

        // Generate ID anak unik 
        do {
            $uniqueId = 'A' . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
        } while (Anak::where('id', $uniqueId)->exists());

        // Ambil Id orangtua
        $orangtua = Orangtua::where('nik', $validatedData['nik_ibu'])->first();

        Anak::create([
            'id' => $uniqueId,
            'nama' => $validatedData['nama'],
            'id_orangtua' => $orangtua->id,
            'tanggal_lahir' => $validatedData['tanggal_lahir'],
            'tempat_lahir' => $validatedData['tempat_lahir'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('orangtua.index')->with('success', 'Data anak berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $anak = Anak::findOrFail($id);
        return view('dashboard.admin.anak.edit', compact('anak'));
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'id_orangtua' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:225',
            'jenis_kelamin' => 'required|string|max:255',
        ]);

        // Ambil data anak
        $anak = Anak::where('id', $id)->first();

        // Update data anak
        $anak->update([
            'nama' => $validatedData['nama'],
            'id_orangtua' => $validatedData['id_orangtua'],
            'tanggal_lahir' => $validatedData['tanggal_lahir'],
            'tempat_lahir' => $validatedData['tempat_lahir'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'updated_at' => now(),
        ]);
        
        return redirect()->route('anak.index')->with('success', 'Data anak berhasil diupdate.');
    }

    public function delete($id)
    {
        $anak = Anak::findOrFail($id);
        $anak->delete();
        return redirect()->route('anak.index')->with('success', 'Data anak berhasil dihapus.');
    }
}
