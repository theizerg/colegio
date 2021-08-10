@extends('layouts.general')

@section('titulo', 'CEAA | Inicio')

@section('encabezado', 'Inicio')

@section('subencabezado', 'Perfil')

@section('breadcrumb')
<li>
  <i class="fa fa-home"></i> Inicio
</li>
@endsection

@section('contenido')
<div class="row">
  <div class="col-md-4">
    <!-- Profile Image -->
    <div class="box box-primary">
      <p class="box box-header text-center">
        Estudiantes
      </p>
      <div class="box-body box-profile">
        <h2 class="text-center">
          {{DSIproject\Alumno::count()}}
        </h2>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <div class="col-md-4">
    <!-- Profile Image -->
    <div class="box box-primary">
      <p class="box box-header text-center">
        Docentes
      </p>
      <div class="box-body box-profile">
        <h2 class="text-center">
          {{DSIproject\Docente::count()}}
        </h2>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
   <div class="col-md-4">
    <!-- Profile Image -->
    <div class="box box-primary">
      <p class="box box-header text-center">
        Materias
      </p>
      <div class="box-body box-profile">
        <h2 class="text-center">
          {{DSIproject\Materia::count()}}
        </h2>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection