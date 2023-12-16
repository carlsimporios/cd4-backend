<?php

namespace Database\Seeders;
use App\Models\Student;
use App\Models\Course;
use App\Models\Grade;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(StudentSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(GradeSeeder::class);

    }
}
