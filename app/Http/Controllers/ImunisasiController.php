<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Imunisasi;
use Illuminate\Http\Request;

class ImunisasiController extends Controller
{
    public function index()
    {
        $immunisasi_data = Imunisasi::with('anak')->get();
        return view('dashboard.admin.imunisasi.index', compact('immunisasi_data'));
    }

    public function create()
    {
        return view('dashboard.admin.imunisasi.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'id_anak' => 'required|string|max:255',
            'tanggal_imunisasi' => 'required|date',
            'imunisasi' => 'required|string|max:255',
            'vitamin' => 'nullable|string|max:255',
        ]);


        Imunisasi::create([
            'id_anak' => $validatedData['id_anak'],
            'tanggal_imunisasi' => $validatedData['tanggal_imunisasi'],
            'imunisasi' => $validatedData['imunisasi'],
            'vitamin' => $validatedData['vitamin'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('imunisasi.index')->with('success', 'Data imunisasi anak berhasil disimpan.');
        
        // return view('dashboard.admin.perkembangan_anak.create');
    }

    public function edit($id)
    {
        $imunisasi_data = Imunisasi::findOrFail($id);
        $anak = Anak::all();
        return view('dashboard.admin.imunisasi.edit', compact('imunisasi_data', 'anak'));
    }

    public function update(Request $request, $id)
    {

        // dd($request->all());
        $validatedData = $request->validate([
            'id_anak' => 'required|string|max:255',
            'tanggal_imunisasi' => 'required|date',
            'imunisasi' => 'required|string|max:255',
            'vitamin' => 'nullable|string|max:255',
        ]);

        Imunisasi::where('id', $id)->update([
            'id_anak' => $validatedData['id_anak'],
            'tanggal_imunisasi' => $validatedData['tanggal_imunisasi'],
            'imunisasi' => $validatedData['imunisasi'],
            'vitamin' => $validatedData['vitamin'],
            'updated_at' => now(),
        ]);

        return redirect()->route('imunisasi.index')->with('success', 'Data imunisasi anak berhasil diperbarui.');
    }

        public function delete($id)
    {
        $imunisasi = Imunisasi::findOrFail($id);
        $imunisasi->delete();

        return redirect()->route('imunisasi.index')->with('success', 'Data perkembangan anak berhasil dihapus.');
    }
}
