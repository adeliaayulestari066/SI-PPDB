@extends('layouts.admin')

@section('title', 'Detail Siswa')

@section('main')
<div class="container mt-4">
    <div class="card">
        <h5 class="card-header bg-primary text-white">Detail Siswa: {{ $siswa->nama_siswa }}</h5>
        <div class="card-body">
            <h5 class="card-title mt-4">Informasi Siswa</h5>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Umur:</strong> {{ $siswa->umur }}</li>
                        <li class="list-group-item"><strong>Tempat, Tanggal Lahir:</strong> {{ $siswa->tmpt_lhr }}, {{ $siswa->tgl_lhr }}</li>
                        <li class="list-group-item"><strong>Alamat:</strong> {{ $siswa->alamat }}</li>
                        <li class="list-group-item"><strong>Agama:</strong> {{ $siswa->agama }}</li>
                        <li class="list-group-item"><strong>Nama Ayah:</strong> {{ $siswa->nama_ayah }}</li>
                        <li class="list-group-item"><strong>Pekerjaan Ayah:</strong> {{ $siswa->pekerjaan_ayah }}</li>
                        <li class="list-group-item"><strong>Nama Ibu:</strong> {{ $siswa->nama_ibu }}</li>
                        <li class="list-group-item"><strong>Pekerjaan Ibu:</strong> {{ $siswa->pekerjaan_ibu }}</li>
                        <li class="list-group-item"><strong>No HP Orang Tua:</strong> {{ $siswa->no_hp_ortu }}</li>
                    </ul>
                </div>
                <!-- Foto -->
                <div class="col-md-6">
                    <h5 class="card-title">Foto</h5>
                    <div class="text-center">
                        <!-- Foto KK -->
                        <img src="/Foto KK/{{($siswa->foto_kk) }}" alt="Foto Kartu Keluarga" class="img-fluid rounded mb-3" style="max-width: 300px;">
                        <p class="text-muted">Foto Kartu Keluarga</p>
                        <!-- Foto Akte -->
                        <img src="/Foto Akte/{{($siswa->foto_akte) }}" alt="Foto Akte Kelahiran" class="img-fluid rounded" style="max-width: 300px;">
                        <p class="text-muted">Foto Akte Kelahiran</p>
                    </div>
                </div>
            </div>
            <!-- Tombol Kembali -->
            <div class="text-center mt-4">
                <a href="{{ route('data-siswa') }}" class="btn btn-primary">Kembali ke Daftar Siswa</a>
            </div>
        </div>
    </div>
</div>
@endsection
