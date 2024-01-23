@extends('layouts.admin_layouts.app_admin')

@section('title', 'Halaman Utama')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                
        <div class="container-fluid">
            <h2><i><strong>Halaman Utama Profil Instansi</strong></i></h2><hr>
            <!-----Breadcrumbs--->
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('index_halaman_utama')}}">Halaman Utama Profil Instansi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Halaman Utama Profil Instansi</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="d-flex justify-content-start mb-2">
                <div>
                    <a class="btn btn-outline-warning" href="{{route('index_halaman_utama')}}"> Kembali</a>
                </div>
            </div>
            <div class="table-responsive">
            <div class="card card-borderhu border-2 rounded-3">
                    <div class="card-header text-light text-center"><i><h3>{{ __('Detail Data Halaman Utama') }}</h3></i></div>
                    
                    <div class="card-body text-center">
                            <p><strong>Nama Yayasan</strong> : {{$halaman_utama->nama_yayasan}}</p>
                            <p><strong>Nama Isntansi</strong> : {{$halaman_utama->nama_instansi}}</p>
                            <p><strong>Penjelasan</strong> : {{$halaman_utama->penjelasan}}</p>
                            <p><strong>Deskripsi Gambar 1 </strong>: {{$halaman_utama->deskripsi_gambar1}}</p>
                            <p><strong>Deskripsi Gambar 2</strong> : {{$halaman_utama->deskripsi_gambar2}}</p>
                            <p><strong>Deskripsi Gambar 3</strong> : {{$halaman_utama->deskripsi_gambar3}}</p>
                            <img src="{{url('storage/Halaman_Utama1/'. $halaman_utama->gambar_pertama) }}" class="rounded  mb-1" alt="" width="200px" height="200px">
                            <img src="{{url('storage/Halaman_Utama2/'. $halaman_utama->gambar_kedua) }}" class="rounded mb-1" alt="" width="200px" height="200px">
                            <img src="{{url('storage/Halaman_Utama3/'. $halaman_utama->gambar_ketiga) }}" class="rounded" alt="" width="200px" height="200px">
                        
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
@endsection