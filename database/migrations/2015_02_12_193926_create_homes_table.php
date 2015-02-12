<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('homes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('street');
			$table->string('unit');
			$table->string('city');
			$table->string('zipcode');
			$table->integer('owner_estimate');
			$table->boolean('private');
			$table->timestamps();
		});//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('homes');
	}

}
