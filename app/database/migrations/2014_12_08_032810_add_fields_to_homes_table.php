<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToHomesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('homes', function($table) {
		    $table->integer('initial_bid');
		    $table->integer('bedrooms');
		    $table->integer('bathrooms');
		    $table->integer('sqft');
		    $table->integer('lot_size');
		    $table->string('cover');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('homes', function($table) {
		    $table->dropColumns(array('initial_bid','bedrooms','bathrooms','sqft','lot_size','cover'));
		});
	}

}
