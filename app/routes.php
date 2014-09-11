<?php


//Route::group(array('before' => 'auth'), function()
//{
	Route::resource('users', 'UserController');
	Route::get('users/delete/{id}', 'UserController@destroy');

	Route::resource('evaluations', 'EvaluationController');
	Route::get('evaluations/delete/{id}','EvaluationController@destroy');

	Route::resource('questions', 'QuestionsController');
	Route::get('questions/delete/{id}','QuestionsController@destroy');

    Route::get('/home', function()
    {
        return View::make('home');
    });
 Route::get('/index', function()
    {
        return View::make('index');
    });

//});

Route::get('login', function()
{
	return View::make('login');
});
Route::post('login','LoginController@postLogin');

Route::get('inserir', function()
{
    DB::table('users')->insert(array(
    'use_password' => Hash::make('123456'),
    'use_name' => 'Lucas de Souza',
    'use_cpf' => '40729933873',
    'use_profile'=> '1'
    ));
});

 Route::get('/prova/index', function()
    {
        return View::make('candidato/index');
    });

 Route::get('/prova/questoes', function()
    {
        return View::make('candidato/prova');
    });
 Route::get('/prova/final', function()
    {
        return View::make('candidato/final');
    });
