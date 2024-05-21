@extends('layouts.appuser')
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="/assets/img/favicon/depan2.jpg" alt="" style="width: 100%;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-1 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown mb-100">TK Al-Muchlis</h1>
                                <p class="fs-5 fw-medium text-white mb-2 pb-1">Selamat datang di TK Al-Muchlis! Di sini, kami menginspirasi anak-anak untuk belajar dan berkembang dengan penuh semangat. Temukan petualangan belajar yang menyenangkan dan membantu mereka tumbuh menjadi pribadi yang tangguh dan cerdas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="/assets/img/favicon/depan.jpg" alt="" style="width: 100%;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown mb-100">TK Al-Muchlis</h1>
                                <p class="fs-5 fw-medium text-white mb-2 pb-1">Selamat datang di TK Al-Muchlis, tempat belajar yang menyenangkan dan inspiratif bagi anak-anak. Bersama, kita jelajahi dunia pengetahuan dengan keceriaan dan rasa ingin tahu yang tak terbatas</p>
                                {{-- <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a> --}}
                                {{-- <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Our Classes</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facilities Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="mb-3">Fasilitas TK Al-Muchlis</h1>
                <p>Dengan berbagai fasilitas lengkap yang kami sediakan, kami memastikan bahwa anak-anak dapat belajar dan tumbuh dengan baik dalam suasana yang menyenangkan dan inspiratif</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="facility-item">
                        <div class="facility-icon bg-primary">
                            <span class="bg-primary"></span>
                            <i class="fas fa-plus-square fa-3x text-primary"></i>                            
                            <span class="bg-primary"></span>
                        </div>
                        <div class="facility-text bg-primary">
                            <h3 class="text-primary mb-3">UKS</h3>
                            <p class="mb-0">UKS di TK Al-Muchlis bertujuan untuk memastikan kesejahteraan dan kesehatan holistik siswa</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="facility-item">
                        <div class="facility-icon bg-success">
                            <span class="bg-success"></span>
                            <i class="fa fa-futbol fa-3x text-success"></i>
                            <span class="bg-success"></span>
                        </div>
                        <div class="facility-text bg-success">
                            <h3 class="text-success mb-3">Area Bermain</h3>
                            <p class="mb-0">Arena Bermain TK Al-Muchlis tempat di mana keceriaan dan pembelajaran bergabung dalam harmoni</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="facility-item">
                        <div class="facility-icon bg-warning">
                            <span class="bg-warning"></span>
                            <i class="fa fa-book fa-3x text-warning"></i>
                            <span class="bg-warning"></span>
                        </div>
                        <div class="facility-text bg-warning">
                            <h3 class="text-warning mb-3">Perpustakaan Mini</h3>
                            <p class="mb-0">Perpustakaan Mini di TK Al-Muchlis tempat para siswa melakukan petualangan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="facility-item">
                        <div class="facility-icon bg-info">
                            <span class="bg-info"></span>
                            <i class="fas fa-theater-masks fa-3x text-info"></i>
                            <span class="bg-info"></span>
                        </div>
                        <div class="facility-text bg-info">
                            <h3 class="text-info mb-3">Panggung Pentas</h3>
                            <p class="mb-0">Panggung Pentas TK Al-Muchlis adalah tempat penuh kreativitas dan pembelajaran siswa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities End -->

    <!-- Call To Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="height: 510px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded" src="/assets/img/favicon/homeppdb.jpg" style="object-fit: cover;" alt="Home PPDB Image">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4">Daftar PPDB TK Al-Muchlis</h1>
                            <p class="mb-4">Bergabunglah dengan kami di TK Al-Muchlis! Kami membuka pintu untuk menerima peserta didik baru melalui PPDB kami. Dengan fokus pada pendidikan yang holistik,
                                kami menawarkan lingkungan belajar yang merangsang dan mendukung bagi anak-anak usia dini.
                            </p>
                            <a href="/ppdb" class="btn btn-primary btn-block">Daftar</a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- Call To Action End -->


    <!-- Classes Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Materi TK Al-Muchlis</h1>
                <p>Materi di TK Al-Muchlis dirancang dengan cermat untuk menyediakan fondasi yang kokoh dalam pembelajaran anak-anak usia dini.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="classes-item">
                        <div class="bg-light rounded-circle w-75 mx-auto p-3">
                            <img class="img-fluid rounded-circle" src="img/gambar.jpg" alt="">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-10" href="">Menggambar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="classes-item">
                        <div class="bg-light rounded-circle w-75 mx-auto p-3">
                            <img class="img-fluid rounded-circle" src="img/nulis.jpg" alt="">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-10" href="">Menulis</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="classes-item">
                        <div class="bg-light rounded-circle w-75 mx-auto p-3">
                            <img class="img-fluid rounded-circle" src="img/sholathome.jpg" alt="">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-10" href="">Praktek Sholat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Classes End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="mb-3">Testi Orang Tua</h1>
                <p> Temukan testimoni inspiratif mereka tentang pendidikan berkualitas, lingkungan yang hangat, dan perkembangan holistik yang didukung oleh TK Al-Muchlis.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-6">TK Al-Muchlis memberikan pendidikan yang berkualitas bagi anak saya</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/caca.png" style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Rina</h3>
                            <span>Orang Tua Caca</span>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-6">Guru-guru di TK Al-Muchlis sangat peduli dan berdedikasi, mereka membantu anak saya tumbuh</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/ibrahim.png" style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Yeni</h3>
                            <span>Orang Tua Ibrahim</span>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-6">Saya sangat bersyukur telah memilih TK Al-Muchlis untuk pendidikan awal anak saya.</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/syafiq.png" style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Rudi</h3>
                            <span>Orang Tua Syafiq</span>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection