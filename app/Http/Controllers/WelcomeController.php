<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Country;
use App\License;
use App\Phone;
use App\Post;
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
        return User::with(['posts', 'comments'])->find($id);
    }

    public function post($id)
    {
        return Post::with(['comments'])->find($id);
    }


    public function countryPosts($id)
    {
        return Country::with(['posts'])->findOrfail($id);
    }

    public function comments($id)
    {
        return Comment::with(['commentable'])->findOrfail($id);
    }
}
