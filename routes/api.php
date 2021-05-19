 <?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/customer/list', 'App\Http\Controllers\API\CustomerController@list');
Route::post('/customer/create', 'App\Http\Controllers\API\CustomerController@create');
Route::get('/customer/get/{id}', 'App\Http\Controllers\API\CustomerController@get');
Route::put('/customer/update/{id}', 'App\Http\Controllers\API\CustomerController@update');
Route::delete('/customer/delete/{id}', 'App\Http\Controllers\API\CustomerController@delete');