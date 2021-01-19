<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.  These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Home', [HomeController::class, 'index']);
Route::get('Client/Produk/{produk}', [HomeController::class, 'show']);
Route::get('Pesan', [HomeController::class, 'pesan']);
Route::post('Produk/Filter', [HomeController::class, 'filter']);

Route::get('Home/{status}', [HomeController::class, 'index']);
Route::get('Dashboard/{status}', [HomeController::class, 'showDashboard']);

Route::prefix('Admin')->middleware('auth')->group(function(){
	Route::get('Dashboard', [HomeController::class, 'showDashboard']);
	Route::get('Kategori', [HomeController::class, 'showKategori']);
	
	Route::get('Produk', [ProdukController::class, 'index']);
	Route::get('Produk/Create', [ProdukController::class, 'create']);
	Route::post('Produk', [ProdukController::class, 'store']);
	Route::get('Produk/{produk}', [ProdukController::class, 'show']);
	Route::get('Produk/{produk}/edit', [ProdukController::class, 'edit']);
	Route::put('Produk/{produk}', [ProdukController::class, 'update']);
	Route::delete('Produk/{produk}', [ProdukController::class, 'destroy']);
	Route::post('Produk/Filter', [ProdukController::class, 'filter']);

	Route::get('User', [UserController::class, 'index']);
	Route::get('User/Create', [UserController::class, 'create']);
	Route::post('User', [UserController::class, 'store']);
	Route::get('User/{user}', [UserController::class, 'show']);
	Route::get('User/{user}/edit', [UserController::class, 'edit']);
	Route::put('User/{user}', [UserController::class, 'update']);
	Route::delete('User/{user}', [UserController::class, 'destroy']);
});


Route::get('Login', [AuthController::class, 'showLogin'])->name('login');
Route::post('Login', [AuthController::class, 'loginProcess']);
Route::get('Logout', [AuthController::class, 'logout']);

Route::get('Register', [AuthController::class, 'showRegister']);
Route::post('Register', [AuthController::class, 'registerProcess']);

Route::get('test-ajax', [HomeController::class, 'testAjax']);

Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);

