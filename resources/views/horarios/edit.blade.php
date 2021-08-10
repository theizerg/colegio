@extends('layouts.general')

@section('titulo', 'CEAA | Horarios del alumno')

@section('encabezado', 'Horarios del alumno')

@section('subencabezado', 'Gestión')

@section('breadcrumb')
<li>
  <i class="fa fa-users"></i> Configuración
</li>
<li class="active">
  Horarios del alumno
</li>
@endsection

@section('contenido')
<!-- Box Primary -->
<!-- Box Primary -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Registrar Grado</h3>
  </div>
  <!-- Formulario -->
  {!! Form::open(['route' => ['horario.update',$horario], 'autocomplete' => 'off', 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
    <div class="box-body">

      <!-- alumno -->
      <div class="form-group{{ $errors->has('alumno_id') ? ' has-error' : '' }}">
        {!! Form::label('alumno_id>', 'Alumnos', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          <select name="alumno_id" class="form-control" >
            <option value="0">--Seleccione un alumno--</option>
            @foreach($alumnos as $alumno)
            <option value="{{$alumno->id}} "> {{$alumno->nombre}} {{$alumno->apellido}} </option>
            @endforeach
          </select>
          @if ($errors->has('alumno_id'))
          <span class="help-block">{{ $errors->first('alumno_id') }}</span>
          @endif
        </div>
      </div>

     <!-- Anio -->
      <div class="form-group{{ $errors->has('grado_id') ? ' has-error' : '' }}">
        {!! Form::label('numero>', 'Grado académico', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          <select name="grado_id" class="form-control" >
            <option value="0">--Seleccione el grado--</option>
            @foreach($grados as $alumno)
            <option value="{{$alumno->id}} "> {{$alumno->nivel->nombre}} sección {{$alumno->seccion}} </option>
            @endforeach
          </select>
          @if ($errors->has('grado_id'))
          <span class="help-block">{{ $errors->first('grado_id') }}</span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('materia_id') ? ' has-error' : '' }}">
        {!! Form::label('materia_id>', 'Materias', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          <select name="materia_id" class="form-control" >
            <option value="0">--Seleccione una materia--</option>
            @foreach($materias as $alumno)
            <option value="{{$alumno->id}} "> {{$alumno->nombre}} {{$alumno->apellido}} </option>
            @endforeach
          </select>
          @if ($errors->has('materia_id'))
          <span class="help-block">{{ $errors->first('materia_id') }}</span>
          @endif
        </div>
      </div>
      <div class="form-group{{ $errors->has('docente_id') ? ' has-error' : '' }}">
        {!! Form::label('docente_id>', 'Docente', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          <select name="docente_id" class="form-control" >
            <option value="0">--Seleccione una docente--</option>
            @foreach($docentes as $alumno)
            <option value="{{$alumno->id}} "> {{$alumno->nombre}} {{$alumno->apellido}} </option>
            @endforeach
          </select>
          @if ($errors->has('docente_id'))
          <span class="help-block">{{ $errors->first('docente_id') }}</span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="form-group{{ $errors->has('docente_id') ? ' has-error' : '' }}">
        {!! Form::label('docente_id>', 'Lunes', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          <input type="text" name="Lunes" value="{{$horario->Lunes}} " placeholder="Ingrese la hora" class="form-control">
          @if ($errors->has('docente_id'))
          <span class="help-block">{{ $errors->first('docente_id') }}</span>
          @endif
        </div>
      </div>
      <div class="form-group{{ $errors->has('docente_id') ? ' has-error' : '' }}">
        {!! Form::label('docente_id>', 'Martes', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          <input type="text" name="Martes" value="{{$horario->Martes}} " placeholder="Ingrese la hora" class="form-control">
          @if ($errors->has('docente_id'))
          <span class="help-block">{{ $errors->first('docente_id') }}</span>
          @endif
        </div>
      </div>
       <div class="form-group{{ $errors->has('docente_id') ? ' has-error' : '' }}">
        {!! Form::label('docente_id>', 'Miércoles', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          <input type="text" name="Miercoles" value="{{$horario->Miercoles}} " placeholder="Ingrese la hora" class="form-control">
          @if ($errors->has('docente_id'))
          <span class="help-block">{{ $errors->first('docente_id') }}</span>
          @endif
        </div>
      </div>
       <div class="form-group{{ $errors->has('docente_id') ? ' has-error' : '' }}">
        {!! Form::label('docente_id>', 'Jueves', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          <input type="text" name="Jueves" value="{{$horario->Jueves}} " placeholder="Ingrese la hora" class="form-control">
          @if ($errors->has('docente_id'))
          <span class="help-block">{{ $errors->first('docente_id') }}</span>
          @endif
        </div>
      </div>
       <div class="form-group{{ $errors->has('docente_id') ? ' has-error' : '' }}">
        {!! Form::label('docente_id>', 'Viernes', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          <input type="text" name="Viernes" value="{{$horario->Viernes}} " placeholder="Ingrese la hora" class="form-control">
          @if ($errors->has('docente_id'))
          <span class="help-block">{{ $errors->first('docente_id') }}</span>
          @endif
        </div>
      </div>
      </div>
      


      
    <!-- /.box-body -->
    <div class="box-footer">
      <div class="col-sm-9">
        <div class="pull-right">
          <a href="{{ route('materias.index') }}" class="btn btn-default btn-flat">Cancelar</a>
          {!! Form::submit('Guardar', ['class' => 'btn btn-primary btn-flat']) !!}
        </div>
      </div>
    </div>
  {!! Form::close() !!}
  <!-- /.box-footer-->
@endsection 