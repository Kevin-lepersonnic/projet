<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\DefaultController::class, 'home'])->name('home');
Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions.index');
Route::get('/questions/create', [App\Http\Controllers\QuestionController::class, 'create'])->name('questions.create');
Route::get('/questions/{slug}', [App\Http\Controllers\QuestionController::class, 'show'])->name('questions.show');
Route::post('/questions', [App\Http\Controllers\QuestionController::class, 'store'])->name('questions.store');
Route::get('/users/register', [App\Http\Controllers\UserController::class, 'register'])->name('register');
Route::post('/users', [App\Http\Controllers\UserController::class, 'signup'])->name('signup');
Route::get('/users/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/users/signin', [App\Http\Controllers\UserController::class, 'signin'])->name('signin');
Route::get('/users/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
Route::post('/questions/{id}/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('questions.comments');
Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/ajax/users', [App\Http\Controllers\UserController::class, 'search'])->name('users.search');