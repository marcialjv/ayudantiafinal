<?php

class ProductoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$producto = Producto::all();
		return View::make('producto.index')->with('producto',$producto);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('producto.create');
	}
	public function create2($id)
	{
		return View::make('producto.create2')->with('id',$id);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$producto = new Producto;
		$id=Input::get('FK_Bodega_Id');
		$resultado = Bodega::where('Id', '=', $id)->get();
		if (count($resultado)>0) {
			$producto->FK_Bodega_Id = $id;
			$producto->Nombre_Producto = Input::get('Nombre_Producto');
			$producto->Codigo_Producto = Input::get('Codigo_Producto');
			$producto->Precio_Neto = Input::get('Precio_Neto');
			$producto->save();
			$resultado = Producto::where('FK_Bodega_Id', '=', $id)->get();
			return View::make('producto.index2')->with('producto',$resultado)->with('id',$id);
		}
		return View::make('bodega.vacio')->with('id',$id);

		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$producto = Producto::find($id);
		$bodega = Bodega::find($producto->FK_Bodega_Id);
		return View::make('producto.show')->with('producto',$producto)->with('bodega',$bodega);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$producto = Producto::find($id);
		return View::make('producto.edit')->with('producto',$producto);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$producto = Producto::find($id);
		$producto->Nombre_Producto = $input['Nombre_Producto'];
		$producto->Codigo_Producto = $input['Codigo_Producto'];
		$producto->Precio_Neto = $input['Precio_Neto'];
		$producto->FK_Bodega_Id = $input['FK_Bodega_Id'];
		$producto->save();
		return Redirect::to('producto/' . $id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$producto = Producto::find($id);
		$producto->delete();
		return Redirect::to('producto');
	}


}
