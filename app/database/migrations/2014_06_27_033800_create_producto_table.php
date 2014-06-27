<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Producto', function($table)
	    {
	    	$table->increments('Id');
	        $table->string('Nombre_Producto');
	        $table->string('Codigo_Producto');
	        $table->string('Precio_Neto');
	        $table->integer('FK_Bodega_Id');
	        $table->foreign('FK_Bodega_Id')->references('Id')->on('Bodega');
	        $table->timestamps();
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Producto');
	}

}
