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
		Schema::create('homes', function($table)
	    {
	        $table->increments('id');
	        $table->string('user_id');
	        $table->string('name');
	        $table->string('unit');
	        $table->string('city');
	        $table->string('zipcode');
	        $table->text('description');
	        $table->timestamps();
	    });
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
