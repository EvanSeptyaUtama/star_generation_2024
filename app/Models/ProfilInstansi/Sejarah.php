<?php

namespace App\Models\ProfilInstansi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    use HasFactory;
    protected $table = 'sejarah';
    protected $fillable = [
        'judul_sejarah', 'penjelasan_singkat', 'penjelasan_lengkap', 'gambar_sejarah'
    ];
}
