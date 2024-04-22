@extends('layouts.admin')

@section('title', 'Detail Guru')

@section('content')
<div class="container mt-4">
    <h1>Detail Guru</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>ID:</strong> {{ $guru->id }}</p>
            <p class="card-text"><strong>Nama Guru:</strong> {{ $guru->nama_guru }}</p>
            <p class="card-text"><strong>NIP/NUPTK:</strong> {{ $guru->nip_nuptk }}</p>
            <p class="card-text"><strong>Alamat:</strong> {{ $guru->alamat }}</p>
            <p class="card-text"><strong>Nomor HP:</strong> {{ $guru->no_hp }}</p>
            <p class="card-text"><strong>Status Kepegawaian:</strong> {{ $guru->status_kepegawaian }}</p>
            <p class="card-text"><strong>Gambar:</strong></p>
            <img src="{{ Storage::url($guru->gambar) }}" width="200" alt="gambar">
            <p class="card-text"><strong>Created At:</strong> {{ $guru->created_at }}</p>
            <p class="card-text"><strong>Updated At:</strong> {{ $guru->updated_at }}</p>
            <a href="{{ route('admin.manajemen_data_guru.edit', $guru->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('admin.manajemen_data_guru.index') }}" class="btn btn-primary">Kembali ke Daftar Guru</a>
        </div>
    </div>
</div>
@endsection
