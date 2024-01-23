<?php

namespace App\Models\ProfilInstansi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    use HasFactory;
    protected $table = 'aktivitas';
    protected $fillable = [
        'nama_aktivitas', 'penjelasan_aktivitas', 'gambar_aktivitas'
    ];
}
