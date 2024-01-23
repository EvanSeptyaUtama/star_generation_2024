<?php

namespace App\Http\Controllers\ProfilInstansi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfilInstansi\Sejarah;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class SejarahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_sejarah()
    {
        $data_sejarah = Sejarah::all();
        return view('admin.Profil_Instansi.sejarah.sejarah', compact('data_sejarah'));
    }
    public function hapus_sejarah(Sejarah $data_sejarah)
    {
        $data_sejarah->delete();
        return Redirect::route('index_sejarah')
            ->with('success', 'Berhasil menghapus data sejarah!!');
    }

    public function tampil_sejarah(Sejarah $data_sejarah)
    {
        return view('admin.Profil_Instansi.sejarah.sejarah_tampil', compact('data_sejarah'));
    }


    public function store_sejarah(Request $request)
    {
        $request->validate([
            'judul_sejarah' => 'required',
            'penjelasan_singkat' => 'required',
            'penjelasan_lengkap' => 'required',
            'gambar_sejarah' => 'required',
        ]);

        $file = $request->file('gambar_sejarah');
        $path = time() . '_' . $request->judul_sejarah . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Sejarah/' . $path, file_get_contents($file));

        Sejarah::create([
            'judul_sejarah' => $request->judul_sejarah,
            'penjelasan_singkat' => $request->penjelasan_singkat,
            'penjelasan_lengkap' => $request->penjelasan_lengkap,
            'gambar_sejarah' => $path,
        ]);
        return Redirect::route('index_sejarah')
            ->with('success', 'Berhasil menmbahkan data sejarah!!');
    }

    public function edit_sejarah(Sejarah $data_sejarah)
    {
        return view('admin.Profil_Instansi.sejarah.sejarah_edit', compact('data_sejarah'));
    }

    public function update_sejarah(Request $request, Sejarah $data_sejarah)
    {
        $request->validate([
            'judul_sejarah' => 'required',
            'penjelasan_singkat' => 'required',
            'penjelasan_lengkap' => 'required',
            'gambar_sejarah' => 'required',
        ]);

        $file = $request->file('gambar_sejarah');
        $path = time() . '_' . $request->judul_sejarah . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Sejarah/' . $path, file_get_contents($file));

        $data_sejarah->update([
            'judul_sejarah' => $request->judul_sejarah,
            'penjelasan_singkat' => $request->penjelasan_singkat,
            'penjelasan_lengkap' => $request->penjelasan_lengkap,
            'gambar_sejarah' => $path,
        ]);
        return Redirect::route('index_sejarah')
            ->with('success', 'Berhasil edit data sejarah!!');
    }

}
