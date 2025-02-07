<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TenagaPengajar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenaga_pengajar')->insert([
            [
                'id' => 1,
                'nip' => 12322,
                'nama' => 'Jihan',
                'foto' => 'foto_pengajar.png',
                'no_telp'=>'08121312',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'Jl. Apel 22',
                'tempat_lahir' => 'Bangalon',
                'ttl' => '1990-01-01',
                'jabatan' => 'Guru Olahraga',
                'agama' => 'Protestan',
                'suku' => 'Dayak',
                'rt_rw' => '009',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Kutai Timur',
                'kode_pos' => 1212312,
            ],
            [
                'id' => 2,
                'nip' => 1232,
                'nama' => 'Dadang',
                'foto' => 'foto_pengajar.png',
                'no_telp'=>'08121312',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'Jl. Semangka 88',
                'tempat_lahir' => 'Bangalon',
                'ttl' => '1990-01-01',
                'jabatan' => 'Guru Olahraga',
                'agama' => 'Protestan',
                'suku' => 'Dayak',
                'rt_rw' => '009',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Kutai Timur',
                'kode_pos' => 19812,
            ],
            [
                'id' => 3,
                'nip' => 31222,
                'nama' => 'Jadil',
                'foto' => 'foto_pengajar.png',
                'no_telp'=>'08121312',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'Jl. Jeruk Jar 2',
                'tempat_lahir' => 'Bangalon',
                'ttl' => '1990-01-01',
                'jabatan' => 'Guru Olahraga',
                'agama' => 'Protestan',
                'suku' => 'Dayak',
                'rt_rw' => '009',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Kutai Timur',
                'kode_pos' => 22222,
            ],
            [
                'id' => 4,
                'nip' => 4232,
                'nama' => 'Roman',
                'foto' => 'foto_pengajar.png',
                'no_telp'=>'08121312',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'Jl. Mangga Melon 100',
                'tempat_lahir' => 'Bangalon',
                'ttl' => '1990-01-01',
                'jabatan' => 'Guru Olahraga',
                'agama' => 'Protestan',
                'suku' => 'Dayak',
                'rt_rw' => '009',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Kutai Timur',
                'kode_pos' => 12221,
            ],
            [
                'id' => 5,
                'nip' => 23211,
                'nama' => 'Rambo',
                'foto' => 'foto_pengajar.png',
                'no_telp'=>'08121312',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'Jl. Markisa 22',
                'tempat_lahir' => 'Bangalon',
                'ttl' => '1990-01-01',
                'jabatan' => 'Guru Olahraga',
                'agama' => 'Protestan',
                'suku' => 'Dayak',
                'rt_rw' => '009',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Kutai Timur',
                'kode_pos' => 121022,
            ],
            [
                'id' => 6,
                'nip' => 1992,
                'nama' => 'Jaman',
                'foto' => 'foto_pengajar.png',
                'no_telp'=>'08121312',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'Jl. Jalan 88',
                'tempat_lahir' => 'Bangalon',
                'ttl' => '1990-01-01',
                'jabatan' => 'Guru Olahraga',
                'agama' => 'Protestan',
                'suku' => 'Dayak',
                'rt_rw' => '009',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Kutai Timur',
                'kode_pos' => 198122,
            ],
            [
                'id' => 7,
                'nip' => 21988,
                'nama' => 'Johan',
                'foto' => 'foto_pengajar.png',
                'no_telp'=>'08121312',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'Jl. Suryatama 2',
                'tempat_lahir' => 'Bangalon',
                'ttl' => '1990-01-01',
                'jabatan' => 'Guru Olahraga',
                'agama' => 'Protestan',
                'suku' => 'Dayak',
                'rt_rw' => '009',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Kutai Timur',
                'kode_pos' => 21239,
            ],
            [
                'id' => 8,
                'nip' => 4112,
                'nama' => 'Asep',
                'foto' => 'foto_pengajar.png',
                'no_telp'=>'08121312',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'Jl. Mangga Rambutan 100',
                'tempat_lahir' => 'Bangalon',
                'ttl' => '1990-01-01',
                'jabatan' => 'Guru Olahraga',
                'agama' => 'Protestan',
                'suku' => 'Dayak',
                'rt_rw' => '009',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Kutai Timur',
                'kode_pos' => 11233,
            ],
        ]);
    }
}
