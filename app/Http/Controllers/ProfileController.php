<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //Dapat di akses ketika sudah login
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Menampilkan seluruh user admin
    public function index_user_admin()
    {
        $data_user_admin = User::all();
        return view('admin.pengguna.pengguna_admin', compact('data_user_admin'));
    }

    public function tambah_profile()
    {
        $user = Auth::user();
        return view('admin.pengguna.pengguna_admin_tambah', compact('user'));
    }

    public function store_profile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:4|confirmed'
        ]);

        $user = Auth::user();
        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return Redirect::route('index_user_admin')->with('success','Berhasil menambahkan data pengguna admin!!');
    }



    public function show_profile(User $user)
    {
        $user = Auth::user();
        return view('admin.pengguna.show_profile', compact('user'));
    }

    public function edit_profile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:4|confirmed'
        ]);

        $user = Auth::user();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return Redirect::route('index_user_admin')->with('success','Berhasil mengubah data profil!');
    }

    // public function edit_user_admin(User $user)
    // {
    //     return view('admin.pengguna.pengguna_admin_edit', compact('user'));
    // }
    // public function update_user_admin(Request $request, User $user)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //     ]);

    //     $user->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //     ]);

    //     return Redirect::route('index_user_admin')->with('success', 'Berhasil edit data pengguna admin');
    // }

    public function ubah_password()
    {
        $user = Auth::user();
        return view('update_password', compact('user'));
    }
    public function store_password(Request $request)
    {
        //validasi dahulu
        //arti confirmed adalah memerlukan 2 validasi untuk melakukan pergantian password
        $request->validate([
            'new_password' => 'required|min:8|confirmed'
        ]);
        return Redirect::back();
    }

    public function hapus_admin(User $user)
    {
        $user->delete();
        return Redirect::back()->with('success', 'Berhasil menghapus data admin!!');
    }
}
