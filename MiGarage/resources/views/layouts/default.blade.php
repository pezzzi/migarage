<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/css/styles.css">
    <meta charset="utf-8">
    <title>Mi Garage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
      @include('layouts.header')
    </header>

    @yield('content')

    <footer>
      @include('layouts.footer')
    </footer>
  </body>
</html>
