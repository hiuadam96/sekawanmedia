<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
        for($i=0; $i<=99; $i++){
            DB::table('buku')->insert([
                'nama'=>$faker->state,
                'penulis'=>$faker->name,
                'deskripsi'=>$faker->text,
                'link'=>$faker->domainName

            ]);
        }
    }
}
