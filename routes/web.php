<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

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

Route::prefix('admin')->group(function(){
    Route::get('/', [HomeController::class, 'dashboard']);
    Route::prefix('menu')->group(function(){
        Route::get('/', [MenuController::class, 'index']);
        Route::get('/index', [MenuController::class, 'index']);
        Route::get('/add', [MenuController::class, 'add']);
        Route::get('/erase/{id}', [MenuController::class, 'erase']);
        Route::get('/edit/{id}', [MenuController::class, 'edit']);
        Route::post('/store', [MenuController::class, 'store']);
        Route::post('/update', [MenuController::class, 'update']);
    });
});