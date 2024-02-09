<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;


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

// Route::get('/', function () {
//     return view('dashboard.index');
// });


Route::get('/lecture', [LectureController::class, "index"]);
Route::get('/lecture/create', [LectureController::class, "create"]);
Route::post('/api/lecture/create', [LectureController::class, "regis"]);
