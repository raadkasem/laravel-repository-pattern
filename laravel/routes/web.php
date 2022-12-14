<?php

use Barryvdh\Debugbar\Facades\Debugbar;
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
//    Debugbar::info('hey');
    return view('welcome');
});

Route::get('/customers', 'App\Http\Controllers\CustomerController@index');

Route::get('/customer/{customerId}', 'App\Http\Controllers\CustomerController@show');
Route::get('/customer/{customerId}/update', 'App\Http\Controllers\CustomerController@update');
Route::get('/customer/{customerId}/destroy', 'App\Http\Controllers\CustomerController@destroy');
