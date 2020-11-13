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

Route::group(['prefix' => 'student'], function () {
    Route::get('/', ['uses' => 'App\Http\Controllers\StudentController@index']);
    Route::post('/', ['uses' => 'App\Http\Controllers\StudentController@create']);
    Route::put('/{id}', ['uses' => 'App\Http\Controllers\StudentController@update']);
    Route::delete('/{id}', ['uses' => 'App\Http\Controllers\StudentController@destroy']);
});
Route::group(['prefix' => 'calendar'], function () {
    Route::post('/', ['uses' => 'App\Http\Controllers\CalendarController@create']);
    Route::get('/', ['uses' => 'App\Http\Controllers\CalendarController@index']);
    Route::put('/{id}', ['uses' => 'App\Http\Controllers\CalendarController@update']);
    Route::delete('/{id}', ['uses' => 'App\Http\Controllers\CalendarController@destroy']);
});
Route::group(['prefix' => 'fee'], function () {
    Route::post('/', ['uses' => 'App\Http\Controllers\FeeController@create']);
    Route::get('/', ['uses' => 'App\Http\Controllers\FeeController@index']);
    Route::put('/{id}', ['uses' => 'App\Http\Controllers\FeeController@update']);
    Route::delete('/{id}', ['uses' => 'App\Http\Controllers\FeeController@destroy']);
});
Route::group(['prefix' => 'saving'], function () {
    Route::post('/', ['uses' => 'App\Http\Controllers\SavingController@create']);
    Route::get('/', ['uses' => 'App\Http\Controllers\SavingController@index']);
    Route::put('/{id}', ['uses' => 'App\Http\Controllers\SavingController@update']);
    Route::delete('/{id}', ['uses' => 'App\Http\Controllers\SavingController@destroy']);
});
Route::group(['prefix' => 'report'], function () {
    Route::post('/', ['uses' => 'App\Http\Controllers\ReportController@create']);
    Route::get('/', ['uses' => 'App\Http\Controllers\ReportController@index']);
    Route::put('/{id}', ['uses' => 'App\Http\Controllers\ReportController@update']);
    Route::delete('/{id}', ['uses' => 'App\Http\Controllers\ReportController@destroy']);
});
