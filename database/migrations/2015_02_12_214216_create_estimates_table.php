<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstimatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estimates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('home_id');
			$table->integer('user_id');
			$table->integer('note_id');
			$table->float('median_psf_percent_delta');
			$table->float('calculated_time_of_estimate_value');
			$table->float('calculated_current_value');
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
		Schema::drop('estimates');
	}

}
