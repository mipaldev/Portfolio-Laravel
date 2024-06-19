<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TechnologiesSeeder extends Seeder
{
    // TechnologiesSeeder.php
    public function run()
    {
        $technologies = [
            [
                'title' => 'Ajax',
                'icon' => 'ajax.svg',
                'tagline' => 'Managing Data Dynamics with Efficiency and Scalable Performance.',
                'category' => 'Tool'
            ],
        ];

        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}
