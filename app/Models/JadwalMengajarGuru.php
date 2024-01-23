<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Pengajar;
use App\Models\MataPelajaran;
use App\Models\TenagaPengajar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JadwalMengajarGuru extends Model
{
    use HasFactory;
    protected $table = 'jadwal_mengajar_gurus';
    protected $fillable = [
        'tanggal', 'waktu_mulai', 'waktu_selesai', 'hari', 'kelas_id', 'mata_pelajaran_id','tenaga_pengajar_id'
    ];
   
      //Memiliki 1 tenaga pengajar
      public function tenaga_pengajar()
      {
          return $this->belongsTo(TenagaPengajar::class);
      }

    //Memiliki banyak kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    //Memiliki banyak mata pelajaraan
    public function mata_pelajarans()
    {
        return $this->belongsTo(MataPelajaran::class, 'mata_pelajaran_id');
    }
}
