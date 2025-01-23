<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNisnToSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->string('nisn')->after('nama');
            $table->string('asal_sekolah')->after('alamat');
            $table->dropColumn('poendidikan_ayah');
            $table->string('pendidikan_ayah')->after('pekerjaan_ayah');
            $table->dropColumn('poendidikan_ibu');
            $table->string('pendidikan_ibu')->after('pekerjaan_ibu');
            $table->string('tanggal_lahir')->change();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropColumn('nisn');
            $table->dropColumn('asal_sekolah');
            $table->dropColumn('pendidikan_ayah');
            $table->dropColumn('pendidikan_ibu');
            $table->string('poendidikan_ayah')->after('pekerjaan_ayah');
            $table->string('poendidikan_ibu')->after('pekerjaan_ibu');
            $table->date('tanggal_lahir')->change();
        });
    }
}
