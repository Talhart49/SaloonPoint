<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


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






Route::get('/', [PageController::class, 'login'] );
Route::get('/signup', [PageController::class, 'signup']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/booking', [PageController::class, 'booking']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/admin', [PageController::class, 'admin']);
Route::get('/editP', [PageController::class, 'editP']);
Route::get('/delete', [PageController::class, 'deleteBooking']);







Route::post('/signup', 'App\Http\Controllers\customerController@store');

Route::post('/', 'App\Http\Controllers\customerController@login');

Route::post('/booking', 'App\Http\Controllers\customerController@book');

Route::post('/editp', 'App\Http\Controllers\customerController@edit');