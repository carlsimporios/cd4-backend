<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GradeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//View
Route::get('/', [StudentController::class, 'index'])->name('index');
Route::get('student/index', [StudentController::class, 'index'])->name('index');


Route::get('/deleteStudent/{id}', [StudentController::class, 'delete'])->name('delete');
Route::get('/createStudent', [StudentController::class, 'create'])->name('create');
Route::post('/storeStudent', [StudentController::class, 'store'])->name('store');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('update');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('edit');


// course
Route::get('/', [CourseController::class, 'index'])->name('index');
 Route::get('/course/index', [CourseController::class, 'index'])->name('index');
 Route::get('/createCourse', [CourseController::class, 'create'])->name('create');
 Route::post('/storeCourse', [CourseController::class, 'store'])->name('store');

//  deletecourse
 Route::get('/deleteCourse/{id}', [CourseController::class, 'delete'])->name('delete');


//  editcourse
 Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('edit');
 Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('update');





Route::post('/grade/index', [GradeController::class, 'store'])->name('grade.index.store');


Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('update');
 Route::post('/storeCourse', [CourseController::class, 'store'])->name('store');




//view grade
Route::get('/grade/index', [GradeController::class, 'index'])->name('index');

//create grade
Route::get('/createGrade', [GradeController::class, 'create'])->name('create');
Route::post('/storeGrade', [GradeController::class, 'store'])->name('store');



Route::get('editGrade/{id}', [GradeController::class, 'editGrade']);
Route::patch('updateGrade/{id}', [GradeController::class, 'updateGrade']);
Route::get('deleteGrade/{id}', [GradeController::class, 'deleteGrade']);

