@extends('layouts.admin')

@section('main')

<div>
    <div class="card-header">
        <div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="d-flex flex-column flex-md-row align-items-center">
            <div class="head-label text">
                <h4 class="card-title mb-0">Data Guru</h4>
            </div>
            <div class="d-flex ms-auto me-3">
                <div class="navbar-search">
                    <form method="GET">
                        <div class="input-group">
                            <input type="text" name="cari" id="cari" class="form-control bg-light border-2"
                                placeholder="Search for..." autofocus="true" value="{{ $cari }}">
                            <button type="submit" class="btn btn-outline-info"><i class="bx bx-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="dt-action-buttons text-end pt-3 pt-md-0">
                <div class="dt-buttons">
                    <button class="dt-button create-new btn btn-primary" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button"
                        onclick="window.location.href='/data-guru/tambah'">
                        <span>
                            <i class="bx bx-plus me-sm-1"></i>
                            <span class="d-none d-sm-inline-block">Tambah Data</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Guru</th>
                    <th>Jabatan</th>
                    <th>NIP/NUPTK</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Status Kepegawaian</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($gurus as $index => $guru)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $guru->nama_guru }}</td>
                        <td>{{ $guru->jabatan }}</td>
                        <td>{{ $guru->nip_nuptk }}</td>
                        <td>{{ $guru->alamat }}</td>
                        <td>{{ $guru->no_hp }}</td>
                        <td>{{ $guru->status_kepegawaian }}</td>
                        <td>{{ $guru->gambar }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('data-guru.lihat', $guru->id) }}">
                                        <i class="bx bx-show me-1"></i> Detail Guru
                                    </a>                                    
                                    <a class="dropdown-item" href="/guru/{{ $guru->id }}/edit">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </a>
                                    <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#hapusModal{{ $index }}">
                                        <i class="bx bx-trash me-1"></i> Hapus
                                    </button>
                                    <a class="dropdown-item" href="{{ route('data-guru.cetak', $guru->id) }}" target="_blank" >
                                        <i class="bx bx-printer me-1"></i> Cetak
                                    </a>
                                </div>
                            </div>                            
                        </td>
                    </tr>
                    
                    <!-- Modal Hapus -->
                    <div class="modal fade" id="hapusModal{{ $index }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Anda yakin ingin menghapus data ini?
                                </div>
                                <div class="modal-footer">
                                    <form id="formHapusGuru" action="{{ route('data-guru.hapus', ['guru' => $guru->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
