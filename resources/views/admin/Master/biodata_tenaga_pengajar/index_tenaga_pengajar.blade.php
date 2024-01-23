@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Tenaga Pengajar')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row mb-2 justify-content-between">
                        <h2><i><strong>Biodata Tenaga Pengajar</strong></i></h2>
                        <hr>
                        <!-----Breadcrumbs--->
                        <div class="row">
                            <div class="col">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('halaman_utama_admin') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Biodata Tenaga Pengajar</li>
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
                                            <h4> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="currentColor"
                                                    class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"
                                                    viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                    <path
                                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                </svg> Maaf!</h4>
                                        </div>
                                        Terdapat kesalahan dalam input data tenaga pengajar!
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
                    <!---Tabel Biodata Tenaga Pengajar---->
                    <div class="row">
                        <div class="table-responsive">
                            <div>
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#DataTenagaPengajar">
                                    <i class="fa fa-plus"></i> Data Tenaga Pengajar
                                </a>
                                <a class="btn btn-success" href="{{ route('eksport_excel_tenaga_pengajar') }}">Eksport
                                    Excel</a>
                            </div>
                            <br>
                            <table id="example" class="table table-striped nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Foto</th>
                                        <th width="250px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_tenaga_pengajar as $data)
                                        <tr>
                                            <td>{{ $data->nip }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->jabatan }}</td>
                                            <td><img src="{{ asset('storage/Tenaga_Pengajar/' . $data->foto) }}"
                                                    class="img-index_admin" alt=""> </td>

                                            <td class="text-center">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col">
                                                            <form action="{{ route('tampil_tenaga_pengajar', $data->id) }}"
                                                                method="get">
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-secondary mt-2">
                                                                    Lihat
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col">
                                                            <form
                                                                onsubmit="return confirm('Apakah anda yakin edit data tenaga pengajar ?');"
                                                                action="{{ route('edit_tenaga_pengajar', $data->id) }}"
                                                                method="get">
                                                                <button type="submit" class="btn btn-sm btn-info mt-2">
                                                                    Edit
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col">
                                                            <form
                                                                onsubmit="return confirm('Apakah anda yakin hapus data tenaga pengajar ?');"
                                                                action="{{ route('hapus_tenaga_pengajar', $data->id) }}"
                                                                method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm btn-danger mt-2">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Modal -->
                    @include('admin.Master.biodata_tenaga_pengajar.tambah_tenaga_pengajar')
                </div>
            </div>
        </div>
    </div>
@endsection
