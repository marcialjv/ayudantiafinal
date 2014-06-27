@extends('wellcome')
@section('contenido') 
<form action="/producto/{{$producto->Id}}/edit">
    <input type="submit" value="EDITAR PRODUCTO">
</form>
{{ Form::open(array('url'=>'producto/'. $producto->Id, 'method' => 'delete')) }}
{{ Form::submit('ELIMINAR') }}
{{ Form::close() }}
<h2>Nombre del Producto: {{ $producto->Nombre_Producto }}</h2>
<p>Código del Producto: {{ $producto->Codigo_Producto }}</p>
<p>Precio Neto del Producto: {{ $producto->Precio_Neto }}</p>
<p>Disponible en Bodega {{ $bodega->Nombre_Bodega }}</p>

<form action="/bodega/productosbodega/{{ $bodega->Id }}">
	<input type="submit" value="PRODUCTOS EN BODEGA">
</form> </br>

<form action="/producto">
    <input type="submit" value="PÁGINA INICIAL DE PRODUCTOS">
</form>
@stop
