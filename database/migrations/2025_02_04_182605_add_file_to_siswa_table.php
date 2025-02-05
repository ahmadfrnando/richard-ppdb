<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFileToSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->string('file_ijazah')->nullable()->after('nomor_ijazah');
            $table->string('file_skhu')->nullable()->after('nilai_skhu');
            $table->string('file_id')->nullable()->after('nilai_skhu');
            $table->string('file_kk')->nullable()->after('nilai_skhu');
            $table->string('file_pas_foto')->nullable()->after('nilai_skhu');
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
            $table->dropColumn('file_ijazah');
            $table->dropColumn('file_skhu');
            $table->dropColumn('file_id');
            $table->dropColumn('file_kk');
            $table->dropColumn('file_pas_foto');
        });
    }
}
