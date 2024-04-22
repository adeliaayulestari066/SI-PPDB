{{-- resources/views/admin/manajemen_data_pendaftar/edit.blade.php --}}
@extends('layouts.admin')

@section('title', 'Edit Pendaftar')

@section('content')
<div class="container mt-4">
    <h1>Edit Pendaftar: {{ $pendaftar->nama }}</h1>
    <form action="{{ route('manajemen_data_pendaftar.update', $pendaftar->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Spesifikasikan metode HTTP PUT untuk update --}}

        <div class="mb-3">
            <label for="user_id" class="form-label">User ID</label>
            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $pendaftar->user_id }}" required>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pendaftar->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="tgl_pendaftaran" class="form-label">Tanggal Pendaftaran</label>
            <input type="date" class="form-control" id="tgl_pendaftaran" name="tgl_pendaftaran" value="{{ $pendaftar->tgl_pendaftaran }}" required>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $pendaftar->no_hp }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Pendaftar</button>
    </form>
</div>
@endsection

