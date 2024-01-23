<?php

namespace App\Models;

use App\Models\Pengajar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AbsenGuru extends Model
{
    use HasFactory;
    protected $table = 'absen_guru';
    protected $fillable = [
        'tanggal_absen_guru', 'waktu_mulai_guru', 'waktu_selesai_guru', 'keterangan_guru', 'pengajar_id'
    ];

    //Memiliki banyak pengajar
    public function pengajar()
    {
        return $this->belongsTo(Pengajar::class);
    }
}
