@extends('layouts.default')

@section('content')

  <form class="newPublication" action="" method="post" enctype="multipart/form-data">
    @csrf

    <h2 style="text-align:center">Crea tu publicación</h2>

    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right"><strong>Título</strong></label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
          <label for="province" class="col-md-4 col-form-label text-md-right"><strong>Localidad</strong></label>

          <div class="col-md-6">
            <select id="province" class="form-control{{ $errors->has('province') ? ' is-invalid' : '' }}" name="location" required>
              <option selected disabled hidden>Select your province</option>
            </select>

            @if ($errors->has('province'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('province') }}</strong>
            </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label for="picture" class="col-md-4 col-form-label text-md-right"><strong>Imágen</strong></label>

          <div class="col-md-6">
            <input id="picture" type="file" class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}" name="picture" value="{{ old('picture') }}" required autofocus>

            @if ($errors->has('picture'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('picture') }}</strong>
            </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
            <label for="garageType" class="col-md-4 col-form-label text-md-right"><strong>Tipo de garage</strong></label>

            <div class="col-md-6">
              <select id="garageType" class="form-control{{ $errors->has('garageType') ? ' is-invalid' : '' }}" name="garageType" required>
                <option selected disabled hidden>Select your Garage Type</option>
                <option value="Auto">Auto</option>
                <option value="Moto">Moto</option>
                <option value="Camion">Camión</option>
              </select>

                @if ($errors->has('garageType'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('garageType') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">Descripción</label>

            <div class="col-md-6">
                <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="description" rows="8" cols="80" value="{{ old('description') }}"></textarea>

                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>



        <div class="form-group row">
            <label for="rentFormat" class="col-md-4 col-form-label text-md-right"><strong>Estadía</strong></label>

            <div class="col-md-6">
              <select id="rentFormat" class="form-control{{ $errors->has('rentFormat') ? ' is-invalid' : '' }}" name="rentFormat" required>
                <option selected disabled hidden>Select your Rent Format</option>
                <option value="Diario">Diario</option>
                <option value="Semanal">Semanal</option>
                <option value="Mensual">Mensual</option>
              </select>

                @if ($errors->has('rentFormat'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('rentFormat') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="price" class="col-md-4 col-form-label text-md-right"><strong>Precio</strong></label>

            <div class="col-md-6">
                <span>$ <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required autofocus></span>

                @if ($errors->has('price'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Crear
                </button>
            </div>
        </div>
    </form>
  </form>

  <script type="text/javascript">

  fetch('https://dev.digitalhouse.com/api/getProvincias')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    var provinceSelect = document.querySelector('#province');
    data.forEach(function(item) {
      state = item['state'];
      provinceSelect.innerHTML += "<option value='"+state+"'>"+state+"</option>";
    });
  })
  .catch(function(error) {
    console.log('The error was: '+error);
  })
  </script>

@endsection
