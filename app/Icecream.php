<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


class Icecream extends Model
{
    public $timestamps = false;

    protected $fillable = ["name"];

    static public function fromString(string $string) : Icecream
    {
        $icecream = Icecream::where("name", $string)->first();
        return $icecream ? $icecream : Icecream::create(["name" => $string]);
    }

    public function vans()
    {
        return $this->belongsToMany(Van::class);
    }

    static public function fromStrings(array $strings) : Collection
    {
       return collect($strings)->map([Icecream::class, "fromString"]);
    }

}


