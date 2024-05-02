@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('main')
<div>
    <!-- Judul Halaman dan Tombol Tambah Data -->
    <div class="card-header d-flex flex-column flex-md-row">
        <div class="head-label text">
            <h4 class="card-title mb-0">Data Siswa</h4>
        </div>
        <div class="d-flex ms-auto me-3">
            <!-- Kolom Pencarian -->
            <div class="input-group">
                <div class="input-group">
                    <span class="input-group-text"><i class="tf-icons bx bx-search"></i></span>
                    <input type="text" wire:model.live="search" class="form-control"
                        placeholder="Cari Siswa...">
                </div>
            </div>
        </div>
        <!-- Tombol Tambah Data -->
        <div class="dt-action-buttons text-end pt-3 pt-md-0">
            <div class="dt-buttons">
                <button class="dt-button create-new btn btn-primary" tabindex="0"
                    aria-controls="DataTables_Table_0" type="button"
                    onclick="window.location.href='{{ route('siswa.tambah') }}'">
                    <span>
                        <i class="bx bx-plus me-sm-1"></i>
                        <span class="d-none d-sm-inline-block">Tambah Data</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <!-- Tabel Data Siswa -->
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
                    <!-- Tambahkan kolom untuk atribut lainnya -->
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($gurus as $index => $guru)
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
                        <!-- Tombol Lihat -->
                        <a href="{{ route('guru.show', ['id' => $guru->id]) }}" class="btn btn-primary btn-sm me-2">
                            <i class="bx bx-search me-1"></i> Lihat
                        </a>
                        <!-- Tombol Edit -->
                        <a href="{{ route('guru.edit', ['id' => $guru->id]) }}" class="btn btn-primary btn-sm me-2">
                            <i class="bx bx-edit-alt me-1"></i> Edit
                        </a>
                        <!-- Form Hapus -->
                        <form id="formHapusGuru" action="{{ route('guru.destroy', ['id' => $guru->id]) }}"
                            method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <i class="bx bx-trash me-1"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center">Tidak ada data guru.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <!-- Pagination -->
        <div class="demo-inline-spacing mx-3">
            {{ $gurus->links() }}
        </div>
    </div>
</div>
@endsection
