<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
use Illuminate\Routing\RouteRegistrar;
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

Route::get("/login",[LoginController::class,"login"]);
Route::post("/login",[LoginController::class,"loginStore"])->name('login.login');
Route::get("/",[LoginController::class,"index"]);
Route::get("/register",[LoginController::class,"create"]);
Route::post("/store",[LoginController::class,"store"])->name("register.store");
