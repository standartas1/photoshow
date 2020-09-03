<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //Creating relationship between the albums and the photos
    public function photos() {
        return $this->hasMany('App\Models\Photo');
    }
}
