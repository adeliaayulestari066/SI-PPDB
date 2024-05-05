<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DataguruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all(); // Perbaikan variabel $siswas menjadi $gurus
        return view('admin.manajemen_data_guru.index', compact('gurus'));
    }

    public function tambah()
    {
        return view('admin.manajemen_data_guru.create');
    }

    public function store(Request $request)
    {
    // Validasi data formulir
    $validatedData = $request->validate([
        'nama_guru' => 'required|string',
        'jabatan' => 'required|string',
        'nip_nuptk' => 'required|integer',
        'alamat' => 'required|string',
        'no_hp' => 'required|string',
        'status_kepegawaian' => 'required|string',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
    ]);

    // Upload gambar
    $gambar = $request->file('gambar');
    $gambar_nama = $gambar->getClientOriginalName(); // Ambil nama asli gambar
    $gambar->move(public_path('assets/img/elements'), $gambar_nama);

    // Simpan data guru baru
    $newGuru = Guru::create([
        'nama_guru' => $validatedData['nama_guru'],
        'jabatan' => $validatedData['jabatan'],
        'nip_nuptk' => $validatedData['nip_nuptk'],
        'alamat' => $validatedData['alamat'],
        'no_hp' => $validatedData['no_hp'],
        'status_kepegawaian' => $validatedData['status_kepegawaian'],
        'gambar' => $gambar_nama,
    ]);

    // Redirect ke halaman manajemen data guru
    return redirect()->route('data-guru');

    }

    public function edit($id)
    {
        $guru = Guru::find($id);
        return view('admin.manajemen_data_guru.edit', compact('guru'));
    }

    // Fungsi update untuk menyimpan perubahan data guru
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        // Validasi data formulir
        $validatedData = $request->validate([
            'nama_guru' => 'required|string',
            'jabatan' => 'required|string',
            'nip_nuptk' => 'required|integer',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'status_kepegawaian' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
        ]);

        // Proses penyimpanan gambar jika ada
        $gambar = $request->file('gambar');
        if ($gambar) {
            $gambar_ekstensi = $gambar->getClientOriginalExtension();
            $namaguru = Str::slug($validatedData['nama_guru']);
            $gambar_nama = $namaguru . "-gambar." . $gambar_ekstensi;
            $gambar->move(public_path('Foto Guru'), $gambar_nama);

            $validatedData['gambar'] = $gambar_nama;
        } else {
            $validatedData['gambar'] = null;
        }

        // Update data guru dengan data yang sudah divalidasi
        $guru->update($validatedData);

        return redirect()->route('data-guru');
    }

    // public function update($id, Request $request)
    // {
    //     $guru = Guru::find($id);
    //     $guru->fill($request->except(['_token', 'submit']));
    //     $guru->save();
    //     return redirect('data-guru');
    // }

    public function hapus(Guru $guru)
    {
        $guru->delete();
        return redirect('data-guru')->with('success', 'Data berhasil dihapus');
    }

    public function cetak(Guru $guru)
{
    return view('admin.manajemen_data_guru.print', compact('guru'));
}

    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.manajemen_data_guru.show', compact('guru'));
    }
}
