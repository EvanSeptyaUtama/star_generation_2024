@extends('layouts.app_login_register')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="register-photo">
                <div class="form-container">
                    <div class="image-holder"></div>
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <h2 class="text-center"><strong>Register Admin</strong></h2>
                        <!---Nama---->
                        <div class="form-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    
                        </div>
                        <!---Email---->
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--Password--->
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Kata Sandi" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!---Konfirmasi Password--->
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required autocomplete="new-password">
                        </div>
                        <!---Role Admin--->
                        <div class="form-group pt-2">
                            <select name="role" id="role">
                                <option value="admin">Administrator</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group pt-2">
                            <button class="btn btn-register btn-block text-white" type="submit">Register</button>
                        </div>
                        <div class="form-group text-center pt-2">
                        <p>Selamat Datang di Halaman Register Administrasi!</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
