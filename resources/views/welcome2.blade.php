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
                    <li><a href="{{ url('about-home') }}">Tentang Kami</a></li>
                    <li><a href="{{ url('kontak-home') }}">Kontak</a></li>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url({{ asset('assets/images/hero-1.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">PT.Karya Maritim Indonesia</span></h2>
                            <p class="animate__animated animate__fadeInUp">Solusi jasa pengiriman barang ke Banyuwangi
                                dan bali.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{ asset('assets/images/hero-2.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">PT.Karya Maritim Indonesia</h2>
                            <p class="animate__animated animate__fadeInUp">Solusi jasa pengiriman barang ke Banyuwangi
                                dan bali.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{ asset('assets/images/hero-3.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">PT.Karya Maritim Indonesia</h2>
                            <p class="animate__animated animate__fadeInUp">Solusi jasa pengiriman barang ke Banyuwangi
                                dan bali.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about" data-aos="fade-up" data-aos-duration="2000">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <div class="section-title">
                            <h2>Tentang Kami</h2>
                            <p>Tentang Kami</p>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            PT.Karya Maritim Indonesia adalah sebuah perusahaan yang memberikan layanan untuk pengiriman dan penyeberangan dengan menggunakan kapal.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <section id="" class="pelayanan section-bg">
            <div class="container">
                {{-- <div class="section-title">
                    <h2>Tentang Kami</h2>
                    <p>Tentang Kami</p>
                </div> --}}

                <div class="row content">
                    <div class="col-lg-6 pt-4 pt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-right" data-aos-duration="1000">
                        <p>
                            Kami telah memberikan layanan sejak tahun 2000 dan memberikan layanan jasa penyeberangan ke beberapa pulau diindonesia.
                        </p>
                    </div>
                    <div class="col-lg-6 text-right" data-aos="fade-left" data-aos-duration="2000">
                        <img src="{{ asset('assets/images/cargo.png') }}" class="img-fluid mt-3" style="width: 400px" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-right" data-aos-duration="1000">
                    <h2>Layanan</h2>
                    <p>Apa Yang Kami Bisa Lakukan Untuk Anda ?</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-duration="2000">
                    @foreach ($tarif as $trf)
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <img src="{{ asset('storage/' . $trf->icon) }}" width="50px" class="img-fluid" alt="" srcset="">
                            <h4>{{ $trf->name }}</h4>
                            <p>
                                {{ $trf->description }} <br>
                                Rp. {{ $trf->price }}
                            </p>
                        </div>
                    </div>
                @endforeach
                   
                    </div>
                </div>
        </section><!-- End Services Section -->


        <section id="message" class="message" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" data-aos="fade-right" data-aos-duration="1000">
                        <h3>PASTIKAN ANDA MEMILIH JASA EKSPEDISI YANG TEPAT UNTUK BARANG KIRIMAN ANDA</h3>
                    </div>
                    <div class="col-lg-4 mt-3" align="center" data-aos="fade-left" data-aos-duration="2000">
                        <a href="{{ url('kontak-home') }}" class="btn-get-started">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

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
