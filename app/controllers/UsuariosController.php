<?php

class UsuariosController extends \BaseController {

	public function viewLogin(){
		return View::make('usuarios.login');
	}

	public function register(){
		if(Input::get()){			
			if($this->validateForms(Input::all()) === true){
				$user = new User();
				$user->nombre = Input::get('nombre');
				$user->username = Input::get('username');
				$user->email = Input::get('email');
				$user->password = Hash::make(Input::get('password'));

				if($user->save()){
					Session::flash('message', 'Usuario Registrado con exito, ya puede ingresar');
					return Redirect::to('login');
				}
			}else{
				return Redirect::to('usuarios/registrar')->withErrors($this->validateForms(Input::all()))->withInput();
			}
		}else{
			return View::make('usuarios.login');
		}
	}

	public function viewRegister(){
		return View::make('usuarios.create');
	}

	public function validateLogin(){

		$userdata = array(
			'username' =>Input::get('username'),
			'password' =>Input::get('password')
			);

		if(Auth::attempt($userdata)){
			Session::flash('message', 'Bienvenido');
			return Redirect::to('/');
		}else{
			Session::flash('message', 'Error al iniciar session');
			return Redirect::to('login');
		}	
	}

	public function getLogout(){
		Auth::logout();
		return Redirect::to('/');
	}


	private function validateForms($inputs = array()){
		$rules = array(
			'nombre' => 'required|min:2',
			'username' => 'unique:usuarios|required|min:4',
			'email' => 'email|required|unique:usuarios',
			'password' => 'confirmed|required|between:6,12',
			'password_confirmation' => 'required|between:6,12'
			);
		$message = array(
			'required' => 'El campo :attribute es requerido',
			'unique' => 'El :attribute ya esta en uso'
			);
		$validate = Validator::make($inputs, $rules, $message);

		if($validate->fails()){
			return $validate;
		}else{
			return true;
		}
	}
}

	
 ?>