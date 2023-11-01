<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\OnlyUserMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index']);
Route::resource('/posts', PostController::class)->middleware('auth');
Route::controller(AuthController::class)->middleware('guest')->group(function() {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginPost')->name('login');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerPost')->name('register');
});
Route::post('logout', [AuthController::class, 'logout'])->name('logout');