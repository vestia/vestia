<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comments', function(Blueprint $table)
		{
			DB::statement('ALTER TABLE `comments` MODIFY `user_id` INTEGER UNSIGNED;');
			DB::statement('ALTER TABLE `comments` MODIFY `note_id` INTEGER UNSIGNED;');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('note_id')->references('id')->on('notes')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comments', function(Blueprint $table)
		{
			$table->dropForeign('comments_home_id_foreign');
			$table->dropForeign('comments_user_id_foreign');
			$table->dropForeign('comments_note_id_foreign');
		});
	}

}
