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
    public function index()
    {
        // Get the properties the user posted.
        $propertyListings = Auth::user()->property;
        return view('property.index', compact('propertyListings'));
    }

    public function show($id)
    {
        $property = Property::findOrFail($id)->first();
        //dd($property);
        return view('property.show', compact('property'));
    }

    public function create()
    {
        // Get the property type.
        $propertyTypes = PropertyType::all();
        return view('property.create', compact('propertyTypes'));
    }

    public function store(ListPropertyRequest $request)
    {
        // Save the listing to the database.
        $request->user()->property()->create(
            $request->all()
        );
        
        // Prompt the user after saving.
        return redirect()->route('properties.create')->with('success', 'Property has been listed.');
    }
}
