<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Van;
use App\Http\Requests\API\VanRequest;
use App\Http\Resources\API\VanResource;
use App\Http\Resources\API\VanCardResource;

class Vans extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Van::all();
        return VanResource::collection(Van::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VanRequest $request)
    {
        
        $data = $request->all();

        $van = Van::create($data);

         return new VanResource($van);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Van $van)
    {
         return new VanResource($van);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VanRequest $request, Van $van)
    {
        $data = $request->all();

        // update the van using the fill method
        // then save it to the database
        $van->fill($data)->save();

         return new VanResource($van);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Van $van)
    {
        $van->delete();

        // use 204 if no content in the response
        return response(null, 204);
    }
}
