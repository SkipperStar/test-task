<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function options()
    {
        return $this->hasMany('App\Option', 'hotel_id');
    }
}
