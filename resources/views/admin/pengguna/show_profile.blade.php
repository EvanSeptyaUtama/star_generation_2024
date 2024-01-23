@extends('layouts.admin_layouts.app_admin')
@section('title', 'Admin | Profile')

@section('content')
    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <h2><strong><i>Pengguna Admin</i></strong></h2>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <!-----Breadcrumbs--->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a
                                                    href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('index_user_admin') }}">Pengguna
                                                    Admin</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-2">
                                <div>
                                    <a class="btn btn-warning" href="{{ route('index_user_admin') }}">Kembali</a>
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
                            <!---Table-->
                            <div class="table-responsive ">
                                <div class="card card-borderhu border-2 rounded-3">
                                    <div class="card-header text-light text-center">
                                        <h3><i>{{ __('Profil Pengguna Admin') }}</i></h3>
                                    </div>

                                    <div class="card-body">
                                        <form action="{{ route('edit_profile', $user) }}" method="post">
                                            @csrf
                                            <div class="row mb-2">
                                                <label class="col-sm-2 col-label-form">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="name" value="{{ $user->name }}"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-2 col-label-form">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" name="email" value="{{ $user->email }}"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-2 col-label-form">Role</label>
                                                <div class="col-sm-10">
                                                    <input type="role" class="form-control"
                                                        value="{{ $user->is_admin ? 'Admin' : 'Tenaga Pengajar' }}"
                                                        disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-2 col-label-form">Password <br> (<i>Wajib diisi
                                                        ulang</i>)</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-2 col-label-form">Password Confirmation <br> (<i>Wajib
                                                        diisi
                                                        ulang</i>)</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="password_confirmation"
                                                        class="form-control">
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
