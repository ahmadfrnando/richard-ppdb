<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPengumuman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengumuman', function (Blueprint $table) {
            $table->enum('filter_status',['1','2','3'])->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengumuman', function (Blueprint $table) {
            $table->dropColumn('filter_status');
        });
    }
}
