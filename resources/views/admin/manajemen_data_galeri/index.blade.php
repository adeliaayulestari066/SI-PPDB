@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Galeri</h1>
        <a href="{{ route('admin.manajemen_data_galeri.create') }}" class="btn btn-success mb-3">Tambah Baru</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galeris as $galeri)
                    <tr>
                        <td>{{ $galeri->id }}</td>
                        <td><img src="{{ Storage::url($galeri->gambar) }}" width="100" alt="gambar"></td>
                        <td>{{ $galeri->deskripsi }}</td>
                        <td>
                            <a href="{{ route('admin.manajemen_data_galeri.edit', $galeri->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.manajemen_data_galeri.destroy', $galeri->id) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
