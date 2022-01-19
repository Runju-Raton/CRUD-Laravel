<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('welcome');
});

Route::get('/product',[ProductController::class,'index']);

Route::get('/name',function(){
    return "My name is Runju Raton";
});

Route::get('/create-product',[ProductController::class,'createProduct']);

Route::get('/student', [StudentController::class,'stdPhone']);

Route::get('/pc',[PostController::class,'postComment']);

Route::get('/create-teacher',function(){
    return view('teacher.teacher');
});
Route::post('/create',[TeacherController::class,'create']);