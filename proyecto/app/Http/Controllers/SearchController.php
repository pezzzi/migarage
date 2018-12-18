<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $results = \App\Publication::where('location', $request['provincias'])->where('garageType', $request['vehicle'])->where('rentFormat', $request['stay'])->paginate(9);

        return view('search')->with('results', $results);
    }
}
