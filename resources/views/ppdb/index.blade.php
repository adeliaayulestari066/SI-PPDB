@extends('layouts.appuser')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-2 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1000px;">
                <h1 class="mb-3">PPDB Online TK Al-Muchlis</h1>
                <p>Sekarang, mendaftarkan anak Anda ke TK Al-Muchlis Kota Bengkulu menjadi lebih mudah dan efisien dengan
                    menggunakan PPDB online!<br>
                    Dengan beberapa klik saja, Anda sudah bisa melakukan proses pendaftaran dengan mudah. PPDB online
                    memberikan kemudahan tanpa harus datang ke sekolah.</p>
            </div>
        </div>
    </div>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-0">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="/assets/img/favicon/ppdbbaru.png" alt="PPDB Baru Image">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .2);">
                    <div class="container">
                        <div class="row justify-content-start">
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="/assets/img/favicon/formulir.png" alt="Formulir PPDB">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .2);">
                    <div class="container">
                        <div class="row justify-content-start">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    {{-- ccccc --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-sm-6">
                    <img class="img-fluid" src="/assets/img/favicon/ppdbbaruhd.png" alt="PPDB Image">
                </div>
                <div class="col-sm-6">
                    <h3 class="text-bold">Beragam Fitur Unggulan dimiliki
                        <span class="text-primary">PPDB Online</span>
                    </h3>
                    <ul class="my-4"style="list-style-type: none;">
                        <li class="my-8">
                            <div class="row items-center justify-content-center">
                                <div class="col-2 items-center text-center rounded-full bg-orange-100 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 0 1-.657.643 48.39 48.39 0 0 1-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 0 1-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 0 0-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 0 1-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 0 0 .657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 0 1-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 0 0 5.427-.63 48.05 48.05 0 0 0 .582-4.717.532.532 0 0 0-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 0 0 .658-.663 48.422 48.422 0 0 0-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 0 1-.61-.58v0Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="col-10">
                                    <div class="text-2xl"><strong>Pengisian Formulir Online Mudah</strong></div>
                                    <p>Orang tua dapat mengisi formulir pendaftaran secara online melalui situs web resmi
                                        sekolah.</p>
                                </div>
                            </div>
                        </li>
                        <li class="my-8">
                            <div class="row items-center justify-content-center">
                                <div class="col-2 items-center text-center rounded-full bg-orange-100 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="col-10">
                                    <div class="text-2xl"><strong>Pembayaran Praktis Melalui Transfer</strong></div>
                                    <p>Proses pembayaran menjadi lebih praktis dengan opsi pembayaran melalui transfer bank.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="my-8">
                            <div class="row items-center justify-content-center">
                                <div class="col-2 items-center text-center rounded-full bg-orange-100 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="col-10">
                                    <div class="text-2xl"><strong>Konfirmasi Pembayaran Langsung di Website</strong></div>
                                    <p>Orang tua dapat menunggu konfirmasi pembayaran langsung melalui situs web sekolah.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <br>
                    <div style="text-align: center;">
                        <a href="/formulir" class="btn btn-primary btn-lg"
                            style="display: inline-block; width: 400px;">Daftar</a>
                    </div>
                    <div style="text-align: center; padding-top:20px;">
                        @if (Auth::check())
                            @php
                                $siswa = \App\Models\Siswa::where('user_id', Auth::id())->first();
                            @endphp

                            @if ($siswa)
                                <a href="{{ route('bayar') }}" class="btn btn-primary btn-lg"
                                    style="display: inline-block; width: 400px;">Bayar Sekarang</a>
                            @endif
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- hhh --}}
@endsection
