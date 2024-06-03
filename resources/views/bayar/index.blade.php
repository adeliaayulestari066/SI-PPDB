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
                    height: 60vh;
                    /* Mengatur tinggi agar sesuai dengan tampilan */
                }
            </style>

            <div class="center">
                <img src="/assets/img/favicon/Bayar Disini.gif" alt="GIF" width="300" height="300">
            </div>

            <p class="mb-4">Silakan lakukan pembayaran sebesar Rp.100.000,00 ke nomor rekening berikut untuk menyelesaikan proses pendaftaran
                Anda lalu kirim bukti pembayaran ke form di bawah ini:</p>
            <p class="mb-4"><strong>Reni Arista (BRI): 6781 0101 3674 540</strong></p>

            {{-- ini bagian form --}}
            <form id="payment-form" action="{{ route('bayar.simpan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="mb-3">
                        <input type="file" class="form-control" name="bukti" id="bukti" accept=".jpg, .jpeg, .png" required>
                        <span id="bukti_error" style="color:red;"></span>
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
                        <label for="siswa_id">Nama Siswa</label>
                        <!-- bayar.index.blade.php -->
                        {{-- <input type="text" class="form-control" readonly
                            value="@foreach ($pembayaranDitolak sebagai $siswaId => $namaSiswa)
                    {{ $namaSiswa }} @endforeach"> --}}
                        <select name="siswa_id" class="form-control" required>
                            <option value="">Pilih Siswa</option>
                            @foreach ($pembayaranDitolak as $siswaId => $namaSiswa)
                                <option value="{{ $siswaId }}">{{ $namaSiswa }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- <div class="mb-3">
                        <label for="siswa_id">Nama Siswa</label>
                        <select name="siswa_id" class="form-control">
                            <option value="">Pilih Siswa</option>
                            @foreach ($pembayaranDitolak sebagai $siswaId => $namaSiswa)
                                <option value="{{ $siswaId }}">{{ $namaSiswa }}</option>
                            @endforeach
                        </select>
                    </div> --}}

                </div>
                <hr class="mb-4">
                <button type="submit" class="btn btn-primary btn-block">Kirim Bukti</button>
            </form>
        </div>
        <p class="m-5"> Jika anda belum ingin melakukan pembayaran, silahkan lakukan pembayaran dengan memilih button "Bayar Sekarang" di halaman <a href="{{ route('ppdb.index')}}">PPDB</a>.</p>
    </div>

    <script>
        document.getElementById("payment-form").addEventListener("submit", function(e) {
            let isValid = true;

            // Validasi bukti pembayaran
            const buktiInput = document.getElementById("bukti");
            const buktiError = document.getElementById("bukti_error");
            if (!buktiInput.value) {
                isValid = false;
                buktiError.textContent = "Silakan unggah bukti pembayaran terlebih dahulu.";
            } else {
                buktiError.textContent = "";
            }

            // Mencegah pengiriman formulir jika ada yang tidak valid
            if (!isValid) {
                e.preventDefault();
            }
        });
    </script>

@endsection
