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

Route::get('/hello', [Controller::class, 'index']);




Route::get('/request', function () {
    return view('request');
});






//route with request
use Illuminate\Http\Request;
 
Route::any('/user', function (Request $request) {
    $name = $request->input("name");
    return $name;
});











//route with 2 methode 
Route::match(['get', 'post'], '/', function () {
});
 

// route any methode
Route::any('/', function () {
});

//redirect route
Route::redirect('/her', 'hello');



//route with id
Route::get('/person/{id}', function ($id) {
    return 'person id : '.$id;
});