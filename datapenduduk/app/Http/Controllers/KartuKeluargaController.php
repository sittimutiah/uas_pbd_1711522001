<?php

namespace App\Http\Controllers;

use App\Models\kartu_keluarga;
use Illuminate\Http\Request;

class KartuKeluargaController extends Controller
{
    public function index()
    {
        $kks=kartu_keluarga::all();

        return view('kks.index', compact('kks'));
    }

    public function create()
    {
        return view('kks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required',
            'jorong_id' => 'required',
            'tanggal_pencatatan' => 'required',
        ]);

        kartu_keluarga::create($request->all());

        return redirect()->route('kks.index')
            ->with('success', 'Kartu Keluarga created successfully.');
    }

    public function show(kartu_keluarga $kk)
    {
        return view('kks.show', compact('kk'));
    }

    public function edit(kartu_keluarga $kk)
    {
        return view('kks.update', compact('kk'));
    }

    public function update(Request $request, kartu_keluarga $kk)
    {
        $request->validate([
            'no' => 'required',
            'jorong_id' => 'required',
            'tanggal_pencatatan' => 'required',
        ]);

        $kertu_keluarga->update($request->all());

        return redirect()->route('kks.index')
            ->with('success', 'Kartu Keluarga updated successfully');
    }

    public function destroy(kartu_keluarga $kk)
    {
        $kertu_keluarga->delete();
        return redirect()->route('kks.index')
            ->with('success', 'Kartu Keluarga deleted successfully');
    }
}
