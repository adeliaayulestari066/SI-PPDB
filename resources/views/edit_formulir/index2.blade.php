@extends('layouts.appuser')

@section('content')
    <main id="main">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Daftar Siswa</h1>
            <p class="text-center">Edit profil yang anda lakukan</p>
        </div>

        <section id="riwayat-transaksi" class="p-4">
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
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
                            <th>No HP Ortu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($siswas as $data)
                            <tr>
                                <td>{{ $data->nama_siswa }}</td>
                                <td>{{ $data->umur }}</td>
                                <td>{{ $data->tmpt_lhr }}</td>
                                <td>{{ $data->tgl_lhr }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->agama }}</td>
                                <td>{{ $data->nama_ayah }}</td>
                                <td>{{ $data->pekerjaan_ayah }}</td>
                                <td>{{ $data->nama_ibu }}</td>
                                <td>{{ $data->pekerjaan_ibu }}</td>
                                <td>{{ $data->no_hp_ortu }}</td>
                                <td>
                                    <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-primary">Edit Formulir</a>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-info">Tidak ada data formulir yang di isi.</div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection
