@extends ('wellcome')

@section('contenido')
<h2>BODEGAS EXISTENTES:</h2>
<ul>
	@foreach($bodega as $bod)
	<li>{{$bod->Nombre_Bodega}}  </li>
	<form action="/bodega/{{ $bod->Id }}">
		<input type="submit" value="DETALLES">
	</form> </br>
	
	@endforeach
</ul>

<form action="/bodega/create">
    <input type="submit" value="AGREGAR NUEVA BODEGA">
</form>
@stop