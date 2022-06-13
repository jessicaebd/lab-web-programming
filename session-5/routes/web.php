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

Route::group(['prefix' => 'auth'], function (){
    Route::get('login', [\App\Http\Controllers\UserController::class, 'index_login'])->name('login_page');
    Route::get('register', [\App\Http\Controllers\UserController::class, 'index_register'])->name('register_page');
    Route::post('register', [\App\Http\Controllers\UserController::class, 'register'])->name('register');
    Route::post('login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
    Route::get('logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');
});

Route::get('admin', function() {
    return view('admin');
})->name('admin_page');

Route::get('/home', [\App\Http\Controllers\UserController::class, 'index_home'])->name('home_page');
