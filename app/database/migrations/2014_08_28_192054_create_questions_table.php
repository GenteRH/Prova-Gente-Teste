<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	public function up()
	{
		Schema::create('questions', function($table)
		{
			$table->increments('id');
			$table->string('que_name');
			$table->timestamps();
		});

		Schema::create('alternative', function($table)
		{
			$table->increments('id');
			$table->integer('que_id');
			$table->string('alt_name');
			$table->timestamps();

			$table->foreign('que_id')->references('id')->on('questions')->onDelete('restrict');

		});
	}

	public function down()
	{
		Schema::drop('questions');
		Schema::drop('alternative');
	}

}
