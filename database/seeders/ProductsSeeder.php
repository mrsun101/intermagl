<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
        foreach (range(1,100) as $al){
            DB::table('Products')->insert([
                'name'=> $faker->lastName(),
                'fullname'=> $faker->company(),
                'brend'=> $faker->numberBetween(1,50),
               'isnew'=> $faker->numberBetween(0,1),
                'category'=> $faker->numberBetween(1,50),
                  'issize'=> $faker->numberBetween(0,1),
                  'price'=> $faker->numberBetween(1000,99999),
                  'discount'=> $faker->numberBetween(0,50),
                  'iscolor'=> $faker->numberBetween(0,1),
                  'isbest'=> $faker->numberBetween(0,1),
                  'uniquecode'=> $faker->creditCardNumber(),
                  'smalldiscription'=> $faker->catchPhrase(),
                  'discription'=> $faker->$faker->realText(150,2),
                  'status'=> $faker->numberBetween(0,1)
            ]);
        }
    }
}
