<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <title>Mi Garage</title>
  </head>
  <body>
    <?php include('provincias.php') ?>
    <header>
      <?php include('header.php') ?>
    </header>
      <section>
        <article class="mainHome">
          <div class="row justify-content-center searchFilter marginRight">
            <div class="col-lg-5 col-md-10  col-xs-8">
              <h2 class="hHome">Busca un garage</h2>
              <form class="" action="../catalogo/catalogo.php" method="get">
                <select class="homeMain" name="provincias">
                  <option disabled selected value>--Provincia--</option>
                  <?php foreach ($provincias as $provincia) {
                    ?>
                      <option value="<?php echo $provincia['data'] ?>"><?php echo $provincia['name']; ?></option>
                  <?php
                  } ?>
                </select>
                <select class="" name="localidades">
                  <option disabled selected value>--Localidad--</option>
                  <option value="laPlata">La Plata
                  <option value="CABA">CABA
                </select>

                <label class="navBarRadio">
                  <p class="formP">Tipo de vehiculo</p>
                  <input type="radio" id="auto" name="vehicle" value="auto">
                  <label for="auto">Auto</label>
                  <input type="radio" id="camion" name="vehicle" value="camion">
                  <label for="camion">Camion</label>
                  <input type="radio" id="camioneta" name="vehicle" value="camioneta">
                  <label for="camioneta">Camioneta</label>
                  <input type="radio" id="moto" name="vehicle" value="moto">
                  <label for="moto">Moto</label>
                </label>
                <br>
                <p class="formP">Estadia</p>
                  <input type="radio" name="stay" value="hora">Hora
                  <input type="radio" name="stay" value="dia">Dia
                  <input type="radio" name="stay" value="mes">Mes
                <br>
                <button class="button" type="button" name="button">Hola</button>
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
<button class="button" type="button" name="button">pp</button>
  </body>
</html>
