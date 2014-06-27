<?php

class BodegaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$bodega = Bodega::all();
		
		return View::make('bodega.index')->with('bodega',$bodega);
	}
	


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('bodega.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$bodega = new Bodega;
		$bodega->Nombre_Bodega = Input::get('Nombre_Bodega');
		$bodega->Codigo_Bodega = Input::get('Codigo_Bodega');
		$bodega->save();
		return Redirect::to('bodega');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$bodega = Bodega::find($id);
		return View::make('bodega.show')->with('bodega',$bodega);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$bodega = Bodega::find($id);
		return View::make('bodega.edit')->with('bodega',$bodega);
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
		$bodega = Bodega::find($id);
		$bodega->Nombre_Bodega = $input['Nombre_Bodega'];
		$bodega->Codigo_Bodega = $input['Codigo_Bodega'];
		$bodega->save();
		return Redirect::to('bodega/' . $id);
	}

	public function verproductos()
	{
		return Redirect::to('producto');
	}

	public function productosbodega($id)
	{

		$resultado = Producto::where('FK_Bodega_Id', '=', $id)->get();
		if (count($resultado)>0) {
			return View::make('producto.index2')->with('producto',$resultado)->with('id',$id);
		}
			return View::make('producto.vacio2')->with('id',$id);
		

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$bodega = Bodega::find($id);
		$bodega->delete();
		return Redirect::to('bodega');
	}


}
