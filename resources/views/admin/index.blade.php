@extends('layouts.admin')

@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Selamat Datang Admin</h1>
        <p class="mb-4">Informasi pendaftaran TK Al-Muchlis</a>.</p>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-8 order-1">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body" style="height: max-content; min-height: 200px;">
                            <div class="card-title d-flex align-items-start justify-content-between mb-2">
                                <div class="d-flex align-items-center justify-content">
                                    <div class="avatar d-flex align-items-center justify-content-center rounded me-2"
                                        style="background-color: #9a5ffa23;">
                                        <i class="menu-icon tf-icons bx bx-user me-0" style="color: #6610f2;"></i>
                                    </div>
                                    <h5 class="fw-semibold d-block mb-0">Siswa Baru</h5>
                                </div>
                            </div>
                            <div class="my-2">
                                <div class="d-flex align-items-end justify-content-center">
                                    <h3 class="card-title text-nowrap mb-0 me-2">{{ $jumlahSiswa }}</h3>
                                </div>
                                <p class="mb-2">Jumlah pendaftar saat ini</p>
                            </div>
                            <div class="mt-2">
                                {{-- <a href="{{ route('data-mahasiswa.index') }}" class="btn btn-sm btn-outline-purlpe">Lihat
                                    Mahasiswa</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  col-12 mb-4">
                    <div class="card">
                        <div class="card-body" style="height: max-content; min-height: 200px;">
                            <div class="card-title d-flex align-items-start justify-content-between mb-2">
                                <div class="d-flex align-items-center justify-content">
                                    <div class="avatar d-flex align-items-center justify-content-center rounded me-2"
                                        style="background-color: rgba(154, 247, 104, 0.2);">
                                        <i class="menu-icon tf-icons bx bx-book-bookmark text-success me-0"></i>
                                    </div>
                                    <h5 class="fw-semibold d-block mb-0">Konfirmasi Pembayaran</h5>
                                </div>
                                {{-- <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="my-2">
                                <div class="d-flex align-items-end justify-content-center">
                                    <h3 class="card-title text-nowrap mb-0 me-2">{{ $jumlahPembayaran }}</h3>
                                </div>
                                <p class="mb-2">Jumlah pembayaran yang perlu dilakukan konfirmasi</p>
                            </div>
                            <div class="mt-2">
                                {{-- <a href="{{ route('progres-skripsi.index') }}" class="btn btn-sm btn-outline-success">Lihat
                                    Skripsi</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  col-12 mb-4">
                    <div class="card">
                        <div class="card-body" style="height: max-content; min-height: 200px;">
                            <div class="card-title d-flex align-items-start justify-content-between mb-2">
                                <div class="d-flex align-items-center justify-content">
                                    <div class="avatar d-flex align-items-center justify-content-center rounded me-2"
                                        style="background-color: rgba(3,195,236, 0.1);">
                                        <i class="menu-icon tf-icons bx bx-calendar text-info me-0"></i>
                                    </div>
                                    <h5 class="fw-semibold d-block mb-0">Pembayaran Diterima</h5>
                                </div>
                                {{-- <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="my-2 mr-2">
                                <div class="d-flex align-items-end justify-content-center">
                                    <h3 class="card-title text-nowrap mb-0 me-2">{{ $jumlahPembayaranDiterima }}</h3>
                                </div>
                                <p class="mb-2">Jumlah pembayaran yang diterima</p>
                            </div>
                            <div class="mt-2">
                                {{-- <a href="{{ route('jadwal-sidang.index') }}" class="btn btn-sm btn-outline-info">Lihat
                                    Jadwal</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

