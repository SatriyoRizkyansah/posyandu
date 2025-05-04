<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalPosyanduController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.jadwal.index');

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        
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
