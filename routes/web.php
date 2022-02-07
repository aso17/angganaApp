<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\SceduleController;
use Illuminate\Support\Facades\Route;
use \App\Http\Middleware;

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

Route::get('/login', [LoginController::class, 'index']);
Route::get('/registrasi', [LoginController::class, 'create']);
Route::post('/registrasi', [LoginController::class, 'store']);
Route::post('/sigIn', [LoginController::class, 'sigIn']);

Route::group(['middleware' => 'CheckLogin'], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/employees', [EmployeesController::class, 'index']);
    Route::get('/scedule', [SceduleController::class, 'index']);
    Route::post('/scedule', [SceduleController::class, 'store']);
    Route::get('/historyScedule', [SceduleController::class, 'history']);
    Route::get('/help', [UserController::class, 'help']);
    Route::get('/logOut', [LoginController::class, 'logOut']);
});