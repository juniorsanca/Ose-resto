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

Route::get('infos', 'App\Http\Controllers\ApiController@infos');


Route::post('/reservation','App\Http\Controllers\ApiController@store');


Route::post('/reservation/annulation/{token}');



Route::middleware('auth:api')->get('/user', function (Request $request) { return $request->user(); });
