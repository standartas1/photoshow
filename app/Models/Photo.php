<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //Creating relationship between the albums and the photos
    public function Album() {
        return $this->belongsTo('App\Models\Album');
    }
}
