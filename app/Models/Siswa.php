<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\AbsenSiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $fillable = [
        'nisn', 'nama_siswa', 'alamat_siswa', 'tempat_lahir', 'foto_siswa', 'ttl', 'jenis_kelamin', 'agama', 'anak_ke', 'suku', 'jumlah_saudara', 'cita_cita', 'hobi', 'no_telp', 'tinggal_bersama', 'rt_rw', 'desa_kelurahan', 'kecamatan', 'kode_pos','kelas_id'
    ];

    //Memiliki banyak absen
    public function absen_siswa()
    {
        return $this->hasMany(AbsenSiswa::class, 'siswa_id', 'kelas_id', 'tahun_pelajaran_id');
    }

    //Memiliki banyak siswa
    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
