<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyHomeIdToSpacesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('spaces', function(Blueprint $table)
		{
			DB::statement('ALTER TABLE `spaces` MODIFY `home_id` INTEGER UNSIGNED;');
			$table->foreign('home_id')->references('id')->on('homes')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('spaces', function(Blueprint $table)
		{
			DB::statement('ALTER TABLE `spaces` MODIFY `home_id` INTEGER;');
			$table->dropForeign('spaces_home_id_foreign');
		});
	}

}
