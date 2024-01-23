<?php

namespace App\Http\Controllers\ProfilInstansi;

use App\Http\Controllers\Controller;
use App\Models\ProfilInstansi\InformasiAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class InformasiAkademikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_informasi_akademik()
    {
        $data_informasi_akademik = InformasiAkademik::all();
        return view('admin.Profil_Instansi.informasi_akademik.Informasi_akademik', compact('data_informasi_akademik'));
    }
    public function hapus_informasi_akademik(InformasiAkademik $data_informasi_akademik)
    {
        $data_informasi_akademik->delete();
        return Redirect::route('index_informasi_akademik')
            ->with('success', 'Berhasil menghapus data informasi akademik!!');
    }

    public function tampil_informasi_akademik(InformasiAkademik $data_informasi_akademik)
    {
        return view('admin.Profil_Instansi.informasi_akademik.informasi_akademik_tampil', compact('data_informasi_akademik'));
    }

    public function store_informasi_akademik(Request $request)
    {
        $request->validate([
            'hari_informasi_akademik' => 'required',
            'tanggal_informasi_akademik' => 'required',
            'informasi_informasi_akademik' => 'required',
            'keterangan_informasi_akademik' => 'required',
            'gambar_informasi_akademik' => 'required',
        ]);

        $file = $request->file('gambar_informasi_akademik');
        $path = time() . '_' . $request->informasi_informasi_akademik . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Informasi_Akademik/' . $path, file_get_contents($file));

        InformasiAkademik::create([
            'hari_informasi_akademik' => $request->hari_informasi_akademik,
            'tanggal_informasi_akademik' => $request->tanggal_informasi_akademik,
            'informasi_informasi_akademik' => $request->informasi_informasi_akademik,
            'keterangan_informasi_akademik' => $request->keterangan_informasi_akademik,
            'gambar_informasi_akademik' => $path,
        ]);
        return Redirect::route('index_informasi_akademik')
            ->with('success', 'Berhasil menambahkan data informasi akademik!!');
    }

    public function edit_informasi_akademik(InformasiAkademik $data_informasi_akademik)
    {
        return view('admin.Profil_Instansi.informasi_akademik.informasi_akademik_edit', compact('data_informasi_akademik'));
    }

    public function update_informasi_akademik(Request $request, InformasiAkademik $data_informasi_akademik)
    {
        $request->validate([
            'hari_informasi_akademik' => 'required',
            'tanggal_informasi_akademik' => 'required',
            'informasi_informasi_akademik' => 'required',
            'keterangan_informasi_akademik' => 'required',
            'gambar_informasi_akademik' => 'required',
        ]);

        $file = $request->file('gambar_informasi_akademik');
        $path = time() . '_' . $request->informasi_informasi_akademik . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Informasi_Akademik/' . $path, file_get_contents($file));

        $data_informasi_akademik->update([
            'hari_informasi_akademik' => $request->hari_informasi_akademik,
            'tanggal_informasi_akademik' => $request->tanggal_informasi_akademik,
            'informasi_informasi_akademik' => $request->informasi_informasi_akademik,
            'keterangan_informasi_akademik' => $request->keterangan_informasi_akademik,
            'gambar_informasi_akademik' => $path,
        ]);
        return Redirect::route('index_informasi_akademik')
            ->with('success', 'Berhasil mengubah data informasi akademik!!');
    }

   
}
