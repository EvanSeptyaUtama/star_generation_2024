@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Absensi Tenaga Pengajar')

@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">

                    <h2><i><strong>Absensi Tenaga Pengajar</strong></i></h2>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Absensi Tenaga Pengajar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    @if (Auth::user()->is_admin == false)
                        <!---Input Absen--->
                        <div class="row mt-2">
                            <div class="container">

                                <div class="card card-borderhu border-2 rounded-3">
                                    <div class="row m-2">
                                        <div class="col-md-12">
                                            <h3><i><u>Input Absensi Tenaga Pengajar</u></i></h3>
                                            <form action="{{ route('store_absensi_tenaga_pengajar') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <!--Input Foreign key : table guru dan table kelas dan table mata pelajaran-->
                                                    <div class="col-md-4 mb-2">
                                                        <div class="form-group ">
                                                            <label class="col-sm-5 col-label-form"><strong>
                                                                    Tenaga Pengajar</strong></label>
                                                            <select name="tenaga_pengajar_id"
                                                                class="form-control border-dark" class="col-sm-10">
                                                                <option value="">- Pilih Tenaga Pengajar -</option>
                                                                @foreach ($tenaga_pengajar as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tanggal"><strong>Tanggal</strong></label>
                                                            <input type="date" name="tanggal" id="tanggal"
                                                                class="form-control border-dark" required>
                                                        </div>

                                                        <div class="form-group mt-1">
                                                            <label class="form-group"><strong>Keterangan</strong></label>
                                                            <select name="keterangan" class="form-control border-dark">
                                                                <option value="#">- Keterangan -</option>
                                                                <option value="Hadir">Hadir</option>
                                                                <option value="Izin">Izin</option>
                                                                <option value="Sakit">Sakit</option>
                                                                <option value="Alfa">Alfa</option>
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
                                                    <div class="form-group mt-2">
                                                        <button type="submit"
                                                            class="btn btn-success "><strong>ABSEN</strong></button>
                                                    </div>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endif
                    <div class="row mt-2">
                        <div class="container">
                            <div class="card card-borderhu border-2 rounded-3">
                                <div class="row m-2">
                                    <!---Bagian Header : judul, tombol tambah, alert, tombol cari-->
                                    <div class="row mb-2 justify-content-between">
                                        <div class="col-md-3 mt-4">
                                            <a class="btn btn-success "
                                                href="{{ route('eksport_excel_absensi_tenaga_pengajar') }}">Export
                                                Excel</a>
                                        </div>
                                        <!---Alert-->
                                        <div class="mt-2">
                                            @if ($message = Session::get('success'))
                                                <div class="alert alert-success">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!---Bagian Body : table dan pagination-->
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped nowrap" style="width:100%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>Tanggal</th>
                                                        <th>Mulai</th>
                                                        <th>Selesai</th>
                                                        <th>Keterangan</th>
                                                        <th>Tenaga Pengajar</th>
                                                        @if (Auth::user()->is_admin == false)
                                                            <th>Aksi</th>
                                                        @endif
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data_absen_tenaga_pengajar as $data)
                                                        <tr>
                                                            <td>{{ $data->tanggal }}</td>
                                                            <td>{{ $data->waktu_mulai }}</td>
                                                            <td>{{ $data->waktu_selesai }}</td>
                                                            <td>{{ $data->keterangan }}</td>
                                                            <td>
                                                                {{ $data->tenaga_pengajar->nama }}
                                                            </td>
                                                            @if (Auth::user()->is_admin == false)
                                                                <td class="text-center">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <!---Tombol tampil data secara detail--->
                                                                            <div class="col">
                                                                                <form
                                                                                    action="{{ route('tampil_absensi_tenaga_pengajar', $data->id) }}"
                                                                                    method="get">
                                                                                    <button type="submit"
                                                                                        class="btn btn-sm btn-secondary mt-2">
                                                                                        Detail
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                            <!---Tombol edit--->
                                                                            <div class="col">
                                                                                <form
                                                                                    onsubmit="return confirm('Apakah anda yakin edit data absensi tenaga pengajar ?');"
                                                                                    action="{{ route('edit_absensi_tenaga_pengajar', $data->id) }}"
                                                                                    method="get">
                                                                                    <button type="submit"
                                                                                        class="btn btn-sm btn-info mt-2">
                                                                                        Edit
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                            <!---Tombol hapus--->
                                                                            <div class="col">
                                                                                <form
                                                                                    onsubmit="return confirm('Apakah anda yakin hapus data absensi tenaga pengajar ?');"
                                                                                    action="{{ route('hapus_absensi_tenaga_pengajar', $data->id) }}"
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
    <!-- Script -->

@endsection
