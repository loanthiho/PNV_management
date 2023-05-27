<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tb3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker= Faker::create();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('product')->insert([
                'id' => $i,
                'price' => $faker->price,
                'image'=>$faker->image,
            ]);
        }
    }
}
