<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Department;
use App\Models\Employee;
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

        $this->call([
            UserSeeder::class,

        ]);

        // create a department computer science and assign two employees to it
        $department = Department::create([
            'name' => 'Computer Science',
        ]);

        $employee = Employee::create([
            'user_id' => 1,
            'salary' => '5000',
            'department_id' => $department->id,
            'designation' => 'Lecturer',
        ]);
        $employee = Employee::create([
            'user_id' => 2,
            'salary' => '5000',
            'department_id' => $department->id,
            'designation' => 'Assistant Professor',
        ]);
        $department->hod()->associate($employee);
        $department->save();



        $department = Department::create([
            'name' => 'Biology',
        ]);

        $employee = Employee::create([
            'user_id' => 3,
            'salary' => '2000',
            'department_id' => $department->id,
            'designation' => 'Assistant profesor',
        ]);
        $employee = Employee::create([
            'user_id' => 4,
            'salary' => '2000',
            'department_id' => $department->id,
            'designation' => 'Assistant profesor',
        ]);
        $department->hod()->associate($employee);
        $department->save();


        Patient::factory(10)->create();
    }
}
