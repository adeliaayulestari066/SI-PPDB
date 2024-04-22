@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Tambah Pembayaran</h1>
        <form action="{{ route('manajemen_pembayaran.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="siswa_id">Siswa:</label>
                <select class="form-control" name="siswa_id" id="siswa_id" required>
                    @foreach($siswa as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_siswa }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tgl_pembayaran">Tanggal Pembayaran:</label>
                <input type="date" class="form-control" name="tgl_pembayaran" id="tgl_pembayaran" required>
            </div>

            <div class="form-group">
                <label for="bukti_pembayaran">Bukti Pembayaran:</label>
                <input type="file" class="form-control" name="bukti_pembayaran" id="bukti_pembayaran" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
