<?php

namespace App\Http\Controllers\ProfilInstansi;

use App\Http\Controllers\Controller;
use App\Models\ProfilInstansi\Visi_Misi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class VisiMisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_visi_misi()
    {
        $data_visi_misi = Visi_Misi::all();
        return view('admin.Profil_Instansi.visi_misi.visi_misi', compact('data_visi_misi'));
    }
    public function hapus_visi_misi(Visi_Misi $data_visi_misi)
    {
        $data_visi_misi->delete();
        return Redirect::route('index_visi_misi')->with('success', 'Berhasil menghapus data visi-misi!!');
    }
    public function tampil_visi_misi(Visi_Misi $data_visi_misi)
    {
        return view('admin.Profil_Instansi.visi_misi.visi_misi_tampil', compact('data_visi_misi'));
    }

    public function store_visi_misi(Request $request)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'gambar_visi_misi' => 'required',
        ]);

        $file = $request->file('gambar_visi_misi');
        $path = time() . '_' . $request->visi_misi . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Visi_Misi/' . $path, file_get_contents($file));

        Visi_Misi::create([
            'visi' => $request->visi,
            'misi' => $request->misi,
            'gambar_visi_misi' => $path,
        ]);

        return Redirect::route('index_visi_misi')->with('success', 'Berhasil menambahkan data visi-misi!!');
    }

    public function edit_visi_misi(Visi_Misi $data_visi_misi)
    {
        return view('admin.Profil_Instansi.visi_misi.visi_misi_edit', compact('data_visi_misi'));
    }

    public function update_visi_misi(Request $request, Visi_Misi $data_visi_misi)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'gambar_visi_misi' => 'required',
        ]);

        $file = $request->file('gambar_visi_misi');
        $path = time() . '_' . $request->visi_misi . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Visi_Misi/' . $path, file_get_contents($file));

        $data_visi_misi->update([
            'visi' => $request->visi,
            'misi' => $request->misi,
            'gambar_visi_misi' => $path,
        ]);

        return Redirect::route('index_visi_misi')->with('success', 'Berhasil menambahkan data visi-misi!!');
    }


}
