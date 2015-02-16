<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageableColumnsToPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('photos', function($table)
		{
		    $table->integer('imageable_id')->unsigned();
		    $table->string('imageable_type');
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
		    $table->dropColumn('imageable_id');
		    $table->dropColumn('imageable_type');
		});
	}

}
