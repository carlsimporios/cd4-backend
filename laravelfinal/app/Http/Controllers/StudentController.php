<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();

        return view('student.index', ['students' =>$students]);

    }
    public function create(){
        return view('student.createStudent');

    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        Student::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
        ]);

        return redirect('student/index')->with('success', 'Student added successfully!');
    }
    public function edit($id){
        $student = Student::find($id);
        if(!$student){

            return redirect('student/index')->with('error', 'Student not found!');
        }

        return view('student.editStudent', [
            'student' =>$student

        ]);

    }
    public function update(Request $request, $id)
    {

        $student = Student::find($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);


        $student->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
        ]);


        return redirect('student/index')->with('success', 'Student updated successfully!');
    }

    public function delete($id){

        $student = Student::find($id);

        if(!$student){

            return redirect('student/index')->with('error','Student not found!');

        }

        $student -> delete();

        return redirect('student/index')->with('success', 'Student has deleted successfully!');

    }

}
