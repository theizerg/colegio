<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FE Y ALEGRIA</title>

    <!-- Styles -->
    <link href="{{asset('page/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('page/css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('page/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('page/css/some.css')}}" rel="stylesheet">
</head>
<body class="medical-lp">

    <!--Navigation & Intro-->
    <header>

        <!--Navbar-->
        <nav  class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar red darken-4" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#"><strong><i class="fas fa-home"></i></strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!--Links-->
                    
                    <!--Social Icons-->
                    <ul class="navbar-nav nav-flex-icons">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio de sesión') }}</a>
                                </li>
                            @endif

                          
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('home')}} " data-offset="100">Dashboard</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre }} {{ Auth::user()->apellido }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir del sistema') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--/Navigation & Intro-->

    <!--Main content-->
    <main>
        @yield('content')
    </main>
    <!--/Main content-->

    <!--Footer-->
    <footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

        <div class="red darken-4">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-md-0">
                        <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="p-2 m-2 fa-lg fb-ic ml-0"><i class="fab fa-facebook-f white-text mr-lg-4"> </i></a>
                        <!--Twitter-->
                        <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text mr-lg-4"> </i></a>
                        <!--Google +-->
                        <a class="p-2 m-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g white-text mr-lg-4"> </i></a>
                        <!--Linkedin-->
                        <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text mr-lg-4"> </i></a>
                        <!--Instagram-->
                        <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text mr-lg-4"> </i></a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
        </div>

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold"><strong>FE Y ALEGRÍA</strong></h6>
                    <hr class="red darken-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 100px;">
                    <p> Hoy está presente en 22 países de América Latina, África y Europa: Argentina, Bolivia, Brasil, Colombia, Costa Rica, Chad, Chile, Ecuador, El Salvador, España, Italia, Guatemala, Haití, Honduras, Madagascar, Nicaragua, Panamá, Paraguay, Perú, República Dominicana, Uruguay y Venezuela.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <ul class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold"><strong>Sedes</strong></h6>
                    <hr class="red darken-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 100px;">
                    <li><a class="small"  href="#!">Dirección Nacional de Escuela</a></li>
                    <li><a class="small"  href="#!">Instituto Radiofónico Fe y Alegría (IRFA)</a></li>
                    <li><a class="small"  href="#!">Centros de Capacitación Laboral (CECAL)</a></li>
                    <li><a class="small"  href="#!">Educación Universitaria María del Pilar Loyo r</a></li>
                    <li><a class="small"  href="#!">Centro de Formación e Investigación Padre Joaquín</a></li>
                </ul>
                <!--/.Second column-->

                <!--Third column-->

                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold"><strong>CONTACTO</strong></h6>
                    <hr class="red darken-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 100px;">
                    <p><i class="fas fa-home mr-3"></i> Esquina Luneta, Parroquia Altagracia
                    Edif. Centro Valores, piso 3,
                    Caracas, Distrito Capital.</p>
                    <p><i class="fas fa-envelope mr-3"></i>wii.leon@feyalegria.edu.ve</p>
                    <p><i class="fas fa-phone mr-3"></i> (0212) 564 9810 </p>
                    <p><i class="fas fa-print mr-3"></i> (0212) 563 6381</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                © 2018 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
            </div>
        </div>
        <!--/.Copyright -->

    </footer>
    <!--/.Footer-->
    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('page/js/jquery.min.j')}}s"></script>
    <script type="text/javascript" src="{{asset('page/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('page/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('page/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('page/js/mdb.min.js')}}"></script>
    <script>new WOW().init();</script>
     
    
</body>
</html>
