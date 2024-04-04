<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=PT+Mono&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('galeri/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('galeri/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('galeri/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('galeri/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('galeri/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('galeri/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('galeri/css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('galeri/css/style.css')}}">

    <title>Minimal Free HTML Template by Untree.co</title>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">
    

    <div class="lines-wrap">
        <div class="lines-inner">
            <div class="lines"></div>
        </div>
    </div>
    <!-- END lines -->

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    

@yield('content')

    {{-- <div class="site-footer">
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Home</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Untree.co</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Projects</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS3</a></li>
                            <li><a href="#">Untree.co</a></li>
                            <li><a href="#">Free Templates</a></li>
                            <li><a href="#">WordPress Themes</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Services</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Untree.co</a></li>
                            <li><a href="#">jQuery</a></li>
                            <li><a href="#">Bootstrap</a></li>
                            <li><a href="#">Freebies</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->


                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
                        </ul>

                        <h3>Connect</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>

                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

            </div> <!-- /.row -->





            <div class="row mt-5">
                <div class="col-12 text-center">
                    <!--
              **==========
              NOTE:
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/

              **==========
            -->
                    <p class="mb-0">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash; Designed with love by <a
                            href="https://untree.co">Untree.co</a> Distributed By <a
                            href="https://themewagon.com">ThemeWagon</a>
                        <!-- License information: https://untree.co/license/ -->
                    </p>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.site-footer --> --}}

    <script src="{{ asset('galeri/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('galeri/js/popper.min.js')}}"></script>
    <script src="{{ asset('galeri/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('galeri/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('galeri/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('galeri/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('galeri/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('galeri/js/aos.js')}}"></script>
    <script src="{{ asset('galeri/js/wave-animate.js')}}"></script>
    <script src="{{ asset('galeri/js/circle-progress.js')}}"></script>
    <script src="{{ asset('galeri/js/imagesloaded.pkgd.js')}}"></script>
    <script src="{{ asset('galeri/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('galeri/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('galeri/js/TweenMax.min.js')}}"></script>
    <script src="{{ asset('galeri/js/ScrollMagic.min.js')}}"></script>
    <script src="{{ asset('galeri/js/scrollmagic.animation.gsap.min.js')}}"></script>


    <script src="js/custom.js"></script>

</body>

</html>
