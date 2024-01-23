<?php

namespace App\Http\Controllers\ProfilInstansi;

use App\Http\Controllers\Controller;
use App\Models\ProfilInstansi\HalamanUtama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class HalamanUtamaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Admin
    public function index_halaman_utama()
    {
        $data_halaman_utama = HalamanUtama::all();
        return view('admin.Profil_Instansi.hu.halaman_utama', compact('data_halaman_utama'));
    }
    public function hapus_halaman_utama(HalamanUtama $halaman_utama)
    {
        $halaman_utama->delete();
        return Redirect::route('index_halaman_utama')->with('success', 'Berhasil menghapus data pada halaman utama!!');
    }

    public function tampil_web_halaman_utama()
    {
        $hal_utama = HalamanUtama::all();
        return view('admin.Profil_Instansi.hu.halaman_utama_show', compact('hal_utama'));
    }


    public function tambah_halaman_utama()
    {
        return view('admin.Profil_Instansi.hu.halaman_utama_tambah');
    }

    public function store_halaman_utama(Request $request)
    {
        $request->validate([
            'nama_yayasan' => 'required',
            'nama_instansi' => 'required',
            'penjelasan' => 'required',
            'deskripsi_gambar1'=> 'required',
            'deskripsi_gambar2'=> 'required',
            'deskripsi_gambar3'=> 'required',
            'gambar_pertama' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'gambar_kedua' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'gambar_ketiga' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $file1 = $request->file('gambar_pertama');
        $path1 = time() . '_' . $request->nama_instansi . '.' . $file1->getClientOriginalExtension();
        Storage::disk('local')->put('public/Halaman_Utama1/' . $path1, file_get_contents($file1));

        $file2 = $request->file('gambar_kedua');
        $path2 = time() . '_' . $request->nama_instansi . '.' . $file2->getClientOriginalExtension();
        Storage::disk('local')->put('public/Halaman_Utama2/' . $path2, file_get_contents($file2));
        
        $file3 = $request->file('gambar_ketiga');
        $path3 = time() . '_' . $request->nama_instansi . '.' . $file3->getClientOriginalExtension();
        Storage::disk('local')->put('public/Halaman_Utama3/' . $path3, file_get_contents($file3));

        HalamanUtama::create([
            'nama_yayasan' => $request->nama_yayasan,
            'nama_instansi' => $request->nama_instansi,
            'penjelasan' => $request->penjelasan,
            'deskripsi_gambar1'=> $request->deskripsi_gambar1,
            'deskripsi_gambar2'=> $request->deskripsi_gambar2,
            'deskripsi_gambar3'=> $request->deskripsi_gambar3,
            'gambar_pertama' => $path1,
            'gambar_kedua' => $path2,
            'gambar_ketiga' => $path3,
        ]);

        return Redirect::route('index_halaman_utama')->with('success', 'Berhasil menambahkan data pada halaman utama!!');
    }
    //Show detail product
    public function show_halaman_utama(HalamanUtama $halaman_utama)
    {
        return view('admin.Profil_Instansi.hu.halaman_utama_show', compact('halaman_utama'));
    }

    public function edit_halaman_utama(HalamanUtama $halaman_utama)
    {
        return view('admin.Profil_Instansi.hu.halaman_utama_edit', compact('halaman_utama'));
    }
    public function update_halaman_utama(Request $request, HalamanUtama $halaman_utama)
    {
        $request->validate([
            'nama_yayasan' => 'required',
            'nama_instansi' => 'required',
            'penjelasan' => 'required',
            'deskripsi_gambar1'=> 'required',
            'deskripsi_gambar2'=> 'required',
            'deskripsi_gambar3'=> 'required',
            'gambar_pertama' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'gambar_kedua' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'gambar_ketiga' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $file1 = $request->file('gambar_pertama');
        $path1 = time() . '_' . $request->nama_instansi . '.' . $file1->getClientOriginalExtension();
        Storage::disk('local')->put('public/Halaman_Utama1/' . $path1, file_get_contents($file1));

        $file2 = $request->file('gambar_kedua');
        $path2 = time() . '_' . $request->nama_instansi . '.' . $file2->getClientOriginalExtension();
        Storage::disk('local')->put('public/Halaman_Utama2/' . $path2, file_get_contents($file2));
        
        $file3 = $request->file('gambar_ketiga');
        $path3 = time() . '_' . $request->nama_instansi . '.' . $file3->getClientOriginalExtension();
        Storage::disk('local')->put('public/Halaman_Utama3/' . $path3, file_get_contents($file3));

        $halaman_utama->update([
            'nama_yayasan' => $request->nama_yayasan,
            'nama_instansi' => $request->nama_instansi,
            'penjelasan' => $request->penjelasan,
            'deskripsi_gambar1'=> $request->deskripsi_gambar1,
            'deskripsi_gambar2'=> $request->deskripsi_gambar2,
            'deskripsi_gambar3'=> $request->deskripsi_gambar3,
            'gambar_pertama' => $path1,
            'gambar_kedua' => $path2,
            'gambar_ketiga' => $path3,
        ]);

        return Redirect::route('index_halaman_utama', $halaman_utama)->with('success', 'Berhasil mengedit data halaman utama!!');
    }


}
