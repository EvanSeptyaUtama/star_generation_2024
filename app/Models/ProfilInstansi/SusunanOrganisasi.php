<?php

namespace App\Models\ProfilInstansi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SusunanOrganisasi extends Model
{
    use HasFactory;
    protected $table = 'susunan_organisasi';
    protected $fillable = [
        'nama', 'jabatan', 'gambar'
    ];
}
