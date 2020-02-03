<?php

namespace App\Http\Controllers;

use App\Category;
use App\Country;
use App\License;
use App\Phone;
use App\Product;
use App\User;

class WelcomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function user($id)
    {
        return User::with(['posts'])->find($id);
    }

    public function countryPosts($id)
    {
        return Country::with(['posts'])->findOrfail($id);
    }
}
