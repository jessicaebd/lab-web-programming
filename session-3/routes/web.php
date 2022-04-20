<?php

use App\Http\Controllers\AircraftController;
use App\Models\Aircraft;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is wherpe you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AircraftController::class, 'index'])->name('home');

Route::get('/insert', [AircraftController::class, 'create']);

Route::post('/insert', [AircraftController::class, 'store'])->name('insertAircraft');

Route::get('/edit/{reg}', [AircraftController::class, 'edit'])->name('editAircraft');

Route::put('/update/{reg}', [AircraftController::class, 'update'])->name('updateAircraft');
