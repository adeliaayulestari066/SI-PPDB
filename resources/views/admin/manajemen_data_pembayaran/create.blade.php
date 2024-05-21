@extends('layouts.admin')

@section('title', 'Tambah Data Pembayaran')

@section('main')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Pembayaran/</span> Tambah Data Pembayaran</h4>
    <!-- Basic Layout -->

    <div class="col-xl mx-auto" style="max-width: 700px">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Form Pengisian Data Pembayaran</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('data-pembayaran-simpan')}}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="siswa_id">Nama Siswa</label>
                        <select name="siswa_id" class="form-control">
                            <option value="">Pilih Siswa</option>
                            @foreach ($siswa as $id => $nama_siswa)
                                <option value="{{ $id }}">{{ $nama_siswa }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="bukti" type="file" class="form-control" id="bukti" placeholder="Bukti Pembayaran"
                                aria-describedby="floatingInputHelp" />
                            <label for="bukti">Bukti Pembayaran</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="tgl_pembayaran" type="date" class="form-control" id="tgl_pembayaran" placeholder="Tanggal Pembayaran"
                                aria-describedby="floatingInputHelp" />
                            <label for="tgl_pembayaran">Tanggal Pembayaran</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <select name="status" class="form-select" id="status">
                                <option value="diterima">Diterima</option>
                                <option value="ditolak">Ditolak</option>
                                <option value="menunggu konfirmasi" selected>Menunggu Konfirmasi</option>
                            </select>
                            <label for="status">Status</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
