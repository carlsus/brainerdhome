<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;
class Comment extends Model
{
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
