<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller\Property;
use Auth;

class BuyerDashboardController extends Controller
{
    public function index()
    {
        $propertyListings = Property::all();
        return view('buyer_views.dashboard.index', compact('propertyListings'));
    }
}
