@extends('layouts.admin')

@section('title', 'Edit Data Pembayaran')

@section('main')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Pembayaran/</span> Edit Data Pembayaran</h4>
    <div class="col-xl mx-auto" style="max-width: 700px">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Form Edit Data Pembayaran</h5>
            </div>
            <div class="card-body">
                <form action="/pembayaran/{{ $pembayaran->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <div class="form-floating">
                            <input name="tgl_pembayaran" value="{{ $pembayaran->tgl_pembayaran }}" type="date" class="form-control" id="tgl_pembayaran" readonly />
                            <label for="tgl_pembayaran">Tanggal Pembayaran</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <select name="status" class="form-select" id="status">
                                <option value="diterima" {{ $pembayaran->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
                                <option value="ditolak" {{ $pembayaran->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                <option value="menunggu konfirmasi" {{ $pembayaran->status == 'menunggu konfirmasi' ? 'selected' : '' }}>Menunggu Konfirmasi</option>
                            </select>
                            <label for="status">Status Pembayaran</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Bukti Pembayaran</label><br>
                        <img src="{{ asset('bukti/' . $pembayaran->bukti) }}" alt="Bukti Pembayaran" style="max-width: 200px;"><br>
                    </div>
                    <!-- Tambahkan input untuk atribut lainnya sesuai dengan kebutuhan -->
                    <button type="submit" class="btn btn-primary">Perbarui Status</button>
                </form>
            </div>
        </div>
    </div>
@endsection
