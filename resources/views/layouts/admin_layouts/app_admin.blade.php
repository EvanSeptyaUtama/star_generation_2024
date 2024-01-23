<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STARGEN | @yield('title')</title>
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> --}}
    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script defer src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script defer src="{{ asset('pi_assets/js/main.js') }}"></script>
</head>
<style>
    .main {
        height: 100vh;
    }

    .main-content {
        background-color: secondary;
    }

    .navbar {
        background: #004d74;
    }

    .main_utama {
        background: #8AAEE0;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        padding-top: 4px;
        padding-bottom: 4px;
    }

    .sidebar {
        position: relative;
        border: #004d74;
        border-right-style: solid;
        background: #ffffff
    }

    .sidebar ul {
        list-style: none;
    }

    .img-index_admin {
        border-radius: 50%;
        width: 50px;
        height: 50px;
    }

    .img-tampil-admin {
        border-radius: 10%;
        width: 220px;
        height: 250px;
    }

    .sidebar ul li {
        padding: 5px;
        padding-left: 15px;
    }

    .sidebar ul li:hover {
        color: #d2cfcf;
        font-weight: bold;
    }

    .dropdown:hover {
        color: #d2cfcf;
        font-weight: bold;
    }

    .sidebar ul li a {
        color: black;
        text-decoration: none
    }

    .nav-link {
        color: black;
        padding-left: 15px;
        list-style: none;
    }

    .nav-link:hover {
        color: black;
    }

    .menu_profile {
        padding: 12px;
        border: rgb(218, 217, 217);
        border-bottom-style: solid;
    }

    .container-ln {
        border: rgb(9, 7, 7);
        border: solid;
    }

    .container-role-admin {
        font-size: 3rem;
        font-family: Georgia, 'Times New Roman', Times, serif
    }

    .display-4 {
        font-weight: bold;
    }

    .display-5 {
        font-weight: bold;
    }

    .display-6 {
        font-weight: bold;
    }

    .box-link-ha {
        list-style-type: none;
    }

    .car-body-icon {
        position: absolute;
        z-index: 0;
        top: 10px;
        right: 4px;
        opacity: 0.5;
        font-size: 90px;
        margin-right: 10px;
    }

    .card-borderhu {
        border-color: #004d74;
    }

    .link-box-ha {
        text-decoration: none;
    }

    .card-text-ha {
        color: #ffffff;
    }

    .card-text-ha:hover {
        color: #d2cfcf;
    }

    .box-facebook {
        border: solid;
        border-color: rgb(218, 217, 217);
        border-radius: 10px;
    }

    .card-header-fb {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .bg-warna1 {
        background: #004d74;
    }

    .bg-warna2 {
        background: #004d90;
    }

    .bg-warna-jadwal_mengajar {
        background: #2979FF;
    }

    .bg-warna-instagram {
        background: #F44336;
    }

    .bg-warna-youtube {
        background: #C62828;
    }

    .btn-submit {
        background: #003554;
    }

    .card-header {
        background: #003554;
    }
</style>

<body>
    <div class="main d-flex flex-column justify-content-between ">
        <!----Navbar-->
        <nav class="navbar navbar-expand-md navbar-light navbar-dark shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="/admin">
                    <strong>STAR GENERATION | ADMIN</strong>
                </a>
                <!-----Burger Button Mobile---->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbarss -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->is_admin == true || Auth::user()->is_admin == false)
                                    <a class="dropdown-item" href="{{ route('show_profile') }}">
                                        Profil
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                @endif
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar shadow-md col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                    <!--Hak Akses -> Halaman Admin--->
                    @if (Auth::check() && Auth::user()->is_admin == true)
                        <!---Sidebar non-profile--->
                        <ul class="nav flex-column">
                            <li>
                                <a href="/admin"><i class="fa fa-home"></i> Halaman Utama</a>
                            </li>
                            <div class="main_utama">
                                <strong>Menu Utama</strong>
                            </div>
                            <!---Sidebar : Data Pengguna --->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Data Pengguna</div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('index_user_admin') }}"><i
                                                class="fa fa-user-circle-o"></i> Admin</a></li>
                                </ul>
                            </div>
                            <!---Sidebar : Data Master--->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Data Master</div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('index_siswa') }}"><i
                                                class="fa fa-user"></i> Siswa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('index_tenaga_pengajar') }}"><i
                                                class="fa fa-user"></i> Tenaga Pengajar</a></li>
                                </ul>
                            </div>
                            <!---Sidebar : Data Umum--->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Data Umum</div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('index_tahun_pelajaran') }}"><i
                                                class="fa fa-book"></i> Tahun Pelajaran</a></li>
                                    <li><a class="dropdown-item" href="{{ route('index_kelas') }}"><i
                                                class="fa fa-book"></i> Kelas</a></li>
                                    <li><a class="dropdown-item" href="{{ route('index_mata_pelajaran') }}"><i
                                                class="fa fa-book"></i> Mata Pelajaran</a></li>
                                </ul>
                            </div>
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Jadwal Mengajar</div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('tambah_jadwal_mengajar_guru') }}"><i
                                                class="fa fa-plus-circle"></i> Tambah Jadwal</a></li>
                                    <li><a class="dropdown-item" href="{{ route('index_jadwal_mengajar_guru') }}"><i
                                                class="fa fa-calendar-plus-o"></i> Daftar Mengajar</a></li>
                                </ul>
                            </div>
                            <div class="main_utama">
                                <b class="main_utama_n">Menu Profil Instansi</b>
                            </div>
                            <!---Sidebar : Halaman Utama--->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" href="#submenu1" data-bs-toggle="dropdown"
                                    role="button" aria-expanded="false">Halaman Awal</div>
                                <ul class="dropdown-menu dropdown" id="submenu1">
                                    <li><a class="dropdown-item" href="{{ route('index_halaman_utama') }}">Utama</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('index_sejarah') }}">Sejarah</a></li>
                                    <li><a class="dropdown-item" href="{{ route('index_aktivitas') }}">Aktivitas</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('index_visi_misi') }}">Visi -
                                            Misi</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('index_susunan_organisasi') }}">Susunan Organisasi</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('index_informasi_akademik') }}">Informasi Akademik</a></li>
                                </ul>
                            </div>
                            <!---Sidebar : Tentang Kami--->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Halaman Kedua</div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('index_utama_ppdb') }}">Utama
                                            PPDB</a></li>
                                    <li><a class="dropdown-item" href="{{ route('index_ip_ppdb') }}">Informasi
                                            Pengumuman</a>
                                    </li>
                                </ul>
                            </div>

                            <!---Menu Absen--->
                            <div class="main_utama">
                                <strong>Menu Absensi</strong>
                            </div>
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Siswa</div>
                                <ul class="dropdown-menu collapse">
                                    <li><a class="dropdown-item" href="{{ route('index_absen_siswa') }}"><i
                                                class="fa fa-user-plus"></i> Absensi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('rekap_absen_siswa') }}"><i
                                                class="fa fa-calendar-check-o"></i> Rekab Absensi</a></li>

                                </ul>
                            </div>
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Tenaga Pengajar</div>
                                <ul class="dropdown-menu collapse">
                                    <li><a class="dropdown-item"
                                            href="{{ route('index_absensi_tenaga_pengajar') }}"><i
                                                class="fa fa-user-plus"></i>
                                            Absensi</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('index_rekap_absensi_tenaga_pengajar') }}"><i
                                                class="fa fa-calendar-check-o"></i> Rekab Absensi</a></li>

                                </ul>
                            </div>

                        </ul>
                    @else
                        <!---Sidebar non-profile--->
                        <ul class="nav flex-column">
                            <li>
                                <a href="/admin"><i class="fa fa-home"></i> Halaman Utama</a>
                            </li>
                            <div class="main_utama">
                                <strong>Menu Utama</strong>
                            </div>
                            <!---Sidebar : Data Pengguna --->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Data Pengguna</div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('index_user_admin') }}"><i
                                                class="fa fa-user-circle-o"></i> Admin</a></li>
                                </ul>
                            </div>
                            <!---Sidebar : Data Master--->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Data Master</div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('index_siswa') }}"><i
                                                class="fa fa-user"></i> Siswa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('index_tenaga_pengajar') }}"><i
                                                class="fa fa-user"></i> Tenaga Pengajar</a></li>
                                </ul>
                            </div>
                            <!---Sidebar : Data Umum--->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Data Umum</div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('index_tahun_pelajaran') }}"><i
                                                class="fa fa-book"></i> Tahun Pelajaran</a></li>
                                    <li><a class="dropdown-item" href="{{ route('index_kelas') }}"><i
                                                class="fa fa-book"></i> Kelas</a></li>
                                    <li><a class="dropdown-item" href="{{ route('index_mata_pelajaran') }}"><i
                                                class="fa fa-book"></i> Mata Pelajaran</a></li>
                                </ul>
                            </div>
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Jadwal Mengajar</div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('tambah_jadwal_mengajar_guru') }}"><i
                                                class="fa fa-plus-circle"></i> Tambah Jadwal</a></li>
                                    <li><a class="dropdown-item" href="{{ route('index_jadwal_mengajar_guru') }}"><i
                                                class="fa fa-calendar-plus-o"></i> Daftar Mengajar</a></li>
                                </ul>
                            </div>
                            <div class="main_utama">
                                <b class="main_utama_n">Menu Profil Instansi</b>
                            </div>
                            <!---Sidebar : Halaman Utama--->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" href="#submenu1" data-bs-toggle="dropdown"
                                    role="button" aria-expanded="false">Halaman Awal</div>
                                <ul class="dropdown-menu dropdown" id="submenu1">
                                    <li><a class="dropdown-item" href="{{ route('index_halaman_utama') }}">Utama</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('index_sejarah') }}">Sejarah</a></li>
                                    <li><a class="dropdown-item" href="{{ route('index_aktivitas') }}">Aktivitas</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('index_visi_misi') }}">Visi -
                                            Misi</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('index_susunan_organisasi') }}">Susunan Organisasi</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('index_informasi_akademik') }}">Informasi Akademik</a></li>
                                </ul>
                            </div>
                            <!---Sidebar : Tentang Kami--->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Halaman Kedua</div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('index_utama_ppdb') }}">Utama
                                            PPDB</a></li>
                                    <li><a class="dropdown-item" href="{{ route('index_ip_ppdb') }}">Informasi
                                            Pengumuman</a>
                                    </li>
                                </ul>
                            </div>

                            <!---Menu Absen--->
                            <div class="main_utama">
                                <strong>Menu Absensi</strong>
                            </div>
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Siswa</div>
                                <ul class="dropdown-menu collapse">
                                    <li><a class="dropdown-item" href="{{ route('index_absen_siswa') }}"><i
                                                class="fa fa-user-plus"></i> Absensi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('rekap_absen_siswa') }}"><i
                                                class="fa fa-calendar-check-o"></i> Rekab Absensi</a></li>

                                </ul>
                            </div>
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                    aria-expanded="false">Tenaga Pengajar</div>
                                <ul class="dropdown-menu collapse">
                                    <li><a class="dropdown-item"
                                            href="{{ route('index_absensi_tenaga_pengajar') }}"><i
                                                class="fa fa-user-plus"></i>
                                            Absensi</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('index_rekap_absensi_tenaga_pengajar') }}"><i
                                                class="fa fa-calendar-check-o"></i> Rekab Absensi</a></li>

                                </ul>
                            </div>

                        </ul>
                    @endif
                </div>
                <!---Content--->
                <div class=" col-lg-10 main-content">
                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
