<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable= ['name', 'stars', 'reviews', 'image', 'price', 'condition', 'service', 'wifi', 'restaurant', 'available'];

    public function options()
    {
        return $this->hasMany('App\Option', 'hotel_id');
    }
}
