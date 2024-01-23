@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Absensi Siswa')

@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <h2><i><strong>Absensi Siswa</strong></i></h2>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Absen Siswa</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!---Alert-->
                    <div class="row">
                        <div class="col-md-12">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <div class="alert-title">
                                        <h4>Maaf!</h4>
                                    </div>
                                    Terdapat kesalahan dalam input data
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
                    @if (Auth::user()->is_admin == false)
                        <!---Input Absen--->
                        <div class="row mt-2">
                            <div class="container">
                                <div class="card card-borderhu border-2 rounded-3">
                                    <div class="row m-2">
                                        <div class="col-md-12">
                                            <h3><i><u>Input Absensi Siswa</u></i></h3>
                                            <form action="{{ route('store_absen_siswa') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    @if (count($errors) > 0)
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="row">
                                                    <!--Input Foreign key : table siswa dan table kelas-->
                                                    <div class="col-md-4 mb-2">
                                                        <div class="form-group ">
                                                            <label
                                                                class="col-sm-2 col-label-form"><strong>Siswa</strong></label>
                                                            <select name="siswa_id" class="form-control border-dark"
                                                                class="col-sm-10">
                                                                <option value="">- Pilih Siswa -</option>
                                                                @foreach ($siswas as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->nama_siswa }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group mt-1">
                                                            <label
                                                                class="col-sm-2 col-label-form"><strong>Kelas</strong></label>
                                                            <select name="kelas_id" class="form-control border-dark"
                                                                class="col-sm-10">
                                                                <option value="">- Pilih Kelas -</option>
                                                                @foreach ($kelas as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->nama_kelas }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <label
                                                                class="col-sm-3 col-label-form"><strong>Semester</strong></label>
                                                            <select name="tahun_pelajaran_id"
                                                                class="form-control border-dark" class="col-sm-10">
                                                                <option value="">- Pilih Semester -</option>
                                                                @foreach ($tahun_pelajarans as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->semester }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!---Input tanggal dan waktu masuk-->
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="tanggal"><strong>Tanggal</strong></label>
                                                            <input type="date" name="tanggal_absen" id="tanggal_absen"
                                                                class="form-control border-dark" required>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <label class="form-group"><strong>Keterangan</strong></label>
                                                            <select name="keterangan" class="form-control border-dark">
                                                                <option value="#">- Keterangan -</option>
                                                                <option value="Hadir">Hadir</option>
                                                                <option value="Izin">Izin</option>
                                                                <option value="Sakit">Sakit</option>
                                                                <option value="Alpa">Alfa</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <label class="col-sm-4 col-label-form"><strong>Tahun
                                                                    Ajaran</strong></label>
                                                            <select name="tahun_ajaran_id" class="form-control border-dark"
                                                                class="col-sm-10">
                                                                <option value="">- Pilih Tahun Ajaran -</option>
                                                                @foreach ($tahun_pelajarans as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->tahun_ajaran }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!---Input keterangan dan waktu keluar-->
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="waktu_mulai"><strong>Waktu Mulai</strong></label>
                                                            <input type="time" name="waktu_mulai" id="waktu_mulai"
                                                                class="form-control border-dark" required>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <label for="waktu_selesai"><strong>Waktu
                                                                    Selesai</strong></label>
                                                            <input type="time" name="waktu_selesai" id="waktu_selesai"
                                                                class="form-control border-dark" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <button type="submit"
                                                        class="btn btn-success "><strong>ABSEN</strong></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!---Table Absen--->
                    <div class="row mt-2">
                        <div class="container">
                            <div class="card card-borderhu border-2 rounded-3">
                                <div class="row m-2">
                                    <!---Bagian Header : judul, tombol tambah, alert, tombol cari-->
                                    <div class="row mb-2 justify-content-between">

                                        <!----Tombol cetak absen-->
                                        <div class="col-md-7 mt-2">
                                            <div class="card border-dark border-2">
                                                <div class="row m-2">
                                                    <div class="col-md-4 mt-1">
                                                        <h4><strong><i>Laporan Harian</i></strong></h4>
                                                    </div>
                                                    <div class="col-md-2 mt-1">
                                                        <a href="{{ route('laporan_harian_absen_siswa_kelas_1') }}"
                                                            class="btn btn-outline-dark"><strong>Kelas 1</strong></a>
                                                    </div>
                                                    <div class="col-md-2 mt-1">
                                                        <a href="{{ route('laporan_harian_absen_siswa_kelas_2') }}"
                                                            class="btn btn-outline-dark"><strong>Kelas 2</strong></a>
                                                    </div>
                                                    <div class="col-md-2 mt-1">
                                                        <a href="{{ route('laporan_harian_absen_siswa_kelas_3') }}"
                                                            class="btn btn-outline-dark"><strong>Kelas 3</strong></a>
                                                    </div>
                                                    <div class="col-md-2 mt-1">
                                                        <a href="{{ route('laporan_harian_absen_siswa_kelas_4') }}"
                                                            class="btn btn-outline-dark"><strong>Kelas 4</strong></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Bagian Body : table dan pagination-->
                                    <div class="row p-2">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped nowrap" style="width:100%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>Tanggal</th>
                                                        <th>Mulai</th>
                                                        <th>Selesai</th>
                                                        <th>Keterangan</th>
                                                        <th>Siswa</th>
                                                        <th>Kelas</th>
                                                        @if (Auth::user()->is_admin == false)
                                                            <th>Aksi</th>
                                                        @endif
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data_absen_siswa as $data)
                                                        <tr class="text-center">
                                                            <td>{{ $data->tanggal_absen }}</td>
                                                            <td>{{ $data->waktu_mulai }}</td>
                                                            <td>{{ $data->waktu_selesai }}</td>
                                                            <td>{{ $data->keterangan }}</td>
                                                            <td>
                                                                {{ $data->siswas->nama_siswa }}
                                                            </td>
                                                            <td>
                                                                {{ $data->kelas->nama_kelas }}
                                                            </td>
                                                            @if (Auth::user()->is_admin == false)
                                                                <td class="text-center">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <form
                                                                                    action="{{ route('tampil_absen_siswa', $data) }}"
                                                                                    method="get">
                                                                                    <button type="submit"
                                                                                        class="btn btn-sm btn-secondary mt-2">
                                                                                        Detail
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                            <div class="col">
                                                                                <form
                                                                                    onsubmit="return confirm('Apakah anda yakin edit data absen siswa ?');"
                                                                                    action="{{ route('edit_absen_siswa', $data->id) }}"
                                                                                    method="get">
                                                                                    <button type="submit"
                                                                                        class="btn btn-sm btn-info mt-2">
                                                                                        Edit
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                            <div class="col">

                                                                                <form
                                                                                    onsubmit="return confirm('Apakah anda yakin hapus data absen siswa ?');"
                                                                                    action="{{ route('hapus_absen_siswa', $data->id) }}"
                                                                                    method="post">
                                                                                    @method('delete')
                                                                                    @csrf
                                                                                    <button type="submit"
                                                                                        class="btn btn-sm btn-danger mt-2">
                                                                                        Hapus
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            @endif
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
            </div>
        </div>
    </div>
@endsection
