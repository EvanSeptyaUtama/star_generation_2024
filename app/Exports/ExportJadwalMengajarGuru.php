<?php

namespace App\Exports;

use App\Models\JadwalMengajarGuru;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ExportJadwalMengajarGuru implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $data_jadwal_mengajar_guru = JadwalMengajarGuru::orderBy('tanggal', 'asc')->get();
        return view('admin.Jadwal_Mengajar.jadwal_mengajar_export_excel', compact('data_jadwal_mengajar_guru'));
    }
}
