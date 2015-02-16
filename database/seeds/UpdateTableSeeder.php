<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Vestia\Update;

class UpdateTableSeeder extends DatabaseSeeder{

	public function run()
    {
    	/**
    	 * Seed our table
    	 * 
    	 * @return void
    	 */

        $faker = Faker::create();

        Update::truncate();
        
        foreach(range(1, 100) as $index)
        {
            Update::create([
            	'home_id' => $faker->numberBetween($min = 1, $max = 20),
                'user_id' => $faker->numberBetween($min = 1, $max = 20),
            	'type' => $faker->randomElement($array = array ('improvement','decor','maintenance','document')),
            	'headline' => $faker->realText($maxNbCharacters = 20),
                'description' => $faker->realText($maxNbCharacters = 200),
            ]);
        }

    }

}





?>