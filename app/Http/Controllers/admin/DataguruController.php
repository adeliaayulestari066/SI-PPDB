<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DataguruController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->query('cari');

        if (!empty($cari)) {
            $gurus = Guru::where('nama_guru', 'LIKE', '%' . $cari . '%')
                ->orWhere('jabatan', 'LIKE', '%' . $cari . '%')
                ->get();
        } else {
            $gurus = Guru::all();
        }

        return view('admin.manajemen_data_guru.index')->with([
            'gurus' => $gurus,
            'cari' => $cari
        ]);
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
            'nip_nuptk' => 'nullable|string|min:16|max:18',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|min:10|max:13',
            'status_kepegawaian' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Upload gambar
        $gambar = $request->file('gambar');
        if ($gambar) {
            $gambar_ekstensi = $gambar->getClientOriginalExtension();
            $namaguru = Str::slug($validatedData['nama_guru']);
            $gambar_nama = $namaguru . "-Guru." . $gambar_ekstensi;
            $gambar->move(public_path('Foto Guru'), $gambar_nama);

            $validatedData['gambar'] = $namaguru; // Menggunakan nama guru sebagai nama file
        } else {
            $validatedData['gambar'] = null;
        }

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
        return redirect()->route('data-guru')->with('success', 'Data guru berhasil disimpan');
    }

    public function edit($id)
    {
        $guru = Guru::find($id);
        return view('admin.manajemen_data_guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);
        // dd($request);

        // Validasi data formulir
        $validatedData = $request->validate([
            'nama_guru' => 'required|string',
            'jabatan' => 'required|string',
            'nip_nuptk' => 'nullable|string|min:16|max:18',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|min:10|max:13',
            'status_kepegawaian' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
        ]);

        // dd($validatedData);

        // Proses penyimpanan gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar_ekstensi = $gambar->getClientOriginalExtension();
            $namaguru = Str::slug($validatedData['nama_guru']);
            $gambar_nama = $namaguru . "-gambar." . $gambar_ekstensi;
            $gambar->move(public_path('Foto Guru'), $gambar_nama);

            $validatedData['gambar'] = $gambar_nama;
        } else {
            // Jika tidak ada file gambar dikirim, gunakan gambar yang sudah ada sebelumnya
            $validatedData['gambar'] = $guru->gambar;
        }

        // dd($validatedData);

        // Update data guru dengan data yang sudah divalidasi
        $guru->update($validatedData);

        return redirect()->route('data-guru')->with('success', 'Data guru berhasil diperbarui');
    }

    public function hapus(Guru $guru)
    {
        $guru->delete();
        return redirect('data-guru')->with('success', 'Data guru berhasil dihapus');
    }

    public function cetak(Guru $guru)
    {
        return view('admin.manajemen_data_guru.print', compact('guru'));

        // // Mengatur flash message
        // session()->flash('info', 'Data cetak telah dilihat');

        // // Mengirim data guru ke view
        // return view('admin.manajemen_data_guru.print', compact('guru'));
    }

    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.manajemen_data_guru.show', compact('guru'));
    }
}
