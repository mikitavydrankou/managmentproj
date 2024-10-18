<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('layout');
});

Route::resource('students', \App\Http\Controllers\StudentController::class);
Route::resource('teachers', \App\Http\Controllers\TeacherController::class);
Route::resource('courses', \App\Http\Controllers\CourseController::class);
Route::resource('batches', \App\Http\Controllers\BatchController::class);
