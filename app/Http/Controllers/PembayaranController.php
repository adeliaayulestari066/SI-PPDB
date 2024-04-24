<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Validator;

class PembayaranController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        dd($request);
        $validatedData = $request->validate([
            'tgl_pembayaran' => 'required|string',
            'status' => 'required|in:diterima,ditolak,menunggu konfirmasi',
            'siswa_id' => 'required|integer',
            'bukti_pembayaran' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
        ]);
        dd($validatedData);

        // $validatedData = $request->validate([
        //     'bukti_pembayaran' => 'image', // Contoh: maksimum 2MB
        //     'tgl_pembayaran' => 'required|date',
        //     'status' => 'required|in:diterima,ditolak,menunggu konfirmasi',
        //     'siswa_id' => 'required|exists:siswa,id',
        // ]);

        // dd($validatedData);

        // Upload foto_kk dan foto_akte
        $bukti = $request->file('bukti_pembayaran');
        if ($bukti) {
            $bukti_ekstensi = $bukti->getClientOriginalExtension();
            $namasiswa = Str::slug($validatedData['siswa_id']);
            $fotobukti_nama = $namasiswa . "-Bukti Pembayaran." . $bukti_ekstensi;
            $bukti->move(public_path('Bukti Pembayaran'), $fotobukti_nama);

            $validatedData['bukti_pembayaran'] = $fotobukti_nama;
        } else {
            $validatedData['bukti_pembayaran'] = null;
        }

        // dd($validatedData);

        $newPembayaran = Pembayaran::create($validatedData);

        // Redirect ke halaman pembayaran sukses
        return redirect()->route('pembayaran');
    }
}
