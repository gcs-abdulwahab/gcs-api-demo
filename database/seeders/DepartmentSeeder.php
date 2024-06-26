<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'name' => 'Computer Science',
                'hod' => 1,
            ],
            [
                'name' => 'Mathematics',
                'hod' => 2,
            ]
        ];
    }
}
