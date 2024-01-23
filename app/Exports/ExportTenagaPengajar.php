<?php

namespace App\Exports;

use App\Models\TenagaPengajar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportTenagaPengajar implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $data_tenaga_pengajar = TenagaPengajar::orderBy('nama','asc')->get();
        return view('admin.Master.biodata_tenaga_pengajar.data_tenaga_pengajar_export_excel', compact('data_tenaga_pengajar'));
    }
}
