@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Tambah Galeri</h1>
        <form action="{{ route('manajemen_galeri.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" class="form-control" name="gambar" id="gambar" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection