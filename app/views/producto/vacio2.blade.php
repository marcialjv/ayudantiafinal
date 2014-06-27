@extends ('wellcome')

@section('contenido')
<h2>HO HAY PRODUCTOS QUE MOSTRAR</h2>
{{$id}}
<form action="/producto/create2/{{$id}}">
    <input type="submit" value="AGREGAR NUEVO PRODUCTO">
</form>
<form action="/bodega">
    <input type="submit" value="VOLVER A BODEGAS">
</form>
@stop