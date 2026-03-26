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
                'image' => 'image/ethan.jpg',
            ],
            [
                'name' => 'Freya',
                'second_name' => 'Ritars',
                'image' => 'image/freya.jpg',
            ],
            [
                'name' => 'Michael',
                'second_name' => 'Jackson',
                'image' => 'image/michael.jpg',
            ],
        ];
    }
}
