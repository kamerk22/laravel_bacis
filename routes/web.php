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


Route::get('/', 'WelcomeController@view');

Route::get('user/{id}', 'WelcomeController@user');
Route::get('license/{id}', 'WelcomeController@license');
Route::get('phone/{id}', 'WelcomeController@license');

Route::get('/many', 'WelcomeController@manyToMany');


Route::get('category/{id}', 'WelcomeController@category');
Route::get('product/{id}', 'WelcomeController@product');
