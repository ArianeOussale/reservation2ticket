<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class reservation extends Model
{
    protected $guarded = [];
    function depart(){
        return $this->belongsTo(depart::class);
     }
}

