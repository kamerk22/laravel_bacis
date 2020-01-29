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

// Welcome Route

// use App\Http\Controllers\WelcomeController;

Route::get('/', 'WelcomeController@view');

Route::get('/single', 'SingleActionController');
Route::get('/middleware', 'MiddlewareController');

// Better approach
// Route::get('/', [WelcomeController::class, 'index']);

Route::view('/view', 'welcome');


Route::get('video/extra', 'VideoController@extra');
Route::resource('video', 'VideoController');
