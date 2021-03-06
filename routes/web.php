<?php

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

// Route Handle Halaman Utama
Route::get('/', 'PagesController@home');

Route::get('/workers', 'WorkersController@index');
Route::get('/workers/create', 'WorkersController@create');
Route::post('/workers', 'WorkersController@store');
Route::get('/workers/{worker}', 'WorkersController@show');
Route::delete('/workers/{worker}', 'WorkersController@destroy');
Route::get('/workers/{worker}/edit', 'WorkersController@edit');
Route::patch('/workers/{worker}', 'WorkersController@update');
