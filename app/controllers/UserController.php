<?php

class UserController extends \BaseController {

	public function index()
	{
		$users = User::all();
		return View::make('users.index', compact('users') );
	}

	public function create()
	{
		return View::make('users.create');
	}

	public function store()
	{
		// Validate
   		 // read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'use_name' => 'required',
			'use_cpf'  => 'required',
			'email'    => 'required',
			'password' => 'required',
            'profile'  => 'required',
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
			$user->email = Input::get('email');
			$user->use_phone = Input::get('use_phone');
            $user->profile = Input::get('profile');
			$user->password = Input::get('password');
			$user->save();

      		// Redirect
			Session::flash('message', 'Successfully created user!');
			return Redirect::to('users');
		}
	}

	public function show($id)
	{
		
	}

	public function edit($id)
	{
		$user = user::find($id);
		return View::make('users.edit', compact('user'));
	}

	public function update($id)
	{
		// Validate
   		 // read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'use_name' => 'required',
			'use_cpf'  => 'required',
			'email'    => 'required',
			'password' => 'required',
            'profile'  => 'required',
			);

		$validator = Validator::make(Input::all(), $rules);

    	// process the login
		if ($validator->fails()) {
			return Redirect::to('users/' . $id. '/edit')->withErrors($validator);
		} else {
      		// store
			$user = new User;
			$user->use_name = Input::get('use_name');
			$user->use_cpf = Input::get('use_cpf');
			$user->email = Input::get('email');
			$user->use_phone = Input::get('use_phone');
            $user->profile = Input::get('profile');
			$user->password = Input::get('password');
			$user->save();

      		// Redirect
			Session::flash('message', 'Successfully created User!');
			return Redirect::to('users');
		}
	}

	public function destroy($id)
	{
		$users = Users::find($id);
		$users->delete();

		Session::flash('message', 'Successfully deleted the Users!');
		return Redirect::to('users');
	}

}