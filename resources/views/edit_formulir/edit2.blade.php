@extends('layouts.appuser')

@section('content')
    <main id="main">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Detail Formulir</h1>
            <p class="text-center">Detail profil yang anda lakukan</p>
        </div>

        <section id="riwayat-transaksi" class="p-4">
            <div class="container">
                <!-- Tampilkan data dari tabel user -->
                <div class="mb-3">
                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" id="nama_siswa" value="{{ $siswa->nama_siswa }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control" id="umur" value="{{ $siswa->umur }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="tmpt_lhr" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tmpt_lhr" value="{{ $siswa->tmpt_lhr }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="tgl_lhr" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lhr" value="{{ $siswa->tgl_lhr }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" value="{{ $siswa->alamat }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="agama" value="{{ $siswa->agama }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="nama_ayah" class="form-label">Nama Ayah</label>
                    <input type="text" class="form-control" id="nama_ayah" value="{{ $siswa->nama_ayah }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                    <input type="text" class="form-control" id="pekerjaan_ayah" value="{{ $siswa->pekerjaan_ayah }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="nama_ibu" class="form-label">Nama Ibu</label>
                    <input type="text" class="form-control" id="nama_ibu" value="{{ $siswa->nama_ibu }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                    <input type="text" class="form-control" id="pekerjaan_ibu" value="{{ $siswa->pekerjaan_ibu }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="no_hp_ortu" class="form-label">No HP Orang Tua</label>
                    <input type="text" class="form-control" id="no_hp_ortu" value="{{ $siswa->no_hp_ortu }}" readonly>
                </div>
                <!-- Tambahkan foto_kk dan foto_akte -->
                <div class="mb-3">
                    <label for="foto_kk" class="form-label">Foto KK</label>
                    <img src="{{ asset('Foto KK/' . $siswa->foto_kk) }}" alt="Foto KK" class="img-fluid" style="max-width: 300px;">
                </div>
                <div class="mb-3">
                    <label for="foto_akte" class="form-label">Foto Akte</label>
                    <img src="{{ asset('Foto Akte/' . $siswa->foto_akte) }}" alt="Foto Akte" class="img-fluid" style="max-width: 300px;">
                </div>
            </div>

            <p>Jika ada data yang ingin diubah silahkan hubungi Admin <a href="{{ route('kontak.index') }}">disini</a>.</p>

            <!-- Tambahkan tombol Kembali -->
            <div class="mb-3">
                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>
            </div>

        </section>
    </main>
@endsection
