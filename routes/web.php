<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/users/admin',[AdminController::class,'index']);
Route::get('/login',[UserController::class,'loginView'])->name('login');
Route::get('/register',[UserController::class,'registerView'])->name('register');
Route::post('/login',[UserController::class,'login']);
Route::get('/user/dashboard',[UserController::class,'index']);
Route::post('/register',[UserController::class,'register']);

