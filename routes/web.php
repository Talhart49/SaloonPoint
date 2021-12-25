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


Route::get('/customer', 'App\Http\Controllers\customerController@index');

Route::post('/signup', 'App\Http\Controllers\customerController@store');