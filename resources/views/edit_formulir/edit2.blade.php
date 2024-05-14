@extends('layouts.appuser')

@section('content')
    <main id="main">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Edit Formulir</h1>
            <p class="text-center">Edit profil yang anda lakukan</p>
        </div>

        <section id="riwayat-transaksi" class="p-4">
            <div class="container">
                <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $siswa->nama_siswa }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur" value="{{ $siswa->umur }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="tmpt_lhr" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tmpt_lhr" name="tmpt_lhr" value="{{ $siswa->tmpt_lhr }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lhr" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lhr" name="tgl_lhr" value="{{ $siswa->tgl_lhr }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $siswa->alamat }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" value="{{ $siswa->agama }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_ayah" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="{{ $siswa->nama_ayah }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="{{ $siswa->pekerjaan_ayah }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_ibu" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="{{ $siswa->nama_ibu }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="{{ $siswa->pekerjaan_ibu }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp_ortu" class="form-label">No HP Orang Tua</label>
                        <input type="text" class="form-control" id="no_hp_ortu" name="no_hp_ortu" value="{{ $siswa->no_hp_ortu }}" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </section>
    </main>
@endsection
