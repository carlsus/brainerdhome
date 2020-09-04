<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BuyerRegistrationRequest;
use App\User;

class BuyerRegistrationController extends Controller
{
    public function show()
    {
        return view('buyer_views.register');
    } // show()

    public function create(BuyerRegistrationRequest $request)
    {
        // Sets the default user type on registration.
        $request->request->add([
            'user_type' => 'buyer'
        ]);
        // Register the buyer.
        return User::create([
            $request->all()
        ]);
    } // create()
}
