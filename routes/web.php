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

Route::get('/', "App\Http\Controllers\HomeController@index");
Route::get('/articles/', "App\Http\Controllers\ArticlesController@index");
Route::get('/articles/{slug}', "App\Http\Controllers\ArticlesController@show");


Route::post('/api/increaseLike/{id}', "App\Http\Controllers\ApiController@increaseLike");
Route::post('/api/increaseViews/{id}', "App\Http\Controllers\ApiController@increaseViews");
Route::post('/api/addComment/{id}', "App\Http\Controllers\ApiController@addComment");

