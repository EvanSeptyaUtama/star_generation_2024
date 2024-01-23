@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Absensi Siswa')

@section('content')
<div class="m-2">
<div class="row mt-2">
    <div class="container">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="row m-2">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col">
                                <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Rekapitulasi Absensi Siswa</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <h2>Rekapitulasi Absensi Siswa</h2>
                    @if(!is_null($tanggalFormatted))
                        <h5>Hasil rekapitulasi absensi siswa mulai dari tanggal {{ $tanggalFormatted }} : </h5>
                    @endif
                    <form action="{{ route('rekap_absen_siswa') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="tanggal"><strong>Tanggal Awal</strong></label>
                                    <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control border-dark" required>
                                </div>
                            </div>
                            <div class="form-group col-md-4 d-flex flex-column">
                                <button type="submit" class="btn btn-success col-4 mt-auto"><strong>Cari</strong></button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                    <table id="example" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>NISN</th>
                                <th>Siswa</th>
                                <th>Jumlah Absensi</th>
                                <th>Hadir</th>
                                <th>Sakit</th>
                                <th>Izin</th>
                                <th>Alpha</th>
                                <th>Persentase Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rekapAbsensi as $data)
                                <tr>
                                    <td>{{ $data->nisn }}</td>
                                    <td>{{ $data->nama_siswa }}</td>
                                    <td>{{ $data->jumlah_absensi }}</td>
                                    <td>{{ $data->jumlah_hadir }}</td>
                                    <td>{{ $data->jumlah_sakit }}</td>
                                    <td>{{ $data->jumlah_ijin }}</td>
                                    <td>{{ $data->jumlah_alpa }}</td>
                                    <td>{{ number_format($data->persentase_kehadiran, 0, '.', '') }} %</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection