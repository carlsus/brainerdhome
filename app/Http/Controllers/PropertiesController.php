<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller\Property;
use App\Models\Seller\PropertyType;


class PropertiesController extends Controller
{
    public function create()
    {
        $propertyTypes = PropertyType::all();
        return view('property.create', compact('propertyTypes'));
    }
}
