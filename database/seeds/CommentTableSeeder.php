<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Vestia\Comment;

class CommentTableSeeder extends DatabaseSeeder{

	public function run()
    {
    	/**
    	 * Seed our table
    	 * 
    	 * @return void
    	 */

        $faker = Faker::create();

        Comment::truncate();
        
        foreach(range(1, 100) as $index)
        {
            Comment::create([
            	'note_id' => $faker->unique()->numberBetween($min = 1, $max = 100),
            	'text' => $faker->realText($maxNbCharacters = 200)
            ]);
        }

    }

}





?>