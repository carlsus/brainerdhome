<?php

namespace App\Models\Seller;

use Illuminate\Database\Eloquent\Model;
use App\Models\Seller\Property;

class PropertyType extends Model
{
    // Use the propertytypes table.
    protected $table = 'property_types';

    // Method to link the property type to its Property.
    public function property()
    {
        return $this->hasOne(Property::class);
    }
}
