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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/customer', 'App\Http\Controllers\CustomerController@index');
Route::get('/customer/index', 'App\Http\Controllers\CustomerController@index');
Route::get('/customer/list', 'App\Http\Controllers\CustomerController@index');
Route::get('/customer/form', 'App\Http\Controllers\CustomerController@index');
Route::get('/customer/edit/{num}', 'App\Http\Controllers\CustomerController@index');

