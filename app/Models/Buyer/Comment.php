<?php

namespace App\Models\Buyer;

use Illuminate\Database\Eloquent\Model;
use App\Models\Seller\Property;
use App\User;

class Comment extends Model
{
    public function property()
    {
        return $this->belongsTo(Property::class);
    }    

    public function buyer()
    {
        return $this->belongsTo(User::class);
    }
}
