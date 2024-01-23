<?php

namespace App\Models\ProfilInstansi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HalamanUtama extends Model
{
    use HasFactory;
    protected $table = 'halaman_utamas';
    protected $fillable = [
        'nama_yayasan', 'nama_instansi', 'penjelasan','deskripsi_gambar1','deskripsi_gambar2','deskripsi_gambar3', 'gambar_pertama','gambar_kedua','gambar_ketiga'
    ];
}
