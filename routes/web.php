<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CollegersController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\NipController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\LessonController;

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

Route::get('/', function () {return view('dashboard.index');})->middleware('auth');


Route::get('/login', [AuthController::class, 'viewLogin'])->name('login');
Route::post('/api/postLogin', [AuthController::class, 'postLogin']);
Route::post('/api/logout', [AuthController::class, 'logout'])->middleware('auth');


Route::get('/lecture', [LectureController::class, "index"])->middleware('auth');
Route::get('/lecture/create', [LectureController::class, "create"])->middleware('auth');
Route::post('/api/lecture/create', [LectureController::class, "regis"])->middleware('auth');
Route::get('/lecture/{id}/edit', [LectureController::class, "edit"])->middleware('auth');
Route::post('/api/lecture/{id}/edit', [LectureController::class, "update"])->middleware('auth');
Route::get('/api/lecture/{id}/del', [LectureController::class, "destroy"])->middleware('auth');


Route::get('/nip', [NipController::class, "index"])->middleware('auth');
Route::get('/lecture/{id}', [NipController::class, "detail"])->middleware('auth');


Route::resource('lesson', LessonController::class)->middleware('auth');
Route::resource('faculty', FacultyController::class)->middleware('auth');
Route::resource('grade', GradeController::class)->middleware('auth');
Route::resource('collegers', CollegersController::class);
