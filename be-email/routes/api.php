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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/subscription/store', 'App\Http\Controllers\SubscriptionController@store');

Route::get('/subscription', 'App\Http\Controllers\SubscriptionController@index');

Route::post('/subscription/sendEmail', 'App\Http\Controllers\EmailController@sendEmail');
