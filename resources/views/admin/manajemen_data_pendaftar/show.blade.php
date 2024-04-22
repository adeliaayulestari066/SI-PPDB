{{-- resources/views/admin/manajemen_data_pendaftar/show.blade.php --}}
@extends('layouts.admin')

@section('title', 'Detail Pendaftar')

@section('content')
<div class="container mt-4">
    <h1>Detail Pendaftar: {{ $pendaftar->nama }}</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>User ID:</strong> {{ $pendaftar->user_id }}</p>
            <p class="card-text"><strong>Nama:</strong> {{ $pendaftar->nama }}</p>
            <p class="card-text"><strong>Tanggal Pendaftaran:</strong> {{ $pendaftar->tgl_pendaftaran }}</p>
            <p class="card-text"><strong>Nomor HP:</strong> {{ $pendaftar->no_hp }}</p>
            <a href="{{ route('manajemen_data_pendaftar.edit', $pendaftar->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('manajemen_data_pendaftar.index') }}" class="btn btn-primary">Kembali ke Daftar Pendaftar</a>
        </div>
    </div>
</div>
@endsection