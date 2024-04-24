@extends('layouts.appuser')
@section('content')
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                {{-- <img src="payment_image.jpg" class="img-fluid mb-4" alt="Payment Image"> --}}
                <h1 class="mb-3">Pembayaran</h1>
                <p class="mb-4">Silakan lakukan pembayaran ke nomor rekening berikut untuk menyelesaikan proses pendaftaran
                    Anda:</p>
                <p class="mb-4"><strong>Rizki Adrian Putra (BRI): 6781 0101 3674 540</strong></p>
                <p class="mb-5">Pastikan untuk mengirimkan bukti pembayaran ke nomor WhatsApp berikut: <a
                        href="https://wa.me/6281234567890" target="_blank">081234567890</a>. Terima kasih atas kerjasama
                    Anda.</p>
                    
                    <form action="{{ route('pembayaran.simpan') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="bukti_pembayaran">Bukti Pembayaran:</label>
                            <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required>
                        </div>
                        <div>
                            <label for="tgl_pembayaran">Tanggal Pembayaran:</label>
                            <input type="date" id="tgl_pembayaran" name="tgl_pembayaran" required>
                        </div>
                        <div>
                            <label for="status">Status:</label>
                            <select id="status" name="status" required>
                                <option value="diterima">Diterima</option>
                                <option value="ditolak">Ditolak</option>
                                <option value="menunggu konfirmasi" selected>Menunggu Konfirmasi</option>
                            </select>
                        </div>
                        <div>
                            <label for="siswa_id">ID Siswa:</label>
                            <input type="text" id="siswa_id" name="siswa_id" required>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                {{-- <form action="{{ route('pembayaran.simpan') }}" method="POST"  >
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="tgl_pembayaran">Tanggal Bayar</label>
                            <input type="date" class="form-control" name="tgl_pembayaran" id="tgl_pembayaran"
                                placeholder="Tanggal Bayar" required>
                        </div>
                        <div class="mb-3">
                            <label for="siswa_id">Siswa ID</label>
                            <input type="number" class="form-control" name="siswa_id" id="siswa_id"
                                placeholder="Nama Siswa" required>
                        </div>
                        <div class="mb-3">
                            <label for="bukti">Bukti Pembayaran</label>
                            <input type="file" id="bukti" name="bukti" required>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                </form> --}}
            </div>
        </div>
    </div>
@endsection
