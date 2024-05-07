@extends('layouts.admin')

@section('title', 'Detail Guru')

@section('main')
<div class="container mt-4">
    <div class="card">
        <h5 class="card-header bg-primary text-white">Detail Guru: {{ $guru->nama_guru }}</h5>
        <div class="card-body">
            <h5 class="card-title mt-4">Informasi Guru</h5>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Jabatan:</strong> {{ $guru->jabatan }}</li>
                        <li class="list-group-item"><strong>NIP/NUPTK:</strong> {{ $guru->nip_nuptk }}</li>
                        <li class="list-group-item"><strong>Alamat:</strong> {{ $guru->alamat }}</li>
                        <li class="list-group-item"><strong>Nomor HP:</strong> {{ $guru->no_hp }}</li>
                        <li class="list-group-item"><strong>Status Kepegawaian:</strong> {{ $guru->status_kepegawaian }}</li>
                    </ul>
                </div>
                <!-- Foto -->
                <div class="col-md-6">
                    <h5 class="card-title">Foto</h5>
                    <div class="text-center">
                        <!-- Foto Guru -->
                        <img src="/Foto Guru/{{($guru->gambar) }}" alt="Foto Guru" class="img-fluid rounded mb-3" style="max-width: 300px;">
                        <p class="text-muted">Foto Guru</p>
                    </div>
                </div>
            </div>
            <!-- Tombol Kembali -->
            <div class="text-center mt-4">
                <a href="{{ route('data-guru') }}" class="btn btn-primary">Kembali ke Daftar Guru</a>
            </div>
        </div>
    </div>
</div>
@endsection
