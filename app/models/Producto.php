<?php
class Producto extends Eloquent
{
	protected $table = 'Producto';
	protected $primaryKey='Id';

	//relacion uno a muchos de modelo Bodega a modelo Producto
	public function bodega()
	{
		return $this->belonsto('Bodega','Id');							
	}
}