<?php

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web dashboard routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "dashboard" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');
