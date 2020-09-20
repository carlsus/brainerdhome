<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller\Property;
use App\Models\Buyer\Message;
use App\Http\Requests\Buyer\BuyerMessageRequest;
use Auth;

class BuyerMessagesController extends Controller
{
    public function store(BuyerMessageRequest $request, $id)
    {
        Message::create([
            'buyer_id' => Auth::user()->id,
            'property_id' => $id,
            'message' => $request['message'],
        ]);

        return redirect()->back()->with('success', 'Message has been sent.');
    }
}
