<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Van extends Model
{
    protected $fillable = ["name", "bio", "lat", "lon","priciness","rating","imgUrl"];

 
}
