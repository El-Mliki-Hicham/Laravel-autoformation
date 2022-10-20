<?php

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


// create new  migration table :php artisan make:migration create_flights_table

// seed migration : php artisan migrate 

//show all  migration : php artisan migrate:status

//show detail migration :php artisan migrate --pretend

//Refresh tables :php artisan migrate:refresh