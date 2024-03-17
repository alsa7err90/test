<?php

use App\Http\Controllers\PassengerController;
use App\Http\Controllers\PassengerfavoritelocationController;
use App\Http\Controllers\PassengersessionController;
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
Route::resource('/passengers', PassengerController::class);


Route::resource('/passengerfl', PassengerfavoritelocationController::class)->except(['edit','update'  ]);
Route::get('/passengerfl/{PFav_ID}/{Pass_ID}/edit', [PassengerfavoritelocationController::class, 'edit'])->name('passengerfl.edit');
Route::PUT('/passengerfl/{PFav_ID}/{Pass_ID}', [PassengerfavoritelocationController::class, 'update'])->name('passengerfl.update');

Route::resource('/passengersessions', PassengersessionController::class)->except(['edit','update' ]);
Route::get('/passengersessions/{PSes_ID}/{Pass_ID}/edit', [PassengersessionController::class, 'edit'])->name('passengersessions.edit');
Route::PUT('/passengersessions/{PSes_ID}/{Pass_ID}', [PassengersessionController::class, 'update'])->name('passengersessions.update');
