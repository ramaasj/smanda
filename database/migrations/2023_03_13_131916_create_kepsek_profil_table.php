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
            $table->string('nama', 200);
            $table->string('nip', 200);
            $table->string('pangkat', 200);
            $table->string('pendidikan', 200);
            $table->string('masa_kerja', 200);
            $table->text('foto_kepsek');
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
