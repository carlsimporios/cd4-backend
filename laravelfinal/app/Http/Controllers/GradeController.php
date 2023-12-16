<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Grade;

class GradeController extends Controller
{
    public function index(){

        $grades = Grade::all();


        return view('grade.index', [
            'grades' => $grades,
    ]);

    }
    public function create(){
        $students = Student::all();
        $courses = Course::all();
        return view('grade.createGrade', [
            'students' => $students,
            'courses' => $courses,
        ]);

    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'student_id' => 'required|string|max:255',
            'course_id' => 'required|string|max:255',
            'grade' => 'required|string|max:255',
        ]);

        Grade::create([
            'student_id' => $validatedData['student_id'],
            'course_id' => $validatedData['course_id'],
            'grade' => $validatedData['grade'],
        ]);

        return redirect('grade/index')->with('success', 'Student added successfully!');
    }
    public function editGrade($id)
    {
        $grade = Grade::find($id);

        if (!$grade) {
            return redirect('grade/index')->with('error', 'Grade not found!');
        }

        $students = Student::all();
        $courses = Course::all();

        return view('grade.editGrade', [
            'grade' => $grade,
            'students' => $students,
            'courses' => $courses,
        ]);
    }

    public function updateGrade(Request $request, $id)
    {
        $grade = Grade::find($id);

        if (!$grade) {
            return redirect('grade/index')->with('error', 'Grade not found!');
        }

        $validatedData = $request->validate([
            'student_id' => 'required|string|max:255',
            'course_id' => 'required|string|max:255',
            'grade' => 'required|string|max:255',
        ]);

        $grade->update([
            'student_id' => $validatedData['student_id'],
            'course_id' => $validatedData['course_id'],
            'grade' => $validatedData['grade'],
        ]);

        return redirect('grade/index')->with('success', 'Grade updated successfully!');
    }

    public function deleteGrade($id)
    {
        $grade = Grade::find($id);

        if (!$grade) {
            return redirect('grade/index')->with('error', 'Grade not found!');
        }

        $grade->delete();

        return redirect('grade/index')->with('success', 'Grade deleted successfully!');
    }
}
