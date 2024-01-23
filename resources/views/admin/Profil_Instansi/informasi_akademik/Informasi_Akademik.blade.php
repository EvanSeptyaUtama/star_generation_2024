@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Informasi Akademik')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <h2><i><strong>Halaman Informasi Akademik Profil Instansi</strong></i></h2>
                    <hr>
                    @if (Auth::user()->is_admin == true)
                        <div class="d-flex justify-content-start mb-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#adminPiInformasiAkademik">
                                <i class="fa fa-plus"></i> Halaman Informasi Akademik
                            </button>
                        </div>
                    @endif
                    <!---Alert-->
                    <div class="row justify-content-center mb-1">
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
                                    Terdapat kesalahan dalam input data Informasi Akademik
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
                    <div class="table-responsive mt-4">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>Hari</th>
                                    <th>Tanggal</th>
                                    <th>Informasi</th>
                                    <th>Keterangan</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_informasi_akademik as $data)
                                    <tr>
                                        <td>{{ $data->hari_informasi_akademik }}</td>
                                        <td>{{ $data->tanggal_informasi_akademik }}</td>
                                        <td>{{ $data->informasi_informasi_akademik }}</td>
                                        <td>{{ $data->keterangan_informasi_akademik }}</td>
                                        <td>
                                            <img src="{{ url('storage/Informasi_Akademik/' . $data->gambar_informasi_akademik) }}"
                                                class="rounded" style="width: 100px">
                                        </td>
                                        <td class="text-center">
                                            <div>
                                                <form action="{{ route('tampil_informasi_akademik', $data) }}"
                                                    method="get">
                                                    <button type="submit" class="btn btn-sm btn-secondary mt-2">
                                                        Lihat
                                                    </button>
                                                </form>
                                                @if (Auth::user()->is_admin == true)
                                                    <form
                                                        onsubmit="return confirm('Apakah anda yakin edit data informasi akademik ?');"
                                                        action="{{ route('edit_informasi_akademik', $data) }}"
                                                        method="get">
                                                        <button type="submit" class="btn btn-sm btn-info mt-2">
                                                            Edit
                                                        </button>
                                                    </form>
                                                    <form
                                                        onsubmit="return confirm('Apakah anda yakin hapus data informasi akademik ?');"
                                                        action="{{ route('hapus_informasi_akademik', $data->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-sm btn-danger mt-2">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @include('admin.Profil_Instansi.informasi_akademik.informasi_akademik_tambah')
            </div>
        </div>
    </div>
@endsection
