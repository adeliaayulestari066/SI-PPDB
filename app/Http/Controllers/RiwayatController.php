<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Ambil siswa yang dimiliki oleh user
        $siswas = User::find($userId)->siswas;

        // Ambil data pembayaran dari siswa-siswa yang dimiliki oleh user
        $riwayatTransaksi = collect();
        foreach ($siswas as $siswa) {
            $riwayatTransaksi = $riwayatTransaksi->merge($siswa->pembayarans);
        }

        // Kirim data riwayat transaksi ke view untuk ditampilkan
        return view('riwayat_transaksi.index', ['riwayatTransaksi' => $riwayatTransaksi]);
    }
}
