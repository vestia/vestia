<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropHomeIdColumnInNoteElementsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comments', function($table)
		{
		    $table->dropColumn('home_id');
		});

		Schema::table('estimates', function($table)
		{
		    $table->dropColumn('home_id');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comments', function($table)
		{
		    $table->integer('home_id')->unsigned();
		});

		Schema::table('estimates', function($table)
		{
		    $table->integer('home_id')->unsigned();
		});
	}

}
