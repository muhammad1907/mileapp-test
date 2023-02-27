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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/package', 'App\Http\Controllers\TransactionController@index');
Route::post('/package', 'App\Http\Controllers\TransactionController@store');
Route::get('/package/{transaction_id}', 'App\Http\Controllers\TransactionController@show');
Route::delete('/package/{transaction_id}', 'App\Http\Controllers\TransactionController@delete');

Route::put('/package/{id}', 'App\Http\Controllers\TransactionController@update');
Route::patch('/package/{id}', 'App\Http\Controllers\TransactionController@update');