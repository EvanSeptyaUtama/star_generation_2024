@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Absensi Siswa')
@section('content')
    <div class="m-2">
    <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
            <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 align-self-center">
                    <h2><i><strong>Absensi Siswa</strong></i></h2><hr>
                    <div class="row">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('index_absen_siswa')}}">Absensi Siswa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Absensi Siswa</li>
                                </ol>
                            </nav>
                        </div>
                      </div>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="{{route('index_absen_siswa')}}">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row justify-content-center">
                <div class="col-lg-12 align-self-center">
                    <div class="table-responsive">
                    <div class="card card-borderhu border-2 rounded-3">
                            <div class="card-header  text-light text-center"><i><h3>{{ __('Edit Data Absensi Siswa') }}</h3></i></div>   
                        
                            <div class="card-body">
                                <form action="{{ route('update_absen_siswa', $data_absen_siswa) }}" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf 
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggal_absen" value="{{$data_absen_siswa->tanggal_absen}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Waktu Mulai</label>
                                        <div class="col-sm-10">
                                            <input type="time" name="waktu_mulai" value="{{$data_absen_siswa->waktu_mulai}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Waktu Selesai</label>
                                        <div class="col-sm-10">
                                            <input type="time" name="waktu_selesai" value="{{$data_absen_siswa->waktu_selesai}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Keterangan</label>
                                        <div class="col-sm-10">
                                            <select name="keterangan" class="form-control">
                                                <option value="Hadir" {{($data_absen_siswa->keterangan === 'Hadir') ? 'Selected' : ''}}>Hadir</option>
                                                <option value="Izin" {{($data_absen_siswa->keterangan === 'Izin') ? 'Selected' : ''}}>Izin</option>
                                                <option value="Sakit" {{($data_absen_siswa->keterangan === 'Sakit') ? 'Selected' : ''}}>Sakit</option>
                                                <option value="Alfa" {{($data_absen_siswa->keterangan === 'Alfa') ? 'Selected' : ''}}>Alfa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--Foreign key : Table Siswa--->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Siswa</label>
                                        <div class="col-sm-10">
                                            <select name="siswa_id" class="form-control" class="form-control" >
                                                @foreach ($edit_siswa as $item)
                                                    <option value="{{$item->id}}" {{$data_absen_siswa->siswa_id == $item->id ? 'selected':'' }}>{{$item->nama_siswa}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!---Foreign key : Table Kelas--->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Kelas</label>
                                        <div class="col-sm-10">
                                            <select name="kelas_id" class="form-control" >
                                                @foreach ($edit_kelas as $item)
                                                    <option value="{{$item->id}}" {{$data_absen_siswa->kelas_id == $item->id ? 'selected':'' }} >{{$item->nama_kelas}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--Foreign key : Table Semester--->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Semester</label>
                                        <div class="col-sm-10">
                                            <select name="tahun_pelajaran_id" class="form-control" >
                                                @foreach ($edit_tahun_pelajaran as $item)
                                                    <option value="{{$item->id}}" {{$data_absen_siswa->tahun_pelajaran_id == $item->id ? 'selected':'' }}>{{$item->semester}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--Foreign key : Table Tahun Ajaran--->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Tahun Ajaran</label>
                                        <div class="col-sm-10">
                                            <select name="tahun_pelajaran_id" class="form-control" >
                                                @foreach ($edit_tahun_pelajaran as $item)
                                                    <option value="{{$item->id}}" {{$data_absen_siswa->tahun_pelajaran_id == $item->id ? 'selected':'' }}>{{$item->tahun_ajaran}}</option>
                                                @endforeach
                                            </select>
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
        </div>
    </div>
@endsection