<?php

use Illuminate\Support\Facades\Route;
use App\Models\Province;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Backend\DataController;
use App\Http\Controllers\CetakPdfController;
use App\Models\User;

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
    return view('auth.login');
});

Route::get('/cities', [DataController::class, 'getCitty']);
Route::get('/districts', [DataController::class, 'getDistrict']);
Route::prefix('')->group(function () {
	
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
	Route::resource('/users', UserController::class);
	Route::get('/users/export/{uuid}', [UserController::class, 'print'])->name('users.print');
	// Subject
	Route::resource('/subjects', SubjectController::class);
});

