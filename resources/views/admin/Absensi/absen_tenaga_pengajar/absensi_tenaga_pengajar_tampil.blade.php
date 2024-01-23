@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Absen Tenaga Pengajar')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2><i><strong>Absensi Tenaga Pengajar</strong></i></h2>
                        <hr>
                        <!-----Breadcrumbs--->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('index_absensi_tenaga_pengajar') }}">Absensi
                                        Tenaga Pengajar</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Absensi Tenaga Pengajar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="d-flex justify-content-start mb-2">
                    <div>
                        <a class="btn btn-outline-warning" href="{{ route('index_absensi_tenaga_pengajar') }}"> Kembali</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <div class="card card-borderhu border-2 rounded-3">
                                <div class="card-header text-light text-center"><i>
                                        <h3>{{ __('Detail Data Absensi Tenaga Pengajar') }}</h3>
                                    </i></div>

                                <div class="card-body ">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col">
                                                    <div class=""><span class="text-secondary">Tanggal</span>
                                                        <h4><strong>{{ $data_absen_tenaga_pengajar->tanggal }}</strong>
                                                        </h4>
                                                    </div>
                                                    <div class=""><span class="text-secondary">Waktu Mulai</span>
                                                        <h4><strong>{{ $data_absen_tenaga_pengajar->waktu_mulai }}</strong>
                                                        </h4>
                                                    </div>
                                                    <div class=""><span class="text-secondary">Waktu Selesai</span>
                                                        <h4><strong>{{ $data_absen_tenaga_pengajar->waktu_selesai }}</strong>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class=""><span class="text-secondary">Tenaga Pengajar</span>
                                                        <h4><strong>{{ $data_absen_tenaga_pengajar->tenaga_pengajar->nama }}</strong>
                                                        </h4>
                                                    </div>
                                                    <div class=""><span class="text-secondary">Keterangan</span>
                                                        <h4><strong>{{ $data_absen_tenaga_pengajar->keterangan }}</strong>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
