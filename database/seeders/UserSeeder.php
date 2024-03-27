<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Abdul Wahab',
            'email' => 'abdulwahab@abdulwahab.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Adil',
            'email' => 'adil@abdulwahab.com',
            'password' => bcrypt('password'),
            'role' => 'moderator'
        ]);

        User::create([
            'name' => 'Wahab',
            'email' => 'wahab@abdulwahab.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Ali',
            'email' => 'ali@ali.com',
            'password' => bcrypt('password'),
            'role' => 'moderator'
        ]);
    }
}
