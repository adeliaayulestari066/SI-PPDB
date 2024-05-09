<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data formulir
        // dd($request);
        $validatedData = $request->validate([
            'nama_siswa' => 'required|string',
            'umur' => 'required|integer',
            'tmpt_lhr' => 'required|string',
            'tgl_lhr' => 'required|date',
            'alamat' => 'required|string',
            'agama' => 'required|string',
            'nama_ayah' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'no_hp_ortu' => 'required|string',
            'foto_kk' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
            'foto_akte' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
        ]);

        $userId = Auth::id();

        // Menambahkan ID pengguna ke dalam data yang akan disimpan
        $validatedData['user_id'] = $userId;

        // dd($validatedData);

        // Upload foto_kk dan foto_akte
        $foto_kk = $request->file('foto_kk');
        if ($foto_kk) {
            $fotokk_ekstensi = $foto_kk->getClientOriginalExtension();
            $namasiswa = Str::slug($validatedData['nama_siswa']);
            $fotokk_nama = $namasiswa . "-KK." . $fotokk_ekstensi;
            $foto_kk->move(public_path('Foto KK'), $fotokk_nama);

            $validatedData['foto_kk'] = $fotokk_nama;
        } else {
            $validatedData['foto_kk'] = null;
        }

        $foto_akte = $request->file('foto_akte');
        if ($foto_akte) {
            $fotoakte_ekstensi = $foto_akte->getClientOriginalExtension();
            $namasiswa = Str::slug($validatedData['nama_siswa']);
            $fotoakte_nama = $namasiswa . "-AKTE." . $fotoakte_ekstensi;
            $foto_akte->move(public_path('Foto Akte'), $fotoakte_nama);

            $validatedData['foto_akte'] = $fotoakte_nama;
        } else {
            $validatedData['foto_akte'] = null;
        }

        // dd($validatedData);

        $newSiswa = Siswa::create($validatedData);

        // Redirect ke halaman pembayaran sukses
        return redirect()->route('bayar');
    }
}
