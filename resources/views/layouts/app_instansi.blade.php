<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>STAR GENERATION</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicons -->
    <link href="{{ asset('/pi_assets/img/logo_stargen.png') }}" rel="icon">
    <link href="{{ asset('/pi_assets/img/logo_stargen.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('pi_assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('pi_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pi_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('pi_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pi_assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('pi_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('pi_assets/css/style.css') }}" rel="stylesheet">
    <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin='anonymous'></script>

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('halaman_utama') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('pi_assets/img/logo_stargen.png') }}" alt="">
                <span>Star Generation</span>
            </a>
            <!---Navbar-->
            <nav id="navbar" class="navbar">
                <div>
                    <ul>
                        <li><a class="nav-link scrollto" href="#halaman_utama">Halaman Utama</a></li>
                        <li><a class="nav-link scrollto" href="#sejarah">Sejarah</a></li>
                        <li><a class="nav-link scrollto" href="#visi-misi">Visi-Misi</a></li>
                        <li><a class="nav-link scrollto" href="#aktivitas">Aktivitas</a></li>
                        <li><a class="nav-link scrollto" href="#organisasi">Organisasi</a></li>
                        <li><a class="nav-link scrollto" href="#informasi_akademik">Informasi Akademik</a></li>
                        <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                        <li><a class="getstarted scrollto" type="submit"
                                href="{{ route('index_halaman_web_ppdb') }}">PPDB</a></li>
                        <!-- @if (Auth::check())
<li>
                    <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="getstarted scrollto">Keluar</button>
                  </form></li>
@else
<li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
@endif -->
                    </ul>
                </div>
            </nav>

            <!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- Section ke Halaman Utama pada folder view.halaman_utama -->
    @yield('halaman_utama')
    <!-- End Section : Halaman Utama -->

    <main id="main">
        @yield('main')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="{{ asset('pi_assets/img/logo_stargen.png') }}" alt="">
                            <span>STAR GENERATION</span>
                        </a>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">

                        <h4>Profil Instansi</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#sejarah">Sejarah</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#visi-misi">Visi-Misi</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#aktivitas">Aktivitas</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#organisasi">Organisasi</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#informasi_akademik">Informasi Akademik</a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#contact">Kontak</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>PPDB</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a
                                    href="{{ route('index_halaman_web_ppdb') }}">Halaman PPDB</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Jl. APT. Pranoto <br>
                            RT. 035 No. 99A, Sangatta Utara<br>
                            Kutai Timur <br>
                            Kalimantan Timur <br><br>
                            <strong>Phone:</strong> <br> - 081351416682 <br>- 0822 5143 1125<br>
                            <strong>Email:</strong> stargensgt@gmail.com <br>
                        </p>
                        @if (Auth::check())
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="getstarted scrollto">Keluar</button>
                                </form>
                            </li>
                        @else
                            <li><a class="getstarted scrollto" href="{{ route('login') }}">Admin</a></li>
                        @endif
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Star Generation</span></strong>. 2023
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('pi_assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('pi_assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('pi_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('pi_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('pi_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('pi_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('pi_assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('pi_assets/js/main.js') }}"></script>

</body>

</html>
