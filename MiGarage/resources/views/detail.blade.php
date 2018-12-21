@extends('layouts.default')

@section('content')
<div class='container'>
      <h2 style='margin-top: 20px'>{{$item[0]->title}}</h2>
      <p style='margin-top: 20px'>{{$item[0]->description}}</p>
      <img id="detailPic" src="{{Storage::url($item[0]->picture)}}" alt="Card image cap">

      <ul class="list-group" style='margin-top: 20px'>
        <li class="list-group-item" id="location">Localidad: {{$item[0]->location}}</li>
        <li class="list-group-item">Tipo de garage: {{$item[0]->garageType}}</li>
        <li class="list-group-item">Estadía: {{$item[0]->rentFormat}}</li>
      </ul>

      <b style='display: block;margin-top: 20px'>Precio: {{$item[0]->price}}</b>
</div>

@endsection
