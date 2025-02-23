<?php
namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Middleware\CheckHeaders;
use App\Http\Controllers\AccountController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('unauth', function () {
    return view('unauth');
});

Route::get('/user/{id}', [UserController::class, 'getUser']);
Route::get('/course', [CourseController::class,'index']);
Route::get('/course/{id}', [CourseController::class, 'findCourse'])->middleware(CheckHeaders::class);
Route::get('/', [AccountController::class, 'index']);
Route::post('/add', [AccountController::class, 'store']);
Route::post('/update', [AccountController::class, 'update']);
Route::post('/delete', [AccountController::class, 'destroy']);