<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newPublication');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate( $request, [
        'title' => 'required|string|min:2',
        'location' => 'required',
        'picture' => 'required|image',
        'garageType' => 'required',
        'description' => 'nullable|string',
        'rentFormat' => 'required',
        'price' => 'required|numeric',
      ]);

      if( ($request->file('picture')) ){
          $path = $request->file('picture')->store('garagePics');
      }

      $publication = Publication::create([
        'title' => $request->input('title'),
        'location' => $request->input('location'),
        'picture' => $path??null,
        'garageType' => $request->input('garageType'),
        'description' => $request->input('description')??'',
        'rentFormat' => $request->input('rentFormat'),
        'price' => $request->input('price'),
        'user_id' => \Auth::user()->id,
      ]);

      return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = \App\Publication::where('id', $id)->get();

        return view('detail')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        //
    }
}
