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

Route::get('/', 'RouteController@index');
Route::get('/mc', 'RouteController@mc');
Route::get('/about', 'RouteController@about');
Route::get('/apply', 'RouteController@apply');
Route::get('/stats', 'RouteController@stats');
Route::get('/discord', 'RouteController@discord');
