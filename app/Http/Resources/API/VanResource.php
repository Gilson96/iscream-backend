<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class VanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "bio" => $this->bio,
            "location" => [$this->lat, $this->lon],
            "priciness" => $this->priciness,
            "rating" => $this->rating,  
            "imgUrl" => $this->imgUrl, 
            "icecreams" => $this->icecreams->pluck("name"),  
            
        ];
    }
}
