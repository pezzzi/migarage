@extends('layouts.default')

@section('content')
<div class='container'>
      <h2 style='margin-top: 20px'>{{$item[0]->title}}</h2>

      <p>{{$item[0]->picture}}</p>
      <p style='margin-top: 20px'>{{$item[0]->description}}</p>
      <img id="detailPic" src="{{$item[0]->picture}}" alt="Card image cap">

      <ul class="list-group" style='margin-top: 20px'>
        <li class="list-group-item">Lugar: {{$item[0]->location}}</li>
        <li class="list-group-item">Tipo: {{$item[0]->garageType}}</li>
        <li class="list-group-item">Renta: {{$item[0]->rentFormat}}</li>
      </ul>

      <b style='display: block;margin-top: 20px'>Precio: {{$item[0]->price}}</b>
</div>
@endsection
