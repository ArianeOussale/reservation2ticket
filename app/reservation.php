<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $guarded = [];
    function trajet(){
        return $this->belongsTo(depart::class);
    }
    function trajet(){
        return $this->belongsTo(depart::class);
    }
}

