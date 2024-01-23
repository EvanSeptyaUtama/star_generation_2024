@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Informasi Akademik')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
        <div class="card-body">
            
        <div class="container-fluid">
            <h2><i><strong>Halaman Informasi Akademik Profil Instansi</strong></i></h2><hr>
            <!-----Breadcrumbs--->
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('index_informasi_akademik')}}">Halaman Informasi Akademik Profil Instansi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Halaman Informasi Akademik Profil Instansi</li>
                    </ol>
                    </nav>
                </div>
            </div>
            <div class="d-flex justify-content-start mb-2">
                <div>
                    <a class="btn btn-outline-warning" href="{{route('index_informasi_akademik')}}"> Kembali</a>
                </div>
            </div>
            <div class="table-responsive">
            <div class="card card-borderhu border-2 rounded-3">
                <div class="card-header text-light text-center"><i><h3>{{ __('Detail Data Halaman Informasi Akademik') }}</h3></i></div>
                    
                    <div class="card-body text-center">
                            <p><strong>Hari</strong> : {{$data_informasi_akademik->hari_informasi_akademik}}</p>
                            <p><strong>Tanggal</strong> : {{$data_informasi_akademik->tanggal_informasi_akademik}}</p>
                            <p><strong>Informasi</strong> : {{$data_informasi_akademik->informasi_informasi_akademik}}</p>
                            <p><strong>Keterangan</strong> : {{$data_informasi_akademik->keterangan_informasi_akademik}}</p>
                            <img src="{{url('storage/Informasi_Akademik/'. $data_informasi_akademik->gambar_informasi_akademik) }}" class="rounded  mb-1" alt="" width="200px" height="200px">
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>
        
    </div>
@endsection