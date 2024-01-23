<h3><strong>Jadwal Mengajar Guru</strong></h3>
<br>
<table class="table ">
    <thead>
        <tr class="text-center">
            <th><strong>Tanggal</strong></th>
            <th><strong>Mulai</strong></th>
            <th><strong>Selesai</strong></th>
            <th><strong>Hari</strong></th>
            <th><strong>Pengajar</strong></th>
            <th><strong>Kelas</strong></th>
            <th><strong>Mata Pelajaran</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_jadwal_mengajar_guru as $data)
            <tr class="text-center">
                <td>{{ $data->tanggal }}</td>
                <td>{{ $data->waktu_mulai }}</td>
                <td>{{ $data->waktu_selesai }}</td>
                <td>{{ $data->hari }}</td>
                <td>
                    {{ $data->tenaga_pengajar->nama }}
                </td>
                <td>
                    {{ $data->kelas->nama_kelas }}
                </td>
                <td>
                    {{ $data->mata_pelajarans->mata_pelajaran }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
