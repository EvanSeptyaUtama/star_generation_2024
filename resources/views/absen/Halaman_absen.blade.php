@extends('layouts.absen_layouts.app_absen')

@section('title','Absensi')

@section('content')
   <div class="container-fluid  d-grid gap-3 pt-4">
    <div class="p-lg-3">
       <div class="flex flex-column">
         <div class="container-role-admin"><strong>Hallo,  {{ Auth::user()->name }}</strong></div>
        <h2>Selamat datang pada, halaman Absen!</h2>
       </div>
    </div>
    <div class="card-box-hu p-lg-4">
    <div class="row  ">
        <div class="col-2 "><img src="https://img.freepik.com/premium-vector/instagram-social-media-icon-gradient-social-media-logo_197792-4682.jpg?w=2000" class="w-100  " alt="..."></div>
            <div class="col-10  pt-4">
                <div>
                    <h1><strong>STAR GENERATION | Yayasan Duta Serega</strong></h1>
                  </div>
                  <div>
                    <h3><strong>JL. Apt Pranoto, RT.35, No.99A, Sangatta Utara, Kec. Sangatta Utara, Kab. Kutai Timur, Prov. Kalimantan Timur</strong></h3>
                  </div>
            </div>
    </div>
        
      </div>
      
      <div class="p-lg-2">
        <div class="card-body ">
            <div class="row text-white d-flex gap-4 justify-content-center">
                 <!----Card 1--->
                <div class="card  bg-danger col-5 ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="car-body-icon">
                            <i class="fa fa-user mr-5"></i>
                        </div>
                        <h5 class="card-title text-center">Kepala Sekolah</h5>
                        <div class="display-4">1.200</div>
                        <a  class="link-box-ha" href="#" >
                            <p class="card-text-ha">Lihat Detail <i class="fa fa-angle-double-right ml-2"></i></p>
                        </a>
                    </div>
                </div>
                <!---Card 2--->
                <div class="card bg-success col-5 ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="car-body-icon">
                            <i class="fa fa-user mr-5"></i>
                        </div>
                        <h5 class="card-title text-center">Jumlah Pengajar</h5>
                        <div class="display-4">1.200</div>
                        <a  class="link-box-ha" href="#" >
                            <p class="card-text-ha">Lihat Detail <i class="fa fa-angle-double-right ml-2"></i></p>
                        </a>
                    </div>
                </div>
                 <!---Card 3--->
                 <div class="card bg-primary col-5 ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="car-body-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <h5 class="card-title text-center">Jumlah Siswa</h5>
                        <div class="display-4">1.200</div>
                        <a class="link-box-ha" href="#" >
                            <p class="card-text-ha">Lihat Detail <i class="fa fa-angle-double-right ml-2"></i></p>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row text-black d-flex gap-4 justify-content-center mt-4">
                <div class="text-center text-black" style="width: 20rem;">
                    <h5 class="card-header-fb text-white bg-primary display-4 pt-4 pb-4">
                        <i class="fa fa-facebook"></i>
                    </h5>
                    <div class="card-body pt-4">
                      <h5 class="card-title pb-2 text-secondary"><strong>FACEBOOK</strong></h5>
                      <a href="#" class="btn btn-primary">Follow & Like</a>
                    </div>
                </div>
                
            </div>
        </div>
        <hr>
    </div>
     
   </div>
@endsection