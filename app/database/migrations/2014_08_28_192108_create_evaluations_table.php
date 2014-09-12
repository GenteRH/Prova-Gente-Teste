<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration {

  public function up()
  {
    Schema::create('evaluations', function($table)
    {
      $table->increments('id');
      $table->integer('que_id');
      $table->string('eva_name');
      $table->string('eva_duration');
      $table->timestamps();

      //$table->foreign('que_id')->references('id')->on('questions')->onDelete('restrict');
    });
  }

  public function down()
  {
    Schema::drop('evaluations');
  }

}
