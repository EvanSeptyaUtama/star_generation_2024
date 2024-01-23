<?php

use App\Models\JadwalMengajarGuru;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AbsenGuruController;
use App\Http\Controllers\Coba\KotaController;
use App\Http\Controllers\InputDataController;
use App\Http\Controllers\AbsenSiswaController;
use App\Http\Controllers\Coba\StudentController;
use App\Models\ProfilInstansi\InformasiAkademik;
use App\Http\Controllers\Coba\KategoriController;
use App\Http\Controllers\KepalaSekolahController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\JadwalMengajarController;
use App\Http\Controllers\TahunPelajaranController;
use App\Http\Controllers\TenagaPengajarController;
use App\Http\Controllers\JadwalMengajarGuruController;
use App\Models\ProfilInstansi\InformasiPengumumanPPDB;
use App\Http\Controllers\AbsenTenagaPengajarController;
use App\Http\Controllers\ProfilInstansi\SejarahController;
use App\Http\Controllers\ProfilInstansi\VisiMisiController;
use App\Http\Controllers\ProfilInstansi\AktivitasController;
use App\Http\Controllers\ProfilInstansi\UtamaPPDBController;
use App\Http\Controllers\ProfilInstansi\HalamanPPDBController;
use App\Http\Controllers\ProfilInstansi\HalamanUtamaController;
use App\Http\Controllers\ProfilInstansi\ProfilinstansiController;
use App\Http\Controllers\ProfilInstansi\InformasiAkademikController;
use App\Http\Controllers\ProfilInstansi\SusunanOrganisasiController;
use App\Http\Controllers\ProfilInstansi\HalamanInformasiPengumumanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Hak akses PUBLIC
Route::get('/', [ProfilinstansiController::class, 'index_halaman_utama'])->name('halaman_utama');


Route::get('/penerimaan_peserta_didik_baru', [ProfilinstansiController::class, 'index_halaman_web_ppdb'])->name('index_halaman_web_ppdb');
Auth::routes();

Route::get('/products', [ProductController::class, 'index_product'])->name('index_product');

//Hak Akses ADMIN
Route::middleware(['admin'])->group(function () {
    //WEB - ADMIN
    Route::get('/admin', [SiswaController::class, 'hitung_data_hal_admin'])->name('halaman_utama_admin');

    //Profile Pengguna Admin
    Route::get('/pengguna_admin', [ProfileController::class, 'index_user_admin'])->name('index_user_admin');
    Route::get('/edit_pengguna_admin', [ProfileController::class, 'show_profile'])->name('show_profile');
    // Route::get('/edit_profile/{user}', [ProfileController::class, 'edit_profile'])->name('edit_profile');
    Route::post('/profile_admin/tambah', [ProfileController::class, 'store_profile'])->name('store_profile');
    Route::post('/profile_admin/edit/{user}', [ProfileController::class, 'edit_profile'])->name('edit_profile');
    Route::delete('/hapus_profile/{user}', [ProfileController::class, 'hapus_admin'])->name('hapus_admin');


    //Pengguna admin
    Route::get('/pengguna_admin', [ProfileController::class, 'index_user_admin'])->name('index_user_admin');

    //Master - Data Siswa
    Route::get('/siswa', [SiswaController::class, 'index_siswa'])->name('index_siswa');
    Route::get('/export_excel_siswa', [SiswaController::class, 'eksport_excel'])->name('eksport_excel_siswa');
    Route::get('/tampil_siswa/{data_siswa}', [SiswaController::class, 'tampil_siswa'])->name('tampil_siswa');
    Route::post('/store_siswa/store', [SiswaController::class, 'store_siswa'])->name('store_siswa');
    Route::get('/edit_siswa/{data_siswa}/edit', [SiswaController::class, 'edit_siswa'])->name('edit_siswa');
    Route::patch('/update_siswa/{data_siswa}/update', [SiswaController::class, 'update_siswa'])->name('update_siswa');
    Route::delete('/hapus_siswa/{data_siswa}', [SiswaController::class, 'hapus_siswa'])->name('hapus_siswa');

     //Data Tenaga Pengajar
     Route::get('/tenaga_pengajar', [TenagaPengajarController::class,'index_tenaga_pengajar'])->name('index_tenaga_pengajar');
     Route::get('/detail_tenaga_pengajar/{data_tenaga_pengajar}', [TenagaPengajarController::class,'tampil_tenaga_pengajar'])->name('tampil_tenaga_pengajar');
     Route::post('/store_tenaga_pengajar', [TenagaPengajarController::class,'store_tenaga_pengajar'])->name('store_tenaga_pengajar');
     Route::get('/edit_tenaga_pengajar/{data_tenaga_pengajar}', [TenagaPengajarController::class,'edit_tenaga_pengajar'])->name('edit_tenaga_pengajar');
     Route::patch('/update_tenaga_pengajar/{data_tenaga_pengajar}', [TenagaPengajarController::class,'update_tenaga_pengajar'])->name('update_tenaga_pengajar');
     Route::delete('/hapus_tenaga_pengajar/{data_tenaga_pengajar}', [TenagaPengajarController::class, 'hapus_tenaga_pengajar'])->name('hapus_tenaga_pengajar');
     Route::get('/export_tenaga_pengajar_excel', [TenagaPengajarController::class, 'eksport_excel_tenaga_pengajar'])->name('eksport_excel_tenaga_pengajar');
    //Umum - Data Kelas
    Route::get('/kelas', [KelasController::class, 'index_kelas'])->name('index_kelas');
    Route::get('/tampil_kelas/{data_kelas}', [KelasController::class, 'tampil_kelas'])->name('tampil_kelas');
    Route::get('/tambah_kelas', [KelasController::class, 'tambah_kelas'])->name('tambah_kelas');
    Route::post('/store_kelas', [KelasController::class, 'store_kelas'])->name('store_kelas');
    Route::get('/edit_kelas/{data_kelas}', [KelasController::class, 'edit_kelas'])->name('edit_kelas');
    Route::patch('/update_kelas/{data_kelas}', [KelasController::class, 'update_kelas'])->name('update_kelas');
    Route::delete('/hapus_kelas/{data_kelas}', [KelasController::class, 'hapus_kelas'])->name('hapus_kelas');

    //Umum - Data Tahun Pelajaran
    Route::get('/tahun_pelajaran', [TahunPelajaranController::class, 'index_tahun_pelajaran'])->name('index_tahun_pelajaran');
    Route::post('/store_tahun_pelajaran', [TahunPelajaranController::class, 'store_tahun_pelajaran'])->name('store_tahun_pelajaran');
    Route::get('/edit_tahun_pelajaran/{data_tahun_pelajaran}', [TahunPelajaranController::class, 'edit_tahun_pelajaran'])->name('edit_tahun_pelajaran');
    Route::patch('/store_tahun_pelajaran/{data_tahun_pelajaran}', [TahunPelajaranController::class, 'update_tahun_pelajaran'])->name('update_tahun_pelajaran');
    Route::delete('/hapus_tahun_pelajaran/{data_tahun_pelajaran}', [TahunPelajaranController::class, 'hapus_tahun_pelajaran'])->name('hapus_tahun_pelajaran');

    //Umum - Data Mata Pelajaran
    Route::get('/mata_pelajaran', [MataPelajaranController::class, 'index_mata_pelajaran'])->name('index_mata_pelajaran');
    Route::post('/store_mata_pelajaran', [MataPelajaranController::class, 'store_mata_pelajaran'])->name('store_mata_pelajaran');
    Route::get('/edit_mata_pelajaran/{data_mata_pelajaran}', [MataPelajaranController::class, 'edit_mata_pelajaran'])->name('edit_mata_pelajaran');
    Route::patch('/update_mata_pelajaran/{data_mata_pelajaran}', [MataPelajaranController::class, 'update_mata_pelajaran'])->name('update_mata_pelajaran');
    Route::delete('/hapus_mata_pelajaran/{data_mata_pelajaran}', [MataPelajaranController::class, 'hapus_mata_pelajaran'])->name('hapus_mata_pelajaran');

    //Profil Instansi - Halaman Utama
    Route::get('/utama', [HalamanUtamaController::class, 'index_halaman_utama'])->name('index_halaman_utama');
    Route::get('/tambah_halaman_utama', [HalamanUtamaController::class, 'tambah_halaman_utama'])->name('tambah_halaman_utama');
    Route::post('/store_halaman_utama', [HalamanUtamaController::class, 'store_halaman_utama'])->name('store_halaman_utama');
    Route::get('/edit_utama/{halaman_utama}', [HalamanUtamaController::class, 'edit_halaman_utama'])->name('edit_halaman_utama');
    Route::patch('/update_utama/{halaman_utama}/update_halaman_utama', [HalamanUtamaController::class, 'update_halaman_utama'])->name('update_halaman_utama');
    Route::get('/tampil_utama/{halaman_utama}', [HalamanUtamaController::class, 'show_halaman_utama'])->name('show_halaman_utama');
    Route::delete('/hapus_utama/{halaman_utama}', [HalamanUtamaController::class, 'hapus_halaman_utama'])->name('hapus_halaman_utama');

    //Profil Instansi - Aktivitas Sekolah
    Route::get('/aktivitas', [AktivitasController::class, 'index_aktivitas'])->name('index_aktivitas'); //halaman admin
    Route::get('/tampil_aktivitas/{data_aktivitas}', [AktivitasController::class, 'tampil_aktivitas'])->name('tampil_aktivitas');
    Route::get('/tambah_aktivitas', [AktivitasController::class, 'tambah_aktivitas'])->name('tambah_aktivitas');
    Route::post('/store_aktivitas', [AktivitasController::class, 'store_aktivitas'])->name('store_aktivitas');
    Route::get('/edit_aktivitas/{data_aktivitas}', [AktivitasController::class, 'edit_aktivitas'])->name('edit_aktivitas');
    Route::patch('/update_aktivitas/{data_aktivitas}', [AktivitasController::class, 'update_aktivitas'])->name('update_aktivitas');
    Route::delete('/hapus_aktivitas/{data_aktivitas}', [AktivitasController::class, 'hapus_aktivitas'])->name('hapus_aktivitas');

    //Profil Instansi - Sejarah Sekolah
    Route::get('/sejarah', [SejarahController::class, 'index_sejarah'])->name('index_sejarah'); //halaman admin
    Route::get('/tampil_sejarah/{data_sejarah}', [SejarahController::class, 'tampil_sejarah'])->name('tampil_sejarah');
    Route::get('/tambah_sejarah/tambah_sejarah', [SejarahController::class, 'tambah_sejarah'])->name('tambah_sejarah');
    Route::post('/store_sejarah/store_sejarah', [SejarahController::class, 'store_sejarah'])->name('store_sejarah');
    Route::get('/edit_sejarah/{data_sejarah}', [SejarahController::class, 'edit_sejarah'])->name('edit_sejarah');
    Route::patch('/update_sejarah/{data_sejarah}', [SejarahController::class, 'update_sejarah'])->name('update_sejarah');
    Route::delete('/hapus_sejarah/{data_sejarah}', [SejarahController::class, 'hapus_sejarah'])->name('hapus_sejarah');

    //Profil Instansi - Visi Misi
    Route::get('/visi-misi', [VisiMisiController::class, 'index_visi_misi'])->name('index_visi_misi'); //halaman admin
    Route::get('/tampil_visi-misi/{data_visi_misi}', [VisiMisiController::class, 'tampil_visi_misi'])->name('tampil_visi_misi');
    Route::get('/tambah_visi-misi', [VisiMisiController::class, 'tambah_visi_misi'])->name('tambah_visi_misi');
    Route::post('/store_visi_misi', [VisiMisiController::class, 'store_visi_misi'])->name('store_visi_misi');
    Route::get('/edit_visi-misi/{data_visi_misi}', [VisiMisiController::class, 'edit_visi_misi'])->name('edit_visi_misi');
    Route::patch('/update_visi-misi/{data_visi_misi}', [VisiMisiController::class, 'update_visi_misi'])->name('update_visi_misi');
    Route::delete('/hapus_visi-misi/{data_visi_misi}', [VisiMisiController::class, 'hapus_visi_misi'])->name('hapus_visi_misi');

    //Profil Instansi - Susunan Organisasi
    Route::get('/susunan_organisasi', [SusunanOrganisasiController::class, 'index_susunan_organisasi'])->name('index_susunan_organisasi'); //halaman admin
    Route::get('/tampil_susunan_organisasi/{data_susunan_organisasi}', [SusunanOrganisasiController::class, 'tampil_susunan_organisasi'])->name('tampil_susunan_organisasi');
    Route::get('/tambah_susunan_organisasi', [SusunanOrganisasiController::class, 'tambah_susunan_organisasi'])->name('tambah_susunan_organisasi');
    Route::post('/store_susunan_organisasi', [SusunanOrganisasiController::class, 'store_susunan_organisasi'])->name('store_susunan_organisasi');
    Route::get('/edit_susunan_organisasi/{data_susunan_organisasi}', [SusunanOrganisasiController::class, 'edit_susunan_organisasi'])->name('edit_susunan_organisasi');
    Route::patch('/update_susunan_organisasi/{data_susunan_organisasi}', [SusunanOrganisasiController::class, 'update_susunan_organisasi'])->name('update_susunan_organisasi');
    Route::delete('/hapus_susunan_organisasi/{data_susunan_organisasi}', [SusunanOrganisasiController::class, 'hapus_susunan_organisasi'])->name('hapus_susunan_organisasi');

    //Profil Instansi - Informasi Akademik
    Route::get('/informasi_akademik', [InformasiAkademikController::class, 'index_informasi_akademik'])->name('index_informasi_akademik'); //halaman admin
    Route::get('/tampil_informasi_akademik/{data_informasi_akademik}', [InformasiAkademikController::class, 'tampil_informasi_akademik'])->name('tampil_informasi_akademik');
    Route::get('/tambah_informasi_akademik', [InformasiAkademikController::class, 'tambah_informasi_akademik'])->name('tambah_informasi_akademik');
    Route::post('/store_informasi_akademik', [InformasiAkademikController::class, 'store_informasi_akademik'])->name('store_informasi_akademik');
    Route::get('/edit_informasi_akademik/{data_informasi_akademik}', [InformasiAkademikController::class, 'edit_informasi_akademik'])->name('edit_informasi_akademik');
    Route::patch('/update_informasi_akademik/{data_informasi_akademik}', [InformasiAkademikController::class, 'update_informasi_akademik'])->name('update_informasi_akademik');
    Route::delete('/hapus_informasi_akademik/{data_informasi_akademik}', [InformasiAkademikController::class, 'hapus_informasi_akademik'])->name('hapus_informasi_akademik');

    //Halaman Utama PPDB
    Route::get('/utama_ppdb', [UtamaPPDBController::class, 'index_utama_ppdb'])->name('index_utama_ppdb');
    Route::get('/tampil_utama_ppdb/{data_utama_ppdb}', [UtamaPPDBController::class, 'tampil_utama_ppdb'])->name('tampil_utama_ppdb');
    Route::get('/tambah_utama_ppdb', [UtamaPPDBController::class, 'tambah_utama_ppdb'])->name('tambah_utama_ppdb');
    Route::post('/store_utama_ppdb', [UtamaPPDBController::class, 'store_utama_ppdb'])->name('store_utama_ppdb');
    Route::get('/edit_utama_ppdb/{data_utama_ppdb}', [UtamaPPDBController::class, 'edit_utama_ppdb'])->name('edit_utama_ppdb');
    Route::patch('/update_utama_ppdb/{data_utama_ppdb}', [UtamaPPDBController::class, 'update_utama_ppdb'])->name('update_utama_ppdb');
    Route::delete('/hapus_utama_ppdb/{data_utama_ppdb}', [UtamaPPDBController::class, 'hapus_utama_ppdb'])->name('hapus_utama_ppdb');

    //Halaman Pengumuman PPDB
    Route::get('/informasi_pengumuman', [HalamanInformasiPengumumanController::class, 'index_ip_ppdb'])->name('index_ip_ppdb');
    Route::get('/tampil_informasi_pengumuman/{data_ip_ppdb}', [HalamanInformasiPengumumanController::class, 'tampil_ip_ppdb'])->name('tampil_ip_ppdb');
    Route::get('/tambah_informasi_pengumuman', [HalamanInformasiPengumumanController::class, 'tambah_ip_ppdb'])->name('tambah_ip_ppdb');
    Route::post('/store_informasi_pengumuman', [HalamanInformasiPengumumanController::class, 'store_ip_ppdb'])->name('store_ip_ppdb');
    Route::get('/edit_informasi_pengumuman/{data_ip_ppdb}', [HalamanInformasiPengumumanController::class, 'edit_ip_ppdb'])->name('edit_ip_ppdb');
    Route::patch('/update_informasi_pengumuman/{data_ip_ppdb}', [HalamanInformasiPengumumanController::class, 'update_ip_ppdb'])->name('update_ip_ppdb');
    Route::delete('/hapus_informasi_pengumuman/{data_ip_ppdb}', [HalamanInformasiPengumumanController::class, 'hapus_ip_ppdb'])->name('hapus_ip_ppdb');

    //Absen Siswa
    Route::get('/absensi_siswa', [AbsenSiswaController::class, 'index_absen_siswa'])->name('index_absen_siswa'); //halaman admin
    Route::get('/tampil_absensi_siswa/{data_absen_siswa}', [AbsenSiswaController::class, 'tampil_absen_siswa'])->name('tampil_absen_siswa');
    Route::post('/tambah_absensi_siswa', [AbsenSiswaController::class, 'store_absen_siswa'])->name('store_absen_siswa');
    Route::get('/edit_absensi_siswa/{data_absen_siswa}', [AbsenSiswaController::class, 'edit_absen_siswa'])->name('edit_absen_siswa');
    Route::patch('/update_absensi_siswa/{data_absen_siswa}', [AbsenSiswaController::class, 'update_absen_siswa'])->name('update_absen_siswa');
    Route::delete('/hapus_absensi_siswa/{data_absen_siswa}', [AbsenSiswaController::class, 'hapus_absen_siswa'])->name('hapus_absen_siswa');
    //Rekapitulasi Absensi
    Route::get('/rekapitulasi_absensi_siswa', [AbsenSiswaController::class, 'index_rekap_absen_siswa']);
    Route::post('/rekapitulasi_absensi_siswa', [AbsenSiswaController::class, 'rekap_absen_siswa'])->name('rekap_absen_siswa');
    
    //Absen Siswa - Laporan Harian
    Route::get('/laporan_harian_absensi_kelas_1', [AbsenSiswaController::class, 'laporan_harian_absen_siswa_kelas_1'])->name('laporan_harian_absen_siswa_kelas_1');
    Route::get('/export_excel_absensi_kelas_1', [AbsenSiswaController::class, 'eksport_excel_kelas_1'])->name('eksport_excel_kelas_1');
    Route::get('/laporan_harian_absensi_kelas_2', [AbsenSiswaController::class, 'laporan_harian_absen_siswa_kelas_2'])->name('laporan_harian_absen_siswa_kelas_2');
    Route::get('/export_excel_absensi_kelas_2', [AbsenSiswaController::class, 'eksport_excel_kelas_2'])->name('eksport_excel_kelas_2');
    Route::get('/laporan_harian_absensi_kelas_3', [AbsenSiswaController::class, 'laporan_harian_absen_siswa_kelas_3'])->name('laporan_harian_absen_siswa_kelas_3');
    Route::get('/export_excel_absensi_kelas_3', [AbsenSiswaController::class, 'eksport_excel_kelas_3'])->name('eksport_excel_kelas_3');
    Route::get('/laporan_harian_absensi_kelas_4', [AbsenSiswaController::class, 'laporan_harian_absen_siswa_kelas_4'])->name('laporan_harian_absen_siswa_kelas_4');
    Route::get('/export_excel_absensi_kelas_4', [AbsenSiswaController::class, 'eksport_excel_kelas_4'])->name('eksport_excel_kelas_4');

      //Absen Tenaga Pengajar
    Route::get('/absensi_tenaga_pengajar', [AbsenTenagaPengajarController::class, 'index_absensi_tenaga_pengajar'])->name('index_absensi_tenaga_pengajar'); //halaman admin
    Route::get('/detail_absensi_tenaga_pengajar/{data_absen_tenaga_pengajar}', [AbsenTenagaPengajarController::class, 'tampil_absensi_tenaga_pengajar'])->name('tampil_absensi_tenaga_pengajar');
    Route::post('/store_absensi_tenaga_pengajar', [AbsenTenagaPengajarController::class, 'store_absensi_tenaga_pengajar'])->name('store_absensi_tenaga_pengajar');
    Route::get('/edit_absensi_tenaga_pengajar/{data_absen_tenaga_pengajar}', [AbsenTenagaPengajarController::class, 'edit_absensi_tenaga_pengajar'])->name('edit_absensi_tenaga_pengajar');
    Route::patch('/update_absensi_tenaga_pengajar/{data_absen_tenaga_pengajar}', [AbsenTenagaPengajarController::class, 'update_absensi_tenaga_pengajar'])->name('update_absensi_tenaga_pengajar');
    Route::delete('/hapus_absensi_pengajar/{data_absen_tenaga_pengajar}', [AbsenTenagaPengajarController::class, 'hapus_absensi_tenaga_pengajar'])->name('hapus_absensi_tenaga_pengajar');
    Route::get('/export_excel_absensi_tenaga_pengajar', [AbsenTenagaPengajarController::class, 'eksport_excel_absensi_tenaga_pengajar'])->name('eksport_excel_absensi_tenaga_pengajar');
    Route::post('/rekapitulasi_absensi_tenaga_pengajar_proses', [AbsenTenagaPengajarController::class, 'rekap_absensi_tenaga_pengajar'])->name('rekap_absensi_tenaga_pengajar'); //halaman admin
    Route::get('/rekapitulasi_absensi_tenaga_pengajar', [AbsenTenagaPengajarController::class, 'index_rekap_absensi_tenaga_pengajar'])->name('index_rekap_absensi_tenaga_pengajar'); //halaman admin
    //Jadwal Mengajar Guru
    Route::get('/jadwal_mengajar', [JadwalMengajarGuruController::class, 'index_jadwal_mengajar_guru'])->name('index_jadwal_mengajar_guru');
    Route::get('/export_excel_jadwal_mengajar', [JadwalMengajarGuruController::class, 'eksport_excel_jadwal_mengajar_guru'])->name('eksport_excel_jadwal_mengajar_guru');
    Route::get('/tampil_jadwal_mengajar/{data_jadwal_mengajar_guru}', [JadwalMengajarGuruController::class, 'tampil_jadwal_mengajar_guru'])->name('tampil_jadwal_mengajar_guru');
    Route::get('/tambah_jadwal_mengajar', [JadwalMengajarGuruController::class, 'tambah_jadwal_mengajar_guru'])->name('tambah_jadwal_mengajar_guru');
    Route::post('/store_jadwal_mengajar', [JadwalMengajarGuruController::class, 'store_jadwal_mengajar_guru'])->name('store_jadwal_mengajar_guru');
    Route::get('/edit_jadwal_mengajar/{data_jadwal_mengajar_guru}', [JadwalMengajarGuruController::class, 'edit_jadwal_mengajar_guru'])->name('edit_jadwal_mengajar_guru');
    Route::patch('/update_jadwal_mengajar/{data_jadwal_mengajar_guru}', [JadwalMengajarGuruController::class, 'update_jadwal_mengajar_guru'])->name('update_jadwal_mengajar_guru');
    Route::delete('/hapus_jadwal_mengajar/{data_jadwal_mengajar_guru}', [JadwalMengajarGuruController::class, 'hapus_jadwal_mengajar_guru'])->name('hapus_jadwal_mengajar_guru');
});

Route::middleware(['auth'])->group(function () {
   //WEB - ADMIN
   Route::get('/admin', [SiswaController::class, 'hitung_data_hal_admin'])->name('halaman_utama_admin');

   //Profile Pengguna Admin
   Route::get('/pengguna_admin', [ProfileController::class, 'index_user_admin'])->name('index_user_admin');
   Route::get('/edit_pengguna_admin', [ProfileController::class, 'show_profile'])->name('show_profile');
   // Route::get('/edit_profile/{user}', [ProfileController::class, 'edit_profile'])->name('edit_profile');
   Route::post('/profile_admin/tambah', [ProfileController::class, 'store_profile'])->name('store_profile');
   Route::post('/profile_admin/edit/{user}', [ProfileController::class, 'edit_profile'])->name('edit_profile');
   Route::delete('/hapus_profile/{user}', [ProfileController::class, 'hapus_admin'])->name('hapus_admin');


   //Pengguna admin
   Route::get('/pengguna_admin', [ProfileController::class, 'index_user_admin'])->name('index_user_admin');

   //Master - Data Siswa
   Route::get('/siswa', [SiswaController::class, 'index_siswa'])->name('index_siswa');
   Route::get('/export_excel_siswa', [SiswaController::class, 'eksport_excel'])->name('eksport_excel_siswa');
   Route::get('/tampil_siswa/{data_siswa}', [SiswaController::class, 'tampil_siswa'])->name('tampil_siswa');
   Route::post('/store_siswa/store', [SiswaController::class, 'store_siswa'])->name('store_siswa');
   Route::get('/edit_siswa/{data_siswa}/edit', [SiswaController::class, 'edit_siswa'])->name('edit_siswa');
   Route::patch('/update_siswa/{data_siswa}/update', [SiswaController::class, 'update_siswa'])->name('update_siswa');
   Route::delete('/hapus_siswa/{data_siswa}', [SiswaController::class, 'hapus_siswa'])->name('hapus_siswa');

    //Data Tenaga Pengajar
    Route::get('/tenaga_pengajar', [TenagaPengajarController::class,'index_tenaga_pengajar'])->name('index_tenaga_pengajar');
    Route::get('/detail_tenaga_pengajar/{data_tenaga_pengajar}', [TenagaPengajarController::class,'tampil_tenaga_pengajar'])->name('tampil_tenaga_pengajar');
    Route::post('/store_tenaga_pengajar', [TenagaPengajarController::class,'store_tenaga_pengajar'])->name('store_tenaga_pengajar');
    Route::get('/edit_tenaga_pengajar/{data_tenaga_pengajar}', [TenagaPengajarController::class,'edit_tenaga_pengajar'])->name('edit_tenaga_pengajar');
    Route::patch('/update_tenaga_pengajar/{data_tenaga_pengajar}', [TenagaPengajarController::class,'update_tenaga_pengajar'])->name('update_tenaga_pengajar');
    Route::delete('/hapus_tenaga_pengajar/{data_tenaga_pengajar}', [TenagaPengajarController::class, 'hapus_tenaga_pengajar'])->name('hapus_tenaga_pengajar');
    Route::get('/export_tenaga_pengajar_excel', [TenagaPengajarController::class, 'eksport_excel_tenaga_pengajar'])->name('eksport_excel_tenaga_pengajar');
   //Umum - Data Kelas
   Route::get('/kelas', [KelasController::class, 'index_kelas'])->name('index_kelas');
   Route::get('/tampil_kelas/{data_kelas}', [KelasController::class, 'tampil_kelas'])->name('tampil_kelas');
   Route::post('/store_kelas', [KelasController::class, 'store_kelas'])->name('store_kelas');
   Route::get('/edit_kelas/{data_kelas}', [KelasController::class, 'edit_kelas'])->name('edit_kelas');
   Route::patch('/update_kelas/{data_kelas}', [KelasController::class, 'update_kelas'])->name('update_kelas');
   Route::delete('/hapus_kelas/{data_kelas}', [KelasController::class, 'hapus_kelas'])->name('hapus_kelas');

   //Umum - Data Tahun Pelajaran
   Route::get('/tahun_pelajaran', [TahunPelajaranController::class, 'index_tahun_pelajaran'])->name('index_tahun_pelajaran');
   Route::get('/tambah_tahun_pelajaran', [TahunPelajaranController::class, 'tambah_tahun_pelajaran'])->name('tambah_tahun_pelajaran');
   Route::post('/store_tahun_pelajaran', [TahunPelajaranController::class, 'store_tahun_pelajaran'])->name('store_tahun_pelajaran');
   Route::get('/edit_tahun_pelajaran/{data_tahun_pelajaran}', [TahunPelajaranController::class, 'edit_tahun_pelajaran'])->name('edit_tahun_pelajaran');
   Route::patch('/store_tahun_pelajaran/{data_tahun_pelajaran}', [TahunPelajaranController::class, 'update_tahun_pelajaran'])->name('update_tahun_pelajaran');
   Route::delete('/hapus_tahun_pelajaran/{data_tahun_pelajaran}', [TahunPelajaranController::class, 'hapus_tahun_pelajaran'])->name('hapus_tahun_pelajaran');

   //Umum - Data Mata Pelajaran
   Route::get('/mata_pelajaran', [MataPelajaranController::class, 'index_mata_pelajaran'])->name('index_mata_pelajaran');
   Route::post('/store_mata_pelajaran', [MataPelajaranController::class, 'store_mata_pelajaran'])->name('store_mata_pelajaran');
   Route::get('/edit_mata_pelajaran/{data_mata_pelajaran}', [MataPelajaranController::class, 'edit_mata_pelajaran'])->name('edit_mata_pelajaran');
   Route::patch('/update_mata_pelajaran/{data_mata_pelajaran}', [MataPelajaranController::class, 'update_mata_pelajaran'])->name('update_mata_pelajaran');
   Route::delete('/hapus_mata_pelajaran/{data_mata_pelajaran}', [MataPelajaranController::class, 'hapus_mata_pelajaran'])->name('hapus_mata_pelajaran');

   //Profil Instansi - Halaman Utama
   Route::get('/utama', [HalamanUtamaController::class, 'index_halaman_utama'])->name('index_halaman_utama');
   Route::get('/tambah_halaman_utama', [HalamanUtamaController::class, 'tambah_halaman_utama'])->name('tambah_halaman_utama');
   Route::post('/store_halaman_utama', [HalamanUtamaController::class, 'store_halaman_utama'])->name('store_halaman_utama');
   Route::get('/edit_utama/{halaman_utama}', [HalamanUtamaController::class, 'edit_halaman_utama'])->name('edit_halaman_utama');
   Route::patch('/update_utama/{halaman_utama}/update_halaman_utama', [HalamanUtamaController::class, 'update_halaman_utama'])->name('update_halaman_utama');
   Route::get('/tampil_utama/{halaman_utama}', [HalamanUtamaController::class, 'show_halaman_utama'])->name('show_halaman_utama');
   Route::delete('/hapus_utama/{halaman_utama}', [HalamanUtamaController::class, 'hapus_halaman_utama'])->name('hapus_halaman_utama');

   //Profil Instansi - Aktivitas Sekolah
   Route::get('/aktivitas', [AktivitasController::class, 'index_aktivitas'])->name('index_aktivitas'); //halaman admin
   Route::get('/tampil_aktivitas/{data_aktivitas}', [AktivitasController::class, 'tampil_aktivitas'])->name('tampil_aktivitas');
   Route::get('/tambah_aktivitas', [AktivitasController::class, 'tambah_aktivitas'])->name('tambah_aktivitas');
   Route::post('/store_aktivitas', [AktivitasController::class, 'store_aktivitas'])->name('store_aktivitas');
   Route::get('/edit_aktivitas/{data_aktivitas}', [AktivitasController::class, 'edit_aktivitas'])->name('edit_aktivitas');
   Route::patch('/update_aktivitas/{data_aktivitas}', [AktivitasController::class, 'update_aktivitas'])->name('update_aktivitas');
   Route::delete('/hapus_aktivitas/{data_aktivitas}', [AktivitasController::class, 'hapus_aktivitas'])->name('hapus_aktivitas');

   //Profil Instansi - Sejarah Sekolah
   Route::get('/sejarah', [SejarahController::class, 'index_sejarah'])->name('index_sejarah'); //halaman admin
   Route::get('/tampil_sejarah/{data_sejarah}', [SejarahController::class, 'tampil_sejarah'])->name('tampil_sejarah');
   Route::get('/tambah_sejarah/tambah_sejarah', [SejarahController::class, 'tambah_sejarah'])->name('tambah_sejarah');
   Route::post('/store_sejarah/store_sejarah', [SejarahController::class, 'store_sejarah'])->name('store_sejarah');
   Route::get('/edit_sejarah/{data_sejarah}', [SejarahController::class, 'edit_sejarah'])->name('edit_sejarah');
   Route::patch('/update_sejarah/{data_sejarah}', [SejarahController::class, 'update_sejarah'])->name('update_sejarah');
   Route::delete('/hapus_sejarah/{data_sejarah}', [SejarahController::class, 'hapus_sejarah'])->name('hapus_sejarah');

   //Profil Instansi - Visi Misi
   Route::get('/visi-misi', [VisiMisiController::class, 'index_visi_misi'])->name('index_visi_misi'); //halaman admin
   Route::get('/tampil_visi-misi/{data_visi_misi}', [VisiMisiController::class, 'tampil_visi_misi'])->name('tampil_visi_misi');
   Route::get('/tambah_visi-misi', [VisiMisiController::class, 'tambah_visi_misi'])->name('tambah_visi_misi');
   Route::post('/store_visi_misi', [VisiMisiController::class, 'store_visi_misi'])->name('store_visi_misi');
   Route::get('/edit_visi-misi/{data_visi_misi}', [VisiMisiController::class, 'edit_visi_misi'])->name('edit_visi_misi');
   Route::patch('/update_visi-misi/{data_visi_misi}', [VisiMisiController::class, 'update_visi_misi'])->name('update_visi_misi');
   Route::delete('/hapus_visi-misi/{data_visi_misi}', [VisiMisiController::class, 'hapus_visi_misi'])->name('hapus_visi_misi');

   //Profil Instansi - Susunan Organisasi
   Route::get('/susunan_organisasi', [SusunanOrganisasiController::class, 'index_susunan_organisasi'])->name('index_susunan_organisasi'); //halaman admin
   Route::get('/tampil_susunan_organisasi/{data_susunan_organisasi}', [SusunanOrganisasiController::class, 'tampil_susunan_organisasi'])->name('tampil_susunan_organisasi');
   Route::get('/tambah_susunan_organisasi', [SusunanOrganisasiController::class, 'tambah_susunan_organisasi'])->name('tambah_susunan_organisasi');
   Route::post('/store_susunan_organisasi', [SusunanOrganisasiController::class, 'store_susunan_organisasi'])->name('store_susunan_organisasi');
   Route::get('/edit_susunan_organisasi/{data_susunan_organisasi}', [SusunanOrganisasiController::class, 'edit_susunan_organisasi'])->name('edit_susunan_organisasi');
   Route::patch('/update_susunan_organisasi/{data_susunan_organisasi}', [SusunanOrganisasiController::class, 'update_susunan_organisasi'])->name('update_susunan_organisasi');
   Route::delete('/hapus_susunan_organisasi/{data_susunan_organisasi}', [SusunanOrganisasiController::class, 'hapus_susunan_organisasi'])->name('hapus_susunan_organisasi');

   //Profil Instansi - Informasi Akademik
   Route::get('/informasi_akademik', [InformasiAkademikController::class, 'index_informasi_akademik'])->name('index_informasi_akademik'); //halaman admin
   Route::get('/tampil_informasi_akademik/{data_informasi_akademik}', [InformasiAkademikController::class, 'tampil_informasi_akademik'])->name('tampil_informasi_akademik');
   Route::get('/tambah_informasi_akademik', [InformasiAkademikController::class, 'tambah_informasi_akademik'])->name('tambah_informasi_akademik');
   Route::post('/store_informasi_akademik', [InformasiAkademikController::class, 'store_informasi_akademik'])->name('store_informasi_akademik');
   Route::get('/edit_informasi_akademik/{data_informasi_akademik}', [InformasiAkademikController::class, 'edit_informasi_akademik'])->name('edit_informasi_akademik');
   Route::patch('/update_informasi_akademik/{data_informasi_akademik}', [InformasiAkademikController::class, 'update_informasi_akademik'])->name('update_informasi_akademik');
   Route::delete('/hapus_informasi_akademik/{data_informasi_akademik}', [InformasiAkademikController::class, 'hapus_informasi_akademik'])->name('hapus_informasi_akademik');

   //Halaman Utama PPDB
   Route::get('/utama_ppdb', [UtamaPPDBController::class, 'index_utama_ppdb'])->name('index_utama_ppdb');
   Route::get('/tampil_utama_ppdb/{data_utama_ppdb}', [UtamaPPDBController::class, 'tampil_utama_ppdb'])->name('tampil_utama_ppdb');
   Route::get('/tambah_utama_ppdb', [UtamaPPDBController::class, 'tambah_utama_ppdb'])->name('tambah_utama_ppdb');
   Route::post('/store_utama_ppdb', [UtamaPPDBController::class, 'store_utama_ppdb'])->name('store_utama_ppdb');
   Route::get('/edit_utama_ppdb/{data_utama_ppdb}', [UtamaPPDBController::class, 'edit_utama_ppdb'])->name('edit_utama_ppdb');
   Route::patch('/update_utama_ppdb/{data_utama_ppdb}', [UtamaPPDBController::class, 'update_utama_ppdb'])->name('update_utama_ppdb');
   Route::delete('/hapus_utama_ppdb/{data_utama_ppdb}', [UtamaPPDBController::class, 'hapus_utama_ppdb'])->name('hapus_utama_ppdb');

   //Halaman Pengumuman PPDB
   Route::get('/informasi_pengumuman', [HalamanInformasiPengumumanController::class, 'index_ip_ppdb'])->name('index_ip_ppdb');
   Route::get('/tampil_informasi_pengumuman/{data_ip_ppdb}', [HalamanInformasiPengumumanController::class, 'tampil_ip_ppdb'])->name('tampil_ip_ppdb');
   Route::get('/tambah_informasi_pengumuman', [HalamanInformasiPengumumanController::class, 'tambah_ip_ppdb'])->name('tambah_ip_ppdb');
   Route::post('/store_informasi_pengumuman', [HalamanInformasiPengumumanController::class, 'store_ip_ppdb'])->name('store_ip_ppdb');
   Route::get('/edit_informasi_pengumuman/{data_ip_ppdb}', [HalamanInformasiPengumumanController::class, 'edit_ip_ppdb'])->name('edit_ip_ppdb');
   Route::patch('/update_informasi_pengumuman/{data_ip_ppdb}', [HalamanInformasiPengumumanController::class, 'update_ip_ppdb'])->name('update_ip_ppdb');
   Route::delete('/hapus_informasi_pengumuman/{data_ip_ppdb}', [HalamanInformasiPengumumanController::class, 'hapus_ip_ppdb'])->name('hapus_ip_ppdb');

   //Absen Siswa
   Route::get('/absensi_siswa', [AbsenSiswaController::class, 'index_absen_siswa'])->name('index_absen_siswa'); //halaman admin
   Route::get('/tampil_absensi_siswa/{data_absen_siswa}', [AbsenSiswaController::class, 'tampil_absen_siswa'])->name('tampil_absen_siswa');
   Route::post('/tambah_absensi_siswa', [AbsenSiswaController::class, 'store_absen_siswa'])->name('store_absen_siswa');
   Route::get('/edit_absensi_siswa/{data_absen_siswa}', [AbsenSiswaController::class, 'edit_absen_siswa'])->name('edit_absen_siswa');
   Route::patch('/update_absensi_siswa/{data_absen_siswa}', [AbsenSiswaController::class, 'update_absen_siswa'])->name('update_absen_siswa');
   Route::delete('/hapus_absensi_siswa/{data_absen_siswa}', [AbsenSiswaController::class, 'hapus_absen_siswa'])->name('hapus_absen_siswa');
   //Rekapitulasi Absensi
   Route::get('/rekapitulasi_absensi_siswa', [AbsenSiswaController::class, 'index_rekap_absen_siswa']);
   Route::post('/rekapitulasi_absensi_siswa', [AbsenSiswaController::class, 'rekap_absen_siswa'])->name('rekap_absen_siswa');
   
   //Absen Siswa - Laporan Harian
   Route::get('/laporan_harian_absensi_kelas_1', [AbsenSiswaController::class, 'laporan_harian_absen_siswa_kelas_1'])->name('laporan_harian_absen_siswa_kelas_1');
   Route::get('/export_excel_absensi_kelas_1', [AbsenSiswaController::class, 'eksport_excel_kelas_1'])->name('eksport_excel_kelas_1');
   Route::get('/laporan_harian_absensi_kelas_2', [AbsenSiswaController::class, 'laporan_harian_absen_siswa_kelas_2'])->name('laporan_harian_absen_siswa_kelas_2');
   Route::get('/export_excel_absensi_kelas_2', [AbsenSiswaController::class, 'eksport_excel_kelas_2'])->name('eksport_excel_kelas_2');
   Route::get('/laporan_harian_absensi_kelas_3', [AbsenSiswaController::class, 'laporan_harian_absen_siswa_kelas_3'])->name('laporan_harian_absen_siswa_kelas_3');
   Route::get('/export_excel_absensi_kelas_3', [AbsenSiswaController::class, 'eksport_excel_kelas_3'])->name('eksport_excel_kelas_3');
   Route::get('/laporan_harian_absensi_kelas_4', [AbsenSiswaController::class, 'laporan_harian_absen_siswa_kelas_4'])->name('laporan_harian_absen_siswa_kelas_4');
   Route::get('/export_excel_absensi_kelas_4', [AbsenSiswaController::class, 'eksport_excel_kelas_4'])->name('eksport_excel_kelas_4');

     //Absen Tenaga Pengajar
   Route::get('/absensi_tenaga_pengajar', [AbsenTenagaPengajarController::class, 'index_absensi_tenaga_pengajar'])->name('index_absensi_tenaga_pengajar'); //halaman admin
   Route::get('/detail_absensi_tenaga_pengajar/{data_absen_tenaga_pengajar}', [AbsenTenagaPengajarController::class, 'tampil_absensi_tenaga_pengajar'])->name('tampil_absensi_tenaga_pengajar');
   Route::post('/store_absensi_tenaga_pengajar', [AbsenTenagaPengajarController::class, 'store_absensi_tenaga_pengajar'])->name('store_absensi_tenaga_pengajar');
   Route::get('/edit_absensi_tenaga_pengajar/{data_absen_tenaga_pengajar}', [AbsenTenagaPengajarController::class, 'edit_absensi_tenaga_pengajar'])->name('edit_absensi_tenaga_pengajar');
   Route::patch('/update_absensi_tenaga_pengajar/{data_absen_tenaga_pengajar}', [AbsenTenagaPengajarController::class, 'update_absensi_tenaga_pengajar'])->name('update_absensi_tenaga_pengajar');
   Route::delete('/hapus_absensi_pengajar/{data_absen_tenaga_pengajar}', [AbsenTenagaPengajarController::class, 'hapus_absensi_tenaga_pengajar'])->name('hapus_absensi_tenaga_pengajar');
   Route::get('/export_excel_absensi_tenaga_pengajar', [AbsenTenagaPengajarController::class, 'eksport_excel_absensi_tenaga_pengajar'])->name('eksport_excel_absensi_tenaga_pengajar');
   Route::post('/rekapitulasi_absensi_tenaga_pengajar_proses', [AbsenTenagaPengajarController::class, 'rekap_absensi_tenaga_pengajar'])->name('rekap_absensi_tenaga_pengajar'); //halaman admin
   Route::get('/rekapitulasi_absensi_tenaga_pengajar', [AbsenTenagaPengajarController::class, 'index_rekap_absensi_tenaga_pengajar'])->name('index_rekap_absensi_tenaga_pengajar'); //halaman admin
   //Jadwal Mengajar Guru
   Route::get('/jadwal_mengajar', [JadwalMengajarGuruController::class, 'index_jadwal_mengajar_guru'])->name('index_jadwal_mengajar_guru');
   Route::get('/export_excel_jadwal_mengajar', [JadwalMengajarGuruController::class, 'eksport_excel_jadwal_mengajar_guru'])->name('eksport_excel_jadwal_mengajar_guru');
   Route::get('/tampil_jadwal_mengajar/{data_jadwal_mengajar_guru}', [JadwalMengajarGuruController::class, 'tampil_jadwal_mengajar_guru'])->name('tampil_jadwal_mengajar_guru');
   Route::get('/tambah_jadwal_mengajar', [JadwalMengajarGuruController::class, 'tambah_jadwal_mengajar_guru'])->name('tambah_jadwal_mengajar_guru');
   Route::post('/store_jadwal_mengajar', [JadwalMengajarGuruController::class, 'store_jadwal_mengajar_guru'])->name('store_jadwal_mengajar_guru');
   Route::get('/edit_jadwal_mengajar/{data_jadwal_mengajar_guru}', [JadwalMengajarGuruController::class, 'edit_jadwal_mengajar_guru'])->name('edit_jadwal_mengajar_guru');
   Route::patch('/update_jadwal_mengajar/{data_jadwal_mengajar_guru}', [JadwalMengajarGuruController::class, 'update_jadwal_mengajar_guru'])->name('update_jadwal_mengajar_guru');
   Route::delete('/hapus_jadwal_mengajar/{data_jadwal_mengajar_guru}', [JadwalMengajarGuruController::class, 'hapus_jadwal_mengajar_guru'])->name('hapus_jadwal_mengajar_guru');
});

