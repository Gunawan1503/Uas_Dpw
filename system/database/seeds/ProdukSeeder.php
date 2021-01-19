<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$int = '0123456789';
        $faker = Faker::create();
        foreach(range(0,50) as $i){
            DB::table('produk')->insert([
                'nama' => Str::random(10),
                'harga' => substr(str_shuffle($int), 0, 5),
                'stok' => substr(str_shuffle($int), 0, 2),
                'berat' => substr(str_shuffle($int), 0, 4),
                'deskripsi' => Str::random(30)
            ]);
        }
    }
}
