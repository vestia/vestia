<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeColumnsNullableInFeaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE `features` MODIFY `photo_id` INTEGER NULL;');
		DB::statement('ALTER TABLE `features` MODIFY `photo_coords` TEXT NULL;');
		DB::statement('ALTER TABLE `features` MODIFY `type` VARCHAR(255) NULL;');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
