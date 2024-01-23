<?php

namespace App\Exports;

use App\Models\AbsenTenagaPengajar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportAbsenTenagaPengajar implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $data_absensi_tenaga_pengajar = AbsenTenagaPengajar::orderBy('tanggal', 'asc')->get();
        return view('admin.Absensi.absen_tenaga_pengajar.absensi_tenaga_pengajar_export_excel', compact('data_absensi_tenaga_pengajar'));
    }
}
