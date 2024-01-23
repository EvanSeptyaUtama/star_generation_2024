<h3><strong>Absen Siswa</strong></h3>
<br>
<span><strong>Laporan Absen Siswa Kelas 2</strong></span>
<br>
<table class="table rounded" >
    <thead>
        <tr class="text-center">
            <th><strong>Tahun Ajaran</strong></th>
            <th><strong>Semester</strong></th>
            <th><strong>Tanggal</strong></th>
            <th><strong>Mulai</strong></th>
            <th><strong>Selesai</strong></th>
            <th><strong>Keterangan</strong></th>
            <th><strong>Siswa</strong></th>
            <th><strong>Kelas</strong></th>
          </tr>
    </thead>
    <tbody>
        @foreach ($data_absen_siswa as $data)
            @if ($data->kelas->nama_kelas == '2')  
                <tr class="text-center">    
                    <td>
                        {{$data->tahun_pelajarans->tahun_ajaran}}
                    </td>    
                    <td>
                        {{$data->tahun_pelajarans->semester}}
                    </td> 
                    <td>{{$data->tanggal_absen}}</td>
                    <td>{{$data->waktu_mulai}}</td>
                    <td>{{$data->waktu_selesai}}</td>
                    <td>{{$data->keterangan}}</td>
                    <td>
                        {{$data->siswas->nama_siswa}}
                    </td>
                    <td>
                        {{$data->kelas->nama_kelas}}
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>