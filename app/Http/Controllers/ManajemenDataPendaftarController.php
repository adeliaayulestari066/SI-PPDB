<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManajemenDataPendaftar extends Controller
{
    // public function create()
    // {
    //     // Disini Anda perlu mengirimkan data kategoris dari controller jika digunakan
    //     // $kategoris = ...; // Isi dengan data kategori dari database
    //     // return view('admin.manajeman_data_pendaftar.create', compact('kategoris'));
    //     return view('admin.manajeman_data_pendaftar.create');
    // }

    // // Method untuk menyimpan data pendaftar ke dalam database
    // public function store(Request $request)
    // {
    //     // Validasi data yang dikirim dari form
    //     $request->validate([
    //         'tgl_pendaftaran' => 'required|date',
    //         'nama' => 'required|string',
    //         'no_hp' => 'required|string',
    //         'user_id' => 'required|exists:users,id', // Pastikan user_id yang dikirim ada dalam tabel users
    //     ]);

    //     // Proses penyimpanan data pendaftar ke dalam database
    //     Pendaftaran::create([
    //         'tgl_pendaftaran' => $request->tgl_pendaftaran,
    //         'nama' => $request->nama,
    //         'no_hp' => $request->no_hp,
    //         'user_id' => $request->user_id,
    //     ]);

    //     // Redirect kembali ke halaman tambah pendaftar dengan pesan sukses
    //     return redirect()->route('/create')->with('success', 'Data pendaftar berhasil ditambahkan!');
    // }
}