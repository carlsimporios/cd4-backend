<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id')->get();
        return response()->json($courses);
    }

    public function view(Course $course)
    {

        return response()->json($course);
    }

    public function store(Request $request)
{
    $fields = $request->validate([
        'title' => 'required',
    ]);

    $course = Course::create($fields);

    return response()->json([
        'status' => 'OK',
        'message' => 'Course with ID#' . $course->id . ' has been created',
    ]);
}


public function update(Request $request, Course $course)
{
    $fields = $request->validate([
        'title' => 'string',
    ]);

    $course->update($fields);

    return response()->json([
        'status' => 'OK',
        'message' => 'Course with ID# ' . $course->id . ' has been updated.',
    ]);
}

public function destroy(Course $course)
{
    $details = $course->title;
    $course->delete();

    return response()->json([
        'status' => 'OK',
        'message' => 'The course '. $details.  ' has been deleted.'
    ]);
}




}
