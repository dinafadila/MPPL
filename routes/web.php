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
    return redirect()->route('home');
});

Auth::routes();
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin')->middleware('auth');
Route::get('admin/students', 'App\Http\Controllers\AdminController@students')->name('students')->middleware('auth');
Route::get('admin/students/editprofile', 'App\Http\Controllers\AdminController@editprofile')->name('editprofile')->middleware('auth');
Route::get('admin/ad_calendar', 'App\Http\Controllers\AdminController@ad_calendar')->name('ad_calendar')->middleware('auth');
Route::get('admin/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('dashboard')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	Route::get('fee', function () {
		return view('pages.fee');
	})->name('fee');

	Route::get('report', function () {
		return view('pages.report');
	})->name('report');

	Route::get('calendar', function () {
		return view('pages.calendar');
	})->name('calendar');

	Route::get('/', function () {
		return view('welcome');
	})->name('admin');

	Route::get('admin/students', function () {
		return view('admin.students');
	})->name('students');

	Route::get('admin/students/editprofile', function () {
		return view('admin.editprofile');
	})->name('editprofile');

	Route::get('admin/ad_calendar', function () {
		return view('admin.ad_calendar');
	})->name('ad_calendar');

	Route::get('admin/dashboard', function () {
		return view('admin.dashboard');
	})->name('dashboard');

	Route::get('admin/sppadmin', function () {
		return view('admin.sppadmin');
	})->name('sppadmin');

	Route::get('admin/editspp', function () {
		return view('admin.editspp');
	})->name('editspp');

	Route::get('admin/editcalendar', function () {
		return view('admin.editcalendar');
	})->name('editcalendar');

	Route::get('admin/tambahcalendar', function () {
		return view('admin.tambahcalendar');
	})->name('tambahcalendar');

	Route::get('admin/adcalendar', function () {
		return view('admin.adcalendar');
	})->name('adcalendar');

});