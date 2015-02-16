<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameHeadlineColumnInUpdatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('updates', function(Blueprint $table)
		{
			$table->renameColumn('healine','headline');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('updates', function(Blueprint $table)
		{
			$table->renameColumn('headline','healine');
		});
	}

}
