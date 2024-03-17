<?php

use App\Http\Controllers\Api\PassengerController;
use App\Http\Controllers\Api\PassengerfavoritelocationController;
use App\Http\Controllers\Api\PassengersessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/passengers', PassengerController::class);


Route::resource('/passengerfl', PassengerfavoritelocationController::class)->except(['edit','update'  ]);
Route::get('/passengerfl/{PFav_ID}/{Pass_ID}/edit', [PassengerfavoritelocationController::class, 'edit']) ;
Route::PUT('/passengerfl/{PFav_ID}/{Pass_ID}', [PassengerfavoritelocationController::class, 'update']) ;

Route::resource('/passengersessions', PassengersessionController::class)->except(['edit','update' ]);
Route::get('/passengersessions/{PSes_ID}/{Pass_ID}/edit', [PassengersessionController::class, 'edit']) ;
Route::PUT('/passengersessions/{PSes_ID}/{Pass_ID}', [PassengersessionController::class, 'update']) ;
