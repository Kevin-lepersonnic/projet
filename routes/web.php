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

Route::get('/', [App\Http\Controllers\DefaultController::class, 'home'])->name('home');
Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions.index');
Route::get('/questions/{slug}', [App\Http\Controllers\QuestionController::class, 'show'])->name('questions.show');
Route::get('/questions/create', [App\Http\Controllers\QuestionController::class, 'create'])->name('questions.create');