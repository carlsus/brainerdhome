<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// Models
use App\Models\Seller\Property;
use App\Models\Seller\PropertyType;
// Request
use App\Http\Requests\Seller\ListPropertyRequest;
use Auth;


class PropertiesController extends Controller
{
    public function create()
    {
        $propertyTypes = PropertyType::all();
        return view('property.create', compact('propertyTypes'));
    }

    public function store(ListPropertyRequest $request)
    {
        dd($request->all());
    }
}
