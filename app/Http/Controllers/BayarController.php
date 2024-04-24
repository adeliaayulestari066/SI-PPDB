<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class BayarController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data formulir
        // dd($request);
        $validatedData = $request->validate([
            'tgl_pembayaran' => 'required|date',
            'status' => 'required|in:diterima,ditolak,menunggu konfirmasi',
            'siswa_id' => 'required|integer',
            'bukti' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
        ]);
    
        // Upload bukti pembayaran
        $bukti_pembayaran = $request->file('bukti');
        if ($bukti_pembayaran) {
            $bukti_ekstensi = $bukti_pembayaran->getClientOriginalExtension();
            $siswa_id = $validatedData['siswa_id'];
            $bukti_nama = $siswa_id . "-BuktiPembayaran." . $bukti_ekstensi;
            $bukti_pembayaran->move(public_path('bukti'), $bukti_nama);
            $validatedData['bukti'] = $bukti_nama;
        }


        // Buat entri pembayaran
        Pembayaran::create($validatedData);

        // Redirect ke halaman terima kasih
        return redirect()->route('terimakasih');
    }
}
