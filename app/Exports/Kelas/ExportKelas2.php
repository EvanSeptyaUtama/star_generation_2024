<?php

namespace App\Exports\Kelas;

use App\Models\AbsenSiswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ExportKelas2 implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $data_absen_siswa = AbsenSiswa::orderBy('tanggal_absen', 'asc')->get();
        return view('admin.Absensi.absen_siswa.kelas.kelas_2_export_excel', compact('data_absen_siswa'));
    }
}
