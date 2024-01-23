<?php

namespace App\Http\Controllers\ProfilInstansi;

use App\Http\Controllers\Controller;
use App\Models\ProfilInstansi\SusunanOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class SusunanOrganisasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_susunan_organisasi()
    {
        $data_susunan_organisasi = SusunanOrganisasi::all();
        return view('admin.Profil_Instansi.susunan_organisasi.susunan_organisasi', compact('data_susunan_organisasi'));
    }
    public function hapus_susunan_organisasi(SusunanOrganisasi $data_susunan_organisasi)
    {
        $data_susunan_organisasi->delete();
        return Redirect::route('index_susunan_organisasi')
            ->with('success', 'Berhasil menghapus data pada susunan organisasi!!');
    }
    public function tampil_susunan_organisasi(SusunanOrganisasi $data_susunan_organisasi)
    {
        return view('admin.Profil_Instansi.susunan_organisasi.susunan_organisasi_tampil', compact('data_susunan_organisasi'));
    }
    public function store_susunan_organisasi(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);

        $file = $request->file('gambar');
        $path = time() . '_' . $request->nama . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Susunan_Organisasi/' . $path, file_get_contents($file));

        SusunanOrganisasi::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'gambar' => $path,
        ]);

        return Redirect::route('index_susunan_organisasi')
            ->with('success', 'Berhasil menambahkan data pada susunan organisasi!!');
    }
    public function edit_susunan_organisasi(SusunanOrganisasi $data_susunan_organisasi)
    {
        return view('admin.Profil_Instansi.susunan_organisasi.susunan_organisasi_edit', compact('data_susunan_organisasi'));
    }
    public function update_susunan_organisasi(SusunanOrganisasi $data_susunan_organisasi, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required',
        ]);

        $file = $request->file('gambar');
        $path = time() . '_' . $request->nama . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Susunan_Organisasi/' . $path, file_get_contents($file));

        $data_susunan_organisasi->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'gambar' => $path,
        ]);

        return Redirect::route('index_susunan_organisasi')
            ->with('success', 'Berhasil menambahkan data pada susunan organisasi!!');
    }
   
}
