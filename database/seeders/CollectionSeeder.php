<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::create ([
             'name' => 'Новая коллекция французских авторов',
             'description' => 'Сложно сказать, почему акционеры крупнейших компаний призывают нас к новым свершениям, которые, в свою очередь, должны быть заблокированы в рамках своих собственных рациональных ограничений. Принимая во внимание показатели успешности, граница обучения кадров предопределяет высокую востребованность направлений прогрессивного развития.',
             'logo_name' => 'image/logo_name.jpg',
             'image' => 'image/collection.jpg',

        ]);
    }
}
