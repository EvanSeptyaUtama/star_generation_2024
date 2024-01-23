@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Absensi Tenaga Pengajar')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 align-self-center">
                            <h2><i><strong>Absensi Tenaga Pengajar</strong></i></h2>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <!-----Breadcrumbs--->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a
                                                    href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                            <li class="breadcrumb-item"><a
                                                    href="{{ route('index_absensi_tenaga_pengajar') }}">Absensi
                                                    Tenaga Pengajar</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Edit Absensi Tenaga
                                                Pengajar
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-2">
                                <div>
                                    <a class="btn btn-outline-warning"
                                        href="{{ route('index_absensi_tenaga_pengajar') }}">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-12 align-self-center">
                            <div class="table-responsive">
                                <div class="card card-borderhu border-2 rounded-3">
                                    <div class="card-header text-light text-center"><i>
                                            <h3>{{ __('Edit Data Absensi Tenaga Pengajar') }}</h3>
                                        </i></div>

                                    <div class="card-body">
                                        <form
                                            action="{{ route('update_absensi_tenaga_pengajar', $data_absen_tenaga_pengajar) }}"
                                            method="post" enctype="multipart/form-data">
                                            @method('patch')
                                            @csrf
                                            <div class="row mb-2">
                                                <label class="col-sm-2 col-label-form">Tanggal</label>
                                                <div class="col-sm-10">
                                                    <input type="date" name="tanggal"
                                                        value="{{ $data_absen_tenaga_pengajar->tanggal }}"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-2 col-label-form">Waktu Mulai</label>
                                                <div class="col-sm-10">
                                                    <input type="time" name="waktu_mulai"
                                                        value="{{ $data_absen_tenaga_pengajar->waktu_mulai }}"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-2 col-label-form">Waktu Selesai</label>
                                                <div class="col-sm-10">
                                                    <input type="time" name="waktu_selesai"
                                                        value="{{ $data_absen_tenaga_pengajar->waktu_selesai }}"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-2 col-label-form">Keterangan</label>
                                                <div class="col-sm-10">
                                                    <select name="keterangan" class="form-control">
                                                        <option value="Hadir"
                                                            {{ $data_absen_tenaga_pengajar->keterangan === 'Hadir' ? 'Selected' : '' }}>
                                                            Hadir</option>
                                                        <option value="Izin"
                                                            {{ $data_absen_tenaga_pengajar->keterangan === 'Izin' ? 'Selected' : '' }}>
                                                            Izin</option>
                                                        <option value="Sakit"
                                                            {{ $data_absen_tenaga_pengajar->keterangan === 'Sakit' ? 'Selected' : '' }}>
                                                            Sakit</option>
                                                        <option value="Alfa"
                                                            {{ $data_absen_tenaga_pengajar->keterangan === 'Alfa' ? 'Selected' : '' }}>
                                                            Alfa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--Foreign key : Table Tenaga Pengajar--->
                                            <div class="row mb-2">
                                                <label class="col-sm-2 col-label-form">Tenaga Pengajar</label>
                                                <div class="col-sm-10">
                                                    <select name="tenaga_pengajar_id" class="form-control"
                                                        class="form-control">
                                                        @foreach ($data_tenaga_pengajar as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $data_absen_tenaga_pengajar->tenaga_pengajar_id == $item->id ? 'selected' : '' }}>
                                                                {{ $item->nama }}</option>
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
