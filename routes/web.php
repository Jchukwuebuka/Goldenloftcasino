<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about_us', [HomeController::class, 'abouts']);
Route::get('/roulette', [HomeController::class, 'roulettes']);
Route::get('/baccarat', [HomeController::class, 'baccarats']);
Route::get('/poker', [HomeController::class, 'pokers']);
Route::get('/lottery', [HomeController::class, 'lotterys']);
Route::get('/electronic', [HomeController::class, 'electronics']);
Route::get('/rules', [HomeController::class, 'ruless']);
