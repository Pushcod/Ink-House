<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Leonardo',
                'date_birth' => '12.03.1776',
            ],
            [
                'name' => 'Rafael',
                'date_birth' => '12.03.1780',
            ],
            [
                'name' => 'Donatello',
                'date_birth' => '12.03.1750',
            ],
        ];

        foreach ($authors as $author){
            Author::create($author);
        }
    }
}
