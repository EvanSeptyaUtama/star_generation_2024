<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenSiswa extends Model
{
    use HasFactory;
    protected $table = 'absen_siswa';
    protected $fillable = [
        'tanggal_absen', 'waktu_mulai', 'waktu_selesai', 'keterangan', 'siswa_id', 'kelas_id', 'tahun_pelajaran_id'
    ];
    // public $dates = ['tanggal_absen', 'waktu_mulai', 'waktu_selesai'];

    public function siswas()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function tahun_pelajarans()
    {
        return $this->belongsTo(TahunPelajaran::class, 'tahun_pelajaran_id');
    }
}
