@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Sejarah')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <h2><i><strong>Halaman Sejarah Profil Instansi</strong></i></h2>
                    <hr>
                    <!-----Breadcrumbs--->
                    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('index_sejarah') }}">Halaman Sejarah
                                            Profil Instansi</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail Halaman Sejarah Profil
                                        Instansi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="{{ route('index_sejarah') }}"> Kembali</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div class="card card-borderhu border-2 rounded-3">
                            <div class="card-header text-light text-center"><i>
                                    <h3>{{ __('Detail Data Halaman Sejarah') }}</h3>
                                </i></div>

                            <div class="card-body text-center">
                                <p><strong>Judul </strong>: {{ $data_sejarah->judul_sejarah }}</p>
                                <p><strong>Penjelasan Singkat</strong> : {{ $data_sejarah->penjelasan_singkat }}</p>
                                <p align="justify"><strong>Penjelasan Lengkap</strong> :
                                    {{ $data_sejarah->penjelasan_lengkap }}</p>
                                <p><strong>Gambar</strong></p>
                                <img src="{{ url('storage/Sejarah/' . $data_sejarah->gambar_sejarah) }}"
                                    class="rounded  mb-1" alt="" width="200px" height="200px">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
