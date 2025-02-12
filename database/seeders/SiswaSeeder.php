<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            [
                'nisn' => 21333,
                'nama_siswa' => 'Evan Septya Utama',
                'alamat_siswa' => 'Jl. Selamat 1, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'profile.jpg',
                'kelas_id' => 1,
            ],
            [
                'nisn' => 323222,
                'nama_siswa' => 'Rinaldo',
                'alamat_siswa' => 'Jl. Selamat 1, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Budha',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 1,
            ],
            [
                'nisn' => 22222,
                'nama_siswa' => 'Johan',
                'alamat_siswa' => 'Jl. Selamat 1, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Protestan',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 1,
            ],
            [
                'nisn' => 36666,
                'nama_siswa' => 'Ciu Liu kang',
                'alamat_siswa' => 'Jl. Selamat 1, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Hindu',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 1,
            ],
            [
                'nisn' => 423222,
                'nama_siswa' => 'Utama',
                'alamat_siswa' => 'Jl. Selamat 1, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Budha',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 1,
            ],
            [
                'nisn' => 543333,
                'nama_siswa' => 'Titis',
                'alamat_siswa' => 'Jl. Selamat 1, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 1,
            ],
            [
                'nisn' => 32111,
                'nama_siswa' => 'Rangga Gongsi',
                'alamat_siswa' => 'Jl. Selamat 1, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Konghucu',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 1,
            ],
            [
                'nisn' => 32422,
                'nama_siswa' => 'Jhon',
                'alamat_siswa' => 'Jl. Selamat 1, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 1,
            ],
            [
                'nisn' => 132222,
                'nama_siswa' => 'Donaldo',
                'alamat_siswa' => 'Jl. Selamat 1, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 1,
            ], 
            [
                'nisn' => 112344,
                'nama_siswa' => 'Renbo',
                'alamat_siswa' => 'Jl. Selamat 1, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'Pemain Bola',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '21322',
                'foto_siswa' => 'profile.jpg',
                'kelas_id' => 1,
            ],
            //Kelas 2
            [
                'nisn' => 13222,
                'nama_siswa' => 'Siska',
                'alamat_siswa' => 'Jl. Selamat 1, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 2,
            ],
            [
                'nisn' => 13222,
                'nama_siswa' => 'Jonas',
                'alamat_siswa' => 'Jl. Damai, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 2,
            ],
            [
                'nisn' => 21301,
                'nama_siswa' => 'Paska Ono',
                'alamat_siswa' => 'Jl. Magelang 1, No.27, Semarang, Jawa Tengah',
                'tempat_lahir' => 'Semarang',
                'ttl' => '2000-01-09',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'profile.jpg',
                'kelas_id' => 2,
            ],
            [
                'nisn' => 323202,
                'nama_siswa' => 'Jon thery',
                'alamat_siswa' => 'Jl. Selamat 2, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Bontang',
                'ttl' => '1888-01-04',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Budha',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Semarang',
                'kode_pos' => '75613',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 2,
            ],
            [
                'nisn' => 22205,
                'nama_siswa' => 'Sanjaya',
                'alamat_siswa' => 'Jl. Gugur Bunga, Kali Ciliwung, Jakarta Timur',
                'tempat_lahir' => 'Jakarta Utara',
                'ttl' => '1999-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Budha',
                'anak_ke' => '4',
                'suku' => 'Dayak',
                'jumlah_saudara' => 10,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Singa Macan Ciliwung',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 2,
            ],
            [
                'nisn' => 36606,
                'nama_siswa' => 'Jordi Alba',
                'alamat_siswa' => 'Jl. Barcelona 90, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Madrid',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Hindu',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sau paulo',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 2,
            ],
            [
                'nisn' => 423299,
                'nama_siswa' => 'Ryzen Tangkulung',
                'alamat_siswa' => 'Jl. tulungagung 90, No.27, Sangatta Utara, Papua Barat',
                'tempat_lahir' => 'Sofifi',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Budha',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'programer',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75199',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 2,
            ],
            [
                'nisn' => 121312,
                'nama_siswa' => 'Alexandro De Bungas',
                'alamat_siswa' => 'Jl. Anggrek Layu 900, Padang, Sumatra Barat',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Sangkur',
                'kecamatan' => 'Padang Sangkur',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 2,
            ],
            [
                'nisn' => 324222,
                'nama_siswa' => 'Asep Gareth Bale',
                'alamat_siswa' => 'Jl. Manggis, No.200, Canberra, Australia Timur',
                'tempat_lahir' => 'Canberra',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Konghucu',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'Pemain Sepak Takraw',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 2,
            ],
            [
                'nisn' => 5466542,
                'nama_siswa' => 'Rangga Tarkaman',
                'alamat_siswa' => 'Gang Sempit. No 900, Papua Tengah',
                'tempat_lahir' => 'Merauke',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 2,
            ],
            //Kelas 3
            [
                'nisn' => 8980766,
                'nama_siswa' => 'Jan Misael Panagan',
                'alamat_siswa' => 'Jl. Anggrek 98, No.90 , Jawa Timur',
                'tempat_lahir' => 'Jawa Barat',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 3,
            ],
            [
                'nisn' => 34242111,
                'nama_siswa' => 'Janluster Supandi Siagian',
                'alamat_siswa' => 'Jl. Apel 90, No.27, Otawa, Canada Barat',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 3,
            ],
            [
                'nisn' => 657585,
                'nama_siswa' => 'Rindaman Rante Lembang',
                'alamat_siswa' => 'Jl. Japan, No.98b,  Japan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 3,
            ],
            [
                'nisn' => 1231124,
                'nama_siswa' => 'Terrel Aret',
                'alamat_siswa' => 'Jl. Bandung 1, No.27, Sangatta Utara, Kutai Timur, Jawa Barat',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'profile.jpg',
                'kelas_id' => 3,
            ],
            [
                'nisn' => 543453,
                'nama_siswa' => 'Marchelinus Kaltomo',
                'alamat_siswa' => 'Jl. Hasanuddin, No.27, Sangatta Utara, Kutai Timur, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Budha',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 3,
            ],
            [
                'nisn' => 91288,
                'nama_siswa' => 'Salvianus Tandiayu',
                'alamat_siswa' => 'Jl. bengalon 1, No.27, Bengalon, Kalimantan Timur',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Protestan',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75699',
                'foto_siswa' => 'foto_laku.jpg',
                'kelas_id' => 3,
            ],
            [
                'nisn' => 8213742,
                'nama_siswa' => 'Roni Lestaluhu',
                'alamat_siswa' => 'Jl. Ramai 1, No.27, Sangatta Utara, Mamuju, Sulawesi Barat',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Hindu',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 3,
            ],
            [
                'nisn' => 2342700,
                'nama_siswa' => 'Reza Arab Oktawibawa',
                'alamat_siswa' => 'Jl. Selamat 1, No.27, Makassar, Sulawesi Tengah',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Budha',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 3,
            ],
            [
                'nisn' => 3453788,
                'nama_siswa' => 'Rifki Awing',
                'alamat_siswa' => 'Jl. Munthe 1, No.27, Palu, Sulawesi Tenggara',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 3,
            ],
            [
                'nisn' => 2342609,
                'nama_siswa' => 'Agung Mulia',
                'alamat_siswa' => 'Jl. Batam 129, Riau, Kepualauan Riau',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Konghucu',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75622',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 3,
            ],
            //Kelas 4
            [
                'nisn' => 1309879,
                'nama_siswa' => 'Decky Shooter',
                'alamat_siswa' => 'Jl. tiur 5, No.27, Tanjung Pinang, Kepulauan Riau',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 4,
            ],
            [
                'nisn' => 2342444,
                'nama_siswa' => 'Kaleb Sitanggang',
                'alamat_siswa' => 'Jl. rereere 1, No.27, Sangatta Utara, Jambi, Jambi',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 4,
            ],
            [
                'nisn' => 18217212,
                'nama_siswa' => 'Gabriel Manuputi',
                'alamat_siswa' => 'Jl. Selam 90, No.900, Palembang, Sumatra Selatan',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 4,
            ],
            [
                'nisn' => 21341009,
                'nama_siswa' => 'Brian Anggara Putra',
                'alamat_siswa' => 'Jl. Uisann 90, No.27, Pangkal Pinang, Bangka Belitung',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 4,
            ],
            [
                'nisn' => 2342009,
                'nama_siswa' => 'Pilar Marcelinus',
                'alamat_siswa' => 'Jl. Kupang Tengah 1, No.27, Kupang, Nusa Tenggara Timur',
                'tempat_lahir' => 'Semarang',
                'ttl' => '2000-01-09',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75611',
                'foto_siswa' => 'profile.jpg',
                'kelas_id' => 4,
            ],
            [
                'nisn' => 1230011,
                'nama_siswa' => 'Zinadine Zidane',
                'alamat_siswa' => 'Jl. Rehan 2, No.27, Sangatta Utara, Mataram, Nusa Tenggara Barat',
                'tempat_lahir' => 'Bontang',
                'ttl' => '1888-01-04',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Budha',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Semarang',
                'kode_pos' => '75613',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 4,
            ],
            [
                'nisn' => 2131555,
                'nama_siswa' => 'Leonel Havertz',
                'alamat_siswa' => 'Jl. Arsenal 90, Kali Ciliwung, Europa Timur',
                'tempat_lahir' => 'Jakarta Utara',
                'ttl' => '1999-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Budha',
                'anak_ke' => '4',
                'suku' => 'Dayak',
                'jumlah_saudara' => 10,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Singa Macan Ciliwung',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 4,
            ],
            [
                'nisn' => 3212111,
                'nama_siswa' => 'Ramos',
                'alamat_siswa' => 'Jl. Sevila 90, Kutai Timur, SPANYOL Timur',
                'tempat_lahir' => 'Madrid',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Hindu',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'Wali',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sau paulo',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 4,
            ],
            [
                'nisn' => 223199,
                'nama_siswa' => 'Fernando Manangsang',
                'alamat_siswa' => 'Jl. Sulut 90, No.27, Sangatta Utara, Sulawesi Barat',
                'tempat_lahir' => 'Sofifi',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Budha',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'programer',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Lingga',
                'kecamatan' => 'Sangatta Utara',
                'kode_pos' => '75199',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 4,
            ],
            [
                'nisn' => 23436278,
                'nama_siswa' => 'Leonardo Da Vinci',
                'alamat_siswa' => 'Jl. Anggrek Edour 900, Padang, Sumatra Barat',
                'tempat_lahir' => 'Sangatta Utara',
                'ttl' => '2000-01-01',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'suku' => 'Dayak',
                'jumlah_saudara' => 2,
                'cita_cita' => 'heacker',
                'hobi' => 'Basket',
                'no_telp' => '08121312',
                'tinggal_bersama' => 'OrangTua',
                'rt_rw' => '006/007',
                'desa_kelurahan' => 'Teluk Sangkur',
                'kecamatan' => 'Padang Sangkur',
                'kode_pos' => '75611',
                'foto_siswa' => 'Siswa/foto.jpg',
                'kelas_id' => 4,
            ],
        ]);
    }
}
