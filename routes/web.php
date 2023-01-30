<?php

use App\Http\Controllers\TravelerController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TravelerController::class, 'index'])->name('phone');
Route::post('/', [TravelerController::class, 'phone_store'])->name('phone.store');

Route::get('/passport', [TravelerController::class, 'passport'])->name('passport');
Route::post('/passport', [TravelerController::class, 'passport_store'])->name('passport.store');

// Route::get('/companion', [TravelerController::class, 'companion'])->name('companion');
// Route::post('/companion', [TravelerController::class, 'companion_store'])->name('companion.store');

Route::get('/accommodation', [TravelerController::class, 'accommodation'])->name('accommodation');
Route::post('/accommodation', [TravelerController::class, 'accommodation_store'])->name('accommodation.store');

Route::get('/confirm', [TravelerController::class, 'confirm'])->name('accommodation');
Route::post('/confirm', [TravelerController::class, 'confirm_store'])->name('confirm.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
