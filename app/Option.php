<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

    protected $table = 'options';

    public function hotels()
    {
        return $this->belongsTo('App\Hotel');
    }
}
