<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TK Al-Muchlis</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/logo_tkina.png') }}" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('js/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            {{-- <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>TK Al-Muchlis</h1>
            </a> --}}
            <a href="index.html" class="navbar-brand">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/favicon/logo_tkina.png') }}" alt="TK Al-Muchlis" class="me-2"
                        width="60" height="60">
                    <h1 class="m-0 text-primary">TK Al-Muchlis</h1>
                </div>
            </a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                    <a href="/visimisi" class="nav-item nav-link {{ request()->is('visimisi') ? 'active' : '' }}">Visi
                        Misi</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="/sejarah" class="dropdown-item">Sejarah</a>
                            <a href="/pengurus" class="dropdown-item">Pengajar</a>
                            <a href="/kontak" class="dropdown-item">Kontak</a>
                        </div>
                    </div>
                    <a href="/foto" class="nav-item nav-link {{ request()->is('foto') ? 'active' : '' }}">Galeri</a>
                    <a href="/ppdb" class="nav-item nav-link {{ request()->is('ppdb') ? 'active' : '' }}">PPDB</a>
                    {{-- <a href="{{ route('login') }}" class="nav-item nav-link {{ request()->is('login') ? 'active' : '' }}">Login</a>
                    @if (Route::has('login'))
                        @auth
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                                    <a href="/riwayat-transaksi" class="dropdown-item">Riwayat Transaksi</a>
                                    <form id="logoutForm" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a>
                                    </form>
                                </div>
                            </div>
                        @endauth
                    @endif --}}
                    @if (Route::has('login'))
                        @auth
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                                    <a href="/siswa-user" class="dropdown-item">Riwayat Formulir</a>
                                    <a href="/riwayat-transaksi" class="dropdown-item">Riwayat Transaksi</a>
                                    <form id="logoutForm" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="#" class="dropdown-item"
                                            onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a>
                                    </form>
                                </div>
                            </div>
                        @else
                            <a href="{{ route('login') }}"
                                class="nav-item nav-link {{ request()->is('login') ? 'active' : '' }}">Login</a>
                        @endauth
                    @endif

                </div>
            </div>
        </nav>
        <!-- Navbar End -->


        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">TK Al-Muchlis</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jalan Irian, Kel. Tanjung Jaya</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>081367922207</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><a
                                href="mailto:paudalmuchlis@gmail.com">paudalmuchlis@gmail.com</a></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Klik Link</h3>
                        <a class="btn btn-link text-white-50" href="/sejarah">Sejarah TK Al-Muchlis</a>
                        <a class="btn btn-link text-white-50" href="/visimisi">Visi Misi</a>
                        <a class="btn btn-link text-white-50" href="/kontak">Kontak</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Galeri</h3>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/anak.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/kegiatan.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/magang kp.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/paud.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/kegiatan_puskes.jpg"
                                    alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/sosialisasi.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Newsletter</h3>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">TK Al-Muchlis</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/wow/wow.min.js') }}"></script>
    <script src="{{ asset('js/easing/easing.min.js') }}"></script>
    <script src="{{ asset('js/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
