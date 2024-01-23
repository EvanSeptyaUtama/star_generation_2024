<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;
    protected $table = 'mata_pelajarans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'mata_pelajaran'
    ];

    // public function absen_siswa()
    // {
    //     return $this->hasMany(AbsenSiswa::class, 'siswa_id', 'id');
    // }

    //Memiliki banyak jadwal mengajar guru
    public function jadwal_mengajar_guru()
    {
        return $this->hasMany(JadwalMengajarGuru::class, 'kelas_id', 'mata_pelajaran_id', 'guru_id');
    }

    //Memiliki banyak absen
    public function absen_guru()
    {
        return $this->hasMany(AbsenGuru::class, 'guru_id', 'kelas_id', 'mata_pelajaran_id');
    }
}
