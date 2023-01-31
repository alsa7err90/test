<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

 
Route::get('/accommodation', [TravelerController::class, 'accommodation'])->name('accommodation');
Route::post('/accommodation', [TravelerController::class, 'accommodation_store'])->name('accommodation.store');

Route::get('/confirm', [TravelerController::class, 'confirm'])->name('confirm');
Route::get('/confirm_store', [TravelerController::class, 'confirm_store'])->name('confirm.store');
Route::get('/finish', [TravelerController::class, 'finish'])->name('finish');

Auth::routes();

// admin
Route::post('/send_inv', [AdminController::class, 'send_inv'])->name('send_inv');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/traveler', AdminController::class);
Route::get('/processing/{id}', [AdminController::class, 'processing'])->name('traveler.processing');
Route::get('/completed/{id}', [AdminController::class, 'completed'])->name('traveler.completed');
Route::get('/config', [AdminController::class, 'config'])->name('config');
Route::post('/config/update', [AdminController::class, 'config_update'])->name('config.update');
