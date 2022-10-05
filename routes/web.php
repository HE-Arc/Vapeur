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
Route::get('login', [UserController::class, 'login'])->name('users.login');
Route::post('loginInput', [UserController::class, 'loginInput'])->name('users.loginInput');
Route::get('register', [UserController::class, 'register'])->name('users.register');
Route::post('registerInput', [UserController::class, 'registerInput'])->name('users.registerInput');
