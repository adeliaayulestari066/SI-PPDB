<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class BayarController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'bukti' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
        ]);
        
        $today = Carbon::today();

        $userId = Auth::id();

        $siswaId = Siswa::where('user_id', $userId)->value('id');
        $namaSiswa = Siswa::where('user_id', $userId)->value('nama_siswa');

        $validatedData = [
            'tgl_pembayaran' => $today,
            'siswa_id' => $siswaId,
            'status' => 'menunggu konfirmasi', // Nilai default untuk 'status'
        ];
        // dd($validatedData);
        // dd($request);
        

        // Upload bukti pembayaran
        $bukti_pembayaran = $request->file('bukti');
        if ($bukti_pembayaran) {
            $bukti_ekstensi = $bukti_pembayaran->getClientOriginalExtension();
            $bukti_nama = $namaSiswa . " - BuktiPembayaran." . $bukti_ekstensi;
            $bukti_pembayaran->move(public_path('bukti'), $bukti_nama);
            $validatedData['bukti'] = $bukti_nama;
        }

        // dd($validatedData);

        // Buat entri pembayaran
        Pembayaran::create($validatedData);

        // Redirect ke halaman terima kasih
        return redirect()->route('terimakasih');
    }
}
