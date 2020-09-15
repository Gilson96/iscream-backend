<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Vans;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(["prefix" => "vans"], function () {

    // GET /vans: show all vans
    Route::get("", [Vans::class, "index"]);

    // POST /vans: create new van
    Route::post("", [Vans::class, "store"]);

    Route::group(["prefix" => "{van}"], function () {

        // GET /van/id
        Route::get("", [Vans::class, "show"]);

        // PUT /van/id: update van
        Route::put("", [Vans::class, "update"]);

        // DELETE /van/id
        Route::delete("", [Vans::class, "destroy"]);
        
    });
});


