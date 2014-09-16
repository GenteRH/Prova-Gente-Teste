<?php

class EvaluationController extends \BaseController {

	public function index()
	{
		$evaluations = Evaluation::all();
		return View::make('evaluations.index')->with('evaluations', $evaluations);
	}

	public function create()
	{
		return View::make('evaluations.create');
	}

	public function store()
	{
		// Validate
   		 // read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'eva_name'        => 'required',
			'eva_duration'    => 'required|numeric',
			);

		$validator = Validator::make(Input::all(), $rules);

    	// process the login
		if ($validator->fails()) {
			return Redirect::to('evaluations/create')->withErrors($validator);
		} else {
      		// store
			$evaluation = new Evaluation;
			$evaluation->eva_name = Input::get('eva_name');
			$evaluation->eva_duration = Input::get('eva_duration');
			$evaluation->questions_id = Input::get('questions_id');
			$evaluation->save();

      		// Redirect
			Session::flash('message', 'Successfully created Evaluation!');
			return Redirect::to('evaluations');
		}
	}

	public function show($id)
	{
		
	}

	public function edit($id)
	{
		$evaluation = Evaluation::find($id);
		return View::make('evaluations.edit')->with('evaluation', $evaluation);
	}

	public function update($id)
	{
		// Validate
   		 // read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'eva_name'        => 'required',
			'eva_duration'    => 'required|numeric',
			);

		$validator = Validator::make(Input::all(), $rules);

    	// process the login
		if ($validator->fails()) {
			return Redirect::to('evaluations/' . $id. '/edit')->withErrors($validator);
		} else {
      		// store
			$evaluation = Evaluation::find($id);
			$evaluation->eva_name = Input::get('eva_name');
			$evaluation->eva_duration = Input::get('eva_duration');
			$evaluation->questions_id = Input::get('questions_id');
			$evaluation->save();

      		// Redirect
			Session::flash('message', 'Successfully created Evaluation!');
			return Redirect::to('evaluations');
		}
	}

	public function destroy($id)
	{
		$evaluation = Evaluation::find($id);
		$evaluation->delete();

		Session::flash('message', 'Successfully deleted the Evaluations!');
		return Redirect::to('evaluations');
	}

}
