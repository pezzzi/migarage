@extends('layouts.default')

@section('content')
<div class='container'>
  <div class="row">

  @foreach ($results as $row)
  <div class='col-lg-4 col-md-6 col-sm-12'>
    <div class="card" style='margin-top: 25px;'>
        <img class="card-img-top" src="{{$row['picture']}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$row['title']}}</h5>
          <p class="card-text">{{$row['price']}}</p>
          <a href="detail/{{$row['id']}}" class="btn btn-primary">Ver más</a>
        </div>
    </div>
    </div>
  @endforeach

  {{$results->links()}}

  </div>
</div>
@endsection
