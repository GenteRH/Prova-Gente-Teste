<?php

class QuestionsController extends \BaseController {

	public function index()
	{
		$questions = Questions::all();
		return View::make('questions.index', compact('questions') );
	}

	public function create()
	{
		return View::make('questions.create');
	}

	public function store()
	{
		// Validate
   		 // read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'que_name'        => 'required'
			);

		$validator = Validator::make(Input::all(), $rules);

    	// process the login
		if ($validator->fails()) {
			return Redirect::to('questions/create')->withErrors($validator);
		} else {
      		// store
			$questions = new Questions;
			$questions->que_name = Input::get('que_name');
			$questions->save();

      		// Redirect
			Session::flash('message', 'Successfully created Questions!');
			return Redirect::to('questions');
		}
	}

	public function show($id)
	{
		
	}

	public function edit($id)
	{
		$questions = questions::find($id);
		return View::make('questions.edit', compact('questions'));
	}

	public function update($id)
	{
		// Validate
   		 // read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'que_name'        => 'required'
			);

		$validator = Validator::make(Input::all(), $rules);

    	// process the login
		if ($validator->fails()) {
			return Redirect::to('questions/' . $id. '/edit')->withErrors($validator);
		} else {
      		// store
			$questions = new questions;
			$questions->que_name = Input::get('que_name');
			$questions->save();

      		// Redirect
			Session::flash('message', 'Successfully created Questions!');
			return Redirect::to('questions');
		}
	}

	public function destroy($id)
	{
		$questions = Questions::find($id);
		$questions->delete();

		Session::flash('message', 'Successfully deleted the Questions!');
		return Redirect::to('questions');
	}
}