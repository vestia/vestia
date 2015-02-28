<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call('UserTableSeeder');
		$this->call('HomeTableSeeder');
		$this->call('CommentTableSeeder');
		$this->call('EstimateTableSeeder');
		$this->call('ProjectTableSeeder');
		$this->call('FeatureTableSeeder');
		$this->call('SpaceTableSeeder');
		$this->call('PhotoTableSeeder');
		$this->call('NoteTableSeeder');
		$this->call('UpdateTableSeeder');
		$this->call('FollowersTableSeeder');
		$this->call('OwnersTableSeeder');
	}

}
