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
 
Route::get('/como_llegar', function () {
    return view('apigeo');
});


Route::resource('users', '\App\Http\Controllers\UserController');
Route::resource('products', '\App\Http\Controllers\ProductController');