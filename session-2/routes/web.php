<?php

use App\Http\Controllers\BookController;
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
    return view('books.create');
});

Route::prefix('books')
    ->controller(BookController::class)
    ->group(function () {
        Route::get('/index', 'index');
        Route::get('/create', 'create')->name('create-book');
        Route::post('/store', 'store')->name('store-book');
        Route::get('/edit/{id}', 'edit')->name('edit-book');
        Route::put('/update/{id}', 'update')->name('update-book');
        Route::delete('/delete/{id}', 'destroy')->name('delete-book');
    });
