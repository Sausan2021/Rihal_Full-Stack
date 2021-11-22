<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//StudentData
Route::get('/studentData', [App\Http\Controllers\StudentController::class,'create']);
Route::post('/studentData/store', [App\Http\Controllers\StudentController::class,'store']);


//Statistics
Route::get('/statistics', [App\Http\Controllers\StatisticsController::class,'index']);

//Test Table
Route::view('/TestTable','TestTable');