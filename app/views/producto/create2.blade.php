@extends('wellcome')
@section('contenido') 
{{ Form::open(array('url' => 'producto')) }}
  {{ Form::text('FK_Bodega_Id', $id, array('readonly' => 'readonly')) }}</br>
  <p>ingrese nombre del Producto:</p>
  {{ Form::text('Nombre_Producto') }}</br>
  <p>ingrese el Código del Producto:</p>
  {{ Form::text('Codigo_Producto') }}</br>
  <p>ingrese el Precio Neto del Producto:</p>
  {{ Form::text('Precio_Neto') }}</br>
  {{ Form::submit('GUARDAR') }}
{{ Form::close() }}
<form action="/producto">
    <input type="submit" value="VOLVER A PRODUCTOS">
</form>
@stop