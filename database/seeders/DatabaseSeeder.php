<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     [
        //         'email' => 'ronaldo12@gmail.com',
        //         'id' => 14,
        //         'name' => 'Ronaldo',
        //         'password' => Hash::make('ronaldo123456'),
        //         'role' => 'admin'
        //     ],
        //     [

        //         'email' => 'messi@gmail.com',
        //         'id' => 19,
        //         'name' => 'Messi',
        //         'password' => Hash::make('123456messi'),
        //         'role' => 'admin'
        //     ],

        // ]);
        $users = [
            [
                'id' => 2,
                'name' => 'Admin2',
                'email' => 'Admin2@gmail.com',
                'password' => Hash::make('Admin2stargen'),
                'is_admin' => true,
            ],
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('Admin1stargen'),
                'is_admin' => true,
            ],
            [
                'id' => 3,
                'name' => 'Ronaldo',
                'email' => 'ronaldo@gmail.com',
                'password' => Hash::make('ronaldo@gmail.com'),
                'is_admin' => false,
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        };

        DB::table('kelas')->insert([
            [
                'id' => 1,
                'nama_kelas' => '1',
            ],
            [
                'id' => 2,
                'nama_kelas' => '2',
            ],
            [
                'id' => 3,
                'nama_kelas' => '3',
            ],
            [
                'id' => 4,
                'nama_kelas' => '4',
            ]
        ]);
        DB::table('mata_pelajarans')->insert([
            [
                'id' => 1,
                'mata_pelajaran' => 'Bahasa Indonesia',
            ],
            [
                'id' => 2,
                'mata_pelajaran' => 'Bahasa Inggris',
            ],
            [
                'id' => 3,
                'mata_pelajaran' => 'Bahasa Mandarin',
            ],
            [
                'id' => 4,
                'mata_pelajaran' => 'Mate-matika',
            ],
            [
                'id' => 5,
                'mata_pelajaran' => 'Agama',
            ],
        ]);

        DB::table('visi_misi')->insert([
            [
                'id' => 1,
                'visi' => 'MENJADI SEKOLAH YANG UNGGUL DAN BERSAHABAT BAGI SEMUA ORANG',
                'misi' => 'MEMBENTU MENYIAPKAN GENERASI UNGGUL DAN BERDAMPAK',
                'gambar_visi_misi' => 'C:\Users\ASUS\OneDrive\Gambar\dashboardPendidikan_aboutus.png'
            ],
        ]);

        DB::table('sejarah')->insert([
            [
                'id' => 1,

                'judul_sejarah' => 'SEJARAH STAR GENERATION',

                'penjelasan_singkat' => 'Keberadaan SD. Star Generation Sangatta tidak terlepas dari keberadaan Gereja Bethany Indonesia Sangatta. SD. Star Generation merupakan salah satu wujud nyata dari pelaksanaan misi Gereja Bethany Indonesia Sangatta yaitu memberitakan Injil Yesus Kristus kepada semua orang....',

                'penjelasan_lengkap' => 'Keberadaan SD. Star Generation Sangatta tidak terlepas dari keberadaan Gereja Bethany Indonesia Sangatta. SD. Star Generation merupakan salah satu wujud nyata dari pelaksanaan misi Gereja Bethany Indonesia Sangatta yaitu memberitakan Injil Yesus Kristus kepada semua orang. 
            
                Sekitar tahun 2010 beberapa saat  gembala sidang gereja Bethany Indonesia di Sangatta, tidak begitu aktif lagi karena alasan kesehatan, sebagai wakil gembala Pdt. Ir. Augustinus Sagala, M.Sc melihat pelayanan Sekolah Minggu begitu berkembang: anak-anak Sekolah Minggu bisa mencapai 500 jiwa jika dilakukan ibadah gabungan kalau mengundang semua cabang dan gereja tetangga; Pdt. Ir. Augustinus Sagala, M.Sc. melihatnya sebagai kebutuhan untuk membina generasi muda Kristen di Sangatta lebih holistic guna menyiapkan masa depan yang lebih baik, maka Pdt. Ir. Augustinus Sagala terpikir untuk mendirikan Pendidikan PAUD, tapi untuk sekian lama hal tersebut tetap sekedar ide sampai Pdt. Ir. Augustinus Sagala, M.Sc. mendengar keluhan seorang pelayan, yaitu seorang bapak  yang  anaknya yang menjalani pendidikan PAUD di sekolah umum. Pada dasarnya, ayah tersebut ingin anaknya dididik  di sekolah Kristen.
                
                Dari situlah Pdt. Ir. Augustinus Sagala, M.Sc. mulai bersungguh ingin mendirikan PAUD Starkidz, Pdt. Ir. Augustinus Sagala, M.Sc. bersyukur bisa bertemu dengan orang-orang yang tepat untuk merintis PAUD, yaitu Nelly (menjadi kepala sekolah PAUD pertama), Dion (Ketua Panitia Pembangun pertama kemudian di ganti Agung), Pak Irwan (Ketua Yayasan yang pertama). Bersama mereka akhirnya Pdt. Ir. Augustinus Sagala, M.Sc.  bisa membuat Yayasan, membuat kurikulum (bekerjasama dengan Happy Holy Kids dibawah pak Jarot); akhirnya berdirilah PAUD Starkidz oleh izin pemerintah Kutai Timur  Dinas Pendidikan 06 Juni 2012. Demikian setiap pengajar oleh Pdt. Ir. Augustinus Sagala, M.Sc. merekrut dari para guru Sekolah Minggu, sementara Gedung sekolah menggunakan bangunan sementara hanya 1 ruang kelas, aula dan toilet dengan 16 peserta didik. Tetapi dengan berjalannya waktu animo orang tua untuk menyekolahkan anak anak mereka di PAUD Starkidz semakin besar sehingga total peserta didik bisa mencapai 80 jiwa. Hal itu dimungkinkan karena Starkidz secara berkelanjutan terus berbenah diri baik kualifikasi staff pengajar maupun fasilitas sekolah.
                
                Untuk fasiltas sekolah, akhirnya pada bulan Oktober 2014 Yayasan memutuskan untuk membangun Gedung sekolah yang permanen secara bertahap. Design Gedung sekolah yang comprehensive dibuat oleh architect Ir. Dohar Nasution.sedangkan tahap konstruksi dilakukan oleh tim dari Pak Rusman; tahap pertama dikerjakan 3 ruang kelas. Tantangan mulai timbul setelah  banyak permintaan dari para orang tua murid berharap agar anak anak mereka setelah lulus PAUD Starkidz bisa berlanjut di tingkat Sekolah Dasar yang dikelolah oleh Yayasan yang sama. Akhirnya Pdt. Ir. Augustinus Sagala beserta Yayasan mendirikan SD Star Generation pada tanggal 01 Juni 2020 oleh Izin Pemerintah Kutai Timur Dinas Pendidikan dengan menggunakan ruang sementara gedung bekas kantor seketariat gereja sebagai ruang kelas 1 dan juga 1 ruang untuk kantor guru, mengantipasi kenaikan kelas untuk Sekolah Dasar, Dan pada bulan Maret 2021 Yayasan kembali menambah 1 lagi ruang kelas permanent  sehingga ruang kelas permanen menjadi 4 ruang kelas. 
                
                Mengantisipasi perkembangan kebutuhan SD Star Generation, Pada bulan Juli 2023 Yayasan memutuskan untuk menyelesaikan seluruh rancangan bangun dari Gedung sekolah {Starkidz dan  Star Generation); untuk itu sebagian peserta anak didik Star Kidz harus dipindahkan sementara kedalam gedung gereja di lantai 1 sehingga kebutuhan ruang kelas untuk SD Star Generation bisa dipenuhi sekaligus agar kegiatan belajar tidak terganggu oleh kegiatan pembangunan fasilitas sekolah.',

                'gambar_sejarah' => 'sejarah.png'
            ]
        ]);

        DB::table('halaman_utamas')->insert([
            [
                'id' => 1,
                'nama_yayasan' => 'Yayasan Duta Serega',
                'nama_instansi' => 'STAR GENERATION',
                'penjelasan' => 'SEKOLAH DENGAN PEMBINAAN KARAKTER YANG   UNGGUL',
                'deskripsi_gambar1' => 'Gambar sekolah tampak depan',
                'deskripsi_gambar2' => 'Seluruh Guru pada Star Generation',
                'deskripsi_gambar3' => 'Upacara pada star generation',
                'gambar_pertama' => 'stargen1.png',
                'gambar_kedua' => 'stargen2.png',
                'gambar_ketiga' => 'stargen3.png',
            ]
        ]);

        DB::table('aktivitas')->insert([
            [
                'id' => 1,
                'nama_aktivitas' => 'UPACARA',
                'penjelasan_aktivitas' => 'Aktivitas wajib yang dilakukan setiap hari senin untuk membentuk karakter siswa siswi Stargen',
                'gambar_aktivitas' => 'menggambar.png',
            ],
            [
                'id' => 2,
                'nama_aktivitas' => 'MENGGAMBAR',
                'penjelasan_aktivitas' => 'Terdapat ekstrakurikuler yang wajib di ikuti oleh siswa dan siswi',
                'gambar_aktivitas' => 'menggambar.png',
            ],
            [
                'id' => 3,
                'nama_aktivitas' => 'MEMASAK',
                'penjelasan_aktivitas' => 'Terdapat kegiatan wajib pada mata pelajaran prakarya, yang dimana siswa dan siswi diajak untuk membentuk sikap mandiri',
                'gambar_aktivitas' => 'menggambar.png',
            ],
        ]);
        DB::table('utama_ppdb')->insert([
            [
                'id' => 1,
                'judul_ppdb' => 'PENDAFTARAN PESERTA DIDIK BARU',
                'gambar_brosur_ppdb' => 'gambar.png',
                'penjelasan_ppdb' => 'infor ppdb',
            ],

        ]);
        DB::table('susunan_organisasi')->insert([
            [
                'id' => 1,
                'nama' => 'Dr. Ir. Augustinus Sagala, M.Sc',
                'jabatan' => 'Pembina Yayasan',
                'gambar' => 'gambar.png'
            ],
            [
                'id' => 2,
                'nama' => 'Tina Mery Sirait, ST, MBA',
                'jabatan' => 'Ketua Yayasan',
                'gambar' => 'gambar.png'
            ],
            [
                'id' => 3,
                'nama' => 'Adolfina Mety',
                'jabatan' => 'Kepala Sekolah',
                'gambar' => 'gambar.png'
            ],
            [
                'id' => 4,
                'nama' => 'Yulianti Butar-Butar',
                'jabatan' => 'Komite Sekolah',
                'gambar' => 'gambar.png'
            ],
            [
                'id' => 5,
                'nama' => 'Yulianti Butar-Butar',
                'jabatan' => 'Administrasi Keuangan',
                'gambar' => 'gambar.png'
            ],
            [
                'id' => 6,
                'nama' => 'Pebe Yuliana Sorongan, S.Pd.K',
                'jabatan' => 'Wali Kelas 1',
                'gambar' => 'gambar.png'
            ],
            [
                'id' => 7,
                'nama' => 'Meiske Kailola, S.Pd.K',
                'jabatan' => 'Wali Kelas 2',
                'gambar' => 'gambar.png'
            ],
            [
                'id' => 8,
                'nama' => 'Veronika Ristina, S.Pd',
                'jabatan' => 'Wali Kelas 3',
                'gambar' => 'gambar.png'
            ],
            [
                'id' => 9,
                'nama' => 'Rumiris Siagian, S.Pd',
                'jabatan' => 'Wali Kelas 4',
                'gambar' => 'gambar.png'
            ],
            [
                'id' => 10,
                'nama' => 'Yulistina Telao, A.md ',
                'jabatan' => 'Guru Bahasa Inggris',
                'gambar' => 'gambar.png'
            ],
            [
                'id' => 11,
                'nama' => 'Sutrisno, S.Th | Catarina Mega Amelia | Alby Indra Pratiwi | David Donovan
                ',
                'jabatan' => 'Ekstrakulikuler',
                'gambar' => 'gambar.png'
            ],

        ]);

        DB::table('informasi_akademik')->insert([
            [
                'id' => 1,
                'hari_informasi_akademik' => 'Senin',
                'tanggal_informasi_akademik' => '2023-12-01',
                'informasi_informasi_akademik' => 'Ulang Tahun Star Generation',
                'keterangan_informasi_akademik' => 'Diharapkan seluruh pengurus dan siswa-siswa untuk datang Gg. Apt Pranoto',
                'gambar_informasi_akademik' => 'gambar.png',

            ],
            [
                'id' => 2,
                'hari_informasi_akademik' => 'Selasa',
                'tanggal_informasi_akademik' => '2023-11-01',
                'informasi_informasi_akademik' => 'Pembagian Hasil Capaian Belajar Selama 1 Semester',
                'keterangan_informasi_akademik' => 'Diharapkan seluruh siswa-siswa untuk datang bersama Orang tua/Wali',
                'gambar_informasi_akademik' => 'gambar2.png',
            ],
            [
                'id' => 3,
                'hari_informasi_akademik' => 'Rabu',
                'tanggal_informasi_akademik' => '2023-10-01',
                'informasi_informasi_akademik' => 'Hari Lahir Pancasila',
                'keterangan_informasi_akademik' => 'Diharapkan seluruh siswa-siswi untuk mempersiapkan kondisi fisik, agar dapat mengikuti upacara dengan baik',
                'gambar_informasi_akademik' => 'gambar3.png',
            ],

        ]);

        DB::table('tahun_pelajarans')->insert([
            [
                'id' => 1,
                'tahun_ajaran' => "2022/2023",
                'semester' => 'Ganjil',
            ],
            [
                'id' => 2,
                'tahun_ajaran' => "2022/2023",
                'semester' => 'Genap',
            ],
        ]);


        DB::table('informasi_pengumuman')->insert([
            [
                'id' => 1,
                'judul_informasi_pengumuman' => 'Jalur Zonasi',
                'gambar_informasi_pengumuman' => 'public/profile.png',
            ],
            [
                'id' => 2,
                'judul_informasi_pengumuman' => 'Jalur Prestasi',
                'gambar_informasi_pengumuman' => 'public/profile.png',
            ],
            [
                'id' => 3,
                'judul_informasi_pengumuman' => 'Jalur Undangan',
                'gambar_informasi_pengumuman' => 'public/profile.png',
            ],
        ]);
    }
}
