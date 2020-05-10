<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 50; $i++){
            /*
            $table->string('kd_buku', 50);
            $table->string('no_isbn', 50)->nullable();
            $table->string('nama', 255);
            $table->string('kategori', 50);
            $table->mediumText('deskripsi');
            $table->string('lokasi', 50);
            $table->integer('jumlah')->default(0);
            $table->integer('dipinjam')->default(0);
            */

    	    // insert data ke table buku menggunakan Faker
    		DB::table('buku')->insert([
                'kd_buku' => Str::random(4),
                'no_isbn' => Str::random(10),
                'nama' => $faker->title,
                'kategori' => '01',
                'lokasi' => 'A.1.1',
                'deskripsi' => $faker->title
    		]);

    	}
    }
}
