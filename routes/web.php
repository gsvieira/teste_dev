<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::resource('classrooms', ClassroomController::class);
Route::post('/classes/{id}/courses', [ClassroomController::class, 'attachToCourses'])->name('classroom.attachCourses');

Route::resource('courses', CourseController::class);
Route::resource('users', UserController::class);

Route::get('courses/{course}/classrooms', [CourseController::class, 'editClassrooms'])
->name('courses.classrooms');

Route::post('courses/{course}/classrooms', [CourseController::class, 'updateClassrooms'])
->name('courses.classrooms.update');

Route::get('users/{user}/courses', [UserController::class, 'editCourses'])
    ->name('users.courses');

Route::post('users/{user}/courses', [UserController::class, 'updateCourses'])
    ->name('users.courses.update');
