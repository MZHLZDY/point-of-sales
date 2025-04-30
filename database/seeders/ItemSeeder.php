<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create('id_ID');
        // $categoryIds = DB::table('categories')->pluck('id')->toArray();
        // for($i=1; $i <=10 ; $i++){
        //     DB::table('items')->insert([
        //         'category_id' => $faker->randomElement($categoryIds),
        //         'name' => 'Barang ' .$i,
        //         'price' => $faker->numberBetween(100000, 1000000),
        //         'stock' => $faker->numberBetween(10, 20)
        //     ]);
        // }
    }
}
