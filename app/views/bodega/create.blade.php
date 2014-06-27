@extends('wellcome')
@section('contenido') 
{{ Form::open(array('url' => 'bodega')) }}
  <p>Ingrese nombre de la Bodega:</p>
  {{ Form::text('Nombre_Bodega') }}</br>
  <p>Ingrese el Código del Bodega:</p>
  {{ Form::text('Codigo_Bodega') }}</br>
  {{ Form::submit('GUARDAR') }}
{{ Form::close() }}
<form action="/bodega">
    <input type="submit" value="VOLVER A BODEGAS">
</form>
@stop