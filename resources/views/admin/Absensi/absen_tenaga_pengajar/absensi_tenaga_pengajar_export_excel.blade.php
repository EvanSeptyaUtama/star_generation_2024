<h3><strong>ABSENSI TENAGA PENGAJAR</strong></h3>
<br>
<h4><strong>Laporan Harian Absensi Tenaga Pengajar</strong></h4>
<table class="table rounded">
    <thead>
        <tr class="text-center">
            <th><strong>Tanggal</strong></th>
            <th><strong>Mulai</strong></th>
            <th><strong>Selesai</strong></th>
            <th><strong>Keterangan</strong></th>
            <th><strong>Tenaga Pengajar</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_absensi_tenaga_pengajar as $data)
            <tr class="text-center">
                <td>{{ $data->tanggal }}</td>
                <td>{{ $data->waktu_mulai }}</td>
                <td>{{ $data->waktu_selesai }}</td>
                <td>{{ $data->keterangan }}</td>
                <td>
                    {{ $data->tenaga_pengajar->nama }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
