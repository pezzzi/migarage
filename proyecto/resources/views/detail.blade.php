@extends('layouts.default')

@section('content')
<div class='container'>
      <h2 style='margin-top: 20px'>{{$title}}</h2>


      <p style='margin-top: 20px'>{{$description}}</p>
      <img src="{{$picture}}" alt="Card image cap">

      <ul class="list-group" style='margin-top: 20px'>
        <li class="list-group-item">Lugar: {{$location}}</li>
        <li class="list-group-item">Tamaño: {{$size}}mts2</li>
        <li class="list-group-item">Tipo: {{$garagetype}}</li>
        <li class="list-group-item">Renta: {{$rentType}}</li>
      </ul>

      <b style='display: block;margin-top: 20px'>Precio: {{$price}}</b>
</div>
@endsection
