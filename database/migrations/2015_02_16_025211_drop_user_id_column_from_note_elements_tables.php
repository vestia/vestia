<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropUserIdColumnFromNoteElementsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comments', function($table)
		{
		    $table->dropColumn('user_id');
		});

		Schema::table('estimates', function($table)
		{
		    $table->dropColumn('user_id');
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
		    $table->integer('user_id')->unsigned();
		});

		Schema::table('estimates', function($table)
		{
		    $table->integer('user_id')->unsigned();
		});
	}

}
