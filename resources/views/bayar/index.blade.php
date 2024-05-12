@extends('layouts.appuser')
@section('content')
    <div class="container-xxl py-5">
        <div class="container text-center">
            <h1 class="text-center mb-4">Pembayaran</h1>
            <style>
                .center {
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  height: 60vh; /* Mengatur tinggi agar sesuai dengan tampilan */
                }
              </style>
              
              <div class="center">
                <img src="/assets/img/favicon/Bayar Disini.gif" alt="GIF" width="300" height="300">
              </div>

            <p class="mb-4">Silakan lakukan pembayaran ke nomor rekening berikut untuk menyelesaikan proses pendaftaran
                Anda lalu kirim bukti pembayaran ke form di bawah ini:</p>
            <p class="mb-4"><strong>Rizki Adrian Putra (BRI): 6781 0101 3674 540</strong></p>

            {{-- ini bagian form --}}
            <form action="{{ route('bayar.simpan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <input type="file" class="form-control" name="bukti" id="bukti">
                    </div>

                    {{-- <div class="mb-3">
                        <label for="tgl_pembayaran">Tanggal Bayar</label>
                        <input type="date" class="form-control" name="tgl_pembayaran" id="tgl_pembayaran" placeholder="Tanggal Pembayaran" required>
                    </div>

                    <div>
                        <label for="status">Status:</label>
                        <select id="status" name="status" required>
                            <option value="diterima">Diterima</option>
                            <option value="ditolak">Ditolak</option>
                            <option value="menunggu konfirmasi" selected>Menunggu Konfirmasi</option>
                        </select>
                    </div> --}}
                    {{-- @dd($siswa) --}}
                    <div class="mb-3">
                        <label for="siswa_id">Pilih Siswa</label>
                        <select class="form-select" name="siswa_id" id="siswa_id" required>
                            @foreach ($siswas as $s)
                                <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <hr class="mb-4">
                <button type="submit" class="btn btn-primary btn-block">Kirim Bukti</button>
            </form>
        </div>
    </div>
@endsection
