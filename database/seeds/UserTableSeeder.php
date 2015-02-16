<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Vestia\User;

class UserTableSeeder extends DatabaseSeeder{

	public function run()
    {
    	/**
    	 * Seed our table
    	 * 
    	 * @return void
    	 */

        $faker = Faker::create();

        User::truncate();
        
        foreach(range(1, 20) as $index)
        {
            User::create([
            	'first_name' => $faker->firstName,
            	'last_name' => $faker->lastName,
            	'email' => $faker->email,
            	'password' => Hash::make('password'),
            	'zipcode' => $faker->postcode,
            ]);
        }

    }

}





?>