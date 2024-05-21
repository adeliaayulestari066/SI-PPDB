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

        // Retrieve students associated with the user
        $siswas = User::find($userId)->siswas;

        // Initialize an array to store students with rejected payments
        $pembayaranDitolak = [];

        // Check each student
        foreach ($siswas as $siswa) {
            // Retrieve all payments for the current student
            $allPayments = Pembayaran::where('siswa_id', $siswa->id)->get();

            // Check if the student has any payments
            if ($allPayments->isEmpty()) {
                // Student has no payment entries
                $pembayaranDitolak[$siswa->id] = $siswa->nama_siswa . ' (belum melakukan pembayaran)';
            } else {
                // Filter payments to see if there are any 'diterima' or 'menunggu konfirmasi'
                $acceptedPayments = $allPayments->whereIn('status', ['diterima', 'menunggu konfirmasi']);

                // If there are no accepted or pending payments, add the student to the rejected list
                if ($acceptedPayments->isEmpty()) {
                    $pembayaranDitolak[$siswa->id] = $siswa->nama_siswa;
                }
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
