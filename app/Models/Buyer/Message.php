<?php

namespace App\Models\Buyer;

use Illuminate\Database\Eloquent\Model;
use App\Models\Seller\Property;
use App\User;

class Message extends Model
{

    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
