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
        Schema::table('greet_home', function (Blueprint $table) {
            $table->string('gambar_greet', 200);
            $table->string('tahun_greet', 100);
            $table->string('desc_tahun', 200);
            $table->string('siswa_greet', 100);
            $table->string('desc_siswa', 200);
            $table->string('pendidik_greet', 100);
            $table->string('desc_pendidik', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('greet_home', function (Blueprint $table) {
            //
        });
    }
};
