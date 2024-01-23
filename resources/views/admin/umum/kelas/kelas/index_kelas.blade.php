@extends('layouts.admin_layouts.app_admin')

@section('title', 'Data Admin')

@section('content')

    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row mt-2">
                                <div class="col">
                                    <!-----Breadcrumbs--->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a
                                                    href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><a
                                                    href="{{ route('index_kelas') }}">Kelas</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                Kelas{{ $data_kelas->nama_kelas }}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <!---Kembali--->
                            <div class="d-flex justify-content-start mb-2">
                                <div>
                                    <a class="btn btn-outline-warning" href="{{ route('index_kelas') }}">Kembali</a>
                                </div>
                            </div>
                            <div class="card card-borderhu border-2 rounded-3">
                                <div class="card-header  text-white">
                                    <h3 style="font-family: Times New Roman;"><strong>Kelas
                                            {{ $data_kelas->nama_kelas }}</strong></h3>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-2" style="font-family: Times New Roman;">
                                                <h5><strong>Wali Kelas</strong></h5>
                                            </div>
                                            <div class="col-md-10 mt-1">:
                                                <strong>{{ $data_kelas->tenaga_pengajars ? $data_kelas->tenaga_pengajars->nama : 'Belum mempunyai wali kelas' }}
                                                </strong>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-5" style="font-family: Times New Roman;">
                                                <h3><strong>Siswa</strong></h3>
                                            </div>
                                            <div class="col-md-10" style="text-align: justify;">
                                                <ol type="1">
                                                    @forelse ($data_kelas->siswas as $siswa)
                                                        <li>{{ $siswa->nama_siswa }}</li>
                                                    @empty
                                                        <p>Belum ada data siswa!!</p>
                                                    @endforelse
                                                </ol>
                                                <br>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
