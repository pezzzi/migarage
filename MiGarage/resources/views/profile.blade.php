@extends('layouts.default')

@section('content')
<div class='container'>
    <img style='margin-top:50px; border-radius: 50%; overflow:hidden;display: block; margin-left: auto; margin-right: auto; width: 150px; height:150px;' src="{{Storage::url($avatar)}}" alt="" id="profileAvatar">
    <h2 style='margin-top: 20px; text-align:center;'>{{$fullname}}</h2>
    <div class="wrapper" style="text-align:center;">
      <div class="" style="display:inline-block;">
        <strong>Nombre de usuario: </strong><p style="display:inline-block;">{{$username}}</p>
      </div>
    </div>
    <div class="wrapper" style="text-align:center;">
      <div class="" style="display:inline-block;">
        <strong>Email: </strong><p style="display:inline-block;">{{$email}}</p>
      </div>
    </div>
    <div class="wrapper" style="text-align:center;">
      <div class="" style="display:inline-block;">
        <strong>País: </strong><p style="display:inline-block;">{{$country_code}}</p>
      </div>
    </div>

    <br>

    Theme:
    <select class="custom-select mr-sm-2" id="theme-selector" style="width:85%">
       <option value="day">Day</option>
       <option value="night">Night</option>
     </select>


</div>
@endsection
