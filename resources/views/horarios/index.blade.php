@extends('layouts.general')

@section('titulo', 'CEAA | Materias')

@section('encabezado', 'Materias')

@section('subencabezado', 'Gestión')

@section('breadcrumb')
<li>
  <i class="fa fa-users"></i> Configuración
</li>
<li class="active">
  Materias
</li>
@endsection

@section('contenido')
<!-- Box Primary -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Gestión de Horarios del alumno</h3>
  </div>
  <div class="col-sm-12">
        <a href="{{ route('horario.create') }}" class="btn btn-primary btn-flat">Registrar Horario</a>
      </div><br>
  <div class="box-body">
    <div class="row">
    <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-hover table-striped table-bordered table-quitar-margen">
        <thead>
          <tr>
            <th>Alumno</th>
            <th>Año - Sección</th>
            <th>Materias</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
          </tr>
        </thead>
        <tbody>
          @foreach($horarios as $docente)
          <tr>
            <td>{{ $docente->alumno->nombre }} {{ $docente->alumno->apellido }}</td>
            <td>{{ $docente->grado->anio->numero }} - {{$docente->grado->seccion}} 
               </td>
            <td>{{ $docente->materia->nombre }}</td>
            <td>
              {{$docente->Lunes}}
            </td>
            <td>
              {{$docente->Martes}}
            </td>
            <td>
              {{$docente->Miercoles}}
            </td>
            <td>
              {{$docente->Jueves}}
            </td>
            <td>
              {{$docente->Viernes}}
            </td>
            <td>
              @if(Auth::user()->direc())
             <a href="{{ route('horario.edit', $docente->id) }}" class="btn btn-default btn-flat">
                <i class="fa fa-wrench" aria-hidden="true"></i>
              </a>
              @endif
            </td>
          </tr>
          <!-- Modal para dar de baja -->
          @endforeach
        </tbody>
      </table>
    </div>
    </div>    
   
  	
    
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <div class="pull-right">
    	<!-- Paginación -->
      {!! $horarios->render() !!}
    </div>
  </div>
  {!! Form::close() !!}
  <!-- /.box-footer-->
</div>
<!-- /.box -->
@endsection