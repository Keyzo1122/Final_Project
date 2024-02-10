<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('dashboard.index');
});


Route::get('/lecture', [LectureController::class, "index"]);
Route::get('/lecture/create', [LectureController::class, "create"]);
Route::post('/api/lecture/create', [LectureController::class, "regis"]);
Route::get('/lecture/{id}/edit', [LectureController::class, "edit"]);
Route::post('/api/lecture/{id}/edit', [LectureController::class, "update"]);
Route::get('/api/lecture/{id}/del', [LectureController::class, "destroy"]);

Route::get('/nip', [NipController::class, "index"]);
Route::get('/lecture/{id}', [NipController::class, "detail"]);


Route::resource('lesson', LessonController::class);
