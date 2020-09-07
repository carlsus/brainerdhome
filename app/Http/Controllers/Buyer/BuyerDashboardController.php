<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class BuyerDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->user_type === 'buyer')
        {
            return view('buyer_views.dashboard.index');
        }
        else
        {
            return abort(403);
        }
    }
}
