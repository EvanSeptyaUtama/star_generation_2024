<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\TenagaPengajar;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportTenagaPengajar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class TenagaPengajarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index_tenaga_pengajar()
    {
        $data_kelas = Kelas::all();
        $data_tenaga_pengajar = TenagaPengajar::all();
        return view('admin.Master.biodata_tenaga_pengajar.index_tenaga_pengajar', compact('data_tenaga_pengajar','data_kelas'));
    }

    public function tampil_tenaga_pengajar(TenagaPengajar $data_tenaga_pengajar)
    {
        return view('admin.Master.biodata_tenaga_pengajar.tampil_tenaga_pengajar',compact('data_tenaga_pengajar'));
    }

   
    public function store_tenaga_pengajar(Request $request)
    {
        //Validasi
        $request->validate([
            'nip' => 'max:20',
            'nama' => 'required',
            'foto' => 'required|image|file|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'no_telp' => 'required|min:7|max:15',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'ttl' => 'required',
            'jabatan' => 'required|min:4|max:30',
        ]);

        $file = $request->file('foto');
        $path = time() . '_' . $request->nama . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/Tenaga_Pengajar/' . $path, file_get_contents($file));

        TenagaPengajar::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'foto' => $path,
            'no_telp' => $request->no_telp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'ttl' => $request->ttl,
            'jabatan' => $request->jabatan,
            'agama' => $request->agama,
            'suku' => $request->suku,
            'rt_rw' => $request->rt_rw,
            'desa_kelurahan' => $request->desa_kelurahan,
            'kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos,
            'kelas_id' => $request->kelas_id,
        ]);

        return Redirect::route('index_tenaga_pengajar')
            ->with('success', 'Berhasil menambahkan data tenaga pengajar!!');
    }

    public function edit_tenaga_pengajar(TenagaPengajar $data_tenaga_pengajar)
    {
        $data_kelas = Kelas::all();
        return view('admin.Master.biodata_tenaga_pengajar.edit_tenaga_pengajar', compact('data_tenaga_pengajar','data_kelas'));
    }
    public function update_tenaga_pengajar(Request $request, TenagaPengajar $data_tenaga_pengajar)
    {
        //Validasi
        $request->validate([
            'nip' => 'max:20',
            'nama' => 'required',
            'foto' => 'required|image|file|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'no_telp' => 'required|min:7|max:15',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'ttl' => 'required',
            'jabatan' => 'required|min:4|max:30',
        ]);

        $file = $request->file('foto');
        $path = time() . '_' . $request->nama . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/Tenaga_Pengajar/' . $path, file_get_contents($file));

       $data_tenaga_pengajar->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'foto' => $path,
            'no_telp' => $request->no_telp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'ttl' => $request->ttl,
            'jabatan' => $request->jabatan,
            'agama' => $request->agama,
            'suku' => $request->suku,
            'rt_rw' => $request->rt_rw,
            'desa_kelurahan' => $request->desa_kelurahan,
            'kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos,
            'kelas_id' => $request->kelas_id,
        ]);

        return Redirect::route('index_tenaga_pengajar')
            ->with('success', 'Berhasil mengedit data tenaga pengajar');
    }

    public function hapus_tenaga_pengajar(TenagaPengajar $data_tenaga_pengajar)
    {
        $data_tenaga_pengajar->delete();
        return Redirect::route('index_tenaga_pengajar')->with('success','Berhasil menghapus data tenaga pengajar');
    }
    //eksport_excel_tenaga_pengajar

    public function eksport_excel_tenaga_pengajar()
    {

        return Excel::download(new ExportTenagaPengajar, "TenagaPengajar.xlsx");
    }
}
