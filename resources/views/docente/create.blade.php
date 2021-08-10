@extends('layouts.general')

@section('titulo', 'CEAA | Crear Docente')

@section('encabezado', 'Crear Docente')

@section('subencabezado', 'Registro')

@section('breadcrumb')
<li>
  <i class="fa fa-users"></i> Personal
</li>
<li>
  <a href="{{ route('docentes.index') }}">Docente</a>
</li>
<li class="active">
  Registrar Docente
</li>
@endsection

@section('contenido')
<!-- Box Primary -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Registrar Docente</h3>
  </div>
  <!-- Formulario -->
  {!! Form::open(['route' => 'docentes.store', 'autocomplete' => 'off', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
    <div class="box-body">

       <!-- Id de Usuario -->
      <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
        {!! Form::label('nombre', 'Nombre del Docente', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
         {!! Form::text('nombre', old('nombre'), ['class' => 'form-control', 'placeholder' => 'Nombre del Docente', 'required']) !!}
          @if ($errors->has('nombre'))
          <span class="help-block">{{ $errors->first('nombre') }}</span>
          @endif
        </div>
      </div>
       <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
        {!! Form::label('apellido', 'Apellido del Docente', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
         {!! Form::text('apellido', old('apellido'), ['class' => 'form-control', 'placeholder' => 'Apellido del Docente', 'required']) !!}
          @if ($errors->has('apellido'))
          <span class="help-block">{{ $errors->first('apellido') }}</span>
          @endif
        </div>
      </div>

      <!-- Nombre -->
      <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
        {!! Form::label('nip', 'Cédula del Docente ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('nip', old('nip'), ['class' => 'form-control', 'placeholder' => 'Cédula del Docente', 'required']) !!}
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
          {!! Form::text('especialidad', old('especialidad'), ['class' => 'form-control', 'placeholder' => 'Especialidad del Docente', 'required']) !!}
            @if ($errors->has('especialidad'))
            <span class="help-block">{{ $errors->first('especialidad') }}</span>
            @endif
        </div>
      </div>
        <div class="divider"></div>
        <div class="text-center ">
          <h3>Usuario</h3>
        </div>
         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::label('email', 'Correo electrónico', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Correo electrónico', 'required']) !!}
          @if ($errors->has('email'))
          <span class="help-block">{{ $errors->first('email') }}</span>
          @endif
        </div>
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        {!! Form::label('password', 'Contraseña', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña', 'required']) !!}
          @if ($errors->has('password'))
          <span class="help-block">{{ $errors->first('password') }}</span>
          @endif
        </div>
      </div>
      
      <div class="form-group{{ $errors->has('rol_id') ? ' has-error' : '' }}">
        {!! Form::label('rol_id', 'Rol de usuario', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::select('rol_id', $roles, old('rol_id'), ['class' => 'form-control', 'placeholder' => '-- Seleccione un rol de usuario --', 'required']) !!}
          @if ($errors->has('rol_id'))
          <span class="help-block">{{ $errors->first('rol_id') }}</span>
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