<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Van;


class Vans extends Controller
{
    public function index()
    {
         return  "Hello"; //Van::all();
    
        
    }

    public function show($id)
    {
        // $vans = Van::find($id);

        // return view( "van", [ "vans" => $vans ]);

        return Van::find($id);
    }

    public function create()
    {
        return view("form");
    }

    public function Post(Request $request)
    {
        // get all of the submitted data
        $data = $request->all();

        // creatw a new imen, passing in the submitted data
        $vans = Van::create($data);

        // redirect the browseer to the new imen
        return redirect("/vans/{$vans->id}");
    }
}


//     public function iceCreamPost(Request $request, Imen $imen)
//     {
//         // create a new comment, passing in the data from the request JSON
//         $icecream = new IceCream($request->all());
//         // this syntax is a bit odd, but it's in the documentation
//         // stores the ice cream in the DB while setting the imen_id
//         $imen->icecream()->save($icecream);
//         // return the stored ice cream
        
//         return redirect("/imen/{$imen->id}");
//     }
// }
