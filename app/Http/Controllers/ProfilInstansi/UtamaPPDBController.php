<?php

namespace App\Http\Controllers\ProfilInstansi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\ProfilInstansi\UtamaPPDB;
use Illuminate\Support\Facades\Redirect;

class UtamaPPDBController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_utama_ppdb()
    {
        $data_utama_ppdb = UtamaPPDB::all();
        return view('admin.Profil_Instansi.utama_ppdb.index_utama_ppdb', compact('data_utama_ppdb'));
    }
    public function hapus_utama_ppdb(UtamaPPDB $data_utama_ppdb)
    {
        $data_utama_ppdb->delete();
        return Redirect::route('index_utama_ppdb')->with('success', 'Berhasil menghapus data utama ppdb!!');
    }
    public function tampil_utama_ppdb(UtamaPPDB $data_utama_ppdb)
    {
        return view('admin.Profil_Instansi.utama_ppdb.tampil_utama_ppdb', compact('data_utama_ppdb'));
    }
    public function store_utama_ppdb(Request $request, UtamaPPDB $data_utama_ppdb)
    {
        $request->validate([
            'judul_ppdb' => 'required',
            'penjelasan_ppdb' => 'required',
            'gambar_brosur_ppdb' => 'required',
        ]);

        //Gambar Brosur
        $file_brosur = $request->file('gambar_brosur_ppdb');
        $path_brosur = time() . '_' . $request->judul_ppdb . '.' . $file_brosur->getClientOriginalExtension();

        Storage::disk('local')->put('public/Utama_PPDB/' . $path_brosur, file_get_contents($file_brosur));


        UtamaPPDB::create([
            'judul_ppdb' => $request->judul_ppdb,
            'penjelasan_ppdb' => $request->penjelasan_ppdb,
            'gambar_brosur_ppdb' => $path_brosur,
        ]);

        return Redirect::route('index_utama_ppdb')
            ->with('success', 'Berhasil menambahkan data ppdb!!');
    }
    public function edit_utama_ppdb(UtamaPPDB $data_utama_ppdb)
    {
        return view('admin.Profil_Instansi.utama_ppdb.edit_utama_ppdb', compact('data_utama_ppdb'));
    }
    public function update_utama_ppdb(Request $request, UtamaPPDB $data_utama_ppdb)
    {
        $request->validate([
            'judul_ppdb' => 'required',
            'penjelasan_ppdb' => 'required',
            'gambar_brosur_ppdb' => 'required',
        ]);

        //Gambar Brosur
        $file_brosur = $request->file('gambar_brosur_ppdb');
        $path_brosur = time() . '_' . $request->judul_ppdb . '.' . $file_brosur->getClientOriginalExtension();

        Storage::disk('local')->put('public/Utama_PPDB/' . $path_brosur, file_get_contents($file_brosur));


        $data_utama_ppdb->update([
            'judul_ppdb' => $request->judul_ppdb,
            'penjelasan_ppdb' => $request->penjelasan_ppdb,
            'gambar_brosur_ppdb' => $path_brosur,
        ]);
        return Redirect::route('index_utama_ppdb')
            ->with('success', 'Berhasil edit data utama ppdb!!');
    }
}
