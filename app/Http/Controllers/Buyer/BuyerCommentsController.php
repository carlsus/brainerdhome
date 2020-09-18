<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller\Property;

class BuyerCommentsController extends Controller
{
    public function show($id)
    {
        $property = Property::where('id','=',$id)->with(['seller', 'type'])->firstOrFail();
        return view('buyer_views.comment.index', compact('property'));
    }
}
