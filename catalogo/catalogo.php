<?php

$dsn = 'mysql:host=localhost;dbname=migarage_db';
$user = 'root';
$pass = '';
$opt= [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

try{

    $conex = new PDO($dsn, $user, $pass, $opt);

    $query = $conex->query('SELECT * FROM publicaciones');

    $publicaciones = $query->fetchAll(PDO::FETCH_ASSOC);


    // var_dump($conex);

}catch( PDOException $ex ){
    // echo 'Error con la BD, contacta con el administrador del sistema';
    echo 'El error es:'. $ex->getMessage();
}

// echo '<br>Sigo por aqui';





 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../home/css/css/bootstrap.css">
    <link rel="stylesheet" href="css/scatalogo.css">
    <link rel="stylesheet" href="../home/css/styles.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <?php include('../home/header.php') ?>

    </header>
    <section>
      <article class="main">
        <div class="row  yellow">
          <div class="offset-2 col-9 black">
            
          </div>

        </div>

      </article>
    </section>
  </body>
</html>
