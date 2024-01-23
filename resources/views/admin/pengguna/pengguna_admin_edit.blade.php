@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Pengajar')

@section('content')

    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container">
                    <h2><i>Pengguna Admin</i></h2>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('index_user_admin') }}">Pengguna Admin</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="{{ route('index_user_admin') }}">Kembali</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header  text-light text-light text-center">
                                <h3><strong>{{ __('Edit Pengguna Admin') }}</strong></h3>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('update_user_admin', $user) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" value="{{ $user->name }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $user->name }}">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="email" class="form-control"
                                                value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Role</label>
                                        <div class="col-sm-10">
                                            <select name="role" class="form-control" disabled>
                                                <option value="admin" {{ $user->role === 'admin' ? 'Selected' : '' }}>
                                                    Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" class="form-control" disabled
                                                value="{{ $user->password }}">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
