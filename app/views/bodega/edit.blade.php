@extends('wellcome')


@section('contenido') 

{{ Form::open(array('url' => 'bodega/' . $bodega->Id, 'method'=>'put')) }}
	<p>identificador de la bodega:</p>
	{{ Form::text('FK_Bodega_Id', $id, array('readonly' => 'readonly')) }}</br>
	<p>Nombre de la Bodega:</p>
	{{ Form::text('Nombre_Bodega', $bodega->Nombre_Bodega) }}</br>
	<p>Código de la Bodega:</p>
	{{ Form::text('Codigo_Bodega', $bodega->Codigo_Bodega) }}</br>
	{{ Form::submit('GUARDAR') }}
{{ Form::close() }}
<form action="/bodega">
    <input type="submit" value="VOLVER A PÁGINA INICIAL DE BODEGAS">
</form>

@stop