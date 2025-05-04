<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        // return view('dashboard.admin.petugas.index');
    }

    public function create()
    {
        // Logic to show the form for creating a new petugas
    }

    public function store(Request $request)
    {
        // Logic to store a new petugas
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
        // Logic to delete a specific petugas
    }
}
