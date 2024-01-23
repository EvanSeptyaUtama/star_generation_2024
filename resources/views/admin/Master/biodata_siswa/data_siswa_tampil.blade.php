@extends('layouts.admin_layouts.app_admin')

@section('title', 'Halaman Utama')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <h2><strong><i>Biodata Siswa</i></strong></h2>
                    <hr>
                    <!-----Breadcrumbs--->
                    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('index_siswa') }}">Biodata Siswa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Lihat</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!---Kembali--->
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="{{ route('index_siswa') }}">Kembali</a>
                        </div>
                    </div>
                    <!---Table--->
                    <div class="table-responsive">
                        <div class="card card-borderhu border-2 rounded-3">
                            <div class="card-header text-light text-center">
                                <h3><i>{{ __('Detail Biodata Siswa') }}</i></h3>
                            </div>

                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4 text-center">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ url('storage/Siswa/' . $data_siswa->foto_siswa) }}"
                                                class="rounded mb-2 w-full h-full" alt="" height="200px">
                                        </div>

                                        <div class="row mt-1">
                                            <div class="col-md-4 text-secondary">Nama</div>
                                            <div class="col-md-8">
                                                <h5>{{ $data_siswa->nama_siswa }}</h5>
                                            </div>

                                            <hr>
                                            <div class="col-md-4 text-secondary">Alamat</div>
                                            <div class="col-md-8">
                                                <h5>{{ $data_siswa->alamat_siswa }}</h5>
                                            </div>

                                            <hr>
                                            <div class="col-md-4 text-secondary">Jenis Kelamin</div>
                                            <div class="col-md-8">
                                                <h5>{{ $data_siswa->jenis_kelamin }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-4 text-secondary">Tempat Lahir</div>
                                            <div class="col-md-8">
                                                <h5>{{ $data_siswa->tempat_lahir }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-4 text-secondary">Tanggal Lahir</div>
                                            <div class="col-md-8">
                                                <h5>{{ $data_siswa->ttl }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-4 text-secondary">Agama</div>
                                            <div class="col-md-8">
                                                <h5>{{ $data_siswa->agama }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-4 text-secondary">Kelas</div>
                                            <div class="col-md-8">
                                                <h5>{{ $data_siswa->kelas->nama_kelas }}</h5>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-8 pt-2 text-center">
                                        <div class="row">
                                            <div class="col-md-5 text-secondary">Nomor Induk Siswa Nasional</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_siswa->nisn }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Tinggal Bersama</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_siswa->tinggal_bersama }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">RT/RW</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_siswa->rt_rw }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Desa/Kelurahan</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_siswa->desa_kelurahan }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Kecamatan</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_siswa->kecamatan }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Kode Pos</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_siswa->kode_pos }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Nomor Telepon</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_siswa->no_telp }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Anak ke-</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_siswa->anak_ke ? $data_siswa->anak_ke : '-' }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Suku</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_siswa->suku ? $data_siswa->suku : '-' }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Jumlah Saudara</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_siswa->jumlah_saudara ? $data_siswa->jumlah_saudara : '-' }}
                                                </h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Cita - Cita</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_siswa->cita_cita }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Hobi</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_siswa->hobi }}</h5>
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
