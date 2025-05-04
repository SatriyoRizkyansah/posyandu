<?php

namespace App\Http\Controllers;

use App\Models\JadwalPosyandu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JadwalPosyanduController extends Controller
{
    public function index()
    {
        // Get all records
        $jadwal = JadwalPosyandu::latest()->first();
        // dd($jadwal);
        return view('dashboard.admin.jadwal.index', compact('jadwal'));

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension(); 
        $filename = Str::random(10) . '.' . $extension; 
        $file->move(public_path('img/jadwal'), $filename);

        // Simpan ke database
        JadwalPosyandu::create([
            'gambar' => $filename,
        ]);

        return redirect()->back()->with('success', 'Jadwal berhasil diunggah!');
    }

    public function show($id)
    {
        // Show a specific record
    }

    public function edit($id)
    {
        // Edit a specific record
    }

    public function update(Request $request, $id)
    {
        // Update the record
    }

    public function destroy($id)
    {
        // Delete the record
    }
}
