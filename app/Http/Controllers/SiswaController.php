<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data formulir
        // dd($request);
        $validator = Validator::make($request->all(), [
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
            'no_hp_ortu' => 'required|string|digits_between:10,13',
            'foto_kk' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
            'foto_akte' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
        ], [
            'required' => ':attribute wajib diisi.',
            'string' => ':attribute harus berupa teks.',
            'integer' => ':attribute harus berupa bilangan bulat.',
            'date' => ':attribute harus berupa tanggal.',
            'image' => ':attribute harus berupa file gambar.',
            'mimes' => ':attribute harus berupa file dengan tipe: :values.',
            'max' => ':attribute tidak boleh lebih dari :max kilobita.',
            'digits_between' => ':attribute harus terdiri dari 10 hingga 13 digit.',
        ]);
        
        // Jika validasi gagal, kembalikan ke halaman sebelumnya dengan notifikasi error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        
        $userId = Auth::id();
        
        // Menambahkan ID pengguna ke dalam data yang akan disimpan
        $requestData = $request->all();
        $requestData['user_id'] = $userId;
        
        // Periksa apakah ada data yang masih null
        $nullFields = array_filter($requestData, function ($value) {
            return $value === null;
        });
        
        if (!empty($nullFields)) {
            // Tampilkan notifikasi bahwa ada data yang masih null
            return redirect()->back()->with('error', 'Mohon lengkapi semua data.');
        }
        
        // Upload foto_kk dan foto_akte
        $foto_kk = $request->file('foto_kk');
        if ($foto_kk) {
            $fotokk_ekstensi = $foto_kk->getClientOriginalExtension();
            $namasiswa = Str::slug($requestData['nama_siswa']);
            $fotokk_nama = $namasiswa . "-KK." . $fotokk_ekstensi;
            $foto_kk->move(public_path('Foto KK'), $fotokk_nama);
        
            $requestData['foto_kk'] = $fotokk_nama;
        } else {
            $requestData['foto_kk'] = null;
        }
        
        $foto_akte = $request->file('foto_akte');
        if ($foto_akte) {
            $fotoakte_ekstensi = $foto_akte->getClientOriginalExtension();
            $namasiswa = Str::slug($requestData['nama_siswa']);
            $fotoakte_nama = $namasiswa . "-AKTE." . $fotoakte_ekstensi;
            $foto_akte->move(public_path('Foto Akte'), $fotoakte_nama);
        
            $requestData['foto_akte'] = $fotoakte_nama;
        } else {
            $requestData['foto_akte'] = null;
        }
        
        $newSiswa = Siswa::create($requestData);
        
        // Redirect ke halaman pembayaran sukses
        return redirect()->route('bayar');        
    }
}
