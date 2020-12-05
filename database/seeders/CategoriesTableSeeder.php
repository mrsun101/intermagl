<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
        foreach (range(1,50) as $al){
            DB::table('Categories')->insert([
                'name'=> $faker->company(),
                'section'=> $faker->numberBetween(1,5),
                'sort'=> $faker->numberBetween(1,11),
                'status'=> $faker->numberBetween(0,1)
            ]);
        }
    }
}
