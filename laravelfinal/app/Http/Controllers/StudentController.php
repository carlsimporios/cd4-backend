<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id')->get();
        return response()->json($students);
    }

    public function view(Student $student)
    {
        // $student->load('grade');
        return response()->json($student);
    }

    public function store(Request $request)
{
    $fields = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:students,email',
    ]);

    $student = Student::create($fields);

    return response()->json([
        'status' => 'OK',
        'message' => 'Student with ID#' . $student->id . ' has been created',
    ]);
}


    public function update(Request $request, Student $student)
{
    $fields = $request->validate([
        'name' => 'string',
        'email' => 'string',
    ]);

    // Check if the new email is different from the existing one
    if ($fields['email'] !== $student->email) {
        // Validate the new email for uniqueness
        $request->validate([
            'email' => 'unique:students,email',
        ]);
    }

    $student->update($fields);

    return response()->json([
        'status' => 'OK',
        'message' => 'Student with ID# ' . $student->id . ' has been updated.',
    ]);
}

public function destroy(Student $student) {
    $details = $student->name.", ".$student->email;
    $student->delete();

    return response()->json([
        'status' => 'OK',
        'message' => 'The dancer '. $details.  ' has been deleted.'
    ]);
}

}
