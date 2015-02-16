<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Vestia\Home;

class HomeTableSeeder extends DatabaseSeeder{

	public function run()
    {
    	/**
    	 * Seed our table
    	 * 
    	 * @return void
    	 */

        $faker = Faker::create();

        Home::truncate();
        
        foreach(range(1, 20) as $index)
        {
            Home::create([
            	'name' => $faker->firstName,
            	'street' => $faker->buildingNumber.' '.$faker->streetName,
            	'unit' => $faker->optional($weight = 0.2)->secondaryAddress,
            	'city' => $faker->city,
            	'zipcode' => $faker->postcode,
                'owner_note' => $faker->realText($maxNbChars = 250, $indexSize = 2),
                'owner_estimate' => $faker->numberBetween($min = 300000, $max = 2000000),
                'private' => $faker->boolean($chanceOfGettingTrue = 5)
            ]);
        }

    }

}





?>