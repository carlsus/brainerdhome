<?php

namespace App\Models\Seller;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Seller\PropertyType;
use App\Models\Buyer\Comment;

class Property extends Model
{
    // Use the property table, unless we renamed it to plural properties.
    protected $table = 'properties';

    // Allow mass assignment.
    protected $guarded = [];

    // Method to link the property listing to the seller.
    public function seller()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Method to link the property listing to its type.
    public function type()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 2, ".", ",");
    }
}
