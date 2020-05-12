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

$table->string('kd_buku')->primary()->index()->comment('FLAGS=KMI-L^');
$table->string('no_isbn', 50)->index()->nullable()->comment('FLAGS=A-IUL^');
$table->string('nama', 255)->comment('FLAGS=AMIUL^');
$table->string('kategori', 50)->comment('FLAGS=AMIUL^');
$table->mediumText('deskripsi')->nullable()->comment('FLAGS=A-IUL^');
$table->string('lokasi', 50)->comment('FLAGS=AMIUL^');
$table->integer('jumlah')->default(0)->comment('FLAGS=AMIUL^');
$table->integer('dipinjam')->default(0)->comment('FLAGS=AMIUL^');

$factory->define(\App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'author' => $faker->name,
        'publisher' => $faker->sentence(2),
        'description' => $faker->text,
        'price' => $faker->randomNumber(5)
    ];
});

            */

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
