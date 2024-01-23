<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'STAR GENERATION') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style scoped>
    .register-photo {
    /* background: #f1f7fc; */
    border-radius: 20px;
    background: #004d74;
    padding: 100px 0
    }
    .navbar{
        background: #006DA4;
    }
    .register-photo .image-holder {
        display: table-cell;
        width: auto;
        border-start-start-radius: 20px;
        border-end-start-radius: 20px;
        background: url('pi_assets/img/Halamanutama_Stargen.png');
        background-size: cover
    }

    .register-photo .form-container {
        display: table;
        max-width: 900px;
        width: 90%;
        margin: 0 auto;
        
        box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1)
    }

    .register-photo form {
        display: table-cell;
        width: 400px;
        background-color: #ffffff;
        padding: 40px 60px;
        border-start-end-radius: 20px;
        border-end-end-radius: 20px;
        color: #505e6c
    }

    @media (max-width:991px) {
        .register-photo form {
            padding: 40px
        }
    }

    .register-photo form h2 {
        font-size: 24px;
        line-height: 1.5;
        margin-bottom: 30px

    }

    .register-photo form .form-control {
        background: transparent;
        border: none;
        color:  #61acb3;
        border-bottom: 1px solid #dfe7f1;
        border-radius: 0;
        box-shadow: none;
        outline: none;
        color: inherit;
        text-indent: 0px;
        height: 40px
    }

    .register-photo form .form-check {
        font-size: 13px;
        line-height: 20px
    
    }

    .btn-register{
        background: #003554;       
    }

    .register-photo form .already {
        display: block;
        text-align: center;
        font-size: 12px;
        color: #6f7a85;
        opacity: 0.9;
        text-decoration: none
    }
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container justify-content-center">
                <a class="navbar-brand text-white" href="{{route('halaman_utama')}}">
                    <h2><strong>STAR GENERATION</strong></h2>
                </a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav me-auto">

                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white " href="{{ route('login') }}"><strong> {{ __('Login') }}</strong></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white " href="{{ route('register') }}"><strong>{{ __('Register') }}</strong></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                            </li>
                        @endguest
                    </ul>
                </div> -->
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
