<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pembayaran;

class DatapembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::all(); // Perbaikan variabel $gurus menjadi $pembayarans
        return view('admin.manajemen_data_pembayaran.index', compact('pembayarans'));
    }

    public function tambah()
    {
        return view('admin.manajemen_data_pembayaran.create');
    }

    public function store(Request $request)
    {
        // Validasi data formulir
        $validatedData = $request->validate([
            'tgl_pembayaran' => 'required|date',
            'status' => 'required|string',
            'siswa_id' => 'required|integer',
            'bukti' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
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

    public function edit($id)
    {
        $pembayaran = Pembayaran::find($id);
        return view('admin.manajemen_data_pembayaran.edit', compact('pembayaran'));
    }

    public function update(Request $request, $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        // Validasi data formulir
        $validatedData = $request->validate([
            'status' => 'required|string',
        ]);

        // Update status pembayaran dengan data yang sudah divalidasi
        $pembayaran->update($validatedData);

        return redirect()->route('data-pembayaran.index')->with('success', 'Status pembayaran berhasil diperbarui');
    }

    public function show($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        return view('admin.manajemen_data_pembayaran.show', compact('pembayaran'));
    }

    public function cetak($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        return view('admin.manajemen_data_pembayaran.print', compact('pembayaran'));
    }

    public function hapus(Pembayaran $pembayaran)
    {
        $pembayaran->delete();
        return redirect('data-pembayaran')->with('success', 'Data pembayaran berhasil dihapus');
    }
}
