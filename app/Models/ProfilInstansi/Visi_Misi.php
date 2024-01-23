<?php

namespace App\Models\ProfilInstansi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visi_Misi extends Model
{
    use HasFactory;
    protected $table = 'visi_misi';
    protected $fillable = [
        'visi', 'misi', 'gambar_visi_misi'
    ];
}
