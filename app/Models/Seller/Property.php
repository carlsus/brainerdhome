<?php

namespace App\Models\Seller;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Seller\PropertyType;

class Property extends Model
{
    // Use the property table, unless we renamed it to plural properties.
    protected $table = 'property';

    // Method to link the property listing to the seller.
    public function seller()
    {
        return $this->belongsTo(User::class);
    }

    // Method to link the property listing to its type.
    public function propertyType()
    {
        return $this->hasOne(PropertyType::class);
    }
}
