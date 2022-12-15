<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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

Route::group(['middleware' => ['auth']], function(){
       Route::get('/home', [LoginController::class, 'home'])->name('home');
});
Route::group(['middleware' => ['auth','role:owner,admin']], function(){
       Route::get('/crud-post', [PostController::class, 'crud'])->name('crud-post');
});

Route::get('/', [LoginController::class, 'welcome'])->name('welcome');
Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/register-user',[LoginController::class, 'registeruser'])->name('register-user');
Route::post('/login-user',[LoginController::class, 'loginuser'])->name('login-user');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

