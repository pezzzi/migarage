<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <title>Mi Garage</title>
  </head>
  <body>
    <?php include('provincias.php') ;?>
    <header>
      <?php include('header.php') ?>
    </header>
      <section>
        <article class="mainHome">
          <div class="row justify-content-center searchFilter marginRight">
            <div class="col-lg-5 col-md-10  col-xs-8">

              <form class="homeForm" action="../catalogo/catalogo.php" method="get">
                <h2 class="white formP">Busca un garage</h2>
                <select class="selectFilter" name="provincias">
                  <option disabled selected value>--Provincia--</option>
                  <?php foreach ($provincias as $provincia) {
                    ?>
                      <option value="<?php echo $provincia['data'] ?>"><?php echo $provincia['name']; ?></option>
                  <?php
                  } ?>
                </select>
                <select class="selectFilter" name="localidades">
                  <option disabled selected value>--Localidad--</option>
                  <option value="laPlata">La Plata
                  <option value="CABA">CABA
                </select>

                <label class="navBarRadio white">
                  <p class="formP">Tipo de vehiculo</p>
                  <input  type="radio" id="auto" name="vehicle" value="auto">
                  <label class="pointer" for="auto">Auto</label>
                  <input type="radio" id="camion" name="vehicle" value="camion">
                  <label class="pointer" for="camion">Camion</label>
                  <input type="radio" id="camioneta" name="vehicle" value="camioneta">
                  <label class="pointer" for="camioneta">Camioneta</label>
                  <input type="radio" id="moto" name="vehicle" value="moto">
                  <label class="pointer" for="moto">Moto</label>
                </label>
                <br>

                <label class="white">
                <p class="formP white">Estadia</p>
                  <input type="radio" id="hora" name="stay" value="hora">
                  <label class="pointer" for="hora">Hora</label>
                  <input type="radio" id="dia" name="stay" value="dia">
                  <label class="pointer" for="dia">Dia</label>
                  <input type="radio" id="mes" name="stay" value="mes">
                  <label class="pointer" for="mes">Mes</label>
                </label>
                <br>
                <button class="buscar" type="submit" name="button">Buscar</button>
                </div>

              </form>
            </div>
          </div>
        </article>
      </section>
    </div>
    <footer>
      <?php include('footer.php') ?>
    </footer>
  </body>
</html>
