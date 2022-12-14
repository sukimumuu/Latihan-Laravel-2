<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/register-user',[LoginController::class, 'registeruser'])->name('register-user');
Route::post('/login-user',[LoginController::class, 'loginuser'])->name('login-user');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

