@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Tambah Guru</h1>
        <form action="{{ route('manajemen_guru.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_guru">Nama Guru:</label>
                <input type="text" class="form-control" name="nama_guru" id="nama_guru" required>
            </div>
            <div class="form-group">
                <label for="nip_nuptk">NIP/NUPTK:</label>
                <input type="text" class="form-control" name="nip_nuptk" id="nip_nuptk" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" id="alamat" required>
            </div>
            <div class="form-group">
                <label for="no_hp">Nomor HP:</label>
                <input type="text" class="form-control" name="no_hp" id="no_hp" required>
            </div>
            <div class="form-group">
                <label for="status_kepegawaian">Status Kepegawaian:</label>
                <input type="text" class="form-control" name="status_kepegawaian" id="status_kepegawaian" required>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" class="form-control" name="gambar" id="gambar" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
