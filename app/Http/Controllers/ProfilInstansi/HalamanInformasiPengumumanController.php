<?php

namespace App\Http\Controllers\ProfilInstansi;

use App\Http\Controllers\Controller;
use App\Models\ProfilInstansi\InformasiPengumumanPPDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class HalamanInformasiPengumumanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_ip_ppdb()
    {
        $data_ip_ppdb = InformasiPengumumanPPDB::all();
        return view('admin.Profil_Instansi.info_pengumuman_ppdb.ip_ppdb', compact('data_ip_ppdb'));
    }
    public function hapus_ip_ppdb(InformasiPengumumanPPDB $data_ip_ppdb)
    {
        $data_ip_ppdb->delete();
        return Redirect::route('index_ip_ppdb')
            ->with('success', 'Berhasil menghapus data Informasi Pengumuman PPDB!!');
    }
    public function tampil_ip_ppdb(InformasiPengumumanPPDB $data_ip_ppdb)
    {
        return view('admin.Profil_Instansi.info_pengumuman_ppdb.ip_ppdb_tampil', compact('data_ip_ppdb'));
    }
    public function store_ip_ppdb(Request $request)
    {
        $request->validate([
            'judul_informasi_pengumuman' => 'required',
            'gambar_informasi_pengumuman' => 'required',
        ]);

        //Gambar info pengumuman
        $file = $request->file('gambar_informasi_pengumuman');
        $path = time() . '_' . $request->judul_informasi_pengumuman . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/PPDB/' . $path, file_get_contents($file));


        InformasiPengumumanPPDB::create([
            'judul_informasi_pengumuman' => $request->judul_informasi_pengumuman,
            'gambar_informasi_pengumuman' => $path,
        ]);

        return Redirect::route('index_ip_ppdb')
            ->with('success', 'Berhasil menambahkan data Informasi Pengumuman PPDB!!');
    }
    public function edit_ip_ppdb(InformasiPengumumanPPDB $data_ip_ppdb)
    {
        return view('admin.Profil_Instansi.info_pengumuman_ppdb.ip_ppdb_edit', compact('data_ip_ppdb'));
    }
    public function update_ip_ppdb(Request $request, InformasiPengumumanPPDB $data_ip_ppdb)
    {
        $request->validate([
            'judul_informasi_pengumuman' => 'required',
            'gambar_informasi_pengumuman' => 'required',
        ]);

        //Gambar info pengumuman
        $file = $request->file('gambar_informasi_pengumuman');
        $path = time() . '_' . $request->judul_informasi_pengumuman . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/PPDB/' . $path, file_get_contents($file));


        $data_ip_ppdb->update([
            'judul_informasi_pengumuman' => $request->judul_informasi_pengumuman,
            'gambar_informasi_pengumuman' => $path,
        ]);

        return Redirect::route('index_ip_ppdb')
            ->with('success', 'Berhasil edit data Informasi Pengumuman ppdb!!');
    }
   
}
