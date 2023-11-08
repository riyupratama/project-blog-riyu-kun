<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
Route::get('read/{slug}',[HomeController::class, 'read']);
Route::get('user/{username}', [UserController::class, 'read']);
Route::prefix('/pages')->controller(PageController::class)->group(function () {
    Route::get('about', 'about');
});