{{-- resources/views/admin/manajemen_data_pendaftar/create.blade.php --}}
@extends('layouts.admin')

@section('title', 'Tambah Pendaftar Baru')

@section('content')
<div class="container mt-4">
    <h1>Tambah Pendaftar Baru</h1>
    <form action="{{ route('manajemen_data_pendaftar.store') }}" method="POST">
        @csrf {{-- CSRF token untuk keamanan form --}}
        <div class="mb-3">
            <label for="user_id" class="form-label">User ID</label>
            <input type="text" class="form-control" id="user_id" name="user_id" required>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="tgl_pendaftaran" class="form-label">Tanggal Pendaftaran</label>
            <input type="date" class="form-control" id="tgl_pendaftaran" name="tgl_pendaftaran" required>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah Pendaftar</button>
    </form>
</div>
@endsection