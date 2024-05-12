<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class BayarController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Ambil siswa yang dimiliki oleh user
        $siswas = User::find($userId)->siswas;
// dd($siswas);
        // Mengirimkan data siswa ke tampilan form
        return view('bayar.index', compact('siswas'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'bukti' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
            'siswa_id' => 'required|exists:siswa,id' 
        ]);

        $today = Carbon::today();

        $userId = Auth::id();

        $siswaId = $request->siswa_id;
        $namaSiswa = Siswa::findOrFail($siswaId)->nama_siswa;

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
