<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/video/{video}', function (App\Video $video) {
    return $video;
});

Route::get('/video/{video}/view', function (App\Video $video) {
    return $video->increment('views');
});

Route::get('/video/{video}/limit', function (App\Video $video) {
    return $video->increment('views');
})->middleware('throttle:5,1,default');
