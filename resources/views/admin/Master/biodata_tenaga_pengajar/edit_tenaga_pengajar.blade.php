@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Pengajar')

@section('content')

    <div class="m-2">
        <div class="card card-borderhu border-2 rounded-3">
            <div class="card-body">
                <div class="container">
                    <h2><i><strong>Biodata Tenaga Pengajar</strong></i></h2>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('halaman_utama_admin') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('index_tenaga_pengajar') }}">Biodata
                                            Pengajar</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="{{ route('index_tenaga_pengajar') }}">Kembali</a>
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
                                    Terdapat kesalahan dalam mengedit data
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
                    <div class="table-responsive">
                        <div class="card card-borderhu border-2 rounded-3">
                            <div class="card-header text-light text-center">
                                <h3><i>{{ __('Edit Biodata Tenaga Pengajar') }}</i></h3>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('update_tenaga_pengajar', $data_tenaga_pengajar) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">NIP (<i>opsional</i>)</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="nip" class="form-control" placeholder="-"
                                                value="{{ $data_tenaga_pengajar->nip }}">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" class="form-control"
                                                value="{{ $data_tenaga_pengajar->nama }}">
                                        </div>
                                    </div>
                                    <!-----foreign key table kelas-->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Wali Kelas (<i>opsional</i>)</label>
                                        <div class="col-sm-10">
                                            <select name="kelas_id" class="form-control" class="form-control">
                                                <option value="">- Tidak sebagai Wali Kelas -</option>
                                                @foreach ($data_kelas as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $data_tenaga_pengajar->kelas_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nama_kelas }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form" for="foto_pengajar">Foto <br> (<i>wajib diisi
                                                ulang</i>)</label>
                                        <div class="col-sm-10">
                                            <img src="{{ url('storage/Tenaga_Pengajar/' . $data_tenaga_pengajar->foto) }}"
                                                class="rounded mb-2" alt="" height="200px">
                                            <input class="form-control rounded mt-1" id="foto_pengajar" type="file"
                                                name="foto">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Telepon</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="no_telp" class="form-control"
                                                value="{{ $data_tenaga_pengajar->no_telp }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <select name="jenis_kelamin" class="form-control">
                                                <option value="Laki-Laki"
                                                    {{ $data_tenaga_pengajar->jenis_kelamin === 'Laki-Laki' ? 'Selected' : '' }}>
                                                    Laki-Laki</option>
                                                <option value="Perempuan"
                                                    {{ $data_tenaga_pengajar->jenis_kelamin === 'Perempuan' ? 'Selected' : '' }}>
                                                    Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="alamat" class="form-control"
                                                value="{{ $data_tenaga_pengajar->alamat }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Tempat Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="tempat_lahir" class="form-control"
                                                value="{{ $data_tenaga_pengajar->tempat_lahir }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="ttl" class="form-control"
                                                value="{{ $data_tenaga_pengajar->ttl }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Jabatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="jabatan" class="form-control"
                                                value="{{ $data_tenaga_pengajar->jabatan }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Agama</label>
                                        <div class="col-sm-10">
                                            <select name="agama" class="form-control">
                                                <option value="Islam"
                                                    {{ $data_tenaga_pengajar->agama === 'Islam' ? 'Selected' : '' }}>
                                                    Islam</option>
                                                <option value="Katholik"
                                                    {{ $data_tenaga_pengajar->agama === 'Katholik' ? 'Selected' : '' }}>
                                                    Katholik</option>
                                                <option value="Protestan"
                                                    {{ $data_tenaga_pengajar->agama === 'Protestan' ? 'Selected' : '' }}>
                                                    Protestan</option>
                                                <option value="Hindu"
                                                    {{ $data_tenaga_pengajar->agama === 'Hindu' ? 'Selected' : '' }}>
                                                    Hindu</option>
                                                <option value="Budha"
                                                    {{ $data_tenaga_pengajar->agama === 'Budha' ? 'Selected' : '' }}>
                                                    Budha</option>
                                                <option value="Konghucu"
                                                    {{ $data_tenaga_pengajar->agama === 'Konghucu' ? 'Selected' : '' }}>
                                                    Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Suku (<i>opsional</i>)</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="suku" class="form-control" placeholder="-"
                                                value="{{ $data_tenaga_pengajar->suku }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">RT/RW (<i>opsional</i>)</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="rt_rw" class="form-control" placeholder="-"
                                                value="{{ $data_tenaga_pengajar->rt_rw }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">DESA/KELURAHAN (<i>opsional</i>)</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="desa_kelurahan" class="form-control"
                                                placeholder="-" value="{{ $data_tenaga_pengajar->desa_kelurahan }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">KECAMATAN (<i>opsional</i>)</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="kecamatan" class="form-control" placeholder="-"
                                                value="{{ $data_tenaga_pengajar->kecamatan }}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Kode Pos (<i>opsional</i>)</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="kode_pos" class="form-control" placeholder="-"
                                                value="{{ $data_tenaga_pengajar->kode_pos }}">
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

@endsection
