@extends('layouts.appuser')
@section('content')
<div class="container">
  <h1 class="text-center">Terima Kasih</h1>
  
  <style>
    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 60vh; /* Mengatur tinggi agar sesuai dengan tampilan */
    }
  </style>
  
  <div class="center">
    <img src="/assets/img/favicon/tk.gif" alt="GIF" width="300" height="300">
  </div>

  <p class="text-center mb-4">Terima kasih telah melakukan proses pembayaran. Pembayaran Anda akan diproses dalam waktu 1x24 jam. Silakan cek profil Anda di bagian riwayat pembayaran untuk melihat status pembayaran Anda atau <a href="{{ route('riwayat-transaksi') }}">klik di sini</a></p>
</div>
@endsection
