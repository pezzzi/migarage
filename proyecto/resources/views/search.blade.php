@extends('layouts.default')

@section('content')
<div class='container'>
  <div class="row" style="position:relative;">

      @foreach ($results as $result)
        <div class='col-lg-4 col-md-6 col-sm-12'>
          <div class="card" style='margin-top: 25px;'>
            <img class="card-img-top" src="{{Storage::url($result['picture'])}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$result['title']}}</h5>
              <div class="" style="display:block;">
                <span>Precio: $ </span><p class="card-text" style="display:inline-block;">{{$result['price']}}</p>
              </div>
              <a href="/detail/{{$result['id']}}" class="btn btn-primary">Ver más</a>
              <a href="/edit/{{$result['id']}}" class="btn btn-primary">Editar</a>
              <a href="/destroy/{{$result['id']}}" class="btn btn-primary">Borrar</a>
            </div>
          </div>
        </div>
      @endforeach


  </div>
  <div class="paginationButtons" style="position:relative;">
    {{$results->links()}}
  </div>
</div>
@endsection
