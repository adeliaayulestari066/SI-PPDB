{{-- resources/views/admin/manajemen_data_galeri/show.blade.php --}}
@extends('layouts.admin')

@section('title', 'Detail Galeri')

@section('content')
<div class="container mt-4">
    <h1>Detail Galeri</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>ID:</strong> {{ $galeri->id }}</p>
            <p class="card-text"><strong>Gambar:</strong></p>
            <img src="{{ Storage::url($galeri->gambar) }}" width="200" alt="gambar">
            <p class="card-text"><strong>Deskripsi:</strong> {{ $galeri->deskripsi }}</p>
            <p class="card-text"><strong>Created At:</strong> {{ $galeri->created_at }}</p>
            <p class="card-text"><strong>Updated At:</strong> {{ $galeri->updated_at }}</p>
            <a href="{{ route('admin.manajemen_data_galeri.edit', $galeri->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('admin.manajemen_data_galeri.index') }}" class="btn btn-primary">Kembali ke Daftar Galeri</a>
        </div>
    </div>
</div>
@endsection
