<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\AdminController;

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

Route::get('/admin', function () {
	return view('admin.admin');
})->name('admin');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
	Route::resource('/user', UserController::class, ['except' => ['show']]);
	
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::put('/profile/password', [ProfileController::class, 'password'])->name('profile.password');

	Route::get('/biodata', [UserController::class, 'indexStudent'])->name('biodata');

	Route::get('/report', [UserController::class, 'indexReport'])->name('report');

	Route::get('/fee', [UserController::class, 'indexFee'])->name('fee');

	Route::get('/calendar', [UserController::class, 'indexCalendar'])->name('calendar');

	Route::resource('/admin/student', StudentController::class);

	Route::resource('/admin/report', ReportController::class);

	Route::resource('/admin/fee', FeeController::class);

	Route::resource('/admin/calendar', CalendarController::class);
});