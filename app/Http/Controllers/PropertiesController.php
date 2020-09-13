<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller\Property;

class PropertiesController extends Controller
{
    public function create()
    {
        return view('property.create');
    }
}
