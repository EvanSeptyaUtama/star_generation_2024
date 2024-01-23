<?php

namespace App\Http\Controllers\ProfilInstansi;

use App\Http\Controllers\Controller;
use App\Models\ProfilInstansi\Aktivitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class AktivitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Admin
    public function index_aktivitas()
    {
        $data_aktivitas = Aktivitas::all();
        return view('admin.Profil_Instansi.aktivitas.aktivitas', compact('data_aktivitas'));
    }
    public function hapus_aktivitas(Aktivitas $data_aktivitas)
    {
        $data_aktivitas->delete();
        return Redirect::route('index_aktivitas');
    }


    public function tampil_aktivitas(Aktivitas $data_aktivitas)
    {
        return view('admin.Profil_Instansi.aktivitas.aktivitas_tampil', compact('data_aktivitas'));
    }

   

    public function store_aktivitas(Request $request)
    {
        $request->validate([
            'nama_aktivitas' => 'required',
            'penjelasan_aktivitas' => 'required',
            'gambar_aktivitas' => 'required',
        ]);

        $file = $request->file('gambar_aktivitas');
        $path = time() . '_' . $request->nama_aktivitas . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Kegiatan_Sekolah/' . $path, file_get_contents($file));

        Aktivitas::create([
            'nama_aktivitas' => $request->nama_aktivitas,
            'penjelasan_aktivitas' => $request->penjelasan_aktivitas,
            'gambar_aktivitas' => $path,
        ]);

        return Redirect::route('index_aktivitas')->with('success', 'Berhasil menambahkan data aktivitas!!');
    }

    public function edit_aktivitas(Aktivitas $data_aktivitas)
    {
        return view('admin.Profil_Instansi.aktivitas.aktivitas_edit', compact('data_aktivitas'));
    }

    public function update_aktivitas(Aktivitas $data_aktivitas, Request $request)
    {
        $request->validate([
            'nama_aktivitas' => 'required',
            'penjelasan_aktivitas' => 'required',
            'gambar_aktivitas' => 'required',
        ]);

        $file = $request->file('gambar_aktivitas');
        $path = time() . '_' . $request->nama_aktivitas . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Kegiatan_Sekolah/' . $path, file_get_contents($file));

        $data_aktivitas->update([
            'nama_aktivitas' => $request->nama_aktivitas,
            'penjelasan_aktivitas' => $request->penjelasan_aktivitas,
            'gambar_aktivitas' => $path,
        ]);

        return Redirect::route('index_aktivitas')->with('success', 'Berhasil edit data aktivitas!!');
    }


}
