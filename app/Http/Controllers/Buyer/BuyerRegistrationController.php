<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Buyer\BuyerRegistrationRequest;
use Illuminate\Support\Facades\Hash;
use App\User;

class BuyerRegistrationController extends Controller
{

    protected $redirectTo = '/home';
    
    public function show()
    {
        return view('buyer_views.register.register');
    } // show()

    public function create(BuyerRegistrationRequest $request)
    {
        // Sets the default user type on registration.
        $request->request->add([
            'user_type' => 'buyer'
        ]);

        //dd($request->all());
        // Register the buyer.
        return User::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'mobilephone' => $request['mobilephone'],
            'officephone' => $request['officephone'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'user_type' => $request['user_type'], // user type buyer or seller.
        ]);
    } // create()
}
