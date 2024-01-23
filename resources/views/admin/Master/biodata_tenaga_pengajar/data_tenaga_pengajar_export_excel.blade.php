<h3 class="text-center"><strong>BIODATA TENAGA PENGAJAR</strong></h3>
<br>
<table class="table">
    <thead class="text-center">
        <tr>
            <th><strong>NIP</strong></th>
            <th><strong>Nama</strong></th>
            <th><strong>Jabatan</strong></th>
            <th><strong>No Telepon</strong></th>
            <th><strong>Jenis Kelamin</strong></th>
            <th><strong>Alamat</strong></th>
            <th><strong>Tempat Lahir</strong></th>
            <th><strong>Tanggal Lahir</strong></th>
            <th><strong>Jabatan</strong></th>
            <th><strong>Agama</strong></th>
            <th><strong>Suku</strong></th>
            <th><strong>RT/RW</strong></th>
            <th><strong>Desa/Kelurahan</strong></th>
            <th><strong>Kecamatan/Kota</strong></th>
            <th><strong>Kode Pos</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_tenaga_pengajar as $data)
            <tr>
                <td>{{ $data->nip }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->jabatan }}</td>
                <td>{{ $data->no_telp }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->tempat_lahir }}</td>
                <td>{{ $data->ttl }}</td>
                <td>{{ $data->jabatan }}</td>
                <td>{{ $data->agama }}</td>
                <td>{{ $data->suku }}</td>
                <td>{{ $data->rt_rw }}</td>
                <td>{{ $data->desa_kelurahan }}</td>
                <td>{{ $data->kecamatan }}</td>
                <td>{{ $data->kode_pos }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
