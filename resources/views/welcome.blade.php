@extends('layouts.app')
@section('content')

<div class="container"><br><br><br><br>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-4">
                <div class="card hoverable">
                    <div class="card-body">
                      <h5 class="font-weight-bold mb-4 text-center">Estudiantes</h5>
                      <p class="grey-text ml-5 fa-3x mx-3">{{DSIproject\Alumno::count()}}  <i class="fas fa-users red-text mt-3 fa-1x float-right "></i></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card hoverable">
                    <div class="card-body">
                      <h5 class="font-weight-bold mb-4 text-center">Docentes</h5>
                      <p class="grey-text ml-5 fa-3x mx-3">{{DSIproject\Docente::count()}}  <i class="fas fa-user-tie red-text mt-3 fa-1x float-right "></i></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card hoverable">
                    <div class="card-body">
                      <h5 class="font-weight-bold mb-4 text-center">Materias</h5>
                      <p class="grey-text ml-5 fa-3x mx-3">{{DSIproject\Materia::count()}}  <i class="fas fa-book-open red-text mt-3 fa-1x float-right "></i></p>
                    </div>
                </div>
               
            </div>
        </div>
        <p class="text-center red-text mt-4 fa-2x">#SomosFeyAlegriaEnVenezuela</p>
    </div>
 <!-- Section: About -->
    <section id="about" class="section">

        <!-- Secion heading -->
        <h2 class="red-text text-uppercase font-weight-bold mb-3 pt-4 mt-5 wow fadeIn" data-wow-delay=".2s">¿Quiénes somos?</h2>


        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 col-md-12 mr-auto wow fadeIn" data-wow-delay=".4s">

                <!-- Image -->
                <img src="{{asset('/images/logo/logo.jpeg')}}" height="400">

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-6 col-md-12 mb-4 wow fadeIn" data-wow-delay=".4s">

                <!-- Description -->
                <p align="justify">Fe y Alegría es un Movimiento de Educación Popular y Promoción Social, nacido el 5 de marzo de 1955 en el 23 de Enero de Caracas, Venezuela. Hoy está presente en 22 países de América Latina, África y Europa: Argentina, Bolivia, Brasil, Colombia, Costa Rica, Chad, Chile, Ecuador, El Salvador, España, Italia, Guatemala, Haití, Honduras, Madagascar, Nicaragua, Panamá, Paraguay, Perú, República Dominicana, Uruguay y Venezuela. Allí atiende a más de 1.500.000 niños,niñas, jóvenes y adultos de sectores urbanos, rurales e indígenas con una gran variedad de programas educativos, comunitarios y de capacitación humana y laboral.
               </p>
              

            </div>
            <!-- Grid column -->
            <div class= "col-lg-6   mb-3 wow fadeIn" data-wow-delay=".4s">

                <!-- Description -->
                <label class="red-text text-uppercase " style="font-size:4em;">Misión</label>
                 <p align="justify">Fe y Alegría es un Movimiento de Educación Popular y Promoción Social, nacido el 5 de marzo de 1955 en el 23 de Enero de Caracas, Venezuela. Hoy está presente en 22 países de América Latina, África y Europa: Argentina, Bolivia, Brasil, Colombia, Costa Rica, Chad, Chile, Ecuador, El Salvador, España, Italia, Guatemala, Haití, Honduras, Madagascar, Nicaragua, Panamá, Paraguay, Perú, República Dominicana, Uruguay y Venezuela. Allí atiende a más de 1.500.000 niños,niñas, jóvenes y adultos de sectores urbanos, rurales e indígenas con una gran variedad de programas educativos, comunitarios y de capacitación humana y laboral.
               </p>

            </div>
            <div class= "col-lg-6 mb-3 wow fadeIn" data-wow-delay=".4s">

                <!-- Description -->
                <label class="red-text text-uppercase " style="font-size:4em;">Visión</label>
                 <p align="justify">Un mundo donde todas las personas tenga la posibilidad de desarrollar plenamente sus capacidades y vivir con dignidad, construyendo una sociedad justa en la que todos sus estructura estén al servicio del ser humano y la trasformación de las situaciones que generen la inequidad, la pobreza y la exclusión.
               </p>

            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: About -->


</div>

@endsection
