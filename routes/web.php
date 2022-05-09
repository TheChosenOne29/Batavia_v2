<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventsController;
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

Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login', [UserController::class, 'auth']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::post('/reservation/store', [ReservationController::class, 'userstore'])->middleware('auth');

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
    Route::prefix('events')->group(function(){
        Route::get('/', [EventsController::class, 'index']);
        Route::get('/index', [EventsController::class, 'index']);
        Route::get('/add', [EventsController::class, 'add']);
        Route::get('/erase/{id}', [EventsController::class, 'erase']);
        Route::get('/edit/{id}', [EventsController::class, 'edit']);
        Route::post('/store', [EventsController::class, 'store']);
        Route::post('/update', [EventsController::class, 'update']);
    });
});

Route::prefix('shop')->middleware('auth')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('shop');
    Route::get('/shop', [CartController::class, 'index'])->name('shop');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
    Route::post('/add', [CartController::class, 'add'])->name('cart.store');
    Route::post('/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
});