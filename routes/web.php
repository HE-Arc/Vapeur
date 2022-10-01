<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('login', [UserController::class, 'showLogin'])->name('users.login');
Route::post('register', [UserController::class, 'showRegister'])->name('users.register');
