<?php

use App\Http\Controllers\PromotionController;
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

// One to one
route::get('hasOne',[PromotionController::class,"hasOne"]);
//One to many
route::get('hasMany',[PromotionController::class,"hasMany"]);
//BelongsTo
route::get('belongsTo',[PromotionController::class,"belongsTo"]);

route::get('belongsToMany',[PromotionController::class,"belongsToMany"]);
