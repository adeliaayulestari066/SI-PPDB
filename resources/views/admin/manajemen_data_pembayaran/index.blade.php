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
                <div class="input-group">
                    <div class="input-group">
                        <span class="input-group-text"><i class="tf-icons bx bx-search"></i></span>
                        <input type="text" wire:model.live="search" class="form-control" placeholder="Cari Pembayaran...">
                    </div>
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
                        <td><img src="{{ asset('path/to/your/images/' . $pembayaran->bukti) }}" alt="{{ $pembayaran->bukti }}" style="max-width: 100px;"></td>
                        <td>{{ $pembayaran->tgl_pembayaran }}</td>
                        <td>{{ $pembayaran->status }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('data-pembayaran.lihat', $pembayaran->id) }}">
                                        <i class="bx bx-show me-1"></i> Detail Pembayaran
                                    </a>                                    
                                    <a class="dropdown-item" href="{{ route('data-pembayaran.cetak', $pembayaran->id) }}" target="_blank">
                                        <i class="bx bx-printer me-1"></i> Cetak
                                    </a>
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
