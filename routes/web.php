<?php

use Illuminate\Support\Facades\Route;
use App\Models\Province;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\DashboardController;
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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::prefix('')->group(function () {
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
	Route::resource('/users', UserController::class);
	Route::get('/users/export', [UserController::class, 'print'])->name('murid.print');
});

// Route::get('/home', function() {
//     return view('murid_page.index');
// });
// Route::get('/province' , function(){
//     $provinces = Province::where('district_uuid',0)->get();
//     return view('users.create',["provinces" => $provinces]);
// });

// Route::post('/subprovince', function (Request $request) {

//     $parent_id = $request->district_uuid;
    
//     $subprovince = Province::where('uuid',$parent_id)
//                         ->with('subprovince')
//                         ->get();

//     return response()->json([
//         'subprovince' => $subprovince
//     ]);
// })->name('subprovince');

Route::get('dropdownlist','DataController@getProvinces');
Route::get('dropdownlist/getcities/{uuid}','DataController@getCities');