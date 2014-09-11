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

	}

	public function down()
	{
		Schema::drop('users');
		Schema::drop('profile');
		Schema::drop('candidate');
	}

}
