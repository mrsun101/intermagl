<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
        foreach (range(1,150) as $al){
            DB::table('Colors')->insert([
                'name'=> $faker->colorName(),
                'red'=> $faker->numberBetween(0,255),
                'green'=> $faker->numberBetween(0,255),
               'blue'=> $faker->numberBetween(0,255),
                'kod'=> $faker->hexcolor()
            ]);
        }
    }
}
