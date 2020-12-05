<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class SizeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
        foreach (range(1,200) as $al){
            DB::table('Productsize')->insert([
                'product'=> $faker->numberBetween(1,100),
                'size'=> $faker->numberBetween(1,6),
                'discription'=> $faker->catchPhrase()
            ]);
        }
    }
}
