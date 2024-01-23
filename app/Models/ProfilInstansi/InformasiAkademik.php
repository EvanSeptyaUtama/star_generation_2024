<?php

namespace App\Models\ProfilInstansi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiAkademik extends Model
{
    use HasFactory;
    protected $table = 'informasi_akademik';
    protected $fillable = [
        'hari_informasi_akademik', 'tanggal_informasi_akademik', 'informasi_informasi_akademik', 'keterangan_informasi_akademik', 'gambar_informasi_akademik'
    ];
}
