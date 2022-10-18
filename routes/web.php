<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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


// Basic Route
Route::get('/index', function () {
    return 'Hello World';
});

//controller route
 
Route::get('/hello', [Controller::class, 'Hello']);



//route with 2 methode 
Route::match(['get', 'post'], '/', function () {
});
 

// route any methode
Route::any('/', function () {
});


//route with request
use Illuminate\Http\Request;
 
Route::get('/users', function (Request $request) {
    
});