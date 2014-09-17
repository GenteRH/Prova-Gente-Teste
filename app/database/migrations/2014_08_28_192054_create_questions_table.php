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
			$table->string('que_alt_correct');
			$table->string('que_category');
			$table->string('que_alt_1');
			$table->string('que_alt_2');
			$table->string('que_alt_3');
			$table->string('que_alt_4');
			$table->string('que_alt_5');

			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('questions');
	}

}
