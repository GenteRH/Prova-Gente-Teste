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
			$table->integer('use_cpf');
            $table->integer('use_profile');
			$table->string('use_password');
			$table->string('use_email');
			$table->integer('use_phone');
			$table->string('use_cel_phone');
			
			$table->timestamps();
		});
	}

	public function down()
	{

		Schema::drop('users');
	}

}
