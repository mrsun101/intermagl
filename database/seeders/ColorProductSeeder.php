<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class ColorProductSeeder extends Seeder
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
            DB::table('Colorproducts')->insert([
                'product'=> $faker->numberBetween(1,100),
                'color'=> $faker->numberBetween(1,10),
                'description'=> $faker->realText(150,2)
               
            ]);
        }
    }
}
