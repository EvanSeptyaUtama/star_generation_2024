<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\AbsenTenagaPengajar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TenagaPengajar extends Model
{
    use HasFactory;
    protected $table = 'tenaga_pengajar';
    protected $fillable = [
        'nip', 'nama','foto', 'no_telp', 'jenis_kelamin', 'alamat', 'tempat_lahir', 'ttl',  'jabatan', 'agama', 'suku', 'rt_rw', 'desa_kelurahan', 'kecamatan', 'kode_pos','kelas_id'
    ];

   
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
