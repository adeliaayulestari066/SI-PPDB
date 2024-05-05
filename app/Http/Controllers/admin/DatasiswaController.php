<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DatasiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all(); 
        return view('admin.manajemen_data_siswa.index', compact('siswas'));

    }

    public function tambah()
    {
        return view('admin.manajemen_data_siswa.create');
    }
    public function store(Request $request)
    {
        // Validasi data formulir
        // dd($request);
        $validatedData = $request->validate([
                'nama_siswa' => 'required|string',
                #'user_id' => 'required',
                'umur' => 'required|integer',
                'tmpt_lhr' => 'required|string',
                'tgl_lhr' => 'required|date',
                'alamat' => 'required|string',
                'agama' => 'required|string',
                'nama_ayah' => 'required|string',
                'pekerjaan_ayah' => 'required|string',
                'nama_ibu' => 'required|string',
                'pekerjaan_ibu' => 'required|string',
                'no_hp_ortu' => 'required|string',
                'foto_kk' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
                'foto_akte' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
            ]);
        
        // dd($validatedData);

        // Upload foto_kk dan foto_akte
        $foto_kk = $request->file('foto_kk');
        if ($foto_kk) {
            $fotokk_ekstensi = $foto_kk->getClientOriginalExtension();
            $namasiswa = Str::slug($validatedData['nama_siswa']);
            $fotokk_nama = $namasiswa . "-KK." . $fotokk_ekstensi;
            $foto_kk->move(public_path('Foto KK'), $fotokk_nama);

            $validatedData['foto_kk'] = $fotokk_nama;
        } else {
            $validatedData['foto_kk'] = null;
        }

        $foto_akte = $request->file('foto_akte');
        if ($foto_akte) {
            $fotoakte_ekstensi = $foto_akte->getClientOriginalExtension();
            $namasiswa = Str::slug($validatedData['nama_siswa']);
            $fotoakte_nama = $namasiswa . "-AKTE." . $fotoakte_ekstensi;
            $foto_akte->move(public_path('Foto Akte'), $fotoakte_nama);

            $validatedData['foto_akte'] = $fotoakte_nama;
        } else {
            $validatedData['foto_akte'] = null;
        }

        // dd($validatedData);

        $newSiswa = Siswa::create($validatedData);

        // Redirect ke halaman manajemen data siswa index
        return redirect()->route('data-siswa');
    }

    public function edit($id){
        $siswa = Siswa::find($id);
        return view('admin.manajemen_data_siswa.edit', compact(['siswa']));
        }
        public function update($id, Request $request){
            $siswa = Siswa::findOrFail($id);

        // Validasi data formulir
        $validatedData = $request->validate([
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
            'no_hp_ortu' => 'required|string',
            'foto_kk' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
            'foto_akte' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
        ]);

        $foto_kk = $request->file('foto_kk');
        if ($foto_kk) {
            $fotokk_ekstensi = $foto_kk->getClientOriginalExtension();
            $namasiswa = Str::slug($validatedData['nama_siswa']);
            $fotokk_nama = $namasiswa . "-KK." . $fotokk_ekstensi;
            $foto_kk->move(public_path('Foto KK'), $fotokk_nama);

            $validatedData['foto_kk'] = $fotokk_nama;
        } else {
            $validatedData['foto_kk'] = null;
        }

        $foto_akte = $request->file('foto_akte');
        if ($foto_akte) {
            $fotoakte_ekstensi = $foto_akte->getClientOriginalExtension();
            $namasiswa = Str::slug($validatedData['nama_siswa']);
            $fotoakte_nama = $namasiswa . "-AKTE." . $fotoakte_ekstensi;
            $foto_akte->move(public_path('Foto Akte'), $fotoakte_nama);

            $validatedData['foto_akte'] = $fotoakte_nama;
        } else {
            $validatedData['foto_akte'] = null;
        }

        // Update data siswa dengan data yang sudah divalidasi
        $siswa->update($validatedData);

        return redirect('data-siswa');
    }

    public function hapus(Siswa $siswa)
    {
        $siswa->delete();

        return redirect('data-siswa')->with('success', 'Data berhasil dihapus');;
    }

    public function cetak($siswa_id)
{
    $siswa = Siswa::findOrFail($siswa_id); 

    return view('admin.manajemen_data_siswa.print', compact('siswa'));
}

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.manajemen_data_siswa.show', compact('siswa'));
    }

}
