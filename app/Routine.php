<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Routine extends Model
{
    
    public function excercises()
    {
        return $this->belongsToMany('App\Exercise','routines_exercises');
    }
}
