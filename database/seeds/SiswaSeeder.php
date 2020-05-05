<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
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

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('siswa')->insert([
    			'nama_depan' => $faker->firstName,
    			'nama_belakang' => $faker->lastName,
                'jenis_kelamin' => 'L',
                'agama' => 'Katholik',
    			'alamat' => $faker->address
    		]);

    	}
    }
}
