@extends('layouts.admin')

@section('title', 'Detail Pembayaran')

@section('content')
<div class="container mt-4">
    <h1>Detail Pembayaran</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>ID:</strong> {{ $pembayaran->id }}</p>
            <p class="card-text"><strong>Bukti Pembayaran:</strong></p>
            <img src="{{ Storage::url($pembayaran->bukti_pembayaran) }}" width="200" alt="bukti_pembayaran">
            <p class="card-text"><strong>Tanggal Pembayaran:</strong> {{ $pembayaran->tgl_pembayaran }}</p>
            <p class="card-text"><strong>Siswa:</strong> {{ $pembayaran->siswa->nama_siswa }}</p>
            <p class="card-text"><strong>Created At:</strong> {{ $pembayaran->created_at }}</p>
            <p class="card-text"><strong>Updated At:</strong> {{ $pembayaran->updated_at }}</p>
            <a href="{{ route('admin.manajemen_pembayaran.edit', $pembayaran->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('admin.manajemen_pembayaran.index') }}" class="btn btn-primary">Kembali ke Daftar Pembayaran</a>
        </div>
    </div>
</div>
@endsection
