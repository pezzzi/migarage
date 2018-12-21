<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;

class SearchController extends Controller
{
    public function search(Request $request){
        $results = \App\Publication::where('location', $request['provincias'])->where('garageType', $request['vehicle'])->where('rentFormat', $request['stay'])->paginate(9);

        return view('search')->with('results', $results);
    }

    public function showAll() {
      $results = \App\Publication::paginate(9);

      return view('search')->with('results', $results);
    }
}
