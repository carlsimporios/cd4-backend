<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Grade;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::orderBy('id')->get();
        return response()->json($grades);
    }

    public function view(Grade $grade)
    {
        // Assuming you have a 'students' relationship in your Grade model
        $grade->load('students');

        return response()->json($grade);
    }

    public function store(Request $request)
{
    $fields = $request->validate([
        'student_id' => 'required|exists:students,id',
        'course_id' => 'required|exists:courses,id',
        'grade' => 'required|numeric',
    ], [
        'student_id.required' => 'Student ID is required.',
        'student_id.exists' => 'The selected student does not exist.',
        'course_id.required' => 'Course ID is required.',
        'course_id.exists' => 'The selected course does not exist.',
        'grade.required' => 'Grade is required.',
        'grade.numeric' => 'Grade must be a numeric value.',
    ]);

    $grade = Grade::create($fields);

    return response()->json([
        'status' => 'OK',
        'message' => 'Grade with ID#' . $grade->id . ' has been created',
    ]);
}

// public function update(Request $request, Grade $grade)
// {
//     if (!$grade) {
//         return response()->json([
//             'status' => 'error',
//             'message' => 'Grade not found.',
//         ], 404);
//     }

//     try {
//         $fields = $request->validate([
//             'student_id' => 'required|exists:students,id',
//             'course_id' => 'required|exists:courses,id',
//             'grade' => 'required|numeric',
//         ]);

//         $grade->update($fields);

//         return response()->json([
//             'status' => 'OK',
//             'message' => 'Grade with ID# ' . $grade->id . ' has been updated.',
//         ]);
//     } catch (\Illuminate\Validation\ValidationException $e) {
//         return response()->json([
//             'status' => 'error',
//             'message' => 'Validation failed',
//             'errors' => $e->validator->errors(),
//         ], 422);
//     }

    public function update(Request $request, Grade $grade)
{
    $fields = $request->validate([
                    'student_id' => 'required|exists:students,id',
                    'course_id' => 'required|exists:courses,id',
                    'grade' => 'required|numeric',
                ]);
     $grade -> update($fields);

    return response()->json([
        'status' => 'OK',
        'message' => 'Grade with ID# ' . $grade->id . ' has been updated.',
    ]);
}

// Explicitly specify supported methods
public static function methods()
{
    return ['PUT', 'PATCH'];
}

public function destroy(Grade $grade)
{
    $grade->delete();

    return response()->json([
        'status' => 'OK',
        'message' => 'Event with ID# ' . $grade->id . ' has been deleted.'
    ]);
}

}






