<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Vestia\Feature;

class FeatureTableSeeder extends DatabaseSeeder{

	public function run()
    {
    	/**
    	 * Seed our table
    	 * 
    	 * @return void
    	 */

        $faker = Faker::create();

        Feature::truncate();
        
        foreach(range(1, 400) as $index)
        {
            Feature::create([
            	'home_id' => $faker->numberBetween($min = 1, $max = 20),
            	'user_id' => $faker->numberBetween($min = 1, $max = 20),
                'photo_id' => $faker->optional($weight = 0.5)->numberBetween($min = 1, $max = 400),
                'photo_coords' => $faker->optional($weight = 0.5)->numerify('##,##'),
                'data' => $faker->realText($maxNbChars = 50, $indexSize = 2),
            ]);
        }

    }

}





?>