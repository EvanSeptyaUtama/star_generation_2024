<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MataPelajaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_mata_pelajaran()
    {
        $data_mata_pelajaran = MataPelajaran::all();
        return view('admin.umum.mata_pelajaran.umum_mata_pelajaran', compact('data_mata_pelajaran'));
    }
    public function hapus_mata_pelajaran(MataPelajaran $data_mata_pelajaran)
    {
        $data_mata_pelajaran->delete();
        return Redirect::route('index_mata_pelajaran')->with('success', 'Berhasil hapus mata pelajaran!!');
    }

    public function store_mata_pelajaran(Request $request)
    {
        $request->validate([
            'mata_pelajaran' => 'required|min:2|max:25'
        ]);

        MataPelajaran::create([
            'mata_pelajaran' => $request->mata_pelajaran
        ]);

        return Redirect::route('index_mata_pelajaran')
            ->with('success', 'Berhasil tambah data mata pelajaran !!');
    }
    public function edit_mata_pelajaran(MataPelajaran $data_mata_pelajaran)
    {
        return view('admin.umum.mata_pelajaran.umum_mata_pelajaran_edit', compact('data_mata_pelajaran'));
    }
    public function update_mata_pelajaran(MataPelajaran $data_mata_pelajaran, Request $request)
    {
        $request->validate([
            'mata_pelajaran' => 'required|min:2|max:25'
        ]);

        $data_mata_pelajaran->update([
            'mata_pelajaran' => $request->mata_pelajaran
        ]);

        return Redirect::route('index_mata_pelajaran')->with('success', 'Berhasil edit data mata pelajaran!!');
    }
  
}
