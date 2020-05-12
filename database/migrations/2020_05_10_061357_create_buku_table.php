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
            //$table->id();
            $table->string('kd_buku')->primary()->index()->comment('FLAGS=KMI-L^');
            $table->string('no_isbn', 50)->index()->nullable()->comment('FLAGS=A-IUL^');
            $table->string('nama', 255)->comment('FLAGS=AMIUL^');
            $table->string('kategori', 50)->comment('FLAGS=AMIUL^');
            $table->mediumText('deskripsi')->nullable()->comment('FLAGS=A-IUL^');
            $table->string('lokasi', 50)->comment('FLAGS=AMIUL^');
            $table->integer('jumlah')->default(0)->comment('FLAGS=AMIUL^');
            $table->integer('dipinjam')->default(0)->comment('FLAGS=AMIUL^');
            $table->timestamps();

            //$table->foreign('kategori')->references('kategori')->on('kategori_buku'); // Menjadikan kolom "kategori" sebagai foreign key dan mereferensi kolom kategori pada tabel kategori_buku
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
