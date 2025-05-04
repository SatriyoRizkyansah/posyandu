<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = Petugas::all();
        return view('dashboard.admin.petugas.index', compact('petugas'));
    }

    public function print()
    {
        $petugas = Petugas::all();
        $pdf = Pdf::loadView('dashboard.admin.petugas.print', compact('petugas'));
        return $pdf->stream('data_petugas.pdf');
    }

    public function create()
    {
        return view('dashboard.admin.petugas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:petugas',
            'password' => 'required|string|min:8|',
        ]);

        Petugas::create([
            'username' => $request->username,
            'password' => $request->password,
        ]);
        // dd($request->all());
        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil ditambahkan.');
    }

    public function show($id)
    {
        // Logic to show a specific petugas
    }

    public function edit($id)
    {
        // Logic to show the form for editing a specific petugas
    }

    public function update(Request $request, $id)
    {
        // Logic to update a specific petugas
    }

    public function destroy($id)
    {
        $petugas = Petugas::findOrFail($id);
        $petugas->delete();

        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil dihapus.');
    }
}
