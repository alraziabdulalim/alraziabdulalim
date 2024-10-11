<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = File::json('database/data/countries.json');

        foreach($countries as $country){
            DB::connection('second_db')->table('countries')->insert([
                'code' => $country['code'],
                'name' => $country['name']
            ]);
        }
    }
}
