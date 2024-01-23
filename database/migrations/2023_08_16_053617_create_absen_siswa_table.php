<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen_siswa', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_absen');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('keterangan');

            //Foreign key : table siswa
            $table->foreignId('siswa_id')->constrained('siswas')->cascadeOnUpdate()->cascadeOnDelete();
            //Foreign key : table kelas
            $table->foreignId('kelas_id')->constrained('kelas')->cascadeOnUpdate()->cascadeOnDelete();
            //Foreign key : table tahun ajaran
            $table->foreignId('tahun_pelajaran_id')->constrained('tahun_pelajarans')->cascadeOnUpdate()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absen_siswa');
    }
};
