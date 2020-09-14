<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller\Property;
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
            // Gets all the listed property for sale
            $propertyListings = Property::all();
            return view('buyer_views.dashboard.index', compact('propertyListings'));
        }
        else
        {
            return abort(403);
        }
    }
}
