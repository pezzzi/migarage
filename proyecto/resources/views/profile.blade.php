@extends('layouts.default')

@section('content')
<div class='container'>
    <img style='margin-top:50px;width: 100px;border-radius: 50%; overflow:hidden;' src="{{$avatar}}" alt="">
    <h2 style='margin-top: 20px'>{{$fullname}}</h2>
    <p>@ {{$username}}</p>
    <p>{{$phone}}</p>
    <p>{{$birthdate}}</p>
    <p>{{$address}}</p>
    <p>{{$email}}</p>
    <p>{{$country_code}}</p>

</div>
@endsection
