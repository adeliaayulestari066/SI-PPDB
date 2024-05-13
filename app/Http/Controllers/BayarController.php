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
    // use App\Models\Pembayaran;

    public function index()
    {
        $userId = Auth::id();

        // Ambil siswa yang dimiliki oleh user
        $siswas = User::find($userId)->siswas;

        // Ambil data pembayaran yang ditolak untuk setiap siswa
        $pembayaranDitolak = [];

        // Memeriksa siswa yang tidak memiliki entri pembayaran
        foreach ($siswas as $siswa) {
            $pembayaran = Pembayaran::where('siswa_id', $siswa->id)->first();

            // Jika siswa tidak memiliki entri pembayaran, tambahkan ke dalam array
            if (!$pembayaran) {
                $pembayaranDitolak[$siswa->id] = $siswa->nama_siswa . ' (belum melakukan pembayaran)';
            }
        }

        // Memeriksa siswa yang memiliki entri pembayaran dengan status selain 'diterima', 'menunggu konfirmasi'
        $pembayaranLainnya = Pembayaran::whereNotIn('status', ['diterima', 'menunggu konfirmasi'])->get();

        foreach ($pembayaranLainnya as $pembayaran) {
            $siswa = Siswa::find($pembayaran->siswa_id);

            // Pastikan siswa belum ditambahkan sebelumnya
            if (!isset($pembayaranDitolak[$siswa->id])) {
                $pembayaranDitolak[$siswa->id] = $siswa->nama_siswa;
            }
        }

        // Mengirimkan data siswa dan nama siswa yang memiliki pembayaran ditolak ke tampilan form
        return view('bayar.index', compact('pembayaranDitolak'));
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
