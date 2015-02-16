<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Vestia\Project;

class ProjectTableSeeder extends DatabaseSeeder{

	public function run()
    {
    	/**
    	 * Seed our table
    	 * 
    	 * @return void
    	 */

        $faker = Faker::create();

        Project::truncate();
        
        foreach(range(1, 100) as $index)
        {
            Project::create([
            	'home_id' => $faker->numberBetween($min = 1, $max = 20),
                'user_id' => $faker->numberBetween($min = 1, $max = 20),
                'space_id' => $faker->optional($weight = 0.5)->numberBetween($min = 1, $max = 100),
                'name' => $faker->randomElement($array = array ('Exterior','Master Bed','Master Bath', $faker->numerify('Bedroom #'), $faker->numerify('Bathroom #'),'Kitchen','Living Room','Dining Room','Office','Bonus Room','Garage')).' '.$faker->randomElement($array = array ('Upgrade','Renovation','Addtion')),
                'type' => $faker->randomElement($array = array ('upgrade','renovation','addtion')),
                'description' => $faker->realText($maxNbCharacters = 200)
            ]);
        }

    }

}





?>