@extends('layouts.admin')

@section('title', 'Detail Siswa')

@section('content')
<div class="container mt-4">
    <h1>Detail Siswa</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>ID:</strong> {{ $siswa->id }}</p>
            <p class="card-text"><strong>Nama Siswa:</strong> {{ $siswa->nama_siswa }}</p>
            <p class="card-text"><strong>Umur:</strong> {{ $siswa->umur }}</p>
            <p class="card-text"><strong>Tempat Lahir:</strong> {{ $siswa->tmpt_lhr }}</p>
            <p class="card-text"><strong>Tanggal Lahir:</strong> {{ $siswa->tgl_lhr }}</p>
            <p class="card-text"><strong>Alamat:</strong> {{ $siswa->alamat }}</p>
            <p class="card-text"><strong>Agama:</strong> {{ $siswa->agama }}</p>
            <p class="card-text"><strong>Nama Ayah:</strong> {{ $siswa->nama_ayah }}</p>
            <p class="card-text"><strong>Pekerjaan Ayah:</strong> {{ $siswa->pekerjaan_ayah }}</p>
            <p class="card-text"><strong>Nama Ibu:</strong> {{ $siswa->nama_ibu }}</p>
            <p class="card-text"><strong>Pekerjaan Ibu:</strong> {{ $siswa->pekerjaan_ibu }}</p>
            <p class="card-text"><strong>Foto KK:</strong></p>
            <img src="{{ Storage::url($siswa->foto_kk) }}" width="200" alt="foto_kk">
            <p class="card-text"><strong>Foto Akte:</strong></p>
            <img src="{{ Storage::url($siswa->foto_akte) }}" width="200" alt="foto_akte">
            <p class="card-text"><strong>Nomor HP Orang Tua:</strong> {{ $siswa->no_hp_ortu }}</p>
            <p class="card-text"><strong>Created At:</strong> {{ $siswa->created_at }}</p>
            <p class="card-text"><strong>Updated At:</strong> {{ $siswa->updated_at }}</p>
            <a href="{{ route('admin.manajemen_data_siswa.edit', $siswa->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('admin.manajemen_data_siswa.index') }}" class="btn btn-primary">Kembali ke Daftar Siswa</a>
        </div>
    </div>
</div>
@endsection
