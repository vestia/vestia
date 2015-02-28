<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Vestia\Review;

class NoteTableSeeder extends DatabaseSeeder{

	public function run()
    {
    	/**
    	 * Seed our table
    	 * 
    	 * @return void
    	 */

        $faker = Faker::create();

        Review::truncate();
        
        foreach(range(1, 20) as $index)
        {
            Review::create([
            	'home_id' => $faker->numberBetween($min = 1, $max = 20),
            	'user_id' => $faker->numberBetween($min = 1, $max = 100),
                'project_id' => $faker->numberBetween($min = 1, $max = 100),
                'estimate_id' => $faker->numberBetween($min = 1, $max = 100),
                'comment_id' => $faker->numberBetween($min = 1, $max = 100),
            ]);
        }

    }

}





?>