<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/login', [HomeController::class, 'login']);

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'dashboard']);
    Route::prefix('menu')->group(function(){
        Route::get('/', [MenuController::class, 'index']);
        Route::get('/index', [MenuController::class, 'index']);
        Route::get('/add', [MenuController::class, 'add']);
        Route::get('/erase/{id}', [MenuController::class, 'erase']);
        Route::get('/edit/{id}', [MenuController::class, 'edit']);
        Route::post('/store', [MenuController::class, 'store']);
        Route::post('/update', [MenuController::class, 'update']);
    });
    Route::prefix('reservation')->group(function(){
        Route::get('/', [ReservationController::class, 'index']);
        Route::get('/index', [ReservationController::class, 'index']);
        Route::get('/add', [ReservationController::class, 'add']);
        Route::get('/erase/{id}', [ReservationController::class, 'erase']);
        Route::get('/edit/{id}', [ReservationController::class, 'edit']);
        Route::post('/store', [ReservationController::class, 'store']);
        Route::post('/update', [ReservationController::class, 'update']);
    });
});