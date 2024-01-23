@extends('layouts.admin_layouts.app_admin')

@section('title', 'Administrasi')

@section('content')
    <div class="container-fluid  d-grid gap-2 ">
        <div class="p-lg-2">
            @if (Auth::user()->is_admin == true || Auth::user()->is_admin == false)
                <div class="flex flex-column">
                    <div class="container-role-admin"><strong>Hallo, {{ Auth::user()->name }}.</strong></div>

                    <h2>Selamat datang di halaman Administrasi, <STRONG>STAR GENERATION</STRONG>.</h2>
                </div>
            @endif
        </div>
        <div class="card card-borderhu border-3 rounded-4 p-2">
            <div class="row align-items-center">
                <div class="col-md-4 text-center mb-2">
                    <img src="{{ asset('/pi_assets/img/logo_stargen.png') }}" class="img-fluid_1 rounded  " alt="...">
                </div>
                <div class="col-md-8">
                    <div>
                        <h1><strong>STAR GENERATION | Yayasan Duta Serega</strong></h1>
                    </div>
                    <div>
                        <h3><strong>JL. Apt Pranoto, RT.35, No.99A, Sangatta Utara, Kecamatan Sangatta Utara, Kabupaten
                                Kutai Timur, Provinsi Kalimantan Timur</strong></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-lg-2">
            <div class="card-body ">
                <div class="row text-white d-flex gap-4 justify-content-center p-2">
                    <!---Card 1--->
                    <div class="card bg-warna1 col-5 ml-3" style="width: 24rem;">
                        <div class="card-body">
                            <div class="car-body-icon">
                                <i class="fa fa-user mr-5"></i>
                            </div>
                            <h5 class="card-title text-center text-light"
                                style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 30px">
                                <strong>Data Tenaga Pengajar</strong>
                            </h5>
                            <div class="display-6 text-light"><i>Jumlah {{ $hitung_tenaga_pengajar }}</i></div>
                            <a class="link-box-ha" href="{{ route('index_tenaga_pengajar') }}" class="btn btn-primary">
                                <p class="card-text-ha">Lihat Detail <i class="fa fa-angle-double-right ml-2"></i></p>
                            </a>
                        </div>
                    </div>
                    <!---Card 2--->
                    <div class="card bg-warna2 col-5 ml-3" style="width: 24rem;">
                        <div class="card-body">
                            <div class="car-body-icon">
                                <i class="fa fa-user mr-5"></i>
                            </div>
                            <h5 class="card-title text-center text-light"
                                style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 30px">
                                <strong>Data Siswa</strong>
                            </h5>
                            <div class="display-6  text-light"><i>Jumlah {{ $hitung_siswa }}</i></div>
                            <a class="link-box-ha" href="{{ route('index_siswa') }}" class="btn btn-primary">
                                <p class="card-text-ha">Lihat Detail <i class="fa fa-angle-double-right ml-2"></i></p>
                            </a>
                        </div>
                    </div>
                    <!---Card Facebook--->
                    <div class="card bg-warna-jadwal_mengajar col-5 ml-3" style="width: 24rem;">
                        <div class="card-body">
                            <div class="car-body-icon">
                                <i class="fa fa-calendar-plus-o"></i>
                            </div>
                            <h5 class="card-title text-center text-light"><strong>Jadwal Mengajar</strong></h5>
                            <div class="display-6 text-light"><i>Jumlah {{ $hitung_jadwal_mengajar }}</i></div>
                            <a class="link-box-ha" href="{{ route('index_jadwal_mengajar_guru') }}" class="btn btn-primary">
                                <p class="card-text-ha">Lihat Detail <i class="fa fa-angle-double-right ml-2"></i></p>
                            </a>
                        </div>
                    </div>
                    <!---Card Instagram--->
                    <!-- <div class="card bg-warna-instagram col-5 ml-3" style="width: 24rem;">
                                                <div class="card-body">
                                                    <div class="car-body-icon">
                                                        <i class="fa fa-instagram"></i>
                                                    </div>
                                                    <h5 class="card-title text-center text-light"><strong>Instagram</strong></h5>
                                                    <div class="display-4 text-light">STARGEN</div>
                                                    <a class="link-box-ha" href="" class="btn btn-primary">
                                                        <p class="card-text-ha">Follow & Like <i class="fa fa-angle-double-right ml-2"></i></p>
                                                    </a>
                                                </div>
                                            </div> -->
                    <!---Card Youtube--->
                    <!-- <div class="card bg-warna-youtube col-5 ml-3" style="width: 24rem;">
                                                <div class="card-body">
                                                    <div class="car-body-icon">
                                                        <i class="fa fa-youtube-play"></i>
                                                    </div>
                                                    <h5 class="card-title text-center text-light"><strong>Youtube</strong></h5>
                                                    <div class="display-5 text-light">STARGEN</div>
                                                    <a class="link-box-ha" href="" class="btn btn-primary">
                                                        <p class="card-text-ha">Subscribe, Like, Comment <i class="fa fa-angle-double-right ml-2"></i></p>
                                                    </a>
                                                </div>
                                            </div> -->
                </div>
            </div>
        </div>
    </div>
@endsection
