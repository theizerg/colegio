@extends('layouts.general')

@section('titulo', 'CEAA | Alumnos')

@section('encabezado', 'Alumnos')

@section('subencabezado', 'Registro')

@section('breadcrumb')
<li>
  <i class="fa fa-child"></i>
  <a href="{{ route('alumnos.index') }}">Alumnos</a>
</li>
<li class="active">
  Registrar Alumno
</li>
@endsection

@section('contenido')
<!-- Box Primary -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Registrar Alumno</h3>
  </div>
  <!-- Formulario -->
  {!! Form::open(['route' => 'alumnos.store', 'autocomplete' => 'off', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
    <div class="box-body">
      <div class="form-group{{ $errors->has('nie') ? ' has-error' : '' }}">
        {!! Form::label('nie', 'Código *', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('nie', old('nie'), ['class' => 'form-control','id'=> 'txtCodigo', 'placeholder' => 'Cédula de Identificación Estudiantil', 'required', 'data-inputmask' => '"mask": "999999"', 'data-mask']) !!}
          @if ($errors->has('nie'))
          <span class="help-block">{{ $errors->first('nie') }}</span>
          @endif
        </div>
      </div>
      <!-- Nombre -->
      <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
        {!! Form::label('nombre', 'Nombre *', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('nombre', old('nombre'), ['class' => 'form-control', 'placeholder' => 'Nombre del alumno', 'required']) !!}
          @if ($errors->has('nombre'))
          <span class="help-block">{{ $errors->first('nombre') }}</span>
          @endif
        </div>
      </div>
      <!-- Apellido -->
      <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
        {!! Form::label('apellido', 'Apellido *', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('apellido', old('apellido'), ['class' => 'form-control', 'placeholder' => 'Apellido del alumno', 'required']) !!}
          @if ($errors->has('apellido'))
          <span class="help-block">{{ $errors->first('apellido') }}</span>
          @endif
        </div>
      </div>
      <!-- NIE -->
      
      <!-- Fecha de nacimiento -->
      <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }} input-btn-alinear">
        {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento *', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6 input-group">
          {!! Form::text('fecha_nacimiento', old('fecha_nacimiento'), ['class' => 'form-control', 'placeholder' => 'dd/mm/yyyy', 'required', 'data-inputmask' => '"alias": "dd/mm/yyyy"', 'data-mask']) !!}
          @if ($errors->has('fecha_nacimiento'))
          <span class="help-block">{{ $errors->first('fecha_nacimiento') }}</span>
          @endif
        </div>
      </div>
      <!-- Género -->
      <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
        {!! Form::label('genero', 'Género *', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::select('genero', ['F' => 'Femenino', 'M' => 'Masculino'], old('genero'), ['class' => 'form-control', 'placeholder' => '-- Seleccione un género --', 'required'] ) !!}
          @if ($errors->has('genero'))
          <span class="help-block">{{ $errors->first('genero') }}</span>
          @endif
        </div>
      </div>
      <!-- Departamento -->
      <div class="form-group{{ $errors->has('departamento_id') ? ' has-error' : '' }}">
        {!! Form::label('departamento_id', 'Estado del país *', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::select('departamento_id', $departamentos, old('departamento_id'), ['class' => 'form-control', 'placeholder' => '-- Seleccione un departamento --', 'onchange' => 'cargarMunicipios(this.value);', 'required']) !!}
          @if ($errors->has('departamento_id'))
          <span class="help-block">{{ $errors->first('departamento_id') }}</span>
          @endif
        </div>
      </div>
      <!-- Municipio -->
      <div class="form-group{{ $errors->has('municipio_id') ? ' has-error' : '' }}">
        {!! Form::label('municipio_id', 'Municipio *', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          <select id='municipio_id' name='municipio_id' class='form-control' required disabled>
            <option value='0'>-- Seleccione un municipio --</option>
          </select>
          @if ($errors->has('municipio_id'))
          <span class="help-block">{{ $errors->first('municipio_id') }}</span>
          @endif
        </div>
      </div>
      <!-- Dirección -->
      <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
        {!! Form::label('direccion', 'Dirección', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          <textarea name="direccion" class="form-control" cols="10" rows="2"></textarea>
          @if ($errors->has('direccion'))
          <span class="help-block">{{ $errors->first('direccion') }}</span>
          @endif
        </div>
      </div>
      <!-- Teléfono -->
      <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
        {!! Form::label('telefono', 'Teléfono *', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('telefono', old('telefono'), ['class' => 'form-control', 'placeholder' => 'Teléfono de contacto', 'required', 'data-inputmask' => '"mask": "99999999999"', 'data-mask']) !!}
          @if ($errors->has('telefono'))
          <span class="help-block">{{ $errors->first('telefono') }}</span>
          @endif
        </div>
      </div>
      <!-- Responsable -->
      <div class="form-group{{ $errors->has('responsable') ? ' has-error' : '' }}">
        {!! Form::label('responsable', 'Responsable *', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('responsable', old('responsable'), ['class' => 'form-control', 'placeholder' => 'Nombre del responsable del alumno', 'required']) !!}
          @if ($errors->has('responsable'))
          <span class="help-block">{{ $errors->first('responsable') }}</span>
          @endif
        </div>
      </div><br>
      <h2 class="text-center">
        Usuario del  estudiante
      </h2>
      <!-- Fecha de nacimiento -->
      <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }} input-btn-alinear">
        {!! Form::label('fecha_nacimiento', 'Correo *', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6 input-group">
          {!! Form::text('email', old('fecha_nacimiento'), ['class' => 'form-control', 'placeholder' => 'Ingrese el correo para iniciar sesión al sistema', 'required']) !!}
          @if ($errors->has('fecha_nacimiento'))
          <span class="help-block">{{ $errors->first('fecha_nacimiento') }}</span>
          @endif
        </div>
      </div>
      <!-- Fecha de nacimiento -->
     <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }} input-btn-alinear">
        {!! Form::label('fecha_nacimiento', 'Contraseña *', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6 input-group">
          <input type="password" name="password" class="form-control" placeholder="Contraseña">
          @if ($errors->has('fecha_nacimiento'))
          <span class="help-block">{{ $errors->first('fecha_nacimiento') }}</span>
          @endif
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <div class="col-sm-9">
        <div class="pull-right">
          <a href="{{ route('alumnos.index') }}" class="btn btn-default btn-flat">Cancelar</a>
          {!! Form::submit('Guardar', ['class' => 'btn btn-primary btn-flat']) !!}
        </div>
      </div>
    </div>
  {!! Form::close() !!}
  <!-- /.box-footer-->
</div>
<!-- /.box -->
@endsection

@push('scripts')
<script type="text/javascript">
// Funcion que se ejecuta al seleccionar una opcion del select de departamentos.
function cargarMunicipios(valor)
{
  var arrayValores=new Array(
    @foreach ($municipios as $municipio)
    new Array({{ $municipio->departamento_id }}, {{ $municipio->id }}, "{{ $municipio->nombre }}"),
    @endforeach
  );

  if(valor == 0)
  {
      // Desactivamos el select de municipios.
      document.getElementById("municipio_id").disabled = true;
  } else {
      // Eliminamos todos los posibles valores que contenga el select de municipios.
      document.getElementById("municipio_id").options.length = 0;

      // Añadimos los nuevos valores al select de municipios.
      document.getElementById("municipio_id").options[0] = new Option("-- Seleccione un municipio --", "0");

      // Únicamente añadimos los municipios que pertenecen al id del departamento seleccionado.
      for(i=0; i<arrayValores.length; i++)
      {
        if(arrayValores[i][0] == valor)
        {
          document.getElementById("municipio_id").options[document.getElementById("municipio_id").options.length] = new Option(arrayValores[i][2], arrayValores[i][1]);
        }
      }

      // Habilitamos el select de municipios.
      document.getElementById("municipio_id").disabled = false;
  }
}
</script>
<!-- InputMask -->
<script src="{{ asset('js/jquery.inputmask.js') }}"></script>
<script src="{{ asset('js/jquery.inputmask.date.extensions.js') }}"></script>
<script type="text/javascript">
  $(function () {
    $('[data-mask]').inputmask()
  })

</script>

<script>
    
$(document).ready(function (){

 //Define la cantidad de numeros aleatorios.
var cantidadNumeros = 6;
var myArray = []
while(myArray.length < cantidadNumeros ){
  var numeroAleatorio = Math.ceil(Math.random()*cantidadNumeros);
  var existe = false;
  for(var i=0;i<myArray.length;i++){
    if(myArray [i] == numeroAleatorio){
        existe = true;
        break;
    }
  }
  if(!existe){
    myArray[myArray.length] = numeroAleatorio;
  }

}
$('#txtCodigo').val(myArray.join("") );
  });
</script>
@endpush