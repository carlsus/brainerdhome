<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller\Property;
use App\Http\Requests\Buyer\BuyerMessageRequest;

class BuyerMessagesController extends Controller
{
    public function store(Property $property, BuyerMessageRequest $request)
    {
        // Save the message.
        $property->messages()->create(
            $request->all()
        );
        return redirect()->back()->with('success', 'Message has been sent.');
    }
}
