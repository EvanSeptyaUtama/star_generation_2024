@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Susunan Organisasi')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
       <h2><i><strong>Halaman Susunan Organisasi Profil Instansi</strong></i></h2><hr>
                    <!-----Breadcrumbs--->
            	    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('index_susunan_organisasi')}}">Halaman Susunan Organisasi Profil Instansi</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tampil Halaman Susunan Organisasi Profil Instansi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
            <div class="d-flex justify-content-start mb-2">
                <div>
                    <a class="btn btn-outline-warning" href="{{route('index_susunan_organisasi')}}"> Kembali</a>
                </div>
            </div>
            <div class="table-responsive">
            <div class="card card-borderhu border-2 rounded-3">
                <div class="card-header  text-light text-center"><i><h3>{{ __('Tampil Data Halaman Susunan Organisasi') }}</h3></i></div>
                    <div class="card-body text-center">
                            <p><strong>Nama</strong> : {{$data_susunan_organisasi->nama}}</p>
                            <p><strong>Jabatan</strong> : {{$data_susunan_organisasi->jabatan}}</p>
                            <p><strong>Foto</strong></p> 
                            <img src="{{url('storage/Susunan_Organisasi/'. $data_susunan_organisasi->gambar) }}" class="rounded  mb-1" alt="" width="200px" height="200px">
                        
                    </div>
                </div>
            </div>
       </div>
   </div>
        </div>
        </div>
@endsection