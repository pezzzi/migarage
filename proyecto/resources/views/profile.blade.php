@extends('layouts.default')

@section('content')
<div class='container'>
    <img style='margin-top:50px;width: 100px;border-radius: 50%; overflow:hidden;' src="{{Storage::url($avatar)}}" alt="">
    <h2 style='margin-top: 20px'>{{$fullname}}</h2>
    <p>{{$username}}</p>
    <p>{{$phone}}</p>
    <p>{{$birthdate}}</p>
    <p>{{$address}}</p>
    <p>{{$email}}</p>
    <p>{{$country_code}}</p>

    Theme: <select class="custom-select mr-sm-2" id="theme-selector">
       <option selected>Seleccionar...</option>
       <option value="day">Day</option>
       <option value="night">Night</option>
     </select>


</div>
@endsection
