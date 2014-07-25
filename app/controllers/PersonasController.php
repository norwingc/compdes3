<?php

class PersonasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /personas
	 *
	 * @return Response
	 */
	public function index()
	{
		$personas = Persona::all();
		return View::make('personas.index')->with('personas', $personas);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /personas/create
	 *
	 * @return Response
	 */
	public function create()
	{

		if (Auth::guest()){
			return Redirect::to('/')->withErrors('Debe de inisiar session');
		}else{
			return View::make('personas.create');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /personas
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Input::get()){	
			
			if($this->validateForms(Input::all()) === true){
				$persona = new Persona();
				$persona->nombre = Input::get('nombre');
				$persona->apellido = Input::get('apellido');
				$persona->direccion = Input::get('direccion');
				$persona->telefono = Input::get('telefono');
				$persona->edad = Input::get('edad');
				if($persona->save()){
					Session::flash('message', 'Persona Creada correctamente');
					return Redirect::to('personas');
				}	
			}else{
				return Redirect::to('personas/create')->withErrors($this->validateForms(Input::all()))->withInput();
			}
		}else{
			return View::make('personas.create');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /personas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$persona = Persona::find($id);
        return View::make('personas.show')->with('persona', $persona);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /personas/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if (Auth::guest()){
			return Redirect::to('/')->withErrors('Debe de inisiar session');
		}else{	
			$persona = Persona::find($id);
	    	return View::make('personas.edit')->with('persona', $persona);
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /personas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$persona = Persona::find($id);

		if(Input::get()){
			if($persona){				
				if($this->validateForms(Input::all()) ===  true){
					$persona->nombre = Input::get('nombre');
					$persona->apellido = Input::get('apellido');
					$persona->direccion = Input::get('direccion');
					$persona->telefono = Input::get('telefono');
					$persona->edad = Input::get('edad');

					if($persona->save()){
						Session::flash('message', 'Persona modificada correctamente');
						return Redirect::to('personas');
					}
				}else{
					return Redirect::to('personas/'.$id. '/edit')->withErrors($this->validateForms(Input::all()))->withInput();
				}
			}
		}else{
			return View::make('personas');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /personas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (Auth::guest()){
			return Redirect::to('/')->withErrors('Debe de inisiar session');
		}else{	
			$persona = Persona::find($id);
			$persona->delete();

			Session::flash('message', 'Persona Eliminada');
			return Redirect::to('personas');
		}
	}

	private function validateForms($inputs = array()){
		$rules = array(
			'nombre' => 'required',
			'apellido' => 'required',
			'direccion' => 'required',
			'telefono' => 'required',
			'edad' => 'required|numeric',
			);
		$message = array(
			'required' => 'El campo :attribute es Obligatorio',
			'numeric' => 'El campo :attribute solo acepta datos numericos'
			);
		$validation = Validator::make($inputs, $rules, $message);

		if($validation->fails()){
			return $validation;
		}else{
			return true;
		}
	}
}