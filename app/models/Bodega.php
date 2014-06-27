<?php
class Bodega extends Eloquent
{
	protected $table = 'Bodega';
	protected $primaryKey='Id';

	//relacion uno a muchos de modelo Bodega a modelo Producto
	public function producto()
	{
		return $this->hasMany('Producto','FK_Bodega_Id');							
	}


	//se edita la funcion delete(), de modo que al llamarla automáticamente borre los productos
	//relacionados con la bodega que se quiere eliminar
	public function delete(){
		if(count($this->producto) > 0){
		foreach($this->producto as $producto)
		{
			$producto->delete();
		}
		}

		//eliminamos la bodega misma
        return parent::delete();
	}
}