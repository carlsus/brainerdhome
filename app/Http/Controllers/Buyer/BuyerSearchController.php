<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuyerSearchController extends Controller
{
    public function index()
    {
        return view('buyer_views.search.buyer_search');
    }
}
