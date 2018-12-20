@extends('layouts.default')

@section('content')
<div class='container' style="position:relative">
  <div class="row" style="height:820px">

      @foreach ($results as $result)
        <div class='col-lg-4 col-md-6 col-sm-12'>
          <div class="card" style='margin-top: 25px;'>
            <img class="card-img-top" src="{{$result['picture']}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$result['title']}}</h5>
              <p class="card-text">{{$result['price']}}</p>
              <a href="/detail/{{$result['id']}}" class="btn btn-primary">Ver más</a>
              <a href="/edit/{{$result['id']}}" class="btn btn-primary">Editar</a>
              <a href="/destroy/{{$result['id']}}" class="btn btn-primary">Borrar</a>
            </div>
          </div>
        </div>
      @endforeach

    <div class="paginationButtons">
      {{$results->links()}}
    </div>

  </div>
</div>
@endsection
