@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Data Guru</h1>
        <a href="{{ route('admin.manajemen_data_guru.create') }}" class="btn btn-success mb-3">Tambah Baru</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Guru</th>
                    <th>NIP/NUPTK</th>
                    <th>Alamat</th>
                    <th>Nomor HP</th>
                    <th>Status Kepegawaian</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gurus as $guru)
                    <tr>
                        <td>{{ $guru->id }}</td>
                        <td>{{ $guru->nama_guru }}</td>
                        <td>{{ $guru->nip_nuptk }}</td>
                        <td>{{ $guru->alamat }}</td>
                        <td>{{ $guru->no_hp }}</td>
                        <td>{{ $guru->status_kepegawaian }}</td>
                        <td><img src="{{ Storage::url($guru->gambar) }}" width="100" alt="gambar"></td>
                        <td>
                            <a href="{{ route('admin.manajemen_data_guru.edit', $guru->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.manajemen_data_guru.destroy', $guru->id) }}" method="post" style="display:inline;">
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
