@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Jadwal Mengajar Guru')

@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <!---Bagian Header : judul, tombol tambah, alert, tombol cari-->
                    <div class="row mb-2 justify-content-between">
                        <h2><i><strong>Jadwal Mengajar Pengajar</strong></i></h2>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <!-----Breadcrumbs--->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('halaman_utama_admin') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Jadwal Mengajar Pengajar</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3 mb-1">
                            <div>
                                <a class="btn btn-success" href="{{ route('eksport_excel_jadwal_mengajar_guru') }}">Export
                                    Excel</a>
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
                                        <th>Hari</th>
                                        <th>Tenaga Pengajar</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                        <th width="150px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_jadwal_mengajar_guru as $data)
                                        <tr>
                                            <td>{{ $data->tanggal }}</td>
                                            <td>{{ $data->waktu_mulai }}</td>
                                            <td>{{ $data->waktu_selesai }}</td>
                                            <td>{{ $data->hari }}</td>
                                            <td>
                                                {{ $data->tenaga_pengajar->nama }}
                                            </td>
                                            <td>
                                                {{ $data->kelas->nama_kelas }}
                                            </td>
                                            <td>
                                                {{ $data->mata_pelajarans->mata_pelajaran }}
                                            </td>
                                            <td class="text-center">
                                                <div class="container">
                                                    <div class="row">
                                                        <!---Tombol tampil data secara detail--->
                                                        <div class="col">
                                                            <a href="{{ route('tampil_jadwal_mengajar_guru', $data) }}"
                                                                method="get" class="btn btn-sm btn-secondary mt-2">
                                                                Lihat
                                                            </a>
                                                        </div>
                                                        <!---Tombol hapus--->
                                                        <div class="col">
                                                            <form
                                                                action="{{ route('hapus_jadwal_mengajar_guru', $data->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-sm btn-danger mt-2">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
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

@endsection
