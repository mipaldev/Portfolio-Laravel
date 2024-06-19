<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Student Data Management',
                'image' => 'data-siswa.png',
                'link' => 'http://mipaldev.byethost7.com/school-project/session-crud-dataSiswa/',
                'description' => 'Create a web-based student data management system using session management and CRUD concepts in PHP.',
                'tools' => json_encode(['php', 'css-3','botstrap', 'tailwind']),
            ],
            [
                'title' => 'Fuel Purchase System',
                'image' => 'bahan-bakar.png',
                'link' => 'http://mipaldev.byethost7.com/school-project/oop-bahanBakar/',
                'description' => 'Developing a web-based fuel purchasing system using OOP principles in PHP for Motorcycle Rentals.',
                'tools' => json_encode(['php', 'css-3', 'tailwind']),
            ],
            [
                'title' => 'Motorcycle Rentals',
                'image' => 'rental-motor.png',
                'link' => 'http://mipaldev.byethost7.com/school-project/oop-rentalMotor/',
                'description' => 'Developed a web-based Motorcycle Rental system using OOP concepts in PHP.',
                'tools' => json_encode(['php', 'css-3', 'js', 'tailwind']),
            ],
            [
                'title' => 'Cashier Payment System',
                'image' => 'kasir.png',
                'link' => 'http://mipaldev.byethost7.com/school-project/session-crud-kasir/',
                'description' => 'Create a web-based cashier payment system using session management and CRUD concepts in PHP.',
                'tools' => json_encode(['php', 'css-3', 'tailwind']),
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
