<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Van extends Model
{
    protected $fillable = ["name", "bio", "lat", "lon","priciness","rating","imgUrl"];

    public function icecreams()
    {
        return $this->belongsToMany(Icecream::class);
    }

    public function setIcecreams(array $strings) : Van
    {
        //get back a collection of tags objects
        $icecreams = Icecream::fromStrings($strings);

        // sync the ice creams: needs an array od ice cream ids
        $this->icecreams()->sync($icecreams->pluck("id"));

        return $this;
    }

 
}
