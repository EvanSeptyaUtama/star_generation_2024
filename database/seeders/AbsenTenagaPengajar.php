<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;

class AbsenTenagaPengajar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('absen_tenaga_pengajar')->insert([
          
            [  
                'tanggal' => Carbon::parse('2022-07-01'),
                'waktu_mulai' => Carbon::createFromTime(7, 10),
                'waktu_selesai' => Carbon::createFromTime(12, 35),
                'keterangan' => 'Sakit',
                'tenaga_pengajar_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],   
                [  
                    'tanggal' => Carbon::parse('2022-07-02'),
                    'waktu_mulai' => Carbon::createFromTime(7, 10),
                    'waktu_selesai' => Carbon::createFromTime(12, 35),
                    'keterangan' => 'Sakit',
                    'tenaga_pengajar_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [  
                    'tanggal' => Carbon::parse('2022-07-03'),
                    'waktu_mulai' => Carbon::createFromTime(7, 10),
                    'waktu_selesai' => Carbon::createFromTime(12, 35),
                    'keterangan' => 'Hadir',
                    'tenaga_pengajar_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [  
                    'tanggal' => Carbon::parse('2022-07-04'),
                    'waktu_mulai' => Carbon::createFromTime(7, 10),
                    'waktu_selesai' => Carbon::createFromTime(12, 35),
                    'keterangan' => 'Hadir',
                    'tenaga_pengajar_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [  
                    'tanggal' => Carbon::parse('2022-07-05'),
                    'waktu_mulai' => Carbon::createFromTime(7, 10),
                    'waktu_selesai' => Carbon::createFromTime(12, 35),
                    'keterangan' => 'Hadir',
                    'tenaga_pengajar_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [  
                    'tanggal' => Carbon::parse('2022-07-06'),
                    'waktu_mulai' => Carbon::createFromTime(7, 10),
                    'waktu_selesai' => Carbon::createFromTime(12, 35),
                    'keterangan' => 'Hadir',
                    'tenaga_pengajar_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [  
                    'tanggal' => Carbon::parse('2022-07-06'),
                    'waktu_mulai' => Carbon::createFromTime(7, 10),
                    'waktu_selesai' => Carbon::createFromTime(12, 35),
                    'keterangan' => 'Hadir',
                    'tenaga_pengajar_id' => 6,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [  
                    'tanggal' => Carbon::parse('2022-07-07'),
                    'waktu_mulai' => Carbon::createFromTime(7, 10),
                    'waktu_selesai' => Carbon::createFromTime(12, 35),
                    'keterangan' => 'Hadir',
                    'tenaga_pengajar_id' => 7,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [  
                    'tanggal' => Carbon::parse('2022-07-08'),
                    'waktu_mulai' => Carbon::createFromTime(7, 10),
                    'waktu_selesai' => Carbon::createFromTime(12, 35),
                    'keterangan' => 'Alfa',
                    'tenaga_pengajar_id' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
        ]);
    }
}
