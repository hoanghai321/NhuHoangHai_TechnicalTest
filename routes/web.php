<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Helpers\Singleton;
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
    return view('Index');
});
//section1
Route::get('/Section1Q1', [HomeController::class, 'Section1Q1'])->name('Section1Q1');
Route::get('/Section1Q2', [HomeController::class, 'Section1Q2'])->name('Section1Q2');
Route::get('/Section1Q3', [HomeController::class, 'Section1Q3'])->name('Section1Q3');
Route::get('/Section1Q4', [HomeController::class, 'Section1Q4'])->name('Section1Q4');
Route::get('/Section1Q5', [HomeController::class, 'Section1Q5'])->name('Section1Q5');
Route::get('/Section1Q6', [HomeController::class, 'Section1Q6'])->name('Section1Q6');
Route::get('/Section1Q7a', [HomeController::class, 'Section1Q7a'])->name('Section1Q7a');
Route::get('/Section1Q7b', [HomeController::class, 'Section1Q7b'])->name('Section1Q7b');
//section2
Route::get('/Section2Q1', [HomeController::class, 'Section2Q1'])->name('Section2Q1');
Route::get('/Section2Q2', [HomeController::class, 'Section2Q2'])->name('Section2Q2');
Route::get('/Section2Q3a', [HomeController::class, 'Section2Q3a'])->name('Section2Q3a');
Route::get('/Section2Q3b', [HomeController::class, 'Section2Q3b'])->name('Section2Q3b');
//section3
Route::get('/Section3Q1', [HomeController::class, 'Section3Q1'])->name('Section3Q1');
Route::get('/Section3Q2', [HomeController::class, 'Section3Q2'])->name('Section3Q2');

