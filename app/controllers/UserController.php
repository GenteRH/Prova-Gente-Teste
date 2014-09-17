<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return View::make('users.index')->with('users', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Validate
   		 // read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'use_name'      => 'required',
			'use_password'  => 'required',
			'use_email'     => 'required',
			);

		$validator = Validator::make(Input::all(), $rules);

    	// process the login
		if ($validator->fails()) {
			return Redirect::to('users/create')->withErrors($validator);
		} else {
      		// store
			$user = new User;
			$user->use_name = Input::get('use_name');
			$user->use_cpf = Input::get('use_cpf');
			$user->use_password = Input::get('use_password');
			$user->use_email = Input::get('use_email');
			$user->use_cel_phone = Input::get('use_cel_phone');
			$user->use_phone = Input::get('use_phone');
			$user->save();

      		// Redirect
			Session::flash('message', 'Usuário Criado com Sucesso!');
			return Redirect::to('users');
		}
	}

	public function show($id)
	{

	}

	public function edit($id)
	{
		$user = User::find($id);
		return View::make('users.edit')
			->with('user', $user);
	}

	public function update($id)
	{
		// Validate
   		 // read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'use_name'      => 'required',
			'use_password'  => 'required',
			'use_email'     => 'required',
			);

		$validator = Validator::make(Input::all(), $rules);

    	// process the login
		if ($validator->fails()) {
			return Redirect::to('users/' . $id. '/edit')->withErrors($validator);
		} else {
      		// store
			$user = User::find($id);
			$user->use_name = Input::get('use_name');
			$user->use_cpf = Input::get('use_cpf');
			$user->use_password = Input::get('use_password');
			$user->use_email = Input::get('use_email');
			$user->use_cel_phone = Input::get('use_cel_phone');
			$user->use_phone = Input::get('use_phone');
			$user->save();

      		// Redirect
			Session::flash('message', 'Usuário editado com sucesso!');
			return Redirect::to('users');
		}
	}

	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();

		Session::flash('message', 'Usuário deletado com sucesso!');
		return Redirect::to('users');
	}

}