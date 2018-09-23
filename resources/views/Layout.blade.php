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
      <div class="jumbotron">
        <div class="container d-flex">
          <img src="{{ asset('img/logos/LOGO_1.png') }}" alt="">
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light">

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
              <a class="nav-link" href="{{route('especialidades')}}">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contacto')}}">Directorio</a>
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
              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
          @endguest
            </ul>

          </div>
        </div>
      </nav>

      @yield('content')

      <footer class="container-fluid py-5">

      <div class="row">
        <div class="col-md-4">
          <h5>Siguenos en nuestras redes sociales</h5>
          <ul class="list-unstyled" >
            <li class="w-decoration"><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
            <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
            <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>

          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-unstyled">
            <li>inicio</li>
            <li>nosotros</li>
            <li>directorio</li>
            <li>contacto</li>
          </ul>
        </div>
        <div class="col-md-4">
        <p>trabaja con nosotros</p>
        </div>

      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
           <p class="d-block mb-3 {{-- text-muted --}}">Hecho por Miguel Bastidas Web </p>
          <small class="d-block mb-3 {{-- text-muted --}}">&copy; 2017-2018</small>
        </div>
      </div>
    </footer>

      <script src="/js/app.js"></script>
    </body>
</html>
