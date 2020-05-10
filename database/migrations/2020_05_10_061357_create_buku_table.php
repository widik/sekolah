<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('kd_buku', 50);
            $table->string('no_isbn', 50)->nullable();
            $table->string('nama', 255);
            $table->string('kategori', 50);
            $table->string('deskripsi', 50);
            $table->integer('jumlah')->default(0);
            $table->integer('dipinjam')->default(0);
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
        Schema::dropIfExists('buku');
    }
}
