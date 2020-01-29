<?php

namespace App\Http\Controllers;

use App\License;
use App\Phone;
use App\User;

class WelcomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function user($id)
    {
        return User::with(['license', 'phone'])->find($id);
    }

    public function license($id)
    {
        return License::with('user')->find($id);
    }

    public function phone($id)
    {
        return Phone::with('user')->find($id);
    }
}
