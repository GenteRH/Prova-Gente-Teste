<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('use_name')->nullable();
			$table->integer('use_cpf')->nullable();
            $table->integer('pro_id');
			$table->string('use_password')->nullable();
			$table->string('use_email');
			$table->integer('use_phone');
			$table->string('use_cell_phone');
			$table->timestamps();

			//$table->foreign('pro_id')->references('id')->on('profile');
		});
		
		Schema::create('profile', function($table)
		{
			$table->increments('id');
			$table->string('pro_name');

			$table->timestamps();
		});

	}

	public function down()
	{
		Schema::drop('users');
		Schema::drop('profile');
	}

}
