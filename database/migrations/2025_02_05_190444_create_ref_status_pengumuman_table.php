<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRefStatusPengumumanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_status_pengumuman', function (Blueprint $table) {
            $table->id();
            $table->string('nama_status');
        });

        DB::table("ref_status_pengumuman")->insert([
            [
                "id" => 1,
                "nama_status" => "Belum Diverifikasi"
            ],
            [
                "id" => 2,
                "nama_status" => "Verifikasi Admin"
            ],
            [
                "id" => 100,
                "nama_status" => "Lulus"
            ],
            [
                "id" => 101,
                "nama_status" => "Tidak Lulus"
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_status_pengumuman');
    }
}
