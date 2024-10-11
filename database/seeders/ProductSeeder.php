<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('products')->insert([
                'name' => $fake->realText(60),
                'seller_name' => $fake->name(),
                'description' => $fake->realText(60),
                'price' => (float) random_int(10, 1000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
