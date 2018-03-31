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

Route::get('/', 'MonControlleur@index');
Route::get('/nouvelle', 'MonControlleur@nouvelle')->middleware('auth');
Route::post('/creer', 'MonControlleur@creer')->middleware('auth');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
