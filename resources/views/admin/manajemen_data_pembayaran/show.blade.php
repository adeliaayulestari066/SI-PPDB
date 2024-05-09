@extends('layouts.admin')

@section('title', 'Detail Pembayaran')

@section('main')
<div class="container mt-4">
    <div class="card">
        <h5 class="card-header bg-primary text-white">Detail Pembayaran</h5>
        <div class="card-body">
            <h5 class="card-title mt-4">Informasi Pembayaran</h5>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nama Siswa:</strong> {{ $pembayaran->siswa->nama_siswa }}</li>
                        <li class="list-group-item"><strong>Tanggal Pembayaran:</strong> {{ $pembayaran->tgl_pembayaran }}</li>
                        <li class="list-group-item"><strong>Status Pembayaran:</strong> {{ $pembayaran->status }}</li>
                    </ul>
                </div>
                <!-- Bukti Pembayaran -->
                <div class="col-md-6">
                    <h5 class="card-title">Bukti Pembayaran</h5>
                    <div class="text-center">
                        <!-- Gambar Bukti Pembayaran -->
                        <img src="/bukti/{{($pembayaran->bukti) }}" alt="Bukti Pembayaran" class="img-fluid rounded mb-3" style="max-width: 300px;">
                        <p class="text-muted">Bukti Pembayaran</p>
                    </div>
                </div>
            </div>
            <!-- Tombol Kembali -->
            <div class="text-center mt-4">
                <a href="{{ route('data-pembayaran.index') }}" class="btn btn-primary">Kembali ke Daftar Pembayaran</a>
            </div>
        </div>
    </div>
</div>
@endsection
