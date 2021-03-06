@extends('layouts.default')

@section('content')
  <?php //include('provincias.php') ;?>

    <section>
      <article class="mainHome">
        <div class="row justify-content-center searchFilter ">
          <div class="col-lg-5 col-md-10  col-xs-8" id="btnGroup">

            <form class="homeForm" action="/search" method="get">
              <h2 class="white formP">Busca un garage</h2>
              <select class="selectFilter" name="provincias" id="province">
                <option disabled selected value>--Provincia--</option>
              </select>

              <label class="navBarRadio white">
                <p class="formP">Tipo de vehiculo</p>
                <input  type="checkbox" id="auto" name="vehicle" value="Auto">
                <label class="pointer" for="auto">Auto</label>
                <input type="checkbox" id="camion" name="vehicle" value="Camion">
                <label class="pointer" for="camion">Camion</label>
                <input type="checkbox" id="camioneta" name="vehicle" value="Camioneta">
                <label class="pointer" for="camioneta">Camioneta</label>
                <input type="checkbox" id="moto" name="vehicle" value="moto">
                <label class="pointer" for="moto">Moto</label>
              </label>
              <br>

              <label class="white">
              <p class="formP white">Estadia</p>
                <input type="radio" id="dia" name="stay" value="Diario">
                <label class="pointer" for="dia">Dia</label>
                <input type="radio" id="semana" name="stay" value="Semanal">
                <label class="pointer" for="semana">Semana</label>
                <input type="radio" id="mes" name="stay" value="Mensual">
                <label class="pointer" for="mes">Mes</label>
              </label>
              <br>
              <button class="buscar" type="submit" name="button">Buscar</button>

            </form>
            <form class="showAll" action="/showAll" method="get">
              <button type="submit" name="showAll" class="showAllBtn">Mostrar Todos</button>
            </form>

          </div>

          </div>
        </div>
      </article>
    </section>
  </div>
  <script type="text/javascript">

  fetch('https://dev.digitalhouse.com/api/getProvincias')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    var province = document.querySelector('#province');
    data.forEach(function(item) {
      province.innerHTML += '<option value='+item['state']+'>'+item['state']+'</option>';
    });
  })
  .catch(function(error) {
    console.log('The error was: '+error);
  })

  </script>
@endsection
