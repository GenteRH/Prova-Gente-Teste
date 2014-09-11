<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersEvaluationsTable extends Migration {


	public function up()
	{
		Schema::create('users_evaluations', function($table)
		{
			$table->increments('use_eva_id');
			$table->integer('use_id');
            $table->integer('eva_id');
			$table->string('resp1');
			$table->string('resp2');
			$table->string('resp3');
			$table->string('resp4');
			$table->string('resp5');
			$table->string('resp6');
			$table->string('resp7');
			$table->string('resp8');
			$table->string('resp9');
			$table->string('resp10');
			$table->string('resp11');
			$table->string('resp12');
			$table->string('resp13');
			$table->string('resp14');
			$table->string('resp15');
			$table->string('resp16');
			$table->string('resp17');
			$table->string('resp18');
			$table->string('resp19');
			$table->string('resp20');
			$table->string('resp21');
			$table->string('resp22');
			$table->string('resp23');
			$table->string('resp24');
			$table->string('resp25');
			$table->string('resp26');
			$table->string('resp27');
			$table->string('resp28');
			$table->string('resp29');
			$table->string('resp30');
			$table->string('resp31');
			$table->string('resp32');
			$table->string('resp33');
			$table->string('resp34');
			$table->string('resp35');
			$table->string('resp36');
			$table->string('resp37');
			$table->string('resp38');
			$table->string('resp39');
			$table->string('resp40');
			$table->string('resp41');
			$table->string('resp42');
			$table->string('resp43');
			$table->string('resp44');
			$table->string('resp45');
			$table->string('resp46');
			$table->string('resp47');
			$table->string('resp48');
			$table->string('resp49');
			$table->string('resp50');
			$table->timestamps();

			$table->foreign('use_id')->references('id')->on('users')->onDelete('restrict');
			$table->foreign('eva_id')->references('id')->on('evaluations')->onDelete('restrict');

		});

		Schema::create('users_evaluations_questions', function($table)
		{
			$table->increments('use_eva_que_id');
			$table->integer('use_eva_id');
			$table->integer('que_id');
			$table->string('use_eva_que_alt_correct')->nullable();
			$table->timestamps();

			$table->foreign('use_eva_id')->references('id')->on('users_evaluations')->onDelete('restrict');
			$table->foreign('que_id')->references('id')->on('questions')->onDelete('restrict');

		});
	}

	public function down()
	{
		Schema::drop('users_evaluations');
		Schema::drop('users_evaluations_questions');
	}

}
