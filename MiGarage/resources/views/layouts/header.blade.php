<div class="row headerLogo desktop">
  <div class="col-4 ">
    <img class="logoImg" src="/img/logo.jpeg" alt="logo">
  </div>
</div>


<nav class="navbar navbar-expand-lg navbar-light  smartphone">

  <div class="row">


        <a class="navbar-brand  logo-smartphone" href="/"><img class="logoImg" src="img/logo.jpeg" alt="logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</span></a></li>
            <a class="nav-link" href="/faq"><li class="nav-item">FAQ</li></a>
            @auth
              <a class="nav-link" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><li class="nav-item">Salir</li></a>
              <a class="nav-link" href="/profile"><li class="nav-item">Perfil</li></a>
              <a class="nav-link" href="/newPublication"><li class="nav-item">Crear publicación</li></a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            @else
              <a class="nav-link" href="/register"><li class="nav-item">Registrarse</li></a>
              <a class="nav-link" href="/login"><li class="nav-item">Log In</li></a>
            @endauth
        </div>


  </div>
</nav>


<nav class="desktop">
  <div class="row">
    <div class="col-12">
      <ul class="navBarUl">
        <a class="navBarA" href="/"><li class="navBarLiL">Home</li></a>
        <a class="navBarA" href="/faq"><li class="navBarLiL">FAQ</li></a>
        @auth
          <a class="navBarA" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><li class="navBarLiR">Salir</li></a>
          <a class="navBarA" href="/profile"><li class="navBarLiR">Perfil</li></a>
          <a class="navBarA" href="/newPublication"><li class="navBarLiR">Crear publicación</li></a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        @else
          <a class="navBarA" href="/register"><li class="navBarLiR">Registrarse</li></a>
          <a class="navBarA" href="/login"><li class="navBarLiR">Log In</li></a>
        @endauth

      </ul>
    </div>
  </div>
</nav>
