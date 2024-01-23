<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TahunPelajaran;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;

class TahunPelajaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_tahun_pelajaran()
    {
        $data_tahun_pelajaran = TahunPelajaran::all();
        return view('admin.umum.tahun_pelajaran.umum_tahun_pelajaran', compact('data_tahun_pelajaran'));
    }
    public function hapus_tahun_pelajaran(TahunPelajaran $data_tahun_pelajaran)
    {
        $data_tahun_pelajaran->delete();
        return Redirect::route('index_tahun_pelajaran')->with('success', 'Berhasil menghapus data!!');
    }

    public function store_tahun_pelajaran(Request $request)
    {
        $request->validate([
            'tahun_ajaran' => 'required|min:4|max:9',
            'semester' => 'required|alpha|min:5|max:6',
        ]);

        TahunPelajaran::create([
            'tahun_ajaran' => $request->tahun_ajaran,
            'semester' => $request->semester
        ]);

        return Redirect::route('index_tahun_pelajaran')->with('success', 'Berhasil menambahkan data!!');
    }

    public function edit_tahun_pelajaran(TahunPelajaran $data_tahun_pelajaran)
    {
        return view('admin.umum.tahun_pelajaran.umum_tahun_pelajaran_edit', compact('data_tahun_pelajaran'));
    }

    public function update_tahun_pelajaran(Request $request, TahunPelajaran $data_tahun_pelajaran)
    {
        $request->validate([
            'tahun_ajaran' => 'required|min:4|max:9',
            'semester' => 'required|alpha|min:5|max:6',
        ]);

        $data_tahun_pelajaran->update([
            'tahun_ajaran' => $request->tahun_ajaran,
            'semester' => $request->semester
        ]);

        return Redirect::route('index_tahun_pelajaran')->with('success', 'Berhasil mengedit data!!');
    }

    
}
