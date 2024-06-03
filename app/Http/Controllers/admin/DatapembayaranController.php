<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pembayaran;
use App\Models\Siswa;

class DatapembayaranController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->query('cari');

        if (!empty($cari)) {
            $pembayarans = Pembayaran::join('siswa', 'pembayaran.siswa_id', '=', 'siswa.id')
                ->select('pembayaran.*', 'siswa.nama_siswa')
                ->where('nama_siswa', 'LIKE', '%' . $cari . '%')
                ->orWhere('status', 'LIKE', '%' . $cari . '%')
                ->get();
        } else {
            $pembayarans = Pembayaran::all();
        }

        return view('admin.manajemen_data_pembayaran.index')->with([
            'pembayarans' => $pembayarans,
            'cari' => $cari
        ]);
    }

    public function tambah()
    {
        // Mengambil pembayaran terbaru yang memiliki status 'ditolak' untuk setiap siswa
        $ditolakSiswaIds = Pembayaran::where('status', 'ditolak')
            ->whereIn('id', function ($query) {
                $query->selectRaw('MAX(id)')
                    ->from('pembayaran')
                    ->groupBy('siswa_id');
            })
            ->pluck('siswa_id');

        // Mengambil siswa yang ditolak pembayarannya
        $siswaDitolak = Siswa::whereIn('id', $ditolakSiswaIds)
            ->get(['id', 'nama_siswa']);

        // Mengambil siswa yang ditambahkan oleh admin dan tidak memiliki pembayaran diterima
        $adminUserId = 2; // Anda dapat mengubah ini sesuai dengan user_id admin
        $siswaAdmin = Siswa::where('user_id', $adminUserId)
            ->whereNotIn('id', function ($query) {
                $query->select('siswa_id')
                    ->from('pembayaran')
                    ->where('status', 'diterima');
            })
            ->get(['id', 'nama_siswa']);

        // Menggabungkan kedua hasil query
        $siswa = $siswaDitolak->merge($siswaAdmin)
            ->unique('id')
            ->pluck('nama_siswa', 'id');

        // Meneruskan data siswa ke view
        return view('admin.manajemen_data_pembayaran.create', compact('siswa'));
    }

    public function store(Request $request)
    {
        // Validasi data formulir
        // dd($request);
        $validatedData = $request->validate([
            'tgl_pembayaran' => 'required|date',
            'status' => 'required|string',
            'siswa_id' => 'required|integer',
            'bukti' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        $siswaId = $request->siswa_id;
        $namaSiswa = Siswa::findOrFail($siswaId)->nama_siswa;
        // Upload bukti pembayaran
        $bukti_pembayaran = $request->file('bukti');
        if ($bukti_pembayaran) {
            $bukti_ekstensi = $bukti_pembayaran->getClientOriginalExtension();
            $siswa_id = $validatedData['siswa_id'];
            $bukti_nama = $namaSiswa . "-BuktiPembayaran." . $bukti_ekstensi;
            $bukti_pembayaran->move(public_path('bukti'), $bukti_nama);
            $validatedData['bukti'] = $bukti_nama;
        }
        // dd($validatedData);

        // Buat entri pembayaran
        Pembayaran::create($validatedData);

        // Redirect ke halaman terima kasih
        return redirect()->route('data-pembayaran.index');
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
