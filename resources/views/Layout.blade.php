<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>clinina de ejemplo</title>

        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">


    </head>
    <body>
      <div id=af-nav>
        <ul>
          <li><i class="fab fa-facebook"></i></li>
          <li><i class="fab fa-instagram"></i></li>
          <li><i class="fab fa-twitter-square"></i></li>
        </ul>
      </div>
      <hr>
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">LOGO</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="especialidades">Especialidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto">Contacto</a>
            </li>
          </ul>
        </div>
      </nav>

      @yield('content')

      <script src="/js/app.js"></script>
    </body>
</html>
