<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $managers = [
            [
                'name' => 'Ethan',
                'second_name' => 'Winters',
                'image' => null,
            ],
            [
                'name' => 'Freya',
                'second_name' => 'Ritars',
                'image' => null,
            ],
            [
                'name' => 'Michael',
                'second_name' => 'Jackson',
                'image' => null,
            ],
        ];
    }
}
