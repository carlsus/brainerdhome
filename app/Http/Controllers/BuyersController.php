<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyersController extends Controller
{
    public function index()
    {
        return view('buyer_search');
    }

    public function register()
    {
        return view('buyer_register');
    }
}
