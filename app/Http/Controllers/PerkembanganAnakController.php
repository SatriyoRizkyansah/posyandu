<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\PerkembanganAnak;
use Illuminate\Http\Request;

class PerkembanganAnakController extends Controller
{
    public function index()
    {
        $perkembanganAnak = PerkembanganAnak::with('anak')->get();
        return view('dashboard.admin.perkembangan_anak.index', compact('perkembanganAnak'));
    }

    public function create()
    {
        return view('dashboard.admin.perkembangan_anak.create');
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $validatedData = $request->validate([
            'id_anak' => 'required|string|max:255',
            'tanggal_posyandu' => 'required|date',
            'berat_badan' => 'required|numeric',
            'ket_bb' => 'nullable|string|max:255',
            'tinggi_badan' => 'required|numeric',
            'ket_tb' => 'nullable|string|max:255',
        ]);

        PerkembanganAnak::create([
            'id_anak' => $validatedData['id_anak'],
            'tanggal_posyandu' => $validatedData['tanggal_posyandu'],
            'berat_badan' => $validatedData['berat_badan'],
            'ket_bb' => $validatedData['ket_bb'],
            'tinggi_badan' => $validatedData['tinggi_badan'],
            'ket_tb' => $validatedData['ket_tb'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('perkembangan.index')->with('success', 'Data perkembangan anak berhasil disimpan.');
        
        // return view('dashboard.admin.perkembangan_anak.create');
    }

    public function delete($id)
    {
        $perkembanganAnak = PerkembanganAnak::findOrFail($id);
        $perkembanganAnak->delete();

        return redirect()->route('perkembangan.index')->with('success', 'Data perkembangan anak berhasil dihapus.');
    }
}
