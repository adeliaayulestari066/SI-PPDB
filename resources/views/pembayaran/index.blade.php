@extends('layouts.appuser')
@section('content')
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Pembayaran</h1>
                <p class="mb-5">Silakan lakukan pembayaran ke nomor rekening berikut untuk menyelesaikan proses pendaftaran Anda: (Rizki Adrian Putra(BRI):6781 0101 3674 540). <br> Pastikan untuk mengirimkan bukti pembayaran ke kontak dibawah ini. Terimakasih atas kerjasama Anda."</p>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 900px;">
                <p class="mb-5">Silakan lakukan pembayaran ke nomor rekening berikut untuk menyelesaikan proses pendaftaran Anda: (Rizki Adrian Putra(BRI):6781 0101 3674 540). <br> Pastikan untuk mengirimkan bukti pembayaran ke kontak dibawah ini. Terimakasih atas kerjasama Anda."</p>
                <form action="{{ route('pembayaran.sukses', $pesananId) }}" method="post">
                    <!-- Your form fields -->
                    @csrf
                    <input type="hidden" name="pesanan_id" value="{{ $pesananId }}">
                    <input type="hidden" name="user_id" value="{{ $userId }}">
                    <label for="gambar" class="form-label">Bukti Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" required>
                    <button type="submit" class="btn btn-primary btn-block">Kirim Bukti Pembayaran</button>
                </form>
            </div>
        </div>
    </div> --}}
@endsection