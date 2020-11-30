<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PT.Karya Maritim Indonesia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('sailor/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sailor/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sailor/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sailor/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sailor/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('sailor/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('sailor/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('sailor/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

        <h1 class="logo"><a href="{{ url('/') }}" style="color: #0065ff;">PT.Karya Maritim Indonesia</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block ml-auto">

                <ul>
                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('tarif-home') }}">Tarif</a></li>
                    <li><a href="pricing.html">Tentang Kami</a></li>
                    <li><a href="contact.html">Kontak</a></li>
                                        {{-- <li class="drop-down"><a href="#">About</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="testimonials.html">Testimonials</a></li>
                    
                                                <li class="drop-down"><a href="#">Deep Drop Down</a>
                                                    <ul>
                                                        <li><a href="#">Deep Drop Down 1</a></li>
                                                        <li><a href="#">Deep Drop Down 2</a></li>
                                                        <li><a href="#">Deep Drop Down 3</a></li>
                                                        <li><a href="#">Deep Drop Down 4</a></li>
                                                        <li><a href="#">Deep Drop Down 5</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --}}
                    
                </ul>

            </nav><!-- .nav-menu -->

            {{-- <a href="index.html" class="get-started-btn ml-auto">Get Started</a>
            --}}

        </div>
    </header><!-- End Header -->

    <main id="main">
                <!-- ======= Services Section ======= -->
                <section id="services" class="services">
                    <div class="container">
        
                        <div class="section-title mt-3" style="padding-top: 50px" data-aos="fade-right" data-aos-duration="1000">
                            {{-- <h2>Layanan</h2> --}}
                            <p class="mt-3" align="center">Layanan dan harga</p>
                        </div>
        
                        <div class="row" data-aos="fade-up" data-aos-duration="2000">
                            <div class="col-md-6">
                                <div class="icon-box">
                                    <i class="icofont-bicycle-alt-1"></i>
                                    <h4><a href="#">Sepeda</a></h4>
                                    <p>
                                        Pengangktan Sepeda balbalblab <br>
                                        Rp. 200000
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <div class="icon-box">
                                    <i class="icofont-motor-bike-alt"></i>
                                    <h4><a href="#">Motor dibawah 500cc</a></h4>
                                    <p>
                                        Pengangktan Sepeda balbalblab <br>
                                        Rp. 200000
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <div class="icon-box">
                                    <i class="icofont-motor-biker"></i>
                                    <h4><a href="#">Motor diatas 500cc</a></h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur</p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <div class="icon-box">
                                    <i class="icofont-car-alt-1"></i>
                                    <h4><a href="#">Mobil Pribadi</a></h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                        anim id est laborum</p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <div class="icon-box">
                                    <i class="icofont-truck-loaded"></i>
                                    <h4><a href="#">Pickup</a></h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque</p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <div class="icon-box">
                                    <i class="icofont-school-bus"></i>
                                    <h4><a href="#">Bis Mini</a></h4>
                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                                        nobis est eligendi</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-4 mt-md-0">
                                    <div class="icon-box">
                                        <i class="icofont-truck-alt"></i>
                                        <h4><a href="#">Truk Sedang</a></h4>
                                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                                            soluta
                                            nobis est eligendi</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4 mt-md-0">
                                    <div class="icon-box">
                                        <i class="icofont-bus-alt-1"></i>
                                        <h4><a href="#">Bus Besar</a></h4>
                                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                                            soluta
                                            nobis est eligendi</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4 mt-md-0">
                                    <div class="icon-box">
                                        <i class="icofont-articulated-truck"></i>
                                        <h4><a href="#">Truk Besar</a></h4>
                                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                                            soluta
                                            nobis est eligendi</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4 mt-md-0">
                                    <div class="icon-box">
                                        <i class="icofont-oil-truck"></i>
                                        <h4><a href="#">Tronton</a></h4>
                                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                                            soluta
                                            nobis est eligendi</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4 mt-md-0">
                                    <div class="icon-box">
                                        <i class="icofont-oil-truck"></i>
                                        <h4><a href="#">Kontainer</a></h4>
                                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                                            soluta
                                            nobis est eligendi</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4 mt-md-0">
                                    <div class="icon-box">
                                        <i class="icofont-truck"></i>
                                        <h4><a href="#">Kontainer Panjang > 12M</a></h4>
                                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                                            soluta
                                            nobis est eligendi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section><!-- End Services Section -->
    </main>
    
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>PT.Karya Maritim Indonesia</h3>
                            <p>
                                @foreach ($kontak as $kntk)
                                {{ $kntk->address }}<br>
                                <strong>Phone 1:</strong> {{ $kntk->phone1 }}<br>
                                <strong>Phone 2 :</strong> {{ $kntk->phone2 }}<br>
                                <strong>Email:</strong> {{ $kntk->email }}<br>
                                @endforeach
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://www.facebook.com/PTKarya-Maritim-Indonesia-528916410651245/"
                                    class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://www.instagram.com/pt._karya_maritim_indonesia/" class="instagram"><i
                                        class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-1 col-md-5 footer-links"></div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Layanan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Tarif</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Tanyakan lebih lanjut</h4>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Submit">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span><?php echo date('Y'); ?></span></strong>.
                All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('sailor/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sailor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sailor/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sailor/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('sailor/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('sailor/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('sailor/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('sailor/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('sailor/assets/js/main.js') }}"></script>
    <script>
        AOS.init();
      </script>

</body>

</html>
