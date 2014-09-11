<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('use_name');
			$table->integer('use_cpf')->nullable();
            $table->integer('pro_id')->nullable();
			$table->string('use_password')->nullable();

			$table->timestamps();

			$table->foreign('pro_id')->references('id')->on('profile')->onDelete('restrict');
		});
		Schema::create('profile', function($table)
		{
			$table->increments('id');
			$table->string('pro_name');

			$table->timestamps();
		});
		Schema::create('candidate', function($table)
		{
			$table->increments('id');
			$table->integer('use_id');
			$table->string('can_email');
			$table->integer('can_phone')->nullable();
			$table->string('can_cell_phone')->nullable();
			$table->timestamps();
		});

		Schema::create('users_evaluations', function($table)
		{
			$table->increments('use_eva_id');
			$table->integer('use_id');
            $table->integer('eva_id');
			$table->integer('evaluation_id');
			$table->timestamps();

			$table->foreign('use_id')->references('id')->on('users')->onDelete('restrict');
			$table->foreign('eva_id')->references('id')->on('evaluations')->onDelete('restrict');

		});

		Schema::create('users_evaluations_questions', function($table)
		{
			$table->increments('use_eva_que_id');
			$table->integer('use_eva_id');
			$table->integer('que_id');
			$table->string('use_eva_que_alternative')->nullable();
			$table->timestamps();

			$table->foreign('use_eva_id')->references('id')->on('users_evaluations')->onDelete('restrict');
			$table->foreign('que_id')->references('id')->on('questions')->onDelete('restrict');

		});

	}

	public function down()
	{
		Schema::drop('users');
		Schema::drop('profile');
		Schema::drop('candidate');
		Schema::drop('users_evaluations');
		Schema::drop('users_evaluations_questions');
	}

}
