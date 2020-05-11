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
            $table->mediumText('deskripsi');
            $table->string('lokasi', 50);
            $table->integer('jumlah')->default(0);
            $table->integer('dipinjam')->default(0);
            $table->timestamps();
            $table->engine = 'InnoDB';

        });

        // Schema::table('buku', function (Blueprint $table) {
        //     $table->string('lokasi', 20)->nullable()->change();
        // });

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
