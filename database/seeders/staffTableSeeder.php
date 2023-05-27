<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class staffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        
        $faker= Faker::create();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('staff')->insert([
                'staff_id' => $i,
                'name' => $faker->name,
                'job'=>$faker->title,
            ]);
        }
    }
}