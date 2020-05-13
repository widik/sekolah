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

    	    // insert data ke table buku menggunakan Faker
    		DB::table('buku')->insert([
                'kd_buku' => Str::random(4),
                'no_isbn' => Str::random(10),
                'nama' => $faker->name,
                'kategori' => '01',
                'lokasi' => 'A.1.1',
                'deskripsi' => $faker->text
    		]);

    	}
    }
}
