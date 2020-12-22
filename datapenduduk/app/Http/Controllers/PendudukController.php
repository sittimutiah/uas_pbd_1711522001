<?php

namespace App\Http\Controllers;

use App\Models\penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduks=penduduk::all();

        return view('penduduks.index', compact('penduduks'));
    }

    public function create()
    {
        return view('penduduks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'level_pendidikan_id' => 'required',
            'pekerjaan_id' => 'required',
            'status_pernikahan' => 'required',
            'status_keluarga' => 'required',
            'kewarganegaraan_id' => 'required',
            'ayah' => 'required',
            'ibu' => 'required',
        ]);

        Penduduk::create($request->all());

        return redirect()->route('penduduks.index')
            ->with('success', 'Penduduk created successfully.');
    }

    public function show(Penduduk $penduduk)
    {
        return view('penduduks.show', compact('penduduk'));
    }

    public function edit(Penduduk $penduduk)
    {
        return view('penduduks.update', compact('penduduk'));
    }

    public function update(Request $request, Penduduk $penduduk)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'level_pendidikan_id' => 'required',
            'pekerjaan_id' => 'required',
            'status_pernikahan' => 'required',
            'status_keluarga' => 'required',
            'kewarganegaraan_id' => 'required',
            'ayah' => 'required',
            'ibu' => 'required',
        ]);

        $penduduk->update($request->all());

        return redirect()->route('penduduks.index')
            ->with('success', 'Penduduk updated successfully');
    }

    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
        return redirect()->route('penduduks.index')
            ->with('success', 'Penduduk deleted successfully');
    }
}
