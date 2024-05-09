@extends('layouts.appuser')
@section('content')
<div class="container">
  <h1 class="text-center">Pembayaran</h1>
  <p class="mb-4">Silakan lakukan pembayaran ke nomor rekening berikut untuk menyelesaikan proses pendaftaran
    Anda:</p>
    <p class="mb-4"><strong>Rizki Adrian Putra (BRI): 6781 0101 3674 540</strong></p>
    <p class="mb-5">Pastikan untuk mengirimkan bukti pembayaran ke nomor WhatsApp berikut: <a
        href="https://wa.me/6281234567890" target="_blank">081234567890</a>. Terima kasih atas kerjasama
    Anda.</p>

  {{-- ini bagian form --}}
  <form action="{{ route('bayar.simpan')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="mb-3">
            <label for="bukti">Bayar</label>
            <input type="file" class="form-control" name="bukti" id="bukti" >
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
        </div>

        <div class="mb-3">
            <label for="siswa_id">siswa id</label>
            <input type="number" class="form-control" name="siswa_id" id="siswa_id" placeholder="ID Siswa" required>
        </div>
    </div> --}}

      <hr class="mb-4">
      <button type="submit" class="btn btn-primary btn-block">Kirim Bukti</button>
  </form>
</div>

@endsection