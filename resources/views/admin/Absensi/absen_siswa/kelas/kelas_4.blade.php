@extends('layouts.admin_layouts.app_admin')

@section('title', 'Absensi Siswa')

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
                                    <li class="breadcrumb-item"><a href="{{ route('index_absen_siswa') }}">Absensi Siswa</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Laporan Harian Kelas 4</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <h4><i>Laporan Harian Kelas 4</i></h4>
                    <div class="row justify-content-start mb-1">
                        <div>
                            <a class="btn btn-warning" href="{{ route('index_absen_siswa') }}">Kembali</a>
                            <a class="btn btn-success" href="{{ route('eksport_excel_kelas_4') }}">Export Excel</a>
                        </div>
                    </div>
                    <!-----Table--->
                    <div class="row">
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
                                        <th>Semester</th>
                                        <th>Tahun ajaran</th>
                                        @if (Auth::user()->is_admin == false)
                                            <th>Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_absen_siswa as $data)
                                        @if ($data->kelas->nama_kelas == '4')
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
                                                <td>
                                                    {{ $data->tahun_pelajarans->tahun_ajaran }}
                                                </td>
                                                <td>
                                                    {{ $data->tahun_pelajarans->semester }}
                                                </td>
                                                @if (Auth::user()->is_admin == false)
                                                    <td class="text-center">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <form action="{{ route('tampil_absen_siswa', $data) }}"
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
                                        @endif
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
