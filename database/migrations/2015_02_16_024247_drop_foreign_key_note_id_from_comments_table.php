<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropForeignKeyNoteIdFromCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comments', function(Blueprint $table)
		{
			$table->dropForeign('comments_note_id_foreign');
			$table->dropForeign('comments_user_id_foreign');
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
			$table->foreign('note_id')->references('id')->on('notes')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('notes')->onDelete('cascade');
		});
	}

}
