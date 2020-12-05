<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
        foreach (range(1,6) as $al){
            DB::table('Sizes')->insert([
                'name'=> $faker->randomElement($array = array ('xs','s','m','l','XL','XXL'))
            ]);
        }
    }
}
