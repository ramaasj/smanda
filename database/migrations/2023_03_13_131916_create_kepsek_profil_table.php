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
        Schema::create('kepsek_profil', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nip', 100);
            $table->string('pangkat', 100);
            $table->string('pendidikan', 100);
            $table->string('masa_kerja', 100);
            $table->string('foto_kepsek', 100);
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
        Schema::dropIfExists('kepsek_profil');
    }
};
