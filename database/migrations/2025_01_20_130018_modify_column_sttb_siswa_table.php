<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnSttbSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropColumn('nomor_nem');
            $table->dropColumn('jumlah_nem');
            $table->dropColumn('rata_rata_nem');
            $table->dropColumn('nomor_sttb');
            $table->dropColumn('jumlah_nilai_sttb');
            $table->dropColumn('rata_rata_sttb');

            $table->string('nilai_skhu')->nullable();
            $table->string('rata_rata_skhu')->nullable();
            $table->string('nomor_ijazah')->nullable();
            $table->string('nilai_ijazah')->nullable();
            $table->string('rata_rata_ijazah')->nullable();
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
            $table->string('nomor_nem');
            $table->string('jumlah_nem');
            $table->string('rata_rata_nem');
            $table->string('nomor_sttb');
            $table->string('jumlah_nilai_sttb');
            $table->string('rata_rata_sttb');

            $table->dropColumn('nilai_skhu')->nullable();
            $table->dropColumn('rata_rata_skhu')->nullable();
            $table->dropColumn('nomor_ijazah')->nullable();
            $table->dropColumn('nilai_ijazah')->nullable();
            $table->dropColumn('rata_rata_ijazah')->nullable();
        });
    }
}
