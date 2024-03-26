<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Abdul Wahab',
            'email' => 'abdulwahab@abdulwahab.com',
            'password' => bcrypt('abdulwahab@abdulwahab.com'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Ali',
            'email' => 'ali@ali.com',
            'password' => bcrypt('ali@ali.com'),
            'role' => 'moderator'
        ]);




        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Patient::factory(10)->create();
    }
}
