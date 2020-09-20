<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller\Property;
use Auth;

class BuyerMessagesController extends Controller
{
    public function show($id)
    {
        // $property = Property::where('id','=',$id)
        //     ->with(['seller', 'type', 'comments'])->firstOrFail();
        $property = Property::findOrFail($id);
        $comments = $property->comments()->get();   
        return view('buyer_views.comment.index', compact('property', 'comments'));
    }
}
