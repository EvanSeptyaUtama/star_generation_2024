@extends('layouts.admin_layouts.app_admin')

@section('title', 'Halaman Utama')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <h2><i><strong>Halaman Utama Profil Instansi</strong></i></h2>
                    <hr>
                    <!-----Breadcrumbs--->
                    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('index_halaman_utama') }}">Halaman Utama
                                            Profil Instansi</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Halaman Utama Profil
                                        Instansi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--Button Kembali--->
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="{{ route('index_halaman_utama') }}"> Kembali</a>
                        </div>
                    </div>
                    <!---Alert-->
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <div class="alert-title">
                                        <h4> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor"
                                                class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"
                                                viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                <path
                                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg> Maaf!</h4>
                                    </div>
                                    Terdapat kesalahan dalam mengedit data Halaman Utama
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div class="card card-borderhu border-2 rounded-3">
                            <div class="card-header text-light text-center"><i>
                                    <h3>{{ __('Edit Data Halaman Utama') }}</h3>
                                </i></div>

                            <div class="card-body">
                                <form action="{{ route('update_halaman_utama', $halaman_utama) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Yayasan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_yayasan"class="form-control"
                                                value="{{ $halaman_utama->nama_yayasan }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Instansi</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_instansi"class="form-control"
                                                value="{{ $halaman_utama->nama_instansi }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Penjelasan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="penjelasan"class="form-control"
                                                value="{{ $halaman_utama->penjelasan }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Gambar 1 <br> (<i>wajib diisi
                                                ulang</i>)</label>
                                        <div class="col-sm-10">
                                            <img src="{{ url('storage/Halaman_Utama1/' . $halaman_utama->gambar_pertama) }}"
                                                class="rounded mb-2" alt="" height="200px">
                                            <input type="file" name="gambar_pertama"class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Deskripsi Gambar 1</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="deskripsi_gambar1"class="form-control"
                                                value="{{ $halaman_utama->deskripsi_gambar1 }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Gambar 2 <br> (<i>wajib diisi
                                                ulang</i>)</label>
                                        <div class="col-sm-10">
                                            <img src="{{ url('storage/Halaman_Utama2/' . $halaman_utama->gambar_kedua) }}"
                                                class="rounded mb-2" alt="" height="200px">
                                            <input type="file" name="gambar_kedua"class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Deskripsi Gambar 2</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="deskripsi_gambar2"class="form-control"
                                                value="{{ $halaman_utama->deskripsi_gambar2 }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Gambar 3 <br> (<i>wajib diisi
                                                ulang</i>)</label>
                                        <div class="col-sm-10">
                                            <img src="{{ url('storage/Halaman_Utama3/' . $halaman_utama->gambar_ketiga) }}"
                                                class="rounded mb-2" alt="" height="200px">
                                            <input type="file" name="gambar_ketiga"class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Deskripsi Gambar 3</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="deskripsi_gambar3"class="form-control"
                                                value="{{ $halaman_utama->deskripsi_gambar3 }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
