<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin/about', [AboutController::class, 'index']);

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/student', [StudentController::class, 'index'])->name('admin.student.index');
Route::get('/admin/student/create', [StudentController::class, 'create'])->name('admin.student.create');
Route::post('/admin/student', [StudentController::class, 'store'])->name('admin.student.store');

Route::get('/admin/classroom', [ClassroomController::class, 'index'])->name('admin.classroom.index');
Route::get('/admin/classroom/create', [ClassroomController::class, 'create'])->name('admin.classroom.create');
Route::post('/admin/classroom', [ClassroomController::class, 'store'])->name('admin.classroom.store');

Route::get('/admin/subject', [SubjectController::class, 'index'])->name('admin.subject.index');
Route::get('/admin/subject/create', [SubjectController::class, 'create'])->name('admin.subject.create');
Route::post('/admin/subject', [SubjectController::class, 'store'])->name('admin.subject.store');

Route::get('/admin/teacher', [TeacherController::class, 'index'])->name('admin.teacher.index');
Route::get('/admin/teacher/create', [TeacherController::class, 'create'])->name('admin.teacher.create');
Route::post('/admin/teacher', [TeacherController::class, 'store'])->name('admin.teacher.store');
