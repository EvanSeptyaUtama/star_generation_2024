<?php

namespace App\Models;

use App\Models\TenagaPengajar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = [
        'nama_kelas'
    ];

    //Memiliki banyak absen
    public function absen_siswa()
    {
        return $this->hasMany(AbsenSiswa::class, 'siswa_id', 'kelas_id', 'tahun_pelajaran_id');
    }

    //Memiliki banyak jadwal mengajar guru
    public function jadwal_mengajar_guru()
    {
        return $this->hasMany(JadwalMengajarGuru::class, 'kelas_id', 'mata_pelajaran_id');
    }

    //Memiliki banyak absen
    public function absen_guru()
    {
        return $this->hasMany(AbsenGuru::class, 'guru_id', 'kelas_id', 'mata_pelajaran_id');
    }

    public function siswas()
    {
        return $this->hasMany(Siswa::class, 'kelas_id','id');
    }
    public function tenaga_pengajars()
    {
        return $this->hasOne(TenagaPengajar::class, 'kelas_id','id');
    } 

}
