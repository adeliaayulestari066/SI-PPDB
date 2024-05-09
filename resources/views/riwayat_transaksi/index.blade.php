@extends('layouts.appuser')

@section('content')
    <main id="main">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Riwayat Transaksi</h1>
            <p class="text-center">Cek riwayat transaksi yang anda lakukan</p><!-- Modified line -->
        </div>

        <!-- ======= Riwayat Transaksi Section ======= -->
        <section id="riwayat-transaksi" class="p-4">
            <div class="container">
                <div class="row ">
                    @forelse ($riwayatTransaksi as $pembayaran)
                        <div class="col-4">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <strong>{{ $pembayaran->siswa->nama_siswa }}</strong>
                                    <p class="card-text">
                                        {{ \Carbon\Carbon::parse($pembayaran->tgl_pembayaran)->locale('id_ID')->isoFormat('dddd, D MMMM YYYY') }}
                                    </p>
                                </div>
                                <div class="card-body text-center">
                                    <img src="/bukti/{{ $pembayaran->bukti }}" alt="Foto Guru"
                                        class="img-fluid rounded mb-3" style="max-width: 150px;">
                                    <p class="card-text">
                                        Status :
                                        <span
                                            class="{{ $pembayaran->status == 'menunggu konfirmasi' ? 'bg-warning' : ($pembayaran->status == 'diterima' ? 'bg-success' : ($pembayaran->status == 'ditolak' ? 'bg-danger' : 'bg-secondary')) }} text-white px-2 py-1 rounded">
                                            {{ ucwords($pembayaran->status) }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-info">Tidak ada riwayat transaksi.</div>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
@endsection
