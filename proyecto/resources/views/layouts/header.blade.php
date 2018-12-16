<div class="row headerLogo desktop">
  <div class="col-4 ">
    <img class="logoImg" src="/img/logo.jpeg" alt="logo">
  </div>
</div>


<nav class="navbar navbar-expand-lg navbar-light  smartphone">

  <div class="row">


        <a class="navbar-brand  logo-smartphone" href="/index"><img class="logoImg" src="img/logo.jpeg" alt="logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="/index">Home</span></a></li>
        </div>


  </div>
</nav>


<nav class="desktop">
  <div class="row">
    <div class="col-12">
      <ul class="navBarUl">
        <a class="navBarA" href="/index"><li class="navBarLiL">Home</li></a>
        <a class="navBarA" href="/faq"><li class="navBarLiL">FAQ</li></a>
        @auth
          <a class="navBarA" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><li class="navBarLiR">Salir</li></a>
          <a class="navBarA" href="/perfil"><li class="navBarLiR">Perfil</li></a>

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
