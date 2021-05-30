<?php
namespace App\Http\Controllers;

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
Route::group(['middleware' => 'api'], function ($router) {

    Route::get('/', function () {
        return response()->json(['message' => 'App SoftHair API', 'status' => 'Connected']);
    });

    Route::fallback(function () {
        return response()->json(['message' => 'Route not found', 'status' => 'Connected']);;
    });

    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

    Route::resource('client', 'ClientController')->except(['create', 'edit']);
    Route::resource('schedule','ScheduleController')->except(['create', 'edit']);
    Route::resource('service', 'ServiceController')->except(['create', 'edit']);
});
