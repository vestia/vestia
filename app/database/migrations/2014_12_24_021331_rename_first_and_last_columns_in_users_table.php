<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameFirstAndLastColumnsInUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('users', function($table) {
			$table->renameColumn('first', 'first_name');
			$table->renameColumn('last', 'last_name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table) {
			$table->renameColumn('first_name', 'first');
			$table->renameColumn('last_name', 'last');
		});
	}

}
