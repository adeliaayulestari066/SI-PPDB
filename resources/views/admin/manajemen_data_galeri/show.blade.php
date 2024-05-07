@extends('layouts.admin')

@section('title', 'Detail Galeri')

@section('main')
<div class="container mt-4">
    <div class="card">
        <h5 class="card-header bg-primary text-white">Detail Galeri</h5>
        <div class="card-body">
            <h5 class="card-title mt-4">Informasi Gambar</h5>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Deskripsi:</strong> {{ $galeri->deskripsi }}</li>
                    </ul>
                </div>
                <!-- Foto -->
                <div class="col-md-6">
                    <h5 class="card-title">Gambar</h5>
                    <div class="text-center">
                        <!-- Foto Galeri -->
                        {{-- <img src="{{ asset('path/to/your/images/' . $galeri->gambar) }}" alt="Foto Galeri" class="img-fluid rounded mb-3" style="max-width: 300px;"> --}}
                        <img src="/Foto Galeri/{{($galeri->gambar) }}" alt="Foto Galeri" class="img-fluid rounded mb-3" style="max-width: 300px;">
                        <p class="text-muted">Gambar Galeri</p>
                    </div>
                </div>
            </div>
            <!-- Tombol Kembali -->
            <div class="text-center mt-4">
                <a href="{{ route('data-galeri.index') }}" class="btn btn-primary">Kembali ke Daftar Galeri</a>
            </div>
        </div>
    </div>
</div>
@endsection
