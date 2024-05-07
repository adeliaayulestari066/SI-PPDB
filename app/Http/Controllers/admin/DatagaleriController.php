<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Str;


class DatagaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        return view('admin.manajemen_data_galeri.index', compact('galeris'));
    }

    public function tambah()
    {
        return view('admin.manajemen_data_galeri.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $gambar = $request->file('gambar');
        $gambar_nama = $gambar->getClientOriginalName();
        $gambar->move(public_path('Foto Galeri'), $gambar_nama);

        $newGaleri = Galeri::create([
            'gambar' => $gambar_nama,
            'deskripsi' => $validatedData['deskripsi'],
        ]);

        return redirect()->route('data-galeri.index')->with('success', 'Data galeri berhasil disimpan');
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.manajemen_data_galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $validatedData = $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar_nama = $gambar->getClientOriginalName();
            $gambar->move(public_path('assets/img/galeri'), $gambar_nama);
            $validatedData['gambar'] = $gambar_nama;
        }

        $galeri->update($validatedData);

        return redirect()->route('data-galeri.index')->with('success', 'Data galeri berhasil diperbarui');
    }

    public function hapus(Galeri $galeri)
    {
        $galeri->delete();
        return redirect()->route('data-galeri.index')->with('success', 'Data galeri berhasil dihapus');
    }

    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.manajemen_data_galeri.show', compact('galeri'));
    }
}
