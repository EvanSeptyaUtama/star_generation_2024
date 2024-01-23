@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Informasi Pengumuman')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <h2><i><strong>Informasi Pengumuman PPDB</strong></i></h2>
                    <hr>
                    <!-----Breadcrumbs--->
                    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('index_ip_ppdb') }}">Informasi
                                            Pengumuman PPDB</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Informasi Pengumuman PPDB
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="{{ route('index_ip_ppdb') }}"> Kembali</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div class="card card-borderhu border-2 rounded-3">
                            <div class="card-header  text-light text-center">
                                <h3><i>{{ __('Detail Data Informasi Pengumuman PPDB') }}</i></h3>
                            </div>

                            <div class="card-body text-center">
                                <p><strong>Jalur</strong> : {{ $data_ip_ppdb->judul_informasi_pengumuman }}</p>
                                <p><strong>Gambar</strong></p>
                                <img src="{{ url('storage/PPDB/' . $data_ip_ppdb->gambar_informasi_pengumuman) }}"
                                    class="rounded  mb-1" alt="" width="200px" height="200px">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
