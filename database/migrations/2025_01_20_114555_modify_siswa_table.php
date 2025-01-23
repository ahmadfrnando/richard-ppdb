<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifySiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('siswa');
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pendaftaran')->unique();
            //data pribadi
            $table->string('jurusan');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('alamat');
            $table->string('nomor_hp');
            $table->string('nisn');
            $table->enum('agama', ['Islam', 'Katolik', 'Protestan', 'Hindu', 'Buddha']);
            // data keluarga
            $table->string('nama_ayah');
            $table->integer('umur_ayah');
            $table->string('poendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->integer('umur_ibu');
            $table->string('poendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('alamat_orang_tua');
            // nem dan sttb
            $table->string('nomor_nem');
            $table->string('jumlah_nem');
            $table->string('rata_rata_nem');
            $table->string('nomor_sttb');
            $table->string('jumlah_nilai_sttb');
            $table->string('rata_rata_sttb');
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
        Schema::dropIfExists('siswa');
    }
}
