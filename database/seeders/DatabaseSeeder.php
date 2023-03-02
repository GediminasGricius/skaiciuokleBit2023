<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // User::factory()->count(10)->create();
        //Group::factory()->count(10)->create();
       // Student::factory()->count(3)->create();

       // Group::factory()->count(2)->has(Student::factory()->count(3))->create();
        Group::factory()->count(20)->hasStudents(rand(10,20))->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
