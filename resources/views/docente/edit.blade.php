@extends('layouts.general')

@section('titulo', 'CEAA | Docente')

@section('encabezado', 'Docente')

@section('subencabezado', 'Editar')

@section('breadcrumb')
<li>
  <i class="fa fa-users"></i> Personal
</li>
<li>
  <a href="{{ route('docentes.index') }}">Docente</a>
</li>
<li class="active">
  Editar Docente
</li>
@endsection

@section('contenido')
<!-- Box Primary -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Editar Docente</h3>
  </div>
  <!-- Formulario -->
  {!! Form::open(['route' => ['docentes.update',$docente], 'autocomplete' => 'off', 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
    <div class="box-body">

        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
        {!! Form::label('nombre', 'Nombre del Docente', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
         <input type="text" name="nombre" class="form-control" value="{{$docente->nombre}} ">
          @if ($errors->has('nombre'))
          <span class="help-block">{{ $errors->first('nombre') }}</span>
          @endif
        </div>
      </div>
       <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
        {!! Form::label('apellido', 'Apellido del Docente', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
        <input type="text" name="apellido" class="form-control" value="{{$docente->apellido}} ">
          @if ($errors->has('apellido'))
          <span class="help-block">{{ $errors->first('apellido') }}</span>
          @endif
        </div>
      </div>

      <!-- Nombre -->
      <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
        {!! Form::label('nip', 'Nip', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('nip', $docente->nip, ['class' => 'form-control', 'placeholder' => 'Nip del Docente', 'required']) !!}
            @if ($errors->has('nip'))
            <span class="help-block">{{ $errors->first('nip') }}</span>
            @endif
        </div>
      </div>
    </div>
    <!-- Especialidad -->
      <div class="form-group{{ $errors->has('especialidad') ? ' has-error' : '' }}">
        {!! Form::label('especialidad', 'Especialidad', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('especialidad', $docente->especialidad, ['class' => 'form-control', 'placeholder' => 'Especialidad del Docente', 'required']) !!}
            @if ($errors->has('especialidad'))
            <span class="help-block">{{ $errors->first('especialidad') }}</span>
            @endif
        </div>
      </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <div class="col-sm-9">
        <div class="pull-right">
          <a href="{{ route('docentes.index') }}" class="btn btn-default btn-flat">Cancelar</a>
          {!! Form::submit('Guardar', ['class' => 'btn btn-primary btn-flat']) !!}
        </div>
      </div>
    </div>
  {!! Form::close() !!}
  <!-- /.box-footer-->
</div>
<!-- /.box -->
@endsection