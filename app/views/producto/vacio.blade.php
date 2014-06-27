@extends ('wellcome')

@section('contenido')
<h2>NO HAY PRODUCTOS QUE MOSTRAR</h2>
<form action="/producto/create">
    <input type="submit" value="AGREGAR NUEVO PRODUCTO">
</form>
<form action="/bodega">
    <input type="submit" value="VOLVER A BODEGAS">
</form>
@stop