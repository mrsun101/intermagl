<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class BrendsSeeder extends Seeder
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
            DB::table('Brends')->insert([
                'name'=> $faker->company(),
                'sort'=> $faker->numberBetween(1,11),
                'status'=> $faker->numberBetween(0,1),
                'section'=> $faker->numberBetween(1,5)
            ]);
        }
    }
}
