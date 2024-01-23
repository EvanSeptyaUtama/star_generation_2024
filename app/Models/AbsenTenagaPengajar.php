<?php

namespace App\Models;

use App\Models\TenagaPengajar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AbsenTenagaPengajar extends Model
{
    use HasFactory;
    protected $table = 'absen_tenaga_pengajar';
    protected $fillable = [
        'tanggal', 'waktu_mulai', 'waktu_selesai', 'keterangan', 'tenaga_pengajar_id'
    ];

    //Memiliki 1 pengajar
    public function tenaga_pengajar()
    {
        return $this->belongsTo(TenagaPengajar::class);
    }
}
