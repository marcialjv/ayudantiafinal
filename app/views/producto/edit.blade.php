@extends('wellcome')


@section('contenido') 

{{ Form::open(array('url' => 'producto/' . $producto->Id, 'method'=>'put')) }}
  {{ Form::text('FK_Bodega_Id', $producto->FK_Bodega_Id, array('readonly' => 'readonly')) }}</br>
  <p>nombre del Producto:</p>
  {{ Form::text('Nombre_Producto', $producto->Nombre_Producto) }}</br>
  <p>Código del Producto:</p>
  {{ Form::text('Codigo_Producto', $producto->Codigo_Producto) }}</br>
  <p>Precio Neto del Producto:</p>
  {{ Form::text('Precio_Neto', $producto->Precio_Neto) }}</br>
  {{ Form::submit('GUARDAR') }}
{{ Form::close() }}
<form action="/producto">
    <input type="submit" value="VOLVER A PÁGINA INICIAL DE PRODUCTOS">
</form>

@stop
