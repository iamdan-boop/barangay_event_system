<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\LoginController;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

    Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register.store');
});
