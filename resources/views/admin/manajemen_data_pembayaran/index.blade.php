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
                    <h4 class="card-title mb-0">Data Pembayaran</h4>
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
                            onclick="window.location.href='/data-pembayaran/tambah'">
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
                        <th>Nama Siswa</th>
                        <th>Bukti Pembayaran</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($pembayarans as $index => $pembayaran)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $pembayaran->siswa->nama_siswa }}</td>
                            <td><img src="{{ asset('bukti/' . $pembayaran->bukti) }}" alt="{{ $pembayaran->bukti }}"
                                    style="max-width: 30px;"></td>
                            <td>{{ $pembayaran->tgl_pembayaran }}</td>
                            <td>{{ ucwords($pembayaran->status) }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('data-pembayaran.lihat', $pembayaran->id) }}">
                                            <i class="bx bx-show me-1"></i> Detail Pembayaran
                                        </a>
                                        <a class="dropdown-item" href="/pembayaran/{{ $pembayaran->id }}/edit">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        @if ($pembayaran->status == 'diterima')
                                            <!-- Menambahkan kondisi untuk menampilkan tombol cetak hanya jika status pembayaran adalah 'diterima' -->
                                            <a class="dropdown-item"
                                                href="{{ route('data-pembayaran.cetak', $pembayaran->id) }}">
                                                <i class="bx bx-printer me-1"></i> Cetak
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
