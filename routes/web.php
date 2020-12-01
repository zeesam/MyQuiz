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
Route::get('/quiz/create', [App\Http\Controllers\QuizController::class, 'create'])->middleware('auth');
Route::post('/quiz/store', [App\Http\Controllers\QuizController::class, 'store'])->middleware('auth');
Route::get('/quiz/view', [App\Http\Controllers\QuizController::class, 'index'])->middleware('auth');
Route::get('/quiz/edit/{id}', [App\Http\Controllers\QuizController::class, 'edit'])->middleware('auth');
Route::get('/quiz/show/{id}', [App\Http\Controllers\QuizController::class, 'show'])->middleware('auth');
Route::post('/quiz/update/{id}', [App\Http\Controllers\QuizController::class, 'update'])->middleware('auth');

Route::get('/question/create', [App\Http\Controllers\QuestionController::class, 'create'])->middleware('auth');
Route::post('/question/store', [App\Http\Controllers\QuestionController::class, 'store'])->middleware('auth');
Route::get('/question/view', [App\Http\Controllers\QuestionController::class, 'index'])->middleware('auth');
Route::get('/question/edit/{id}', [App\Http\Controllers\QuestionController::class, 'edit'])->middleware('auth');
Route::get('/question/show/{id}', [App\Http\Controllers\QuestionController::class, 'show'])->middleware('auth');
Route::post('/question/update/{id}', [App\Http\Controllers\QuestionController::class, 'update'])->middleware('auth');
