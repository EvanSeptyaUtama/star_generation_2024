@extends('layouts.admin_layouts.app_admin')

@section('title', 'Halaman Aktivitas')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <h2><i><strong>Halaman Aktivitas Profil Instansi</strong></i></h2>
                    <hr>

                    <!-----Breadcrumbs--->
                    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('index_aktivitas') }}">Halaman Aktivitas
                                            Profil Instansi</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail Halaman Aktivitas Profil
                                        Instansi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="{{ route('index_aktivitas') }}"> Kembali</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div class="card card-borderhu border-2 rounded-3">
                            <div class="card-header  text-light text-center"><i>
                                    <h3>{{ __('Detail Data Halaman Aktivitas') }}</h3>
                                </i></div>

                            <div class="card-body text-center">
                                <p><strong>Aktivitas</strong> : {{ $data_aktivitas->nama_aktivitas }}</p>
                                <p><strong>Penjelasan</strong> : {{ $data_aktivitas->penjelasan_aktivitas }}</p>
                                <p><strong>Gambar</strong></p>
                                <img src="{{ url('storage/Kegiatan_Sekolah/' . $data_aktivitas->gambar_aktivitas) }}"
                                    class="rounded  mb-1" alt="" width="200px" height="200px">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
