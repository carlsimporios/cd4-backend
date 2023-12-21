<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GradeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{student}', [StudentController::class, 'view']);
Route::post('/students', [StudentController::class, 'store']);
Route::patch('/students/{student}',[StudentController::class, 'update']);
Route::put('/students/{student}',[StudentController::class, 'update']);
Route::delete('/students/{student}', [StudentController::class, 'destroy']);


Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{course}', [CourseController::class, 'view']);
Route::post('/courses', [CourseController::class, 'store']);
Route::patch('/courses/{course}',[CourseController::class, 'update']);
Route::put('/courses/{course}', [CourseController::class, 'update']);
Route::delete('/courses/{course}', [CourseController::class, 'destroy']);

Route::get('/grades', [GradeController::class, 'index']);
Route::get('/grades/{grade}', [GradeController::class, 'view']);
Route::post('/grades', [GradeController::class, 'store']);
Route::patch('/grades/{grade}',[GradeController::class, 'update']);
Route::put('/grades/{grade}', [GradeController::class, 'update']);
Route::delete('/grades/{grade}', [GradeController::class, 'destroy']);



