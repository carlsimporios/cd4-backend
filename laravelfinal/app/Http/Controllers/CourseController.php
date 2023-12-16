<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::all();

        return view('course.index', ['courses' =>$courses]);

    }
    public function create(){
        return view('course.createCourse');

    }
    public function store(Request $request){

        $validatedData = $request->validate([
            'title' => 'required',

        ]);

        Course::create([
            'title' => $validatedData['title'],

        ]);

        return redirect('course/index')->with('success', 'Course added successfully!');
    }

    public function edit($id){
        $course = Course::find($id);
        if(!$course){

            return redirect('course/index')->with('error', 'Course not found!');
        }

        return view('course.editCourse', [
            'course' =>$course

        ]);

    }


    public function update(Request $request, $id)
    {

        $course = Course::find($id);

        $validatedData = $request->validate([
            'title' => 'required|string',

        ]);


        $course->update([
            'title' => $validatedData['title'],

        ]);


        return redirect('course/index')->with('success', 'Course updated successfully!');
    }
    public function delete($id){

        $course = Course::find($id);

        if(!$course){

            return redirect('course/index')->with('error','Course not found!');

        }

        $course -> delete();

        return redirect('course/index')->with('success', 'Course has deleted successfully!');

    }

}

