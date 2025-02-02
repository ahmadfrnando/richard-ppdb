<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateKontakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontak', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah');
            $table->string('no_telp');
            $table->string('no_wa');
            $table->string('email');
            $table->text('alamat');
            $table->text('kordinat_maps');
            $table->time('jam_buka');
            $table->time('jam_tutup');
            $table->timestamps();
        });

        DB::table('kontak')->insert([
            'id' => 1,
            'nama_sekolah' => 'SMP Negeri 1',
            'no_telp' => '022-5419439',
            'no_wa' => '085222222222',
            'email' => 'sman1kuningan@yahoo.com',
            'alamat' => 'Jl. Siliwangi No. 45, Kuningan, Jawa Barat',
            'kordinat_maps' => '-6.970355, 108.493333',
            'jam_buka' => '07:00:00',
            'jam_tutup' => '16:00:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontak');
    }
}
