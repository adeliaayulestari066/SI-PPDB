@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Data Siswa</h1>
        <a href="{{ route('admin.manajemen_data_siswa.create') }}" class="btn btn-success mb-3">Tambah Baru</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Siswa</th>
                    <th>Umur</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>Nama Ayah</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Foto KK</th>
                    <th>Foto Akte</th>
                    <th>Nomor HP Orang Tua</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $siswa->id }}</td>
                        <td>{{ $siswa->nama_siswa }}</td>
                        <td>{{ $siswa->umur }}</td>
                        <td>{{ $siswa->tmpt_lhr }}</td>
                        <td>{{ $siswa->tgl_lhr }}</td>
                        <td>{{ $siswa->alamat }}</td>
                        <td>{{ $siswa->agama }}</td>
                        <td>{{ $siswa->nama_ayah }}</td>
                        <td>{{ $siswa->pekerjaan_ayah }}</td>
                        <td>{{ $siswa->nama_ibu }}</td>
                        <td>{{ $siswa->pekerjaan_ibu }}</td>
                        <td><img src="{{ Storage::url($siswa->foto_kk) }}" width="100" alt="foto_kk"></td>
                        <td><img src="{{ Storage::url($siswa->foto_akte) }}" width="100" alt="foto_akte"></td>
                        <td>{{ $siswa->no_hp_ortu }}</td>
                        <td>
                            <a href="{{ route('admin.manajemen_data_siswa.edit', $siswa->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.manajemen_data_siswa.destroy', $siswa->id) }}" method="post" style="display:inline;">
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
