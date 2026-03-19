<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams =[
            [
                'name' => 'Наша команда',
                'description' => 'Значимость этих проблем настолько очевидна, что базовый вектор развития позволяет оценить значение экспериментов, поражающих по своей масштабности и грандиозности. Мы вынуждены отталкиваться от того, что консультация с широким активом.',
                'team_img' => 'image/team_img.jpg',
                'image' => 'image/teams.jpg',
                'manager_id' => 1,
            ],
        ];
    }
}
