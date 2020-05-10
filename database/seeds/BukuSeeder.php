<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

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
            $table->integer('jumlah')->default(0);
            $table->integer('dipinjam')->default(0);
            */

    	    // insert data ke table buku menggunakan Faker
    		DB::table('buku')->insert([
    			'kd_buku' => $faker->firstName,
    			'no_isbn' => $faker->lastName,
                'nama' => $faker->title,
                'kategori' => 'Katholik'
    		]);

    	}
    }
}
