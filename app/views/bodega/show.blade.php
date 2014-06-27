@extends('wellcome')
@section('contenido') 
<form action="/bodega/{{$bodega->Id}}/edit">
    <input type="submit" value="EDITAR BODEGA">
</form>
{{ Form::open(array('url'=>'bodega/'. $bodega->Id, 'method' => 'delete')) }}
{{ Form::submit('ELIMINAR') }}
{{ Form::close() }}
<h2>Nombre de la Bodega: {{ $bodega->Nombre_Bodega }}</h2>
<p>Código de la Bodega: {{ $bodega->Codigo_Bodega }}</p>
<p>Identificador de la Bodega: {{ $bodega->Id }}</p>

<form action="/bodega/productosbodega/{{ $bodega->Id }}">
	<input type="submit" value="PRODUCTOS DE LA BODEGA">
</form> </br>

<form action="/bodega">
    <input type="submit" value="VOLVER A PÁGINA INICIAL DE BODEGAS">
</form>
@stop
