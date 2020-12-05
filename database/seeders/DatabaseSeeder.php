<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(BrendsSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ColorProductSeeder::class);
        $this->call(ColorsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(SizeProductSeeder::class);
        $this->call(SizeSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
