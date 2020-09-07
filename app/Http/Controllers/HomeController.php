<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // If logged in user type is buyer, redirect to buyer dashboard.
        if(Auth::user()->user_type === 'buyer')
        {
            return redirect()->route('buyer.dashboard');
        }
        return view('home');
    }
}
