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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Form Submit using HTTP Methods
Route::get('form', function () {
    echo '<form action="form" method="POST">';
    echo '<input type="hidden" name="_token" value="' . csrf_token() . '" >';

    // For Method Spoofing
    // echo '<input type="hidden" name="_method" value="PUT">';
    // echo '<input type="hidden" name="_method" value="DELETE">';

    // More Dynamic Method Spoofing
    // echo '<select name="_method">';
    // echo '<option value="POST">POST</option>';
    // echo '<option value="PUT">PUT</option>';
    // echo '<option value="DELETE">DELETE</option>';
    // echo '</select>';

    echo '<input type="submit">';
    echo '</form >';
});

Route::post('form', function () {
    return "get POST request.";
});

Route::put('form', function () {
    return "get PUT request.";
});

Route::delete('form', function () {
    return "get DELETE request.";
});

// Any route
Route::any('all', function () {
    return 'This will match any method type.';
});


// Routing Parameter
Route::get('hello/{name}', function ($name) {
    echo "<h1>Hello $name!!<h1>";
});

Route::get('geo/{state}/{city?}', function ($state, $city = NULL) {
    echo "State Name: $state </br>";
    echo "City Name: $city </br>";

    // Check if city is provided
    // if (NULL !== $city) {
    //     echo "City Name: $city </br>";
    // }
});


// Route groupting
Route::group(['prefix' => 'protected'], function () {
    Route::get('account', function () {
        echo "account";
    });

    Route::get('security', function () {
        echo "security";
    });
});



Route::get('user', function () {
    // echo App\User::all();
    // echo App\User::orderBy('id', 'DESC')->get();
    // echo App\User::where('email', 'parisian.elna@example.com')->first();
});

Route::get('user/add', function () {
    echo '<form action="/user" method="POST">';
    echo '<input type="hidden" name="_token" value="' . csrf_token() . '" >';
    echo '<input type="name" name="name" required>';
    echo '<input type="email" name="email" required>';
    echo '<input type="password" name="password" required>';
    echo '<input type="submit">';
    echo '</form>';
});

Route::get('user/{id}', function ($id) {
    echo App\User::find($id);
});

Route::post('user', function (Request $request) {
    dd($request->all());
    App\User::create($request->all());

    // $user = new App\User();
    // $user->name = $request->name;
    // $user->email = $request->email;
    // $user->password = bcrypt($request->password);
    // $user->save();
});
