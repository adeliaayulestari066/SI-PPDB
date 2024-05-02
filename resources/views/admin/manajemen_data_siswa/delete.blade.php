@extends('layout.admin')

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
                    <th>No HP Orang Tua</th>
                    <th>Foto KK</th>
                    <th>Foto Akte</th>
                    <!-- Tambahkan kolom untuk atribut lainnya -->
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($siswa as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_siswa }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->tmpt_lhr }}</td>
                    <td>{{ $item->tgl_lhr }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->agama }}</td>
                    <td>{{ $item->nama_ayah }}</td>
                    <td>{{ $item->pekerjaan_ayah }}</td>
                    <td>{{ $item->nama_ibu }}</td>
                    <td>{{ $item->pekerjaan_ibu }}</td>
                    <td>{{ $item->no_hp_ortu }}</td>
                    <td>{{ $item->foto_kk }}</td>
                    <td>{{ $item->foto_akte }}</td>
                    <td>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data siswa.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <!-- Pagination -->
        <div class="demo-inline-spacing mx-3">
            {{ $siswa->links() }}
        </div>
    </div>
</div>
@endsection
