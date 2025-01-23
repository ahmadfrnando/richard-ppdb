<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDataFromSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropColumn('nisn');
            $table->string('nomor_nem')->nullable()->change();
            $table->string('jumlah_nem')->nullable()->change();
            $table->string('rata_rata_nem')->nullable()->change();
            $table->string('nomor_sttb')->nullable()->change();
            $table->string('jumlah_nilai_sttb')->nullable()->change();
            $table->string('rata_rata_sttb')->nullable()->change();
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
            $table->string('nisn')->nullable();
        });
    }
}
