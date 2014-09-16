<?php

class QuestionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questions = Question::all();
		return View::make('questions.index')->with('questions', $questions);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('questions.create');
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
			'que_name'      => 'required',
			);

		$validator = Validator::make(Input::all(), $rules);

    	// process the login
		if ($validator->fails()) {
			return Redirect::to('questions/create')->withErrors($validator);
		} else {
      		// store
			$question = new Question;
			$question->que_name = Input::get('que_name');
			$question->save();

      		// Redirect
			Session::flash('message', 'Usuário Criado com Sucesso!');
			return Redirect::to('questions');
		}
	}

	public function show($id)
	{
		
	}

	public function edit($id)
	{
		// get the question
		$question = Question::find($id);

		// show the edit form and pass the question
		return View::make('questions.edit')
			->with('question', $question);
	}

	public function update($id)
	{
		// Validate
   		 // read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'que_name'      => 'required',
			);

		$validator = Validator::make(Input::all(), $rules);

    	// process the login
		if ($validator->fails()) {
			return Redirect::to('questions/' . $id. '/edit')->withErrors($validator);
		} else {
      		// store
			$question = Question::find($id);
			$question->que_name = Input::get('que_name');
			$question->save();

      		// Redirect
			Session::flash('message', 'Usuário editado com sucesso!');
			return Redirect::to('questions');
		}
	}

	public function destroy($id)
	{
		$question = Question::find($id);
		$question->delete();

		Session::flash('message', 'Usuário deletado com sucesso!');
		return Redirect::to('questions');
	}

}