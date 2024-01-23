<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STARGEN | @yield('title')</title>
    <link
    href="https://getbootstrap.com/docs/5.2/assets/css/docs.css"
    rel="stylesheet"
  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
    
</head>
<style>
    .main{
        height: 100vh;
    }
    .navbar{
        background: #86A8CF;
    }

    .main_utama{
        background: rgb(129, 195, 237);
        text-align: center;
        font-family:Arial, Helvetica, sans-serif;
        font-size: 20px;
        padding-top: 4px;
        padding-bottom: 4px ;
    }
    .sidebar{
        position: relative;
        border: rgb(218, 217, 217);
        border-right-style: solid; 
        background: #ffffff
    }
    .sidebar ul{
        list-style: none;
    }
    .sidebar ul li{
        padding: 5px;
        padding-left: 15px;
    }
    .sidebar ul li:hover{
     color: #d2cfcf;
     font-weight: bold;
    }
    .dropdown:hover{
        color: #d2cfcf;
     font-weight: bold;
    }
    .sidebar  ul li a{
        color: black;
        text-decoration: none 
    }
    .nav-link{
        color: black;
        padding-left: 15px;
        list-style: none;
    }
    .nav-link:hover{
        color: black;
    }
    .menu_profile{
        padding: 12px;
        border: rgb(218, 217, 217);
        border-bottom-style: solid;
    }
    .container-ln{
        border: rgb(9, 7, 7);
        border: solid;
    }
    .container-role-admin{
        font-size:3rem;  
        font-family:Georgia, 'Times New Roman', Times, serif
    }
    .display-4{
        font-weight: bold;
    }
    .box-link-ha{
        list-style-type: none;
    }
    .car-body-icon {
        position: absolute;
        z-index: 0;
        top: 25px;
        right: 4px;
        opacity: 0.4;
        font-size: 90px;
        margin-right: 20px;
    }
    .card-box-hu{
        border: solid;
        border-color: rgb(218, 217, 217);
        border-radius: 20px;
    }
    .link-box-ha{
        text-decoration: none;
    }
    .card-text-ha{
        color: #ffffff;
    }
    .card-text-ha:hover{
        color: #d2cfcf;
    }
    .box-facebook{
        border: solid;
        border-color: rgb(218, 217, 217);
        border-radius: 10px;
    }
    .card-header-fb{
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .table{
        border-radius: 20px;
    }
    .table, th, td{
        border: 1px solid;
        border-radius: 20px;
    }
   

</style>
<body>
    <div class="main d-flex flex-column justify-content-between ">
        <!----Navbar-->
        <nav class="navbar navbar-expand-md navbar-light navbar-dark shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="/admin">
                    STAR GENERATION | PENGAJAR
                </a>
                <!-----Burger Button Mobile---->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->role =='pengajar')
                                        <a class="dropdown-item" href="{{ route('create_product') }}">
                                            Create product
                                        </a>
                                  

                                    <a class="dropdown-item" href="{{ route('show_profile_absen') }}">
                                        Profile
                                    </a>
                                    @else
                                    <a class="dropdown-item" href="{{ route('show_cart') }}">
                                        Cart
                                    </a>
                                @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                  
                    </ul>
                </div>
            </div>
        </nav>
        <!---Sidebar---->
        <div class="body-content h-100 ">
            <div class="row g-0 h-100">
                <div class="sidebar shadow-md col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                    @if (Auth::check() && Auth::user()->role == 'pengajar')
                    <!---Sidebar non-profile--->
                    <ul class="nav flex-column">
                        <li>
                          <a href="/absen"><i class="fa fa-home"></i> Halaman Utama</a>
                        </li>
                       
                        <div class="main_utama">
                            <b class="main_utama_n">Halaman Absen</b>
                        </div>
                        <div class="nav-itemku dropdown">
                            <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Halaman Utama</div>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Logo Sekolah</a></li>
                              <li><a class="dropdown-item" href="#">Aktivitas Sekolah</a></li>
                              <li><a class="dropdown-item" href="#">Visi - Misi</a></li>
                              <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                              <li><a class="dropdown-item" href="#">Tentang Kami</a></li>
                            </ul>
                        </div>
                        
                    </ul>
                    @endif
                </div>
                <!---Content--->
                <div class="content bg-white col-lg-10">
                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>