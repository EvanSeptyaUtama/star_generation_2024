@extends('layouts.app_login_register')

@section('content')
<div class="container">
    <div class="row">
        <div class="register-photo">
            <div class="form-container">
                <div class="image-holder"></div>
                <form method="post" action="">
                    @method('patch')
                    @csrf
                    <div class="row mb-3">
                        <label for="kata_sandi_baru">Kata sandi baru</label>
                        <input type="password" name="new_password" id="kata_sandi_baru">
                    </div>

                    <div class="row mb-3">
                        <label for="konfirmasi_kata_sandi_baru">Konfirmasi kata sandi baru</label>
                        <input type="password" name="new_password_confirmation" id="konfirmasi_kata_sandi_baru">
                    </div>

                    <button class="btn btn-primary mt-2">Submit</button>
                </form>
                <div class="">evan</div>
            </div>
        </div>
    </div>
    
</div>
@endsection
