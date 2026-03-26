<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            
                'name' => 'Реплики картин от',
                'description' => 'Высокое качество отрисовки на плотной бумаге или льняном холсте. Редкие произведения, доступные цены.',
                'image' => 'image/banner.jpg',
        
        ]);
    }
}
