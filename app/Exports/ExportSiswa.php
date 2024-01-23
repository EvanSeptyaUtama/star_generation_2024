<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Siswa;
use Illuminate\Contracts\View\View;

class ExportSiswa implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $data_siswa = Siswa::orderBy('nama_siswa', 'asc')->get();
        return view('admin.Master.biodata_siswa.data_siswa_export_excel', compact('data_siswa'));
    }
}
