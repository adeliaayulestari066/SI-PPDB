<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function store(Request $request)
{
    // Validasi data formulir
    $validatedData = $request->validate([
        'nama_siswa' => 'required|string|max:255',
        'umur' => 'required|integer',
        'tmpt_lhr' => 'required|string|max:255',
        'tgl_lhr' => 'required|date',
        'alamat' => 'required|string',
        'agama' => 'required|string',
        'nama_ayah' => 'required|string|max:255',
        'pekerjaan_ayah' => 'required|string|max:255',
        'nama_ibu' => 'required|string|max:255',
        'pekerjaan_ibu' => 'required|string|max:255',
        'no_hp_ortu' => 'required|string|max:255',
        'foto_kk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'foto_akte' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Upload foto_kk dan foto_akte
    $foto_kk = $request->file('foto_kk')->store('public/foto_kk');
    $foto_akte = $request->file('foto_akte')->store('public/foto_akte');

    // Simpan data siswa ke dalam database
    $siswa = new Siswa();
    // Setiap kolom diatur di sini
    $siswa->save();

    // Redirect ke halaman pembayaran sukses
    return redirect()->route('pembayaran.sukses', ['pesananId' => $siswa->id]);
}

}
