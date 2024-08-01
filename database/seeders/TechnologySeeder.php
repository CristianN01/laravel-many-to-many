<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
        public function run(Faker $faker): void
    {
        $technologyesData = [
            [
                'name' => 'Gaming',
            ],
            [
                'name' => 'Nature'
            ],
            [
                'name' => 'History'
            ],
        ];

        foreach ($technologyesData as $technologyData) {
            $technology = new Technology();
            $technology->name = $technologyData['name'];
            $technology->save();
        }
    }
}
