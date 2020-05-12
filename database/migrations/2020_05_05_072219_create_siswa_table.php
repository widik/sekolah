<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 50)->index()->comment('FLAGS=AMIUL^');
            $table->string('nama_depan')->comment('FLAGS=AMIUL^');
            $table->string('nama_belakang')->comment('FLAGS=AMIUL^');
            $table->string('jenis_kelamin')->comment('FLAGS=AMIUL^');
            $table->string('agama')->comment('FLAGS=AMIUL^');
            $table->string('avatar')->nullable()->comment('FLAGS=A-IUL^');
            $table->string('alamat')->nullable()->comment('FLAGS=A-IUL^');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
