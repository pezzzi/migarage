<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <title>Mi Garage</title>
  </head>
  <body>
    <div class="container-fluid">
      <header>
        <?php include('header.php') ?>
      </header>
      <section>
        <article class="main">
          <div class="justify-content-center row searchFilter">
            <div class="col-5">
              <form class="" action="home.php" method="get">
                <select class="homeMain" name="provincias">
                  <option value="bsas">Buenos Aires</option>
                  <option value="laPampa">La Pampa</option>
                  <option value="misiones">Misiones</option>
                  <option value="cordoba">Cordoba</option>
                </select>
                <select class="" name="localidades">
                  <option value="laPlata">La Plata
                  <option value="CABA">CABA</option>
                </select>
                <p class="formP">Tipo de vehiculo</p>
                <input type="radio" name="vehicle" value="auto">Auto
                <input type="radio" name="vehicle" value="camion">Camion
                <input type="radio" name="vehicle" value="camioneta">Camioneta
                <input type="radio" name="vehicle" value="moto">Moto
                <br>
                <input type="submit" name="buscar" value="Buscar">
              </form>
            </div>
          </div>
        </article>
      </section>
      <footer>
        <?php include('footer.php') ?>
      </footer>
    </div>
  </body>
</html>
