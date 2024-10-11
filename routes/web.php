<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkExperienceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/experiences', [WorkExperienceController::class, 'index'])->name('experiences');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{project}', [ProjectController::class, 'show'])
->whereNumber('project')
->name('projects.show');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/testphp', function () {
    return view('testphp');
});

Route::get('/test', function () {
    return view('test');
});
