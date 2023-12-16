<?php

namespace Database\Factories;
use App\Models\Student;
use App\Models\COurse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'student_id' => fake()->randomElement(Student::pluck('id')),
                'course_id' => fake()->randomElement(Course::pluck('id')),
                'grade' => fake()->randomNumber(),
            ];
    }
}
