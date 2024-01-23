<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunPelajaran extends Model
{
    use HasFactory;
    protected $table = 'tahun_pelajarans';
    protected $fillable = [
        'tahun_ajaran', 'semester'
    ];

    //Memiliki banyak absen
    public function absen_siswa()
    {
        return $this->hasMany(AbsenSiswa::class, 'siswa_id', 'kelas_id', 'tahun_pelajaran_id');
    }
}
