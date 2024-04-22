@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Galeri</h1>
        <form action="{{ route('manajemen_galeri.update', $galeri->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" class="form-control" name="gambar" id="gambar">
                <img src="{{ Storage::url($galeri->gambar) }}" width="100" alt="gambar">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{ $galeri->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
