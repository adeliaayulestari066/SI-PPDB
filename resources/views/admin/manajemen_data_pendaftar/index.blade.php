{{-- resources/views/admin/manajemen_data_pendaftar/index.blade.php --}}
@extends('layouts.admin')

@section('content')
<h1>Daftar Pendaftar</h1>

<a href="{{ route('manajemen_data_pendaftar.create') }}" class="btn btn-success mb-3">Tambah Pendaftar Baru</a>

<table class="table">
    <thead>
        <tr>
            <th>Tanggal Pendaftaran</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>User ID</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pendaftars as $pendaftar)
            <tr>
                <td>{{ $pendaftar->user_id }}</td>
                <td>{{ $pendaftar->nama }}</td>
                <td>{{ $pendaftar->tgl_pendaftaran }}</td>
                <td>{{ $pendaftar->no_hp }}</td>
                <td>
                    <a href="{{ route('manajemen_data_pendaftar.show', $pendaftar->id) }}" class="btn btn-warning">View</a>
                    <a href="{{ route('manajemen_data_pendaftar.edit', $pendaftar->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('manajemen_data_pendaftar.destroy', $pendaftar->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pendaftar ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

