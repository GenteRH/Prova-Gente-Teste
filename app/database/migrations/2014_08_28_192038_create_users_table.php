<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('use_name',255)->nullable();
			$table->integer('use_cpf',15)->nullable();
            $table->integer('pro_id');
			$table->string('use_password',20)->nullable();
			$table->string('use_email',255);
			$table->integer('use_phone',15);
			$table->string('use_cell_phone',15);
			$table->timestamps();

			//$table->foreign('pro_id')->references('id')->on('profile');
		});
		
		Schema::create('profile', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('pro_name',20);

			$table->timestamps();
		});

	}

	public function down()
	{
		Schema::drop('users');
		Schema::drop('profile');
	}

}
