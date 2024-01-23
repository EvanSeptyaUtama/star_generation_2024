<?php

namespace App\Models\ProfilInstansi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPengumumanPPDB extends Model
{
    use HasFactory;
    protected $table = 'informasi_pengumuman';
    protected $fillable = [
        'judul_informasi_pengumuman', 'gambar_informasi_pengumuman'
    ];
}
