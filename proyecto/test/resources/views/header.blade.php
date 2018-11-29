<div class="row headerLogo desktop">
  <div class="col-4 ">
    <img class="logoImg" src="img/logo.jpeg" alt="logo">
  </div>
</div>


<nav class="navbar navbar-expand-lg navbar-light  smartphone">

  <div class="row">


        <a class="navbar-brand  logo-smartphone" href="index.php"><img class="logoImg" src="img/logo.jpeg" alt="logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</span></a></li>

              <?php /*
              if ($auth->estaLogueado()){
                  echo '<li class="nav-item"><a class="nav-link" href="perfil.php">Perfil</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Salir</span></a></li>';
              } else {
                  echo '<li class="nav-item"><a class="nav-link" href="registro.php">Registrarse</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</span></a></li>';
              }
               */ ?>
        </div>


  </div>
</nav>


<nav class="desktop">
  <div class="row">
    <div class="col-12">
      <ul class="navBarUl">
        <a class="navBarA" href="index.php"><li class="navBarLiL">Home</li></a>
        <?php
        /*if ($auth->estaLogueado()){
            echo '
                <a class="navBarA" href="logout.php"><li class="navBarLiR">Salir</li></a>
                <a class="navBarA" href="perfil.php"><li class="navBarLiR">Perfil</li></a>
                ';
        } else {
            echo '<a class="navBarA" href="registro.php"><li class="navBarLiR">Registrarse</li></a>
                  <a class="navBarA" href="login.php"><li class="navBarLiR">Log In</li></a>';
        }*/
         ?>

      </ul>
    </div>
  </div>
</nav>
