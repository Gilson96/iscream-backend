<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class VanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => ["required", "string"], 
            "bio" => ["required", "string"], 
             //"lat" => ["required", "float"], 
            // "lon" => ["required", "float"],
            "priciness" => ["required", "int", "min:1", "max:3"],
            "rating" => ["required", "int", "min:1", "max:5"],
            "imgUrl" => ["required", "string"]
        ];
    }
}
