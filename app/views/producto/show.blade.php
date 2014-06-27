@extends('wellcome')
@section('contenido') 
<form action="/producto/{{$producto->Id}}/edit">
    <input type="submit" value="EDITAR PRODUCTO">
</form>
{{ Form::open(array('url'=>'producto/'. $producto->Id, 'method' => 'delete')) }}
{{ Form::submit('ELIMINAR') }}
{{ Form::close() }}
<h2>nombre del Producto: {{ $producto->Nombre_Producto }}</h2>
<p>Código del Producto: {{ $producto->Codigo_Producto }}</p>
<p>Precio Neto del Producto: {{ $producto->Precio_Neto }}</p>
<p>Disponible en Bodega equis</p>
<form action="/producto">
    <input type="submit" value="VOLVER A PÁGINA INICIAL DE PRODUCTOS">
</form>
@stop
