<?php

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

Route::get('/', 'App\Http\Controllers\RentController@index');
Route::get('/create', 'App\Http\Controllers\RentController@create');
Route::post('/store', 'App\Http\Controllers\RentController@store');
Route::get('/edit/{id}', 'App\Http\Controllers\RentController@edit');
Route::get('/redirect', 'App\Http\Controllers\RentController@index');
Route::post('/update', 'App\Http\Controllers\RentController@update');
Route::get('/delete/{id}', 'App\Http\Controllers\RentController@destroy');
