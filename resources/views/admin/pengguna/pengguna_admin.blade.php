@extends('layouts.admin_layouts.app_admin')

@section('title', 'Pengguna Admin')
@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <h2><strong><i>Pengguna Admin</i></strong></h2>
                            <hr>
                            <!-----Breadcrumbs--->
                            <div class="row">
                                <div class="col">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a
                                                    href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Pengguna Admin</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table id="example" class="table table-striped nowrap" style="width:100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Admin</th>
                                            <th style="150px">Email</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_user_admin as $data)
                                            <tr>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->is_admin ? 'Admin' : 'Tenaga Pengajar' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Tambah Data-->
                </div>
            </div>
        </div>
    </div>
@endsection
