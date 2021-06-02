<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class depart extends Model
{
    protected $guarded = [];

    function depart_reservations(){
       return $this->hasMany(reservation::class);
    }
}

