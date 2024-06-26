<?php

use App\Http\Controllers\API\CommentaireController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/courses',[HomeController::class,'courses'])->name('courses');
Route::get('/course',[HomeController::class,'course'])->name('course');


