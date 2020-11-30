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
    return view('user.login');
});

Route::resource('quizz', \App\Http\Controllers\QuizController::class);
Route::post('submit_result', [\App\Http\Controllers\QuizController::class, 'submit_result'])->name("submit_result");
Route::get('/user/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/user/submit-login', [\App\Http\Controllers\UserController::class, 'submitLogin'])->name('submit_login');
Route::post('/user/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');
