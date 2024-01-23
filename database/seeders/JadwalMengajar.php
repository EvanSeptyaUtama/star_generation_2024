<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JadwalMengajar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal_mengajar_gurus')->insert([
            [
                'id' => 2,
                'tanggal' => '2024-01-01',
                'waktu_mulai' => '08:00:00',
                'waktu_selesai' => '10:00:00',
                'hari' => 'Selasa',
                'kelas_id' => 2,
                'mata_pelajaran_id' => 2,
                'tenaga_pengajar_id' => 1,
            ],
            [
                'id' => 3,
                'tanggal' => '2024-01-01',
                'waktu_mulai' => '10:00:00',
                'waktu_selesai' => '12:00:00',
                'hari' => 'Rabu',
                'kelas_id' => 1,
                'mata_pelajaran_id' => 3,
                'tenaga_pengajar_id' => 2,
            ],
            [
                'id' => 4,
                'tanggal' => '2024-01-02',
                'waktu_mulai' => '13:00:00',
                'waktu_selesai' => '15:00:00',
                'hari' => 'Kamis',
                'kelas_id' => 3,
                'mata_pelajaran_id' => 4,
                'tenaga_pengajar_id' => 3,
            ],
            [
                'id' => 5,
                'tanggal' => '2024-01-02',
                'waktu_mulai' => '08:00:00',
                'waktu_selesai' => '10:00:00',
                'hari' => 'Jumat',
                'kelas_id' => 4,
                'mata_pelajaran_id' => 5,
                'tenaga_pengajar_id' => 4,
            ],
        ]);
    }
}
