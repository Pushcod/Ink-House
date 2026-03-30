<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'name' => 'Germany',
            ],
            [
                'name' => 'France',
            ],
            [
                'name' =>'England',
            ],
        ];

        foreach ($countries as $country){
            Country::create($country);
        }
    }
}
