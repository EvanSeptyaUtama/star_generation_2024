<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\TenagaPengajar;
use Illuminate\Support\Facades\DB;
use App\Models\AbsenTenagaPengajar;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;
use App\Exports\ExportAbsenTenagaPengajar;

class AbsenTenagaPengajarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_absensi_tenaga_pengajar()
    {
        $tenaga_pengajar = TenagaPengajar::all();
        $data_absen_tenaga_pengajar = AbsenTenagaPengajar::all();
        return view('admin.Absensi.absen_tenaga_pengajar.absensi_tenaga_pengajar', compact('data_absen_tenaga_pengajar', 'tenaga_pengajar'));
    }
    public function tampil_absensi_tenaga_pengajar(AbsenTenagaPengajar $data_absen_tenaga_pengajar)
    {
        return view('admin.Absensi.absen_tenaga_pengajar.absensi_tenaga_pengajar_tampil', compact('data_absen_tenaga_pengajar'));
    }

    public function store_absensi_tenaga_pengajar(Request $request)
    {
        $this->validate($request, array(
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'keterangan' => 'required',
        ));
        AbsenTenagaPengajar::create([
            'tanggal' => $request->tanggal,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'keterangan' => $request->keterangan,
            'tenaga_pengajar_id' => $request->tenaga_pengajar_id,
        ]);

        return Redirect::route('index_absensi_tenaga_pengajar')->with('success', 'Berhasil menambahkan absensi tenaga pengajar');
    }

    public function edit_absensi_tenaga_pengajar(AbsenTenagaPengajar $data_absen_tenaga_pengajar)
    {
        $data_tenaga_pengajar = TenagaPengajar::all();
        return view('admin.Absensi.absen_tenaga_pengajar.absensi_tenaga_pengajar_edit', compact('data_absen_tenaga_pengajar', 'data_tenaga_pengajar'));
    }

    public function update_absensi_tenaga_pengajar(Request $request, AbsenTenagaPengajar $data_absen_tenaga_pengajar)
    {
        $this->validate($request, array(
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'keterangan' => 'required',

        ));
        $data_absen_tenaga_pengajar->update([
            'tanggal' => $request->tanggal,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'keterangan' => $request->keterangan,
            'tenaga_pengajar_id' => $request->tenaga_pengajar_id,
        ]);

        return Redirect::route('index_absensi_pengajar')->with('success', 'Berhasil mengedit data absensi tenaga pengajar');
    }

    public function hapus_absensi_tenaga_pengajar(TenagaPengajar $data_absen_tenaga_pengajar)
    {
        $data_absen_tenaga_pengajar->delete();
        return Redirect::route('index_absensi_tenaga_pengajar')->with('success', 'Berhasil menghapus data absensi tenaga pengajar');
    }
    public function eksport_excel_absensi_tenaga_pengajar()
    {

        return Excel::download(new ExportAbsenTenagaPengajar, "Absensi_Tenaga_Pengajar.xlsx");
    }
     //bagian rekap
     public function index_rekap_absensi_tenaga_pengajar()
     {
         $rekapAbsensi = [];
         $tanggalFormatted = null;
         return view('admin.Absensi.absen_tenaga_pengajar.rekap_absensi_tenaga_pengajar', compact('rekapAbsensi', 'tanggalFormatted'));
     }
 
     public function rekap_absensi_tenaga_pengajar(Request $request)
     {        
         $tanggal_hari_ini = Carbon::now()->format('Y-m-d');
         $request->validate([
             'tanggal_awal' => 'required|date',
         ]);
         $tanggal_awal = $request->input('tanggal_awal');
         $tanggal = Carbon::createFromFormat('Y-m-d', $tanggal_awal);
         $tanggalFormatted = $tanggal->isoFormat('D MMMM YYYY');
         $rekapAbsensi = $this->get_rekap_absensi_tenaga_pengajar($tanggal_awal, $tanggal_hari_ini);
         return view('admin.Absensi.absen_tenaga_pengajar.rekap_absensi_tenaga_pengajar', compact('rekapAbsensi', 'tanggalFormatted'))->with('success', 'Berhasil menampilkan data rekap absensi seluruh tenaga pengajar');
     }
 
     private function get_rekap_absensi_tenaga_pengajar($tanggal_awal, $tanggal_akhir)
     {
         $rekapAbsensi = DB::table('tenaga_pengajar')
             ->select(
                 'tenaga_pengajar.id',
                 'tenaga_pengajar.nip',
                 'tenaga_pengajar.nama',
                 DB::raw(('COUNT(absen_tenaga_pengajar.id) as jumlah_absensi')),
                 DB::raw('SUM(CASE WHEN absen_tenaga_pengajar.keterangan = "Hadir" THEN 1 ELSE 0 END) as jumlah_hadir'),
                 DB::raw('SUM(CASE WHEN absen_tenaga_pengajar.keterangan = "Sakit" THEN 1 ELSE 0 END) as jumlah_sakit'),
                 DB::raw('SUM(CASE WHEN absen_tenaga_pengajar.keterangan = "Izin" THEN 1 ELSE 0 END) as jumlah_ijin'),
                 DB::raw('SUM(CASE WHEN absen_tenaga_pengajar.keterangan = "Alfa" THEN 1 ELSE 0 END) as jumlah_alfa'),
                 DB::raw('SUM(CASE WHEN absen_tenaga_pengajar.keterangan = "Hadir" THEN 1 ELSE 0 END) / COUNT(absen_tenaga_pengajar.id) * 100 as persentase_kehadiran')
             )
             ->leftJoin('absen_tenaga_pengajar', 'tenaga_pengajar.id', '=', 'absen_tenaga_pengajar.tenaga_pengajar_id')
             ->where(function ($query) use ($tanggal_awal, $tanggal_akhir) {
                 $query->whereBetween('absen_tenaga_pengajar.tanggal', [$tanggal_awal, $tanggal_akhir])
                     ->orWhereNull('absen_tenaga_pengajar.tenaga_pengajar_id');
             })
             ->groupBy('tenaga_pengajar.id', 'tenaga_pengajar.nip', 'tenaga_pengajar.nama')
             ->get();
         return $rekapAbsensi;
     }
 
}
