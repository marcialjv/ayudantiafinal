@extends ('wellcome')

@section('contenido')
<h2>TODOS LOS PRODUCTOS EXISTENTES:</h2>
<ul>
	@foreach($producto as $prod)
	<li>{{$prod->Nombre_Producto}}  </li>
	<form action="/producto/{{ $prod->Id }}">
		<input type="submit" value="DETALLES">
	</form> </br>
	
	@endforeach
</ul>
<P>debe ingresar a través de la bodega para obtener los productos de ésta</P>
<form action="/producto/create">
    <input type="submit" value="AGREGAR NUEVO PRODUCTO">
</form>
<form action="/bodega">
    <input type="submit" value="VOLVER A BODEGAS">
</form>
@stop