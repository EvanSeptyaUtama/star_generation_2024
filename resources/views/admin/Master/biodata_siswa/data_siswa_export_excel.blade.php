<h3 class="text-center"><strong>BIODATA SISWA</strong></h3>
<br>
<table class="table">
    <thead class="text-center">
        <tr>
            <th><strong>NISN</strong></th>
            <th><strong>Nama</strong></th>
            <th><strong>Alamat</strong></th>
            <th><strong>Jenis Kelamin</strong></th>
            <th><strong>Tempat Lahir</strong></th>
            <th><strong>Tanggal Lahir</strong></th>
            <th><strong>Agama</strong></th>
            <th><strong>Suku</strong></th>
            <th><strong>Jumlah Saudara</strong></th>
            <th><strong>Cita-cita</strong></th>
            <th><strong>Hobi</strong></th>
            <th><strong>No Telepon(siswa/wali)</strong></th>
            <th><strong>Tinggal Bersama</strong></th>
            <th><strong>RT/RW</strong></th>
            <th><strong>Desa/Kelurahan</strong></th>
            <th><strong>Kecamatan</strong></th>
            <th><strong>Kode Pos</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_siswa as $data)
        <tr>
            <td>{{$data->nisn}}</td>
            <td>{{$data->nama_siswa}}</td>
            <td>{{$data->alamat_siswa}}</td>
            <td>{{$data->jenis_kelamin}}</td>
            <td>{{$data->tempat_lahir}}</td>
            <td>{{$data->ttl}}</td>
            <td>{{$data->agama}}</td>
            <td>{{$data->suku}}</td>
            <td>{{$data->jumlah_saudara}}</td>
            <td>{{$data->cita_cita}}</td>
            <td>{{$data->hobi}}</td>
            <td>{{$data->no_telp}}</td>
            <td>{{$data->tinggal_bersama}}</td>
            <td>{{$data->rt_rw}}</td>
            <td>{{$data->desa_kelurahan}}</td>
            <td>{{$data->kecamatan}}</td>
            <td>{{$data->kode_pos}}</td>
           
        </tr>
    @endforeach
    </tbody>
</table>