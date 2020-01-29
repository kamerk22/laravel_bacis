<?php

namespace App\Http\Controllers;


class MiddlewareController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:2,1');
    }

    public function __invoke()
    {
        return "Middleware call";
    }
}
