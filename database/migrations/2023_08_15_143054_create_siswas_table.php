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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nama_siswa');
            $table->string('alamat_siswa');
            $table->string('tempat_lahir');
            $table->string('foto_siswa');
            $table->date('ttl');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Katholik', 'Protestan', 'Hindu', 'Budha', 'Konghucu']);
            $table->string('anak_ke')->nullable();
            $table->string('suku')->nullable();
            $table->integer('jumlah_saudara')->nullable();
            $table->string('cita_cita');
            $table->string('hobi');
            $table->string('no_telp');
            $table->enum('tinggal_bersama', ['OrangTua', 'Wali']);
            $table->string('rt_rw');
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->integer('kode_pos');
            $table->timestamps();

            //Foreign key Table : Kelas
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->foreign('kelas_id')->references('id')->on('kelas')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
};
