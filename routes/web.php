<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\FeeController;

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
	return redirect()->route('login');
});
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
	Route::resource('/user', UserController::class, ['except' => ['show']]);
	
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::put('/profile/password', [ProfileController::class, 'password'])->name('profile.password');

	Route::get('/biodata', [StudentController::class, 'index'])->name('biodata');

	Route::get('/report', [ReportController::class, 'index'])->name('report');

	Route::get('/fee', [FeeController::class, 'index'])->name('fee');

	Route::get('/calendar', function () {
		return view('pages.calendar');
	})->name('calendar');
});

Route::group(['prefix' => 'admin'], function () {
	Route::get('/students', function () {
		return view('admin.students');
	})->name('students');
	
	Route::get('/students/editprofile', function () {
		return view('admin.editprofile');
	})->name('editprofile');
	
	Route::get('/ad_calendar', function () {
		return view('admin.ad_calendar');
	})->name('ad_calendar');
	
	Route::get('/dashboard', function () {
		return view('admin.dashboard');
	})->name('dashboard');
	
	Route::get('/sppadmin', function () {
		return view('admin.sppadmin');
	})->name('sppadmin');
	
	Route::get('/editspp', function () {
		return view('admin.editspp');
	})->name('editspp');

	Route::get('/editcalendar', function () {
		return view('admin.editcalendar');
	})->name('editcalendar');

	Route::get('/tambahcalendar', function () {
		return view('admin.tambahcalendar');
	})->name('tambahcalendar');

	Route::get('/adcalendar', function () {
		return view('admin.adcalendar');
	})->name('adcalendar');

});