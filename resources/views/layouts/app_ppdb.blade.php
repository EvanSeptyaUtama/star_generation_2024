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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-start">

            <a href="{{ route('halaman_utama') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('pi_assets/img/logo_stargen.png') }}" alt="">
                <span>Star Generation</span>
            </a>
            <!---Navbar-->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero_ppdb">Home</a></li>
                    <li><a class="nav-link scrollto" href="#info_pengumuman">Informasi Pengumuman</a></li>
                </ul>

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <div id="hero_ppdb" class="features">
        @foreach ($data_hal_utama_ppdb as $data)
            <div class="container">
                <!-- Feature Icons -->
                <div class="row feature-icons">
                    <h3>{{ $data->judul_ppdb }}</h3>
                    <a class="link-box-ha text-center"
                        href="https://m.facebook.com/profile.php/?id=100053819389212&name=xhp_nt__fb__action__open_user"
                        class="btn btn-primary">
                        <p class="card-text-ha">Link Pendaftaran Peserta Didik Baru <i
                                class="fa fa-angle-double-right ml-2"></i></p>
                    </a>

                    <div class="row">
                        <div class="col-xl-4 text-center">
                            <img src="{{ url('storage/Utama_PPDB/' . $data->gambar_brosur_ppdb) }}"
                                class="img-fluid p-4" alt="">
                        </div>
                        <div class="col-xl-8 d-flex content">
                            <div class="row align-self-center gy-4">
                                <div class="col-md-6 icon-box">
                                    <div>
                                        <h4>
                                            <strong>KB | TK</strong>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <div>
                                        <h4>
                                            <strong>SD KRISTEN</strong>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class="ri-line-chart-line"></i>
                                    <div>
                                        <h4>KB - TK A - TK B</h4>
                                        <p>KB (2 - 4 Tahun) <br> KB (4 - 5 Tahun) <br>KB (5 - 6 Tahun)</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box">
                                    <i class="ri-stack-line"></i>
                                    <div>
                                        <h4>Fasilitas</h4>
                                        <p>- Gedung Milik Sendiri <br>- Ruang Belajar Nyaman <br>- Full Ac <br>-
                                            Transport Antar Jemput</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box">
                                    <i class="ri-brush-4-line"></i>
                                    <div>
                                        <h4>Ekstrakurikuler</h4>
                                        <p>- Menari Dayak <br> - Bermain Gitar</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box">
                                    <i class="ri-magic-line"></i>
                                    <div>
                                        <h4>Ekstrakurikuler</h4>
                                        <p>- Science Club <br> - Banner <br> - Gitar <br> - Menari</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box">
                                    <i class="ri-command-line"></i>
                                    <div>
                                        <h4>Keunggulan</h4>
                                        <p>- Pembinaan Karakter <br> - Bina Iman (Ibadah Bersama) <br> - Bahasa Inggris
                                            Permulaan</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box">
                                    <i class="ri-radar-line"></i>
                                    <div>
                                        <h4>Program Unggulan</h4>
                                        <p>- Karakteristik Kristiani <br> - Bahasa Inggris <br> - Creative Learning <br>
                                            - Mandarin (Ekskul) <br> - 3 Bahasa <br> - Ibrani (Ekskul)</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div><!-- End Feature Icons -->

            </div>
        @endforeach
    </div>

    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <section id="info_pengumuman" class="portfolio">

            <div class="container">

                <header class="section-header">
                    <h2>Informasi Pengumuman</h2>
                    <p>Pengumuman Hasil Seleksi PPDB</p>
                </header>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter=".filter-app">Pengumuman</li>
                            {{-- <li data-filter=".filter-card">Jalur Prestasi</li>
            <li data-filter=".filter-web">Jalur Undangan</li> --}}
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container">
                    @foreach ($data_hal_ip_ppdb as $data)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ url('storage/PPDB/' . $data->gambar_informasi_pengumuman) }}"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $data->judul_informasi_pengumuman }}</h4>
                                    <div class="portfolio-links">
                                        <a href="{{ url('storage/PPDB/' . $data->gambar_informasi_pengumuman) }}"
                                            data-gallery="portfolioGallery" class="portfokio-lightbox"
                                            title="{{ $data->judul_informasi_pengumuman }}">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
        <!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
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
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('halaman_utama') }}">Home</a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <a
                                    href="{{ route('halaman_utama') }}">Sejarah</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a
                                    href="{{ route('halaman_utama') }}">Visi-Misi</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a
                                    href="{{ route('halaman_utama') }}">Aktivitas</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a
                                    href="{{ route('halaman_utama') }}">Organisasi</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('halaman_utama') }}">Informasi
                                    Akademik</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('halaman_utama') }}">Kontak</a>
                            </li>
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
