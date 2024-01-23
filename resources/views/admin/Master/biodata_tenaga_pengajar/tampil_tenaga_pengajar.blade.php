@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Tenaga Pengajar')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <h2><i><strong>Biodata Tenaga Pengajar</strong></i></h2>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('index_tenaga_pengajar') }}">Biodata
                                            Tenaga Pengajar</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Lihat</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="{{ route('index_tenaga_pengajar') }}">Kembali</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div class="card card-borderhu border-2 rounded-3">
                            <div class="card-header  text-light text-center">
                                <h3><i>{{ __('Detail Biodata Tenaga Pengajar') }}</i></h3>
                            </div>

                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4 text-center">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('storage/Tenaga_Pengajar/' . $data_tenaga_pengajar->foto) }}"
                                                class="rounded mb-2 w-full h-full" alt="" height="200px">

                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-md-4 text-secondary">Nama</div>
                                            <div class="col-md-8">
                                                <h5>{{ $data_tenaga_pengajar->nama }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-4 text-secondary">Alamat</div>
                                            <div class="col-md-8">
                                                <h5>{{ $data_tenaga_pengajar->alamat }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-4 text-secondary">Nomor Telepon</div>
                                            <div class="col-md-8">
                                                <h5>{{ $data_tenaga_pengajar->no_telp }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-4 text-secondary">Agama</div>
                                            <div class="col-md-8">
                                                <h5>{{ $data_tenaga_pengajar->agama ? $data_tenaga_pengajar->agama : '-' }}
                                                </h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-4 text-secondary">Jenis Kelamin</div>
                                            <div class="col-md-8">
                                                <h5>{{ $data_tenaga_pengajar->jenis_kelamin }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 pt-2 text-center">
                                        <div class="row">
                                            <div class="col-md-4 text-secondary">Wali Kelas</div>
                                            <div class="col-md-8">
                                                <h5>{{ $data_tenaga_pengajar->kelas ? $data_tenaga_pengajar->kelas->nama_kelas : 'Tidak Sebagai Wali Kelas' }}

                                                </h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Nomor Induk Pegawai</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_tenaga_pengajar->nip ? $data_tenaga_pengajar->nip : '-' }}
                                                </h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Jabatan</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_tenaga_pengajar->jabatan }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Tempat Lahir</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_tenaga_pengajar->tempat_lahir }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Tanggal Lahir</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_tenaga_pengajar->ttl }}</h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Suku</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_tenaga_pengajar->suku ? $data_tenaga_pengajar->suku : '-' }}
                                                </h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">RT/RW</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_tenaga_pengajar->rt_rw ? $data_tenaga_pengajar->rt_rw : '-' }}
                                                </h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Desa/Kelurahan</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_tenaga_pengajar->desa_kelurahan ? $data_tenaga_pengajar->desa_kelurahan : '-' }}
                                                </h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Kecamatan/Kota</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_tenaga_pengajar->kecamatan ? $data_tenaga_pengajar->kecamatan : '-' }}
                                                </h5>
                                            </div>
                                            <hr>
                                            <div class="col-md-5 text-secondary">Kode Pos</div>
                                            <div class="col-md-7">
                                                <h5>{{ $data_tenaga_pengajar->kode_pos ? $data_tenaga_pengajar->kode_pos : '-' }}
                                                </h5>
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
