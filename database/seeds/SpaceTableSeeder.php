<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Vestia\Space;

class SpaceTableSeeder extends DatabaseSeeder{

	public function run()
    {
    	/**
    	 * Seed our table
    	 * 
    	 * @return void
    	 */

        $faker = Faker::create();

        Space::truncate();
        
        foreach(range(1, 100) as $index)
        {
            Space::create([
            	'home_id' => $faker->numberBetween($min = 1, $max = 20),
            	'type' => $faker->randomElement($array = array ('exterior','bedroom','bathroom','kitchen','living','dining','office','other')),
            	'name' => $faker->randomElement($array = array ('Exterior','Master Bed','Master Bath', $faker->numerify('Bedroom #'), $faker->numerify('Bathroom #'),'Kitchen','Living Room','Dining Room','Office','Bonus Room','Garage')),
            ]);
        }

    }

}





?>