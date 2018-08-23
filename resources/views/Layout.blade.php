<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>clinina de ejemplo</title>
        {{-- css --}}
        <link rel="stylesheet" href="/css/app.css">


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
        <a class="navbar-brand" href="/">LOGO</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('inicio')}}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('especialidades')}}">Especialidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contacto')}}">Contacto</a>
            </li>
          </ul>
          <div class="ml-auto">
            <ul class="navbar-nav">
               @guest
              <li class="nav-item ">
                  <a class="nav-link in-button" href="{{ route('login') }}">iniciar sesion</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link in-button" href="{{ route('register') }}">Registro</a>
              </li>
            @else
          @endguest
            </ul>

          </div>
        </div>
      </nav>

      @yield('content')

      <footer class="container-fluid py-5">
      <div class="row">
        <div class="col-12 col-md ml-5">
          <p class="d-block mb-3 {{-- text-muted --}}">Hecho con <i class="fas fa-heart"></i> & <i class="fas fa-coffee"></i>  por Desarrolladores Web <i class="fab fa-whatsapp"></i></p>
          <small class="d-block mb-3 {{-- text-muted --}}">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Siguenos en nuestras redes sociales</h5>
          <ul class="list-unstyled" >
            <li class="w-decoration"><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
            <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
            <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>

          </ul>
        </div>

      </div>
    </footer>

      <script src="/js/app.js"></script>
    </body>
</html>
